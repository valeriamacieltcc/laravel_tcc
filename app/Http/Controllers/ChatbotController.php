<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimento;

class ChatbotController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'messages' => 'required|array|min:1|max:20',
            'messages.*.role' => 'required|in:user,assistant',
            'messages.*.content' => 'required|string|max:1000',
        ]);

        $mensagens = $request->input('messages');

        $ultimaMensagem = end($mensagens);

        if ($ultimaMensagem['role'] !== 'user') {
            return response()->json([
                'message' => 'Envie uma mensagem para continuar.'
            ], 422);
        }

        $pergunta = mb_strtolower(
            trim($ultimaMensagem['content'])
        );

        // WhatsApp oficial
        $whatsapp = 'https://w.app/valeriamaciel';

        // Resposta padrão para dúvidas não reconhecidas
        $respostaPadrao = "Não tenho essa informação no momento. 😊

Para receber um atendimento mais completo, entre em contato diretamente com a Valéria pelo WhatsApp:

$whatsapp";

        // 1. Reconhecer cumprimentos
        $cumprimentos = [
            'oi',
            'olá',
            'ola',
            'bom dia',
            'boa tarde',
            'boa noite',
            'e aí',
            'eai',
            'tudo bem',
            'tudo bom',
            'opa',
            'oie',
                'oi',
                'oie',
                'oiee',
                'oii',
                'oiii',
                'olá',
                'ola',
                'olaaa',
                'oláá',
                'bom dia',
                'boa tarde',
                'boa noite',
                'boa madrugada',
                'tudo bem',
                'tudo bom',
                'como vai',
                'como você está',
                'como vcs estão',
                'e aí',
                'eai',
                'eaí',
                'opa',
                'opa tudo bem',
                'hey',
                'hello',
                'oi tudo bem',
                'olá tudo bem',
                'bom dia tudo bem',
                'boa tarde tudo bem',
                'boa noite tudo bem',
                'oi querida',
                'oi linda',
                'olá querida',
                'olá linda',
                'oi gostaria de uma informação',
                'olá gostaria de saber uma coisa',
                'preciso de ajuda',
                'poderia me ajudar',
                'tem alguém aí',
                'alguém pode me atender',
                'quero falar com vocês',
                'gostaria de conversar',
                'vim pelo instagram',
                'vi vocês no instagram',
                'conheci pelo instagram',
                'estou interessada',
                'tenho uma dúvida',
                'posso tirar uma dúvida',
                'posso fazer uma pergunta',
                'oi tudo certinho',
                'tudo certinho',
                'como estão',
                'boa tarde meninas',
                'bom dia meninas',
                'oi meninas',
                'olá meninas',
            
        ];

        foreach ($cumprimentos as $cumprimento) {
            if (
                $pergunta === $cumprimento ||
                str_starts_with($pergunta, $cumprimento . ' ')
            ) {
                return response()->json([
                    'message' => "Olá! Seja muito bem-vinda à Valéria Maciel Estética! 💚

Sou a assistente virtual e estou aqui para ajudar você com informações sobre nossos procedimentos e serviços.

Como posso ajudar?"
                ]);
            }
        }

        // 2. Reconhecer agradecimentos
        $agradecimentos = [
            'obrigada',
            'obrigado',
            'muito obrigada',
            'muito obrigado',
            'valeu',
                'obrigada',
                'obrigado',
                'obg',
                'obgd',
                'obrigadaa',
                'obrigadoo',
                'obrigadinha',
                'muito obrigada',
                'muito obrigado',
                'muito obg',
                'agradeço',
                'agradecida',
                'agradecido',
                'agradeço pela atenção',
                'obrigada pela atenção',
                'obrigado pela atenção',
                'obrigada pela informação',
                'obrigado pela informação',
                'valeu',
                'valeu mesmo',
                'vlw',
                'vlww',
                'show',
                'perfeito',
                'perfeita',
                'maravilha',
                'ótimo',
                'ótima',
                'amei',
                'adorei',
                'arrasou',
                'vocês são ótimas',
                'vocês são maravilhosas',
                'muito gentil',
                'que legal',
                'entendi obrigada',
                'entendi obrigado',
                'certo obrigada',
                'certo obrigado',
                'tá bom obrigada',
                'tá bom obrigado',
                'muito bom',
                'ajudou bastante',
                'era isso mesmo',
                'era só isso',
                'obrigada por responder',
                'obrigado por responder',
                'obrigada pelo atendimento',
                'obrigado pelo atendimento',
                'agradeço o retorno',
                'gratidão',
                'grata',
                'grato',
                'brigadão',
                'brigadinha',
                'obrigada viu',
                'obrigado viu',
            
        ];

        foreach ($agradecimentos as $agradecimento) {
            if (str_contains($pergunta, $agradecimento)) {
                return response()->json([
                    'message' => "Por nada! 💚 Estamos sempre à disposição para ajudar você. Tenha um ótimo dia!"
                ]);
            }
        }

        // 3. Não informar valores
        $termosPreco = [
            'preço',
            'preco',
            'valor',
            'valores',
            'quanto custa',
            'quanto é',
            'quanto fica',
            'custa',
            'pagamento',
        ];

        foreach ($termosPreco as $termo) {
            if (str_contains($pergunta, $termo)) {
                return response()->json([
                    'message' => "Para consultar informações sobre valores e condições de pagamento, entre em contato diretamente com a Valéria pelo WhatsApp:

$whatsapp

Será um prazer atender você! 💚"
                ]);
            }
        }

        // 4. Reconhecer perguntas sobre agendamento
        $termosAgendamento = [
            'agendar',
            'agendamento',
            'marcar horário',
            'marcar horario',
            'marcar uma hora',
            'reservar horário',
            'reservar horario',
                'agendar',
                'agendamento',
                'agendamentos',
                'marcar',
                'marcar horário',
                'marcar um horário',
                'quero marcar',
                'quero agendar',
                'gostaria de agendar',
                'gostaria de marcar',
                'queria agendar',
                'queria marcar',
                'desejo agendar',
                'desejo marcar',
                'reservar horário',
                'reservar um horário',
                'fazer agendamento',
                'fazer uma marcação',
                'quero reservar',
                'tem horário',
                'tem horarios',
                'tem vaga',
                'tem vagas',
                'tem disponibilidade',
                'possui horário disponível',
                'possui disponibilidade',
                'horários disponíveis',
                'horarios disponiveis',
                'quais horários tem',
                'quais horarios tem',
                'qual horário disponível',
                'qual horario disponivel',
                'quando posso ir',
                'quando posso fazer',
                'quando tem vaga',
                'quando tem horário',
                'tem horário amanhã',
                'tem horário hoje',
                'tem horário essa semana',
                'tem horário sábado',
                'tem horário domingo',
                'tem horário na semana',
                'atende hoje',
                'atende amanhã',
                'atende sábado',
                'quero atendimento',
                'quero fazer um procedimento',
                'quero realizar um procedimento',
                'gostaria de fazer',
                'como faço para agendar',
                'como faço para marcar',
                'como funciona o agendamento',
                'como reservar',
                'posso agendar',
                'posso marcar',
                'consigo agendar',
                'consigo marcar',
                'quero agendar para mim',
                'preciso marcar um horário',
                'preciso de um horário',
                'quero marcar uma sessão',
                'marcar minha sessão',
                'agendar minha sessão',
                'quero agendar uma avaliação',
                'quero fazer uma avaliação',
                'quero mudar meu horário',
                'remarcar',
                'reagendar',
                'alterar agendamento',
                'cancelar agendamento',
                'desmarcar horário',
                'desmarcar',
                'confirmar horário',
                'confirmar agendamento',
                'já tenho horário',
                'já tenho agendamento',
                'quero saber meu horário',
    
        ];

        foreach ($termosAgendamento as $termo) {
            if (str_contains($pergunta, $termo)) {
                return response()->json([
                    'message' => "Para agendar seu procedimento, você pode acessar a área de agendamentos do nosso site ou entrar em contato pelo WhatsApp:

$whatsapp

Estamos esperando por você! 💚"
                ]);
            }
        }

        // 5. Consultar procedimentos ativos no MySQL
        $procedimentos = Procedimento::where('ativo', true)->get();

        // 6. Listar procedimentos
        $termosLista = [
            'quais procedimentos',
            'quais serviços',
            'quais servicos',
            'o que vocês oferecem',
            'o que voces oferecem',
            'lista de procedimentos',
            'procedimentos disponíveis',
            'procedimentos disponiveis',
                'lista',
                'listas',
                'cardápio',
                'catalogo',
                'catálogo',
                'mostra a lista',
                'me mostra a lista',
                'quero ver a lista',
                'quero conhecer os serviços',
                'quais serviços vocês oferecem',
                'quais serviços tem',
                'quais procedimentos tem',
                'quais procedimentos vocês fazem',
                'quais procedimentos oferecem',
                'quais tratamentos vocês fazem',
                'quais tratamentos tem',
                'o que vocês fazem',
                'o que vocês oferecem',
                'o que tem disponível',
                'o que tem de procedimento',
                'quais são os serviços',
                'quais são os procedimentos',
                'quero conhecer os procedimentos',
                'quero conhecer os tratamentos',
                'quero ver os procedimentos',
                'quero ver os serviços',
                'me mostra os procedimentos',
                'me mostra os serviços',
                'pode mandar a lista',
                'pode enviar a lista',
                'manda a lista',
                'envia a lista',
                'tem catálogo',
                'tem catalogo',
                'tem cardápio',
                'tem cardapio',
                'tem algum catálogo',
                'tem alguma lista',
                'quero saber o que tem',
                'quais opções vocês têm',
                'quais opções tem',
                'quais são as opções',
                'tem quais procedimentos',
                'tem quais serviços',
                'quero ver tudo',
                'quero conhecer tudo',
                'me apresenta os serviços',
                'lista de tratamentos',
                'lista de serviços',
                'lista de procedimentos',
                'todos os procedimentos',
                'todos os serviços',
                'todos os tratamentos',
                'serviços disponíveis',
                'procedimentos disponíveis',
                'tratamentos disponíveis',
                'vitrine',
                'quero ver a vitrine',
                'quais produtos tem',
                'quero ver os produtos',
                'me mostra os produtos',
                'quais produtos vocês vendem',
                'tem produtos disponíveis',
                'quero conhecer os produtos',
                'quero ver os cosméticos',
                'quais cosméticos vocês trabalham',
                'quais marcas vocês trabalham',
                'quais marcas tem',
            
        ];

        foreach ($termosLista as $termo) {
            if (str_contains($pergunta, $termo)) {

                if ($procedimentos->isEmpty()) {
                    return response()->json([
                        'message' => $respostaPadrao
                    ]);
                }

                $lista = $procedimentos->map(function ($procedimento) {
                    return '• ' . $procedimento->nome;
                })->implode("\n");

                return response()->json([
                    'message' => "Temos os seguintes procedimentos disponíveis na Valéria Maciel Estética:

$lista

Se quiser saber mais sobre algum deles, é só me perguntar! 💚"
                ]);
            }
        }

        // 7. Procurar procedimento pelo nome
        $procedimentoEncontrado = $procedimentos->first(
            function ($procedimento) use ($pergunta) {

                $nome = mb_strtolower($procedimento->nome);

                return str_contains($pergunta, $nome);
            }
        );

        if ($procedimentoEncontrado) {

            $resposta = $procedimentoEncontrado->nome . "\n\n";

            $resposta .= $procedimentoEncontrado->descricao;

            if (!empty($procedimentoEncontrado->cuidados)) {
                $resposta .= "\n\nCuidados:\n";
                $resposta .= $procedimentoEncontrado->cuidados;
            }

            if (!empty($procedimentoEncontrado->contraindicacoes)) {
                $resposta .= "\n\nContraindicações:\n";
                $resposta .= $procedimentoEncontrado->contraindicacoes;
            }

            $resposta .= "\n\nSe tiver outras dúvidas, estou à disposição! 💚";

            return response()->json([
                'message' => $resposta
            ]);
        }

        // 8. Não reconheceu a pergunta
        return response()->json([
            'message' => $respostaPadrao
        ]);
    }
}
