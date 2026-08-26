<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Anamnese;
use Illuminate\Http\Request;

class AnamneseController extends Controller
{
    public function edit(Cliente $cliente)
    {
        $cliente->load('user');

        $anamnese = $cliente->anamnese;

        return view(
            'admin.clientes.anamnese',
            compact('cliente', 'anamnese')
        );
    }


    public function update(Request $request, Cliente $cliente)
    {
        $dados = $request->except([
            '_token',
            '_method',
        ]);

        /*
        |--------------------------------------------------------------------------
        | CAMPOS CHECKBOX
        |--------------------------------------------------------------------------
        |
        | Checkbox não marcado não chega no Request.
        | Por isso colocamos false manualmente.
        |
        */

        $checkboxes = [
            'gestante',
            'amamentando',
            'diabetes',
            'hipertensao',
            'cardiaco',
            'circulacao',
            'marcapasso',
            'epilepsia',
            'hormonais',
            'tabagista',
            'alcool',
            'muito_tempo_sentada',
            'antecedentes_cirurgicos',
            'tratamento_estetico_anterior',
            'antecedentes_alergicos',
            'funcionamento_intestinal_regular',
            'pratica_esportes',
            'fumante',
            'alimentacao_balanceada',
            'agua_8_copos',
            'gestante_corporal',
            'problema_ortopedico',
            'faz_tratamento_medico',
            'acidos_na_pele',
            'tratamento_ortomolecular',
            'cuidados_diarios',
            'portador_marcapasso',
            'presenca_metais',
            'antecedentes_oncologicos',
            'cirurgia_fratura_recente',
            'ciclo_menstrual_regular',
            'varizes',
            'lesoes',
            'hipertensao_corporal',
            'hipotensao',
            'diabetes_corporal',
            'epilepsia_corporal',
            'acne',
            'manchas',
            'melasma',
            'rugas',
            'flacidez',
            'rosacea',
            'sensibilidade',
            'acromia',
            'cloasma',
            'efelides',
            'hipercromia',
            'hipocromia',
            'angioma',
            'cianose',
            'eritema',
            'hematoma',
            'petequias',
            'telangectasias',
            'ceratose',
            'nodulos',
            'papulas',
            'comedio',
            'verrugas',
            'milium',
            'necrose',
            'bolha',
            'pustula',
            'vesicula',
            'crosta',
            'escara',
            'escoriacao',
            'fissura',
            'fistula',
            'ulceracao',
            'atrofia',
            'cicatriz',
            'hipertricose',
            'hirsutismo',
            'eczema',
            'hiperqueratose',
            'psoriase',
            'design_anterior',
            'falhas',
            'henna',
            'alergia_cosmeticos',
        ];

        foreach ($checkboxes as $campo) {
            $dados[$campo] = $request->boolean($campo);
        }


        /*
        |--------------------------------------------------------------------------
        | CRIA OU ATUALIZA A MESMA FICHA DA CLIENTE
        |--------------------------------------------------------------------------
        */

        Anamnese::updateOrCreate(
            [
                'cliente_id' => $cliente->id
            ],
            $dados
        );


        return redirect()
            ->route('admin.clientes.show', $cliente)
            ->with(
                'sucesso',
                'Ficha de anamnese atualizada com sucesso!'
            );
    }
}