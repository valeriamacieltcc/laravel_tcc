<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Meus Agendamentos</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 15px;
            background: #f6f5e5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .botao {
            background: #2c7771;
            color: white;
            padding: 11px 18px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 16px;
        }

        .sucesso {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 15px;
        }

        .erro {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            margin-bottom: 15px;
        }

        .status {
            font-weight: bold;
            text-transform: capitalize;
        }

        .cancelar {
            background: #a94442;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="topo">
        <h1>Meus agendamentos</h1>

        <a
            href="{{ route('cliente.agendamentos.create') }}"
            class="botao"
        >
            Novo agendamento
        </a>
    </div>

    @if(session('sucesso'))
        <div class="sucesso">
            {{ session('sucesso') }}
        </div>
    @endif

    @if(session('erro'))
        <div class="erro">
            {{ session('erro') }}
        </div>
    @endif

    @forelse($agendamentos as $agendamento)

        <div class="card">

            <h3>
                {{ $agendamento->procedimento->nome }}
            </h3>

            <p>
                <strong>Data:</strong>

                {{ $agendamento
                    ->data_agendamento
                    ->format('d/m/Y') }}
            </p>

            <p>
                <strong>Horário:</strong>

                {{ substr(
                    $agendamento->hora_agendamento,
                    0,
                    5
                ) }}
            </p>

            <p>
                <strong>Status:</strong>

                <span class="status">
                    {{ $agendamento->status }}
                </span>
            </p>

            @if($agendamento->observacoes_cliente)
                <p>
                    <strong>Observações:</strong>

                    {{ $agendamento->observacoes_cliente }}
                </p>
            @endif

            @if(in_array(
                $agendamento->status,
                ['pendente', 'confirmado']
            ))
                <form
                    action="{{ route(
                        'cliente.agendamentos.cancelar',
                        $agendamento
                    ) }}"
                    method="POST"
                    onsubmit="
                        return confirm(
                            'Deseja cancelar este agendamento?'
                        )
                    "
                >
                    @csrf
                    @method('PATCH')

                    <button
                        type="submit"
                        class="botao cancelar"
                    >
                        Cancelar
                    </button>
                </form>
            @endif

        </div>

    @empty

        <div class="card">
            Nenhum agendamento realizado.
        </div>

    @endforelse

    <a href="{{ route('cliente.perfil.show') }}">
        Voltar para o perfil
    </a>

</div>

</body>
</html>