<?php

namespace Database\Seeders;

use App\Models\Procedimento;
use Illuminate\Database\Seeder;

class ProcedimentoSeeder extends Seeder
{
    public function run(): void
    {
        $procedimentos = [

            // CABELO
            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Hidratação Capilar',
                'descricao' => 'Tratamento capilar voltado à reposição de água e à melhora da maciez, maleabilidade e aparência dos fios. Realizado com produtos selecionados conforme as necessidades do cabelo, auxilia na redução do aspecto ressecado, facilita o desembaraço e proporciona mais brilho e suavidade, respeitando a estrutura e as condições dos fios.',
                'preco' => 89.90,
                'duracao_minutos' => 60,
                'imagem' => 'imagem/procedimentos/hidratacao.jpg',
                'cuidados' => 'Utilizar produtos adequados ao tipo e às necessidades do cabelo. Evitar o uso excessivo de fontes de calor, aplicar protetor térmico quando necessário e manter uma rotina equilibrada de cuidados capilares. Seguir as orientações da profissional sobre a frequência ideal do tratamento.',
                'contraindicacoes' => 'Alergia ou sensibilidade conhecida aos componentes dos produtos utilizados. Evitar a aplicação sobre couro cabeludo com feridas, irritação intensa ou infecção ativa. Informar previamente sobre procedimentos químicos recentes, quebra acentuada ou outras alterações importantes dos fios.',
                'ativo' => true,
            ],

       
            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Penteado',
                'descricao' => 'Serviço de finalização e modelagem dos cabelos para ocasiões especiais ou uso diário. Pode incluir ondas, cachos, tranças simples, meio preso ou outros estilos de baixa complexidade, conforme o comprimento dos fios e a preferência da cliente. O resultado busca valorizar o formato do rosto e proporcionar um acabamento bonito, natural e duradouro.',
                'preco' => 70.00,
                'duracao_minutos' => 45,
                'imagem' => 'imagem/procedimentos/penteado.jpg',
                'cuidados' => 'Comparecer com os cabelos conforme a orientação prévia da profissional. Evitar excesso de óleos e produtos finalizadores antes do atendimento. Após a finalização, evitar manipular excessivamente os fios e proteger o penteado contra umidade, conforme o estilo realizado.',
                'contraindicacoes' => 'Informar previamente sobre alergias a sprays, fixadores e outros cosméticos utilizados. Em caso de irritação no couro cabeludo ou sensibilidade intensa, adaptar ou adiar o uso dos produtos. O uso de ferramentas térmicas deve ser ajustado às condições dos fios.',
                'ativo' => true,
            ],
           

            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Higienização Capilar',
                'descricao' => 'Procedimento voltado à limpeza profunda do couro cabeludo e dos fios, removendo resíduos de produtos, oleosidade excessiva e impurezas. Realizado com produtos adequados ao tipo de cabelo, promove sensação de frescor e leveza.',
                'preco' => 79.90,
                'duracao_minutos' => 50,
                'imagem' => 'imagem/procedimentos/higienizacao-capilar.jpg',
                'cuidados' => 'Utilizar produtos adequados ao tipo de cabelo e couro cabeludo. Manter uma rotina regular de higienização. Em caso de irritação persistente, procurar orientação profissional.',
                'contraindicacoes' => 'Feridas abertas, infecções ou irritações intensas no couro cabeludo. Informar previamente sobre alergias aos produtos utilizados.',
                'ativo' => true,
            ],

        
            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Reconstrução Capilar',
                'descricao' => 'Tratamento direcionado aos fios fragilizados, quebradiços ou danificados por processos químicos, calor excessivo e agressões externas. Utiliza produtos reconstrutores para auxiliar na reposição de componentes da fibra capilar, melhorar a resistência, reduzir a quebra e proporcionar uma aparência mais alinhada e saudável. A aplicação é definida conforme o estado dos fios, evitando excesso de tratamentos reconstrutores.',
                'preco' => 99.90,
                'duracao_minutos' => 60,
                'imagem' => 'imagem/procedimentos/reconstrucao-capilar.jpg',
                'cuidados' => 'Utilizar produtos compatíveis com a estrutura dos fios, evitar procedimentos químicos agressivos em sequência e controlar o uso de secadores e pranchas. Manter uma rotina equilibrada de hidratação, nutrição e reconstrução conforme a necessidade do cabelo. Seguir as orientações profissionais para evitar excesso de proteínas ou rigidez dos fios.',
                'contraindicacoes' => 'Sensibilidade ou alergia aos componentes dos produtos utilizados. Não aplicar sobre couro cabeludo com feridas, infecções ou irritação intensa. Cabelos com quebra severa ou alterações importantes devem ser avaliados antes do procedimento. Informar previamente sobre químicas recentes e reações anteriores a cosméticos.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 3,
                'nome' => 'Escova Capilar',
                'descricao' => 'Finalização dos cabelos com secador e escovação, buscando alinhar os fios, reduzir temporariamente o aspecto desalinhado e proporcionar brilho, movimento e acabamento elegante. A técnica e a temperatura são adaptadas ao comprimento, à textura e às condições dos cabelos.',
                'preco' => 50.00,
                'duracao_minutos' => 45,
                'imagem' => 'imagem/procedimentos/escova-capilar.jpg',
                'cuidados' => 'Evitar temperaturas excessivas e utilizar protetor térmico antes de ferramentas de calor. Manter os fios hidratados e seguir as orientações profissionais para preservar a saúde capilar.',
                'contraindicacoes' => 'Alergia aos produtos utilizados ou couro cabeludo com feridas, queimaduras e irritação intensa. Adaptar ou adiar o procedimento em caso de fragilidade acentuada dos fios ou desconforto durante a execução.',
                'ativo' => true,
            ],

            // UNHAS

            [
                'categoria_procedimento_id' => 4 ,
                'nome' => 'Spa dos Pés',
                'descricao' => 'Tratamento estético e relaxante destinado ao cuidado dos pés, proporcionando uma experiência de conforto e bem-estar. Pode incluir higienização, emoliência, esfoliação suave e hidratação, de acordo com a técnica e os produtos utilizados. Auxilia na melhora da maciez da pele e na sensação de relaxamento, respeitando as condições individuais dos pés.',
                'preco' => 59.90,
                'duracao_minutos' => 45,
                'imagem' => 'imagem/procedimentos/spa-dos-pes.jpg',
                'cuidados' => 'Manter os pés limpos e hidratados, utilizar calçados confortáveis e evitar atrito excessivo após o procedimento. Informar à profissional sobre sensibilidade, alergias ou desconfortos. Manter os materiais utilizados devidamente higienizados.',
                'contraindicacoes' => 'Feridas abertas, infecções, micoses suspeitas, inflamação intensa ou lesões nos pés. Pessoas com diabetes, alterações de sensibilidade ou problemas circulatórios devem informar previamente e buscar avaliação adequada antes de procedimentos que envolvam esfoliação ou manipulação dos pés.',
                'ativo' => true,
            ],

          

            [
                'categoria_procedimento_id' => 4,
                'nome' => 'Manicure',
                'descricao' => 'Serviço de cuidado e embelezamento das unhas das mãos, que pode incluir higienização, modelagem, cuidado das cutículas conforme a técnica adotada e aplicação de esmalte. O atendimento busca proporcionar acabamento uniforme e unhas bem cuidadas, com atenção à higiene dos instrumentos e à integridade da pele.',
                'preco' => 35.00,
                'duracao_minutos' => 45,
                'imagem' => 'imagem/procedimentos/manicure.jpg',
                'cuidados' => 'Hidratar mãos e cutículas, evitar utilizar as unhas como ferramentas e preservar o esmalte de impactos excessivos. Manter os instrumentos devidamente esterilizados e evitar compartilhar materiais de uso pessoal.',
                'contraindicacoes' => 'Feridas abertas, inflamações, infecções ou suspeita de micose nas unhas e na pele ao redor. Evitar a manipulação de áreas lesionadas e encaminhar alterações suspeitas para avaliação profissional adequada.',
                'ativo' => true,
            ],

            [
                'categoria_procedimento_id' => 4,
                'nome' => 'Pedicure',
                'descricao' => 'Serviço de cuidado e embelezamento das unhas dos pés, podendo incluir higienização, corte e modelagem das unhas, cuidado superficial das cutículas e aplicação de esmalte. A execução respeita a integridade da pele e utiliza instrumentos higienizados e esterilizados conforme as exigências sanitárias aplicáveis.',
                'preco' => 40.00,
                'duracao_minutos' => 50,
                'imagem' => 'imagem/procedimentos/pedicure.jpg',
                'cuidados' => 'Manter os pés limpos e hidratados, utilizar calçados confortáveis e evitar cortar as unhas excessivamente curtas. Não retirar peles ou cutículas em excesso e procurar orientação diante de alterações persistentes nas unhas.',
                'contraindicacoes' => 'Feridas, infecções, inflamações ou suspeita de micose. Pessoas com diabetes, sensibilidade reduzida ou problemas circulatórios devem informar previamente e buscar orientação adequada, especialmente quando houver necessidade de corte ou manipulação das unhas.',
                'ativo' => true,
            ],


            // MASSAGEM
            [
                'categoria_procedimento_id' => 5,
                'nome' => 'Massagem Relaxante',
                'descricao' => 'Técnica de massagem realizada com movimentos suaves e ritmados, destinada a proporcionar relaxamento, conforto e sensação de bem-estar. A intensidade e as regiões trabalhadas são adaptadas às preferências e às condições individuais, respeitando os limites de conforto da pessoa atendida.',
                'preco' => 100.00,
                'duracao_minutos' => 60,
                'imagem' => 'imagem/procedimentos/massagem-relaxante.jpg',
                'cuidados' => 'Informar previamente sobre desconfortos, sensibilidades, alergias a óleos e condições que possam exigir adaptação da técnica. Manter hidratação habitual e comunicar imediatamente qualquer dor ou mal-estar durante a sessão.',
                'contraindicacoes' => 'Febre, infecção aguda, lesões de pele na região, suspeita de trombose ou dor sem causa esclarecida. Condições cardiovasculares, gestação e outras situações clínicas exigem avaliação individual e, quando necessário, autorização de profissional de saúde.',
                'ativo' => true,
            ],


            [
                'categoria_procedimento_id' => 5,
                'nome' => 'Drenagem Linfática',
                'descricao' => 'Técnica manual composta por movimentos suaves e específicos, direcionados ao estímulo do fluxo linfático e ao auxílio na mobilização de líquidos acumulados nos tecidos. A indicação, as regiões atendidas e a frequência são definidas conforme a avaliação individual, respeitando as condições de saúde da pessoa.',
                'preco' => 120.00,
                'duracao_minutos' => 60,
                'imagem' => 'imagem/procedimentos/drenagem-linfatica.jpg',
                'cuidados' => 'Informar sobre doenças, medicamentos, cirurgias recentes, gestação e alterações circulatórias antes da sessão. Seguir a frequência recomendada pelo profissional responsável e comunicar qualquer desconforto durante a aplicação.',
                'contraindicacoes' => 'Suspeita ou diagnóstico de trombose, infecção aguda, febre e descompensação de doenças cardíacas ou renais exigem avaliação médica antes do procedimento. Edema súbito, doloroso ou sem causa esclarecida deve ser investigado antes de qualquer técnica manual.',
                'ativo' => true,
            ],

          
// FACE

[
    'categoria_procedimento_id' => 1,
    'nome' => 'Design de Sobrancelhas',
    'descricao' => 'Procedimento estético que modela as sobrancelhas de acordo com o formato do rosto, removendo os pelos excedentes e valorizando a expressão facial, proporcionando um resultado harmonioso e natural.',
    'preco' => 35.00,
    'duracao_minutos' => 30,
    'imagem' => 'imagem/procedimentos/sobrancelha.jpg',
    'cuidados' => 'Evitar exposição solar intensa logo após o procedimento, não esfregar a região e evitar o uso de produtos irritantes na área das sobrancelhas.',
'contraindicacoes' => 'Presença de feridas, infecções, irritações ou inflamações na região das sobrancelhas. Pessoas com pele sensibilizada devem receber avaliação profissional antes do procedimento.',
'ativo' => true,
],

[
                
    'categoria_procedimento_id' => 1,
    'nome' => 'Limpeza de Pele',
    'descricao' => 'Procedimento facial destinado à remoção de impurezas, excesso de oleosidade e células mortas acumuladas na superfície da pele. Inclui higienização, etapas de limpeza profunda e finalização com produtos adequados ao tipo de pele, contribuindo para uma aparência mais uniforme, fresca e saudável.',
    'preco' => 99.90,
    'duracao_minutos' => 60,
    'imagem' => 'imagem/procedimentos/limpeza-de-pele.jpg',
    'cuidados' => 'Evitar exposição solar intensa após o procedimento, utilizar protetor solar adequado e manter a pele hidratada. Evitar esfoliantes, ácidos e outros produtos irritantes pelo período recomendado pela profissional. Não manipular possíveis marcas ou áreas sensibilizadas.',
    'contraindicacoes' => 'Infecções cutâneas ativas, feridas abertas, queimaduras solares, irritação intensa ou inflamação importante na região. Informar previamente sobre alergias, uso de medicamentos dermatológicos e tratamentos recentes. Em caso de acne inflamada ou doença de pele, avaliar previamente com profissional habilitado.',
    'ativo' => true,

],
            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Depilação de Buço',
                'descricao' => 'Procedimento estético destinado à remoção dos pelos da região acima do lábio superior, utilizando técnica compatível com as características e a sensibilidade da pele. Busca proporcionar acabamento uniforme e sensação de pele lisa, com atenção à higiene e à aplicação adequada dos produtos.',
                'preco' => 20.00,
                'duracao_minutos' => 15,
                'imagem' => 'imagem/procedimentos/depilacao-buco.jpg',
                'cuidados' => 'Evitar exposição solar intensa, esfoliantes, ácidos e cosméticos irritantes na região enquanto a pele estiver sensibilizada. Não esfregar nem manipular a área após o procedimento. Informar previamente sobre uso de retinoides e outros produtos que possam tornar a pele mais frágil.',
                'contraindicacoes' => 'Feridas, queimaduras solares, herpes ativa, irritação intensa ou lesões na região. A depilação com cera deve ser evitada em pele fragilizada por determinados medicamentos ou tratamentos dermatológicos. Verificar possíveis alergias aos produtos utilizados.',
                'ativo' => true,
            ],
            
            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Depilação de Costeletas',
                'descricao' => 'Procedimento de remoção dos pelos da região lateral do rosto, próximo às orelhas, com o objetivo de proporcionar acabamento uniforme e respeitar o contorno natural da face. A técnica é escolhida de acordo com a sensibilidade da pele e as características dos pelos.',
                'preco' => 25.00,
                'duracao_minutos' => 15,
                'imagem' => 'imagem/procedimentos/depilacao-costeletas.jpg',
                'cuidados' => 'Evitar exposição solar intensa, fricção, esfoliação e cosméticos irritantes logo após a sessão. Manter a região limpa e observar possíveis reações. Seguir as recomendações da profissional sobre hidratação e proteção solar.',
                'contraindicacoes' => 'Feridas abertas, dermatites ativas, queimaduras, irritação intensa ou infecção na região. Informar sobre alergias e uso de produtos dermatológicos que possam sensibilizar a pele.',
                'ativo' => true,
            ],
            
            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Depilação de Queixo',
                'descricao' => 'Remoção dos pelos da região do queixo por técnica adequada ao tipo de pelo e às condições da pele. O procedimento busca proporcionar acabamento uniforme, respeitando a sensibilidade local e os cuidados necessários para reduzir o risco de irritação.',
                'preco' => 20.00,
                'duracao_minutos' => 15,
                'imagem' => 'imagem/procedimentos/depilacao-queixo.jpg',
                'cuidados' => 'Evitar exposição solar intensa, esfoliantes e produtos irritantes enquanto houver sensibilidade. Não manipular pelos encravados e manter a região limpa. Procurar orientação se houver vermelhidão persistente ou reação incomum.',
                'contraindicacoes' => 'Infecções, feridas, irritação intensa ou lesões na região. Informar sobre alergias e tratamentos dermatológicos que possam fragilizar a pele antes de escolher a técnica.',
                'ativo' => true,
            ],
            
            [
                'categoria_procedimento_id' => 1,
                'nome' => 'Depilação Facial Completa',
                'descricao' => 'Procedimento estético destinado à remoção dos pelos de regiões combinadas do rosto, podendo incluir buço, queixo e laterais faciais. A técnica e as áreas atendidas são definidas previamente com a cliente, considerando a distribuição dos pelos, a sensibilidade cutânea e o resultado desejado.',
                'preco' => 60.00,
                'duracao_minutos' => 35,
                'imagem' => 'imagem/procedimentos/depilacao-facial-completa.jpg',
                'cuidados' => 'Evitar exposição solar intensa, esfoliação e cosméticos irritantes após a sessão. Utilizar proteção solar adequada e não manipular a pele. Informar previamente sobre o uso de ácidos, retinoides e medicamentos que possam aumentar a sensibilidade cutânea.',
                'contraindicacoes' => 'Feridas, queimaduras solares, herpes ativa, dermatites ou irritação intensa nas regiões atendidas. A técnica deve ser adaptada ou adiada em caso de pele fragilizada ou alergia aos produtos utilizados.',
                'ativo' => true,
            ],


            // CORPO
            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Depilação de Axilas',
                'descricao' => 'Procedimento de remoção dos pelos da região das axilas, com técnica adequada à sensibilidade local. Busca proporcionar uma pele com toque mais suave e acabamento uniforme, respeitando os cuidados de higiene e a condição individual da pele.',
                'preco' => 25.00,
                'duracao_minutos' => 15,
                'imagem' => 'imagem/procedimentos/depilacao-axilas.jpg',
                'cuidados' => 'Evitar desodorantes perfumados, fricção e exposição solar intensa enquanto a pele estiver sensibilizada. Manter a região limpa e seca e utilizar produtos suaves. Não manipular pelos encravados.',
                'contraindicacoes' => 'Feridas, irritação intensa, infecção, queimaduras ou inflamação na região. Informar sobre alergias e uso de produtos que sensibilizem a pele.',
                'ativo' => true,
            ],
            
            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Depilação de Braços Completos',
                'descricao' => 'Remoção dos pelos dos braços, abrangendo a região dos antebraços e dos braços superiores. A técnica é selecionada conforme o tipo de pelo e a sensibilidade da pele, buscando um resultado uniforme e confortável.',
                'preco' => 40.00,
                'duracao_minutos' => 30,
                'imagem' => 'imagem/procedimentos/depilacao-bracos.jpg',
                'cuidados' => 'Evitar exposição solar intensa, esfoliação e produtos irritantes após o procedimento. Manter a pele hidratada e não puxar ou manipular pelos encravados.',
                'contraindicacoes' => 'Feridas, infecções, queimaduras solares, irritação intensa ou alergia aos produtos utilizados.',
                'ativo' => true,
            ],
            
           
            
            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Depilação de Pernas Completas',
                'descricao' => 'Procedimento de remoção dos pelos das pernas, incluindo coxas, joelhos e região abaixo dos joelhos até os tornozelos. A técnica é definida conforme as características dos pelos e a sensibilidade da pele, buscando um resultado uniforme.',
                'preco' => 60.00,
                'duracao_minutos' => 45,
                'imagem' => 'imagem/procedimentos/depilacao-pernas-completas.jpg',
                'cuidados' => 'Evitar exposição solar intensa, esfoliação e atrito excessivo após a sessão. Utilizar roupas confortáveis, manter a pele hidratada e evitar manipular pelos encravados.',
                'contraindicacoes' => 'Feridas, infecções cutâneas, queimaduras solares, irritação intensa ou lesões na região. Em caso de varizes dolorosas ou alterações circulatórias relevantes, buscar orientação adequada antes do procedimento.',
                'ativo' => true,
            ],
            
            
            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Depilação de Virilha Completa',
                'descricao' => 'Procedimento de remoção dos pelos da região externa da virilha em extensão ampliada, conforme os limites definidos com a cliente. O atendimento prioriza privacidade, higiene, comunicação clara e respeito à sensibilidade individual, sem incluir mucosas.',
                'preco' => 65.00,
                'duracao_minutos' => 40,
                'imagem' => 'imagem/procedimentos/depilacao-virilha-completa.jpg',
                'cuidados' => 'Evitar atrito, roupas apertadas, calor excessivo, esfoliação e produtos perfumados após o atendimento. Manter a higiene habitual da região externa e não manipular pelos encravados. Seguir as orientações da profissional.',
                'contraindicacoes' => 'Herpes ativa, feridas, infecções, irritação intensa ou lesões na região. Não realizar sobre pele lesionada, e interromper o procedimento se houver dor intensa ou reação inesperada.',
                'ativo' => true,
            ],
            
           
            
            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Depilação de Faixa Abdominal',
                'descricao' => 'Remoção dos pelos de uma faixa delimitada do abdômen, geralmente na linha central abaixo ou acima do umbigo, conforme a preferência da cliente. O procedimento busca proporcionar acabamento uniforme, com técnica compatível com a sensibilidade da pele.',
                'preco' => 20.00,
                'duracao_minutos' => 15,
                'imagem' => 'imagem/procedimentos/depilacao-faixa-abdominal.jpg',
                'cuidados' => 'Evitar exposição solar intensa, esfoliação, atrito e produtos irritantes após o atendimento. Manter a região limpa e hidratada conforme orientação profissional.',
                'contraindicacoes' => 'Feridas, infecções, irritação intensa, queimaduras ou lesões na região. Informar previamente sobre alergias e tratamentos que possam sensibilizar a pele.',
                'ativo' => true,
            ],
            
            [
                'categoria_procedimento_id' => 2,
                'nome' => 'Depilação de Abdômen Completo',
                'descricao' => 'Procedimento de remoção dos pelos da região abdominal, abrangendo a área combinada entre a parte superior do abdômen e a região próxima ao umbigo. A técnica é escolhida conforme o tipo de pelo, a sensibilidade da pele e a extensão do atendimento.',
                'preco' => 35.00,
                'duracao_minutos' => 25,
                'imagem' => 'imagem/procedimentos/depilacao-abdomen.jpg',
                'cuidados' => 'Evitar sol intenso, esfoliação e atrito excessivo após o procedimento. Manter a pele limpa, utilizar produtos suaves e observar possíveis reações.',
                'contraindicacoes' => 'Feridas, infecções, queimaduras, irritação intensa ou lesões na região. Informar sobre alergias e uso de medicamentos ou cosméticos que fragilizem a pele.',
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
