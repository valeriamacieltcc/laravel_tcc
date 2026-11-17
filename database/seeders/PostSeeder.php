<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Busca um usuário para ser o autor das publicações
        $usuario = User::where('tipo', 'admin')->first()
            ?? User::first();

        if (!$usuario) {
            $this->command->error('Nenhum usuário cadastrado. Crie um usuário antes de executar o PostSeeder.');
            return;
        }

        $posts = [

            [
                'titulo' => 'Cuidados essenciais para manter a pele saudável',
                'categoria' => 'Pele',
                'imagem' => 'https://caapua.com.br/wp-content/uploads/2025/03/fotos-para-site7.png',
                'conteudo' => 'Manter a pele saudável exige uma rotina de cuidados diários. A limpeza adequada ajuda a remover impurezas, oleosidade e resíduos acumulados ao longo do dia. A hidratação também é fundamental, pois contribui para preservar a barreira natural da pele e evitar o ressecamento.

Outro cuidado indispensável é a utilização diária do protetor solar, mesmo em dias nublados. A proteção ajuda a prevenir os danos causados pela radiação ultravioleta e contribui para manter a aparência da pele ao longo do tempo.

Além disso, é importante escolher produtos adequados ao seu tipo de pele e manter uma rotina equilibrada. Quando necessário, procure orientação de um profissional qualificado para identificar os cuidados mais indicados.',
                'publicado' => true,
            ],

            [
                'titulo' => 'Como cuidar dos cabelos no dia a dia',
                'categoria' => 'Cabelo',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnnVjYGKbcm3D2ljF971ZMxY9P-q72b42g98eHtb2zyQ&s=10',
                'conteudo' => 'Os cabelos precisam de cuidados frequentes para manter sua aparência, maciez e resistência. Uma rotina adequada começa com a escolha de shampoo e condicionador compatíveis com as características dos fios.

A hidratação auxilia na reposição de água, enquanto a nutrição contribui para melhorar a maciez e o alinhamento. Já a reconstrução pode ser indicada para fios fragilizados, respeitando sempre a necessidade de cada cabelo.

Também é importante evitar temperaturas excessivas durante o uso de secadores e chapinhas, utilizando protetor térmico quando necessário. Cortes periódicos e cuidados com o couro cabeludo também fazem parte de uma rotina capilar equilibrada.',
                'publicado' => true,
            ],

           

            [
                'titulo' => 'Dicas para manter as unhas bonitas e saudáveis',
                'categoria' => 'Unhas',
                'imagem' => 'https://likemagazine.com.br/midias/2025/02/Como-manter-as-unhas-fortes-e-resistentes-Like-Magazine.jpg',
                'conteudo' => 'Manter as unhas bonitas também envolve cuidados com a saúde e a higiene. É importante mantê-las limpas, evitar cortes excessivamente curtos e hidratar as mãos e cutículas regularmente.

Outro cuidado importante é não compartilhar instrumentos de manicure sem a devida higienização e esterilização. Essa medida ajuda a reduzir os riscos de contaminação.

Também é recomendado observar alterações na coloração, textura ou formato das unhas. Caso surjam mudanças persistentes, procure avaliação profissional.',
                'publicado' => true,
            ],

            [
                'titulo' => 'Benefícios dos cuidados eAstéticos com a pele',
                'categoria' => 'Estética',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTepGKvlQ_q6E22BWoKZju2rmAFH61a44pG8m6qIwjWoQ&s',
                'conteudo' => 'Os cuidados estéticos podem contribuir para a manutenção da aparência e do bem-estar, desde que sejam realizados de maneira adequada e respeitando as características individuais.

A escolha dos procedimentos deve considerar o tipo de pele, as necessidades apresentadas e possíveis sensibilidades. Uma avaliação prévia permite selecionar técnicas e produtos mais apropriados.

Além dos atendimentos profissionais, manter hábitos saudáveis e uma rotina diária de cuidados é essencial para preservar os resultados.',
                'publicado' => true,
            ],

          
           
        

            [
                'titulo' => 'Como escolher os procedimentos estéticos adequados',
                'categoria' => 'Estética',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRajwph6h-4Y8y14WNqNNKVPeH4J-dQShpt3dVmPqBIA&s=10',
                'conteudo' => 'A escolha de um procedimento estético deve levar em consideração as necessidades individuais, as características da pele e os resultados esperados.

Antes de realizar qualquer atendimento, é importante conversar com a profissional responsável, informar possíveis alergias e esclarecer dúvidas sobre as técnicas utilizadas.

Cada procedimento possui indicações e cuidados específicos. Por isso, a avaliação individual é essencial para proporcionar um atendimento seguro e adequado.',
                'publicado' => true,
            ],

            [
                'titulo' => 'Cuidados com a pele durante o verão',
                'categoria' => 'Pele',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWvybV_Jd09EOhd0fY9PuJUF14Tn6kyzcK7ScRAjRbxA&s=10',
                'conteudo' => 'Durante o verão, a pele pode ficar mais exposta à radiação solar, ao calor e ao suor. Por isso, alguns cuidados precisam receber atenção especial.

O uso diário de protetor solar, a reaplicação conforme as orientações do produto, a hidratação e a limpeza adequada ajudam a preservar a saúde da pele.

Também é importante evitar a exposição solar excessiva, principalmente nos horários de maior intensidade da radiação ultravioleta.',
                'publicado' => true,
            ],

        ];

        foreach ($posts as $post) {

            $slug = Str::slug($post['titulo']);

            Post::updateOrCreate(
                [
                    'slug' => $slug,
                ],
                [
                    'user_id' => $usuario->id,
                    'titulo' => $post['titulo'],
                    'slug' => $slug,
                    'imagem' => $post['imagem'],
                    'categoria' => $post['categoria'],
                    'conteudo' => $post['conteudo'],
                    'publicado' => $post['publicado'],
                ]
            );
        }
    }
}