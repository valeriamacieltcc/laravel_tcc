<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Cliente | Valéria Maciel Estética
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >
</head>

<body>


<!-- =========================
     NAVBAR ADMIN
========================= -->

<nav class="navbar">

    <button
        class="menu-button"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#menuLateral"
        aria-controls="menuLateral"
    >
        <img
            src="{{ asset('imagem/menu.png') }}"
            alt="Menu"
        >
    </button>


    <ul>

        <li>
            <a href="{{ route('admin.home') }}">
                HOME
            </a>
        </li>

        <li>
            <a href="{{ route('admin.procedimentos.index') }}">
                PROCEDIMENTOS
            </a>
        </li>

        <li>
            <a href="{{ route('admin.agenda.index') }}">
                AGENDA
            </a>
        </li>

        <li>
            <a href="{{ route('admin.vitrine.index') }}">
                LOJA
            </a>
        </li>

        <li>
            <a href="#">
                BLOG
            </a>
        </li>

    </ul>

</nav>



<!-- =========================
     CONTEÚDO
========================= -->

<main class="cliente-admin-container">


    <!-- VOLTAR -->

    <div class="voltar-clientes">

        <a
            href="{{ route('admin.clientes.index') }}"
            class="btn-voltar-admin"
        >
            ← Voltar para clientes
        </a>

    </div>



    <!-- =========================
         CABEÇALHO CLIENTE
    ========================= -->

    <section class="cliente-admin-cabecalho">

        <div class="cliente-admin-foto">

            @if($cliente->foto_perfil)

                <img
                    src="{{ asset('storage/' . $cliente->foto_perfil) }}"
                    alt="Foto de {{ $cliente->user->name ?? 'Cliente' }}"
                >

            @else

                <img
                    src="{{ asset('imagem/perfil-padrao.png') }}"
                    alt="Foto padrão"
                >

            @endif

        </div>


        <div class="cliente-admin-nome">

            <span>Cliente</span>

            <h1>
                {{ $cliente->user->name ?? 'Cliente' }}
            </h1>

            <p>
                {{ $cliente->user->email ?? 'E-mail não informado' }}
            </p>

        </div>

    </section>



    <!-- =========================
         DADOS DA CLIENTE
    ========================= -->

    <section class="cliente-admin-bloco">

        <h2>Dados da cliente</h2>

        <div class="cliente-admin-dados">


            <div class="cliente-admin-dado">

                <span>Nome</span>

                <p>
                    {{ $cliente->user->name ?? 'Não informado' }}
                </p>

            </div>


            <div class="cliente-admin-dado">

                <span>E-mail</span>

                <p>
                    {{ $cliente->user->email ?? 'Não informado' }}
                </p>

            </div>


            <div class="cliente-admin-dado">

                <span>Telefone</span>

                <p>
                    {{ $cliente->telefone ?? 'Não informado' }}
                </p>

            </div>


            @if($cliente->cpf)

                <div class="cliente-admin-dado">

                    <span>CPF</span>

                    <p>
                        {{ $cliente->cpf }}
                    </p>

                </div>

            @endif


            @if($cliente->data_nascimento)

                <div class="cliente-admin-dado">

                    <span>Data de nascimento</span>

                    <p>
                        {{ \Carbon\Carbon::parse($cliente->data_nascimento)->format('d/m/Y') }}
                    </p>

                </div>

            @endif


            @if($cliente->cidade)

                <div class="cliente-admin-dado">

                    <span>Cidade</span>

                    <p>
                        {{ $cliente->cidade }}

                        @if($cliente->estado)
                            - {{ $cliente->estado }}
                        @endif
                    </p>

                </div>

            @endif


        </div>

    </section>



    <!-- =========================
         ANAMNESE
    ========================= -->

    <section class="cliente-admin-bloco">

        <div class="cliente-admin-titulo">

            <div>
                <span>Ficha</span>
                <h2>Anamnese</h2>
            </div>

        </div>


        @if($cliente->anamnese)

            <div class="anamnese-status anamnese-ok">

                <div>

                    <strong>
                        Ficha de anamnese cadastrada
                    </strong>

                    <p>
                        Visualize todas as informações preenchidas pela cliente.
                    </p>

                </div>


                <a
                    href="{{ route(
                        'admin.clientes.anamnese.index',
                        $cliente
                    ) }}"
                    class="btn-admin-principal"
                >
                    Ver ficha de anamnese
                </a>

            </div>


        @else


            <div class="anamnese-status">

                <div>

                    <strong>
                        Nenhuma ficha cadastrada
                    </strong>

                    <p>
                        Esta cliente ainda não possui ficha de anamnese.
                    </p>

                </div>


                <a
                    href="{{ route(
                        'admin.clientes.anamnese.edit_anamnese',
                        $cliente
                    ) }}"
                    class="btn-admin-principal"
                >
                    Criar anamnese
                </a>

            </div>

        @endif

    </section>



    {{-- =====================================================
         AGENDAMENTOS DO CLIENTE
    ===================================================== --}}

    <section class="bloco-info">

        <h3>Agendamentos</h3>


        @if($cliente->agendamentos->count() > 0)

            <div class="lista-agendamentos">


            @foreach ($agendamentos as $agendamento)

                    <div class="agendamento-item">


                        {{-- PROCEDIMENTO --}}

                        <p>
                            <strong>Procedimento:</strong>

                            {{ $agendamento->procedimento->nome ?? 'Não informado' }}
                        </p>


                        {{-- DATA --}}

                        <p>
                            <strong>Data:</strong>

                            {{ $agendamento->data_agendamento->format('d/m/Y') }}
                        </p>


                        {{-- HORÁRIO --}}

                        <p>
                            <strong>Horário:</strong>

                            {{ \Carbon\Carbon::parse(
                                $agendamento->hora_agendamento
                            )->format('H:i') }}
                        </p>


                        {{-- STATUS ATUAL --}}

                        <p>

                            <strong>Status atual:</strong>


                            @if($agendamento->status == 'pendente')

                                <span class="status-agendamento status-pendente">
                                    Pendente
                                </span>


                            @elseif($agendamento->status == 'confirmado')

                                <span class="status-agendamento status-confirmado">
                                    Confirmado
                                </span>


                            @elseif($agendamento->status == 'concluido')

                                <span class="status-agendamento status-concluido">
                                    Concluído
                                </span>


                            @elseif($agendamento->status == 'cancelado')

                                <span class="status-agendamento status-cancelado">
                                    Cancelado
                                </span>

                            @endif

                        </p>



                        {{-- OBSERVAÇÕES DA CLIENTE --}}

                        @if($agendamento->observacoes_cliente)

                            <p>

                                <strong>
                                    Observações da cliente:
                                </strong>

                                {{ $agendamento->observacoes_cliente }}

                            </p>

                        @endif



                        {{-- OBSERVAÇÕES DA ADMIN --}}

                        @if($agendamento->observacoes_admin)

                            <p>

                                <strong>
                                    Observações da admin:
                                </strong>

                                {{ $agendamento->observacoes_admin }}

                            </p>

                        @endif



                        {{-- CANCELAMENTO --}}

                        @if($agendamento->status == 'cancelado')


                            @if($agendamento->motivo_cancelamento)

                                <p>

                                    <strong>
                                        Motivo do cancelamento:
                                    </strong>

                                    {{ $agendamento->motivo_cancelamento }}

                                </p>

                            @endif


                            @if($agendamento->cancelado_em)

                                <p>

                                    <strong>
                                        Cancelado em:
                                    </strong>

                                    {{ $agendamento->cancelado_em->format('d/m/Y H:i') }}

                                </p>

                            @endif


                        @endif



                        {{-- =====================================
                             ALTERAR STATUS
                        ===================================== --}}

                        <div class="admin-status-acoes">


                            {{-- PENDENTE --}}

                            <form
                                action="{{ route(
                                    'admin.agendamentos.status',
                                    $agendamento
                                ) }}"
                                method="POST"
                            >

                                @csrf
                                @method('PATCH')

                                <input
                                    type="hidden"
                                    name="status"
                                    value="pendente"
                                >

                                <button
                                    type="submit"
                                    class="btn-status btn-pendente"
                                    @if($agendamento->status == 'pendente')
                                        disabled
                                    @endif
                                >
                                    Pendente
                                </button>

                            </form>



                            {{-- CONFIRMAR --}}

                            <form
                                action="{{ route(
                                    'admin.agendamentos.status',
                                    $agendamento
                                ) }}"
                                method="POST"
                            >

                                @csrf
                                @method('PATCH')

                                <input
                                    type="hidden"
                                    name="status"
                                    value="confirmado"
                                >

                                <button
                                    type="submit"
                                    class="btn-status btn-confirmado"
                                    @if($agendamento->status == 'confirmado')
                                        disabled
                                    @endif
                                >
                                    Confirmar
                                </button>

                            </form>



                            {{-- CONCLUIR --}}

                            <form
                                action="{{ route(
                                    'admin.agendamentos.status',
                                    $agendamento
                                ) }}"
                                method="POST"
                            >

                                @csrf
                                @method('PATCH')

                                <input
                                    type="hidden"
                                    name="status"
                                    value="concluido"
                                >

                                <button
                                    type="submit"
                                    class="btn-status btn-concluido"
                                    @if($agendamento->status == 'concluido')
                                        disabled
                                    @endif
                                >
                                    Concluir
                                </button>

                            </form>



                            {{-- CANCELAR --}}

                            <form
                                action="{{ route(
                                    'admin.agendamentos.status',
                                    $agendamento
                                ) }}"
                                method="POST"
                                onsubmit="return confirm('Deseja realmente cancelar este agendamento?')"
                            >

                                @csrf
                                @method('PATCH')

                                <input
                                    type="hidden"
                                    name="status"
                                    value="cancelado"
                                >

                                <button
                                    type="submit"
                                    class="btn-status btn-cancelado"
                                    @if($agendamento->status == 'cancelado')
                                        disabled
                                    @endif
                                >
                                    Cancelar
                                </button>

                            </form>


                        </div>


                    </div>

                @endforeach

                <div class="paginacao">
    {{ $agendamentos->links() }}
</div>
            </div>


        @else


            <div class="sem-dados">

                <p>
                    Nenhum agendamento realizado por esta cliente.
                </p>

            </div>


        @endif


    </section>



    <!-- =========================
         FOTOS
    ========================= -->

    <section class="cliente-admin-bloco">


        <div class="cliente-admin-titulo cliente-admin-titulo-fotos">

            <div>

                <span>Acompanhamento</span>

                <h2>
                    Fotos de Antes e Depois
                </h2>

            </div>


            <a
                href="{{ route(
                    'admin.clientes.fotos.create',
                    $cliente
                ) }}"
                class="btn-admin-principal"
            >
                + Adicionar fotos
            </a>

        </div>



        <div class="acompanhamentos-admin">

            @forelse($cliente->fotosAcompanhamento as $foto)


                <article class="acompanhamento-card-admin">


                    <!-- CABEÇALHO -->

                    <div class="acompanhamento-cabecalho">

                        <div>

                            <span>Procedimento</span>

                            <h3>
                                {{ $foto->procedimento ?? 'Procedimento não informado' }}
                            </h3>

                        </div>


                        @if($foto->data)

                            <div class="acompanhamento-data">

                                {{ $foto->data->format('d/m/Y') }}

                            </div>

                        @endif

                    </div>



                    <!-- FOTOS -->

                    <div class="comparacao-fotos-admin">


                        <!-- ANTES -->

                        <div class="comparacao-foto-admin">

                            <div class="foto-titulo">
                                Antes
                            </div>


                            @if($foto->foto_antes)

                                <img
                                    src="{{ asset(
                                        'storage/' .
                                        $foto->foto_antes
                                    ) }}"
                                    alt="Foto antes do procedimento"
                                >

                            @else

                                <div class="foto-vazia-admin">
                                    Sem foto de antes
                                </div>

                            @endif

                        </div>



                        <!-- DEPOIS -->

                        <div class="comparacao-foto-admin">

                            <div class="foto-titulo">
                                Depois
                            </div>


                            @if($foto->foto_depois)

                                <img
                                    src="{{ asset(
                                        'storage/' .
                                        $foto->foto_depois
                                    ) }}"
                                    alt="Foto depois do procedimento"
                                >

                            @else

                                <div class="foto-vazia-admin">
                                    Sem foto de depois
                                </div>

                            @endif

                        </div>


                    </div>



                    <!-- OBSERVAÇÃO -->

                    @if($foto->observacao)

                        <div class="observacao-foto-admin">

                            <span>
                                Observação
                            </span>

                            <p>
                                {{ $foto->observacao }}
                            </p>

                        </div>

                    @endif



                    <!-- EXCLUIR -->

                    <div class="acoes-foto-admin">

                        <form
                            method="POST"
                            action="{{ route(
                                'admin.clientes.fotos.destroy',
                                $foto
                            ) }}"
                            onsubmit="return confirm('Deseja realmente excluir estas fotos?')"
                        >

                            @csrf
                            @method('DELETE')


                            <button
                                type="submit"
                                class="btn-excluir-admin"
                            >
                                Excluir fotos
                            </button>

                        </form>

                    </div>


                </article>


            @empty


                <div class="sem-fotos-admin">

                    <h3>
                        Nenhuma foto cadastrada
                    </h3>

                    <p>
                        Adicione fotos de antes e depois para acompanhar
                        a evolução dos procedimentos desta cliente.
                    </p>

                </div>


            @endforelse

        </div>

    </section>


</main>



@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>