<?php

namespace Database\Seeders;

use App\Models\Procedimento;
use Illuminate\Database\Seeder;

class ProcedimentoSeeder extends Seeder
{
    public function run(): void
    {
        $procedimentos = [
            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Hidratação Capilar',
                'descricao' => 'Tratamento capilar que repõe a umidade dos fios, melhora a maciez, proporciona brilho, reduz o ressecamento e ajuda a manter os cabelos saudáveis e revitalizados.',
                'preco' => 89.90,
                'duracao_minutos' => 60,
                'imagem' => 'imagem/procedimentos/hidratacao.png',
                'cuidados' => 'Utilizar produtos adequados ao tipo de cabelo, evitar o uso excessivo de fontes de calor e manter uma rotina de hidratação para prolongar os resultados.',
    'contraindicacoes' => 'Alergia ou sensibilidade a algum componente dos produtos utilizados. Em caso de irritação ou lesões no couro cabeludo, recomenda-se avaliação profissional antes do procedimento.',
    'ativo' => true,
            ],

            // Mantenha aqui os demais procedimentos
            // que já estão cadastrados no seu Factory.

            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Design de Sobrancelhas',
                'descricao' => 'Procedimento estético que modela as sobrancelhas de acordo com o formato do rosto, removendo os pelos excedentes e valorizando a expressão facial, proporcionando um resultado harmonioso e natural.',
                'preco' => 35.00,
                'duracao_minutos' => 30,
                'imagem' => 'imagem/procedimentos/sobrancelha.png',
                'cuidados' => 'Evitar exposição solar intensa logo após o procedimento, não esfregar a região e evitar o uso de produtos irritantes na área das sobrancelhas.',
    'contraindicacoes' => 'Presença de feridas, infecções, irritações ou inflamações na região das sobrancelhas. Pessoas com pele sensibilizada devem receber avaliação profissional antes do procedimento.',
    'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 5,
                'nome' => 'Higienização Capilar',
                'descricao' => 'Procedimento voltado à limpeza profunda do couro cabeludo e dos fios, removendo resíduos de produtos, oleosidade excessiva e impurezas. Realizado com produtos adequados ao tipo de cabelo, promove sensação de frescor e leveza.',
                'preco' => 79.90,
                'duracao_minutos' => 50,
                'imagem' => 'imagem/procedimentos/higienizacao-capilar.png',
                'cuidados' => 'Utilizar produtos adequados ao tipo de cabelo e couro cabeludo. Manter uma rotina regular de higienização. Em caso de irritação persistente, procurar orientação profissional.',
                'contraindicacoes' => 'Feridas abertas, infecções ou irritações intensas no couro cabeludo. Informar previamente sobre alergias aos produtos utilizados.',
                'ativo' => true,
            ],
        ];

        foreach ($procedimentos as $procedimento) {
            Procedimento::updateOrCreate(
                [
                    'nome' => $procedimento['nome'],
                ],
                $procedimento
            );
        }
    }
}
