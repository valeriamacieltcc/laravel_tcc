<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeConfig;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = HomeConfig::first();

        if (!$home) {
            $home = HomeConfig::create([
                'banner_1' => 'https://i.pinimg.com/1200x/cf/f1/a2/cff1a2994e6447a975c39c4ef6b44abe.jpg',
                'banner_2' => 'https://i.pinimg.com/1200x/a2/ca/36/a2ca365239e8894df6fa487e31d3a89e.jpg',
                'banner_3' => 'https://i.pinimg.com/736x/b5/c2/31/b5c2318a43b336e87875193bf0fc15b5.jpg',

                'sobre_imagem' => 'https://i.pinimg.com/736x/c5/ac/77/c5ac77654151b0712c786a7174c85912.jpg',
                'sobre_titulo' => 'QUEM SOU?',
                'sobre_texto' => 'Valéria Maciel Estética é um espaço dedicado ao cuidado, bem-estar e autoestima. Com profissionais especializados, oferecemos serviços personalizados para elevar sua beleza natural e proporcionar uma experiência acolhedora.',

                'categoria_1_imagem' => 'https://i.pinimg.com/1200x/bb/0d/ff/bb0dff7adbd80c5ae3322f070bc562ed.jpg',
                'categoria_1_nome' => 'CORPO',

                'categoria_2_imagem' => 'https://i.pinimg.com/736x/3b/93/99/3b93992768d7266d2de4d6fe7054fe63.jpg',
                'categoria_2_nome' => 'FACE',

                'categoria_3_imagem' => 'https://i.pinimg.com/736x/85/54/39/85543969a0ca3ff9040745386c4418e9.jpg',
                'categoria_3_nome' => 'CABELO',

                'categoria_4_imagem' => 'https://i.pinimg.com/736x/c6/12/e6/c612e651df488d64a48ce23eda24ce18.jpg',
                'categoria_4_nome' => 'UNHA',
            ]);
        }

        return view('admin.home.index', compact('home'));
    }

public function edit()
{
    $home = HomeConfig::first();

    if (!$home) {
        return redirect()
            ->route('admin.home.index')
            ->with('error', 'Configuração da página inicial não encontrada.');
    }

    return view('admin.home.edit', compact('home'));
}

    public function update(Request $request)
    {
        $home = HomeConfig::first();

        $validated = $request->validate([
            'banner_1' => 'nullable|url',
            'banner_2' => 'nullable|url',
            'banner_3' => 'nullable|url',

            'sobre_imagem' => 'nullable|url',
            'sobre_titulo' => 'required|string|max:255',
            'sobre_texto' => 'required|string',

            'categoria_1_imagem' => 'nullable|url',
            'categoria_1_nome' => 'required|string|max:255',

            'categoria_2_imagem' => 'nullable|url',
            'categoria_2_nome' => 'required|string|max:255',

            'categoria_3_imagem' => 'nullable|url',
            'categoria_3_nome' => 'required|string|max:255',

            'categoria_4_imagem' => 'nullable|url',
            'categoria_4_nome' => 'required|string|max:255',
        ]);

        $home->update($validated);

        return redirect()
            ->route('admin.home.index')
            ->with('success', 'Página inicial atualizada com sucesso!');
    }
}