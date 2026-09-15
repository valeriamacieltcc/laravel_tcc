<?php

namespace Database\Factories;

use App\Models\Procedimento;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProcedimentoFactory extends Factory
{
    protected $model = Procedimento::class;

    public function definition(): array
    {
        $procedimentos = [
            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Limpeza de Pele',
                'descricao' => 'Procedimento facial para limpeza profunda, remoção de impurezas e revitalização da pele.',
                'preco' => 99.90,
                'duracao_minutos' => 60,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFtyFPC7LIvqi0tuQUJAv0PsW0PH03vnmMiRJ4Qy0Y2w&s=10',
                'cuidados' => 'Evitar exposição solar intensa após o procedimento e utilizar protetor solar.',
                'contraindicacoes' => 'Peles com infecções ou irritações intensas.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Limpeza de Pele Premium',
                'descricao' => 'Limpeza facial completa com cuidados especiais para uma pele mais hidratada e renovada.',
                'preco' => 129.90,
                'duracao_minutos' => 75,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFtyFPC7LIvqi0tuQUJAv0PsW0PH03vnmMiRJ4Qy0Y2w&s=10',
                'cuidados' => 'Utilizar protetor solar e evitar produtos muito abrasivos.',
                'contraindicacoes' => 'Inflamações ou infecções ativas na pele.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Hidratação Capilar',
                'descricao' => 'Tratamento para devolver hidratação, maciez e brilho aos cabelos ressecados.',
                'preco' => 89.90,
                'duracao_minutos' => 60,
                'imagem' => 'https://s2-gshow.glbimg.com/R15LwtqbQ92BwY2kkoWRrdayNpg=/0x0:5760x3840/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2024/C/Y/DadTNSSyyR2BVPRBooSQ/lindsay-cash-md-dhafsncq-unsplash.jpg',
                'cuidados' => 'Utilizar produtos adequados para manutenção da hidratação.',
                'contraindicacoes' => 'Alergia aos produtos utilizados.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Nutrição Capilar',
                'descricao' => 'Tratamento indicado para repor nutrientes e devolver vitalidade aos fios.',
                'preco' => 99.90,
                'duracao_minutos' => 60,
                'imagem' => 'https://s2-gshow.glbimg.com/R15LwtqbQ92BwY2kkoWRrdayNpg=/0x0:5760x3840/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2024/C/Y/DadTNSSyyR2BVPRBooSQ/lindsay-cash-md-dhafsncq-unsplash.jpg',
                'cuidados' => 'Manter uma rotina de cuidados capilares após o procedimento.',
                'contraindicacoes' => 'Alergia aos componentes dos produtos utilizados.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Reconstrução Capilar',
                'descricao' => 'Tratamento para fortalecer os fios danificados e auxiliar na recuperação da fibra capilar.',
                'preco' => 109.90,
                'duracao_minutos' => 70,
                'imagem' => 'https://s2-gshow.glbimg.com/R15LwtqbQ92BwY2kkoWRrdayNpg=/0x0:5760x3840/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2024/C/Y/DadTNSSyyR2BVPRBooSQ/lindsay-cash-md-dhafsncq-unsplash.jpg',
                'cuidados' => 'Evitar excesso de procedimentos químicos após a reconstrução.',
                'contraindicacoes' => 'Couro cabeludo sensibilizado ou com irritações.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Escova',
                'descricao' => 'Finalização dos cabelos com escova para proporcionar alinhamento, movimento e brilho.',
                'preco' => 59.90,
                'duracao_minutos' => 45,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuPaPb__L8FIo4ui2vbSEhQDCUo_ihHnWSoUTdBvxDt1rtqE6MPNacYZuT&s=10',
                'cuidados' => 'Evitar calor excessivo nos fios após o procedimento.',
                'contraindicacoes' => 'Couro cabeludo lesionado ou sensibilizado.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Escova + Hidratação',
                'descricao' => 'Combinação de hidratação capilar com finalização em escova.',
                'preco' => 119.90,
                'duracao_minutos' => 90,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuPaPb__L8FIo4ui2vbSEhQDCUo_ihHnWSoUTdBvxDt1rtqE6MPNacYZuT&s=10',
                'cuidados' => 'Manter hidratação dos fios em casa.',
                'contraindicacoes' => 'Alergia aos produtos utilizados.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Design de Sobrancelhas',
                'descricao' => 'Modelagem das sobrancelhas de acordo com o formato do rosto.',
                'preco' => 35.00,
                'duracao_minutos' => 30,
                'imagem' => 'https://gmcilios.com.br/wp-content/uploads/2024/03/DESIGN-DE-SOBRANCELHA-1.jpg',
                'cuidados' => 'Evitar produtos irritantes na região logo após o procedimento.',
                'contraindicacoes' => 'Irritações ou lesões na região das sobrancelhas.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Design de Sobrancelhas com Henna',
                'descricao' => 'Modelagem das sobrancelhas com aplicação de henna para realçar e preencher os fios.',
                'preco' => 49.90,
                'duracao_minutos' => 45,
                'imagem' => 'https://gmcilios.com.br/wp-content/uploads/2024/03/DESIGN-DE-SOBRANCELHA-1.jpg',
                'cuidados' => 'Evitar água e produtos oleosos nas primeiras horas.',
                'contraindicacoes' => 'Alergia aos componentes da henna.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Buço',
                'descricao' => 'Remoção dos pelos da região do buço com acabamento delicado.',
                'preco' => 20.00,
                'duracao_minutos' => 15,
                'imagem' => 'https://www.dicasdemulher.com.br/wp-content/uploads/2020/07/depilacao-de-buco-1.jpg',
                'cuidados' => 'Evitar exposição solar e produtos irritantes imediatamente após.',
                'contraindicacoes' => 'Pele lesionada ou muito sensibilizada.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 4,
                'nome' => 'Manicure',
                'descricao' => 'Cuidados completos com as unhas das mãos, incluindo corte, lixamento e esmaltação.',
                'preco' => 35.00,
                'duracao_minutos' => 50,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8g5Y4ifkee4hoX_HlG_dZS_b8NjN5PRHNZt2n8MYXRx7Hi_v7E8TUcBVh&s=10',
                'cuidados' => 'Manter as unhas hidratadas e evitar impactos.',
                'contraindicacoes' => 'Infecções ou lesões nas unhas.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 4,
                'nome' => 'Pedicure',
                'descricao' => 'Cuidados completos com as unhas dos pés, incluindo corte, lixamento e esmaltação.',
                'preco' => 40.00,
                'duracao_minutos' => 60,
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHBoZXp5f371bHQ3p6HmdG_0t8HcDlBvwe2efQDbVHdm2FQIP8kS5S4ljo&s=10',
                'cuidados' => 'Manter os pés hidratados e higienizados.',
                'contraindicacoes' => 'Infecções ou lesões nos pés.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 4,
                'nome' => 'Manicure + Pedicure',
                'descricao' => 'Serviço completo de cuidados e esmaltação das unhas das mãos e dos pés.',
                'preco' => 65.00,
                'duracao_minutos' => 100,
                'imagem' => 'https://espacobemestar.com.br/wp-content/uploads/2024/09/manicure.jpg',
                'cuidados' => 'Manter unhas e cutículas hidratadas.',
                'contraindicacoes' => 'Infecções ou lesões nas unhas.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 5,
                'nome' => 'Spa dos Pés',
                'descricao' => 'Tratamento relaxante para os pés com cuidados de hidratação e revitalização.',
                'preco' => 59.90,
                'duracao_minutos' => 45,
                'imagem' => 'https://media.istockphoto.com/id/1308841863/pt/foto/beautician-washing-woman-feet-for-pedicure-treatment.jpg?s=612x612&w=0&k=20&c=ObT8d5-sPE6GdjMO4wqVqrin-_W0hxbGXFnrDS3QO4k=',
                'cuidados' => 'Manter a hidratação dos pés após o procedimento.',
                'contraindicacoes' => 'Lesões ou irritações nos pés.',
                'ativo' => true,
            ],

      
        ];

        return fake()->randomElement($procedimentos);
    }
}