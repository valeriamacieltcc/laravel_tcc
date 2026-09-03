<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vitrine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VitrineController extends Controller
{
    public function index()
    {
        $vitrine = Vitrine::orderBy('id', 'desc')
            ->paginate(8);
    
        return view(
            'admin.vitrine.index',
            compact('vitrine')
        );
    }

    public function create()
    {
        return view('admin.vitrine.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => [
                'required',
                'string',
                'max:255',
            ],

            'descricao' => [
                'required',
                'string',
            ],

            'preco' => [
                'required',
                'numeric',
                'min:0',
            ],

            'marca' => [
                'required',
                'string',
                'max:255',
            ],

            'imagem' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'link_contato' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request
                ->file('imagem')
                ->store('vitrine', 'public');
        }

        $dados['disponivel'] = $request->boolean('disponivel');

        Vitrine::create($dados);

        return redirect()
            ->route('admin.vitrine.index')
            ->with(
                'sucesso',
                'Produto cadastrado com sucesso!'
            );
    }

    public function show(Vitrine $vitrine)
    {
        return view(
            'admin.vitrine.show',
            compact('vitrine')
        );
    }

    public function edit(Vitrine $vitrine)
    {
        return view(
            'admin.vitrine.edit',
            compact('vitrine')
        );
    }

    public function update(
        Request $request,
        Vitrine $vitrine
    ) {
        $dados = $request->validate([
            'nome' => [
                'required',
                'string',
                'max:255',
            ],

            'descricao' => [
                'required',
                'string',
            ],

            'preco' => [
                'required',
                'numeric',
                'min:0',
            ],

            'marca' => [
                'required',
                'string',
                'max:255',
            ],

            'imagem' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'link_contato' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        if ($request->hasFile('imagem')) {
            if ($vitrine->imagem) {
                Storage::disk('public')
                    ->delete($vitrine->imagem);
            }

            $dados['imagem'] = $request
                ->file('imagem')
                ->store('vitrine', 'public');
        }

        $dados['disponivel'] = $request->boolean('disponivel');

        $vitrine->update($dados);

        return redirect()
            ->route('admin.vitrine.index')
            ->with(
                'sucesso',
                'Produto atualizado com sucesso!'
            );
    }

    public function destroy(Vitrine $vitrine)
    {
        if ($vitrine->imagem) {
            Storage::disk('public')
                ->delete($vitrine->imagem);
        }

        $vitrine->delete();

        return redirect()
            ->route('admin.vitrine.index')
            ->with(
                'sucesso',
                'Produto excluído com sucesso!'
            );
    }
}