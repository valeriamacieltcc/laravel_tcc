<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriaProcedimento;
use App\Models\Procedimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcedimentoController extends Controller
{
    public function index()
    {
        $procedimentos = Procedimento::with('categoria')
            ->orderBy('nome')
            ->paginate(10);

        return view(
            'admin.procedimentos.index',
            compact('procedimentos')
        );
    }

    public function create()
    {
        $categorias = CategoriaProcedimento::where('ativo', true)
            ->orderBy('nome')
            ->get();

        return view(
            'admin.procedimentos.create',
            compact('categorias')
        );
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'categoria_procedimento_id' => [
                'nullable',
                'exists:categorias_procedimentos,id'
            ],
            'nome' => [
                'required',
                'string',
                'max:255'
            ],
            'descricao' => [
                'required',
                'string'
            ],
            'preco' => [
                'nullable',
                'numeric',
                'min:0'
            ],
            'duracao_minutos' => [
                'required',
                'integer',
                'min:1'
            ],
            'imagem' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'cuidados' => [
                'nullable',
                'string'
            ],
            'contraindicacoes' => [
                'nullable',
                'string'
            ],
        ]);

        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request
                ->file('imagem')
                ->store('procedimentos', 'public');
        }

        $dados['ativo'] = $request->boolean('ativo');

        Procedimento::create($dados);

        return redirect()
            ->route('admin.procedimentos.index')
            ->with('sucesso', 'Procedimento cadastrado com sucesso!');
    }

    public function show(Procedimento $procedimento)
    {
        $procedimento->load('categoria');

        return view(
            'admin.procedimentos.show',
            compact('procedimento')
        );
    }

    public function edit(Procedimento $procedimento)
    {
        $categorias = CategoriaProcedimento::where('ativo', true)
            ->orderBy('nome')
            ->get();

        return view(
            'admin.procedimentos.edit',
            compact('procedimento', 'categorias')
        );
    }

    public function update(
        Request $request,
        Procedimento $procedimento
    ) {
        $dados = $request->validate([
            'categoria_procedimento_id' => [
                'nullable',
                'exists:categorias_procedimentos,id'
            ],
            'nome' => [
                'required',
                'string',
                'max:255'
            ],
            'descricao' => [
                'required',
                'string'
            ],
            'preco' => [
                'nullable',
                'numeric',
                'min:0'
            ],
            'duracao_minutos' => [
                'required',
                'integer',
                'min:1'
            ],
            'imagem' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'cuidados' => [
                'nullable',
                'string'
            ],
            'contraindicacoes' => [
                'nullable',
                'string'
            ],
        ]);

        if ($request->hasFile('imagem')) {
            if ($procedimento->imagem) {
                Storage::disk('public')
                    ->delete($procedimento->imagem);
            }

            $dados['imagem'] = $request
                ->file('imagem')
                ->store('procedimentos', 'public');
        }

        $dados['ativo'] = $request->boolean('ativo');

        $procedimento->update($dados);

        return redirect()
            ->route('admin.procedimentos.index')
            ->with('sucesso', 'Procedimento atualizado!');
    }

    public function destroy(Procedimento $procedimento)
    {
        if ($procedimento->agendamentos()->exists()) {
            return back()->with(
                'erro',
                'Este procedimento possui agendamentos e não pode ser excluído.'
            );
        }

        if ($procedimento->imagem) {
            Storage::disk('public')
                ->delete($procedimento->imagem);
        }

        $procedimento->delete();

        return redirect()
            ->route('admin.procedimentos.index')
            ->with('sucesso', 'Procedimento excluído!');
    }
}