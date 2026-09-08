<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Agenda | Valéria Maciel Estética</title>


    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- FONTES -->

    <link
        href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap"
        rel="stylesheet"
    >


    <!-- CSS DO SITE -->

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/agenda(admin).css') }}"
    >


    <!-- FULLCALENDAR -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/skeleton.css"
    >

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/all/global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/locales/pt-br/global.js"></script>

</head>


<body>


<!-- =====================================================
     NAVBAR
====================================================== -->

<nav class="navbar">


    <!-- BOTÃO MENU -->

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


    <!-- LINKS PRINCIPAIS -->

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


    <!-- PERFIL -->

    <div class="cart-icon">

        @auth

            <a href="{{ route('cliente.perfil.show') }}">

                @if(Auth::user()->cliente && Auth::user()->cliente->foto_perfil)

                    <img
                        src="{{ asset('storage/' . Auth::user()->cliente->foto_perfil) }}"
                        alt="Meu perfil"
                        class="foto-navbar"
                    >

                @else

                    <img
                        src="{{ asset('imagem/perfil-padrao.png') }}"
                        alt="Meu perfil"
                        class="foto-navbar"
                    >

                @endif

            </a>

        @else

            <a href="{{ route('login') }}">

                <img
                    src="{{ asset('imagem/perfil-padrao.png') }}"
                    alt="Entrar"
                    class="foto-navbar"
                >

            </a>

        @endauth

    </div>

</nav>


<!-- =====================================================
     AGENDA
====================================================== -->

<main class="agenda-container">


    <!-- TÍTULO -->

    <div class="titulo-agenda">

        <h1>
            Agenda
        </h1>

        <p>
            Acompanhe os agendamentos das clientes
            e os seus compromissos.
        </p>

    </div>


    <!-- MENSAGEM DE SUCESSO -->

    @if(session('sucesso'))

        <div class="alert alert-success">

            {{ session('sucesso') }}

        </div>

    @endif


    <!-- ERROS -->

    @if($errors->any())

        <div class="alert alert-danger">

            @foreach($errors->all() as $erro)

                <p class="mb-1">
                    {{ $erro }}
                </p>

            @endforeach

        </div>

    @endif


    <!-- LEGENDA -->

    <div class="legenda-agenda">

        <div>

            <span class="legenda-cliente"></span>

            Agendamento de cliente

        </div>


        <div>

            <span class="legenda-compromisso"></span>

            Compromisso

        </div>

    </div>


    <!-- =====================================================
         ÁREA DA AGENDA
    ====================================================== -->

    <div class="area-agenda">


        <!-- =================================================
             CALENDÁRIO
        ================================================== -->

        <section class="calendario-area">

            <div id="calendar"></div>

        </section>


        <!-- =================================================
             NOVO COMPROMISSO
        ================================================== -->

        <aside class="novo-compromisso">


            <h2>
                Novo compromisso
            </h2>


            <form
                method="POST"
                action="{{ route('admin.agenda.store') }}"
            >

                @csrf


                <!-- TÍTULO -->

                <div class="campo">

                    <label for="titulo">
                        Compromisso
                    </label>

                    <input
                        type="text"
                        name="titulo"
                        id="titulo"
                        value="{{ old('titulo') }}"
                        placeholder="Ex: Almoço, reunião..."
                        required
                    >

                </div>


                <!-- DATA -->

                <div class="campo">

                    <label for="data">
                        Data
                    </label>

                    <input
                        type="date"
                        name="data"
                        id="data"
                        value="{{ old('data') }}"
                        required
                    >

                </div>


                <!-- HORÁRIO INICIAL -->

                <div class="campo">

                    <label for="hora_inicio">
                        Horário inicial
                    </label>

                    <input
                        type="time"
                        name="hora_inicio"
                        id="hora_inicio"
                        value="{{ old('hora_inicio') }}"
                        required
                    >

                </div>


                <!-- HORÁRIO FINAL -->

                <div class="campo">

                    <label for="hora_fim">
                        Horário final
                    </label>

                    <input
                        type="time"
                        name="hora_fim"
                        id="hora_fim"
                        value="{{ old('hora_fim') }}"
                        required
                    >

                </div>


                <!-- DESCRIÇÃO -->

                <div class="campo">

                    <label for="descricao">
                        Observação
                    </label>

                    <textarea
                        name="descricao"
                        id="descricao"
                        placeholder="Opcional"
                    >{{ old('descricao') }}</textarea>

                </div>


                <!-- BOTÃO -->

                <button
                    type="submit"
                    class="btn-salvar"
                >
                    Adicionar compromisso
                </button>

            </form>

        </aside>

    </div>

</main>


<!-- =====================================================
     MODAL DE CANCELAMENTO
====================================================== -->

<div
    id="modalCancelamento"
    class="modal-cancelamento"
    aria-hidden="true"
>

    <div
        class="caixa-cancelamento"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modalTitulo"
    >


        <!-- FECHAR -->

        <button
            type="button"
            class="fechar-cancelamento"
            id="fecharCancelamento"
            aria-label="Fechar"
        >
            &times;
        </button>


        <!-- ÍCONE -->

        <div class="icone-cancelamento">
            !
        </div>


        <!-- TÍTULO -->

        <h2 id="modalTitulo">
            Cancelar agendamento
        </h2>


        <!-- TEXTO -->

        <p class="texto-confirmacao">
            Tem certeza que deseja cancelar este item?
        </p>


        <!-- INFORMAÇÕES -->

        <div class="informacoes-cancelamento">


            <!-- CLIENTE -->

            <div
                class="informacao-item"
                id="linhaCliente"
            >

                <span class="informacao-label">
                    Cliente
                </span>

                <span
                    class="informacao-valor"
                    id="modalCliente"
                >
                    -
                </span>

            </div>


            <!-- PROCEDIMENTO -->

            <div
                class="informacao-item"
                id="linhaProcedimento"
            >

                <span class="informacao-label">
                    Procedimento
                </span>

                <span
                    class="informacao-valor"
                    id="modalProcedimento"
                >
                    -
                </span>

            </div>


            <!-- DATA -->

            <div class="informacao-item">

                <span class="informacao-label">
                    Data
                </span>

                <span
                    class="informacao-valor"
                    id="modalData"
                >
                    -
                </span>

            </div>


            <!-- HORÁRIO -->

            <div class="informacao-item">

                <span class="informacao-label">
                    Horário
                </span>

                <span
                    class="informacao-valor"
                    id="modalHorario"
                >
                    -
                </span>

            </div>


            <!-- OBSERVAÇÃO -->

            <div
                class="informacao-item"
                id="linhaObservacao"
            >

                <span class="informacao-label">
                    Observação
                </span>

                <span
                    class="informacao-valor"
                    id="modalObservacao"
                >
                    -
                </span>

            </div>

        </div>


        <!-- BOTÕES -->

        <div class="botoes-cancelamento">


            <button
                type="button"
                class="btn-voltar"
                id="btnVoltarCancelamento"
            >
                Voltar
            </button>


            <button
                type="button"
                class="btn-confirmar-cancelamento"
                id="btnConfirmarCancelamento"
            >
                Cancelar
            </button>

        </div>

    </div>

</div>


@include('_partials.footer')


<!-- =====================================================
     BOOTSTRAP
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


<!-- =====================================================
     JAVASCRIPT DA AGENDA
====================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       CALENDÁRIO
    ====================================================== */

    const calendarEl = document.getElementById('calendar');
const calendar = new FullCalendar.Calendar(calendarEl,{


                /*
                |--------------------------------------------------------------------------
                | IDIOMA
                |--------------------------------------------------------------------------
                */

                locale: 'pt-br',


                /*
                |--------------------------------------------------------------------------
                | VISUAL INICIAL
                |--------------------------------------------------------------------------
                */

                initialView: 'dayGridMonth',


                /*
                |--------------------------------------------------------------------------
                | PRIMEIRO DIA
                |--------------------------------------------------------------------------
                */

                firstDay: 1,


                /*
                |--------------------------------------------------------------------------
                | CABEÇALHO
                |--------------------------------------------------------------------------
                */

                headerToolbar: {

                    left:
                        'prev,next today',

                    center:
                        'title',

                    right:
                        'dayGridMonth,timeGridWeek,timeGridDay'

                },


                /*
                |--------------------------------------------------------------------------
                | BOTÕES
                |--------------------------------------------------------------------------
                */

                buttonText: {

                    today:
                        'Hoje',

                    month:
                        'Mês',

                    week:
                        'Semana',

                    day:
                        'Dia'

                },


                /*
                |--------------------------------------------------------------------------
                | HORÁRIOS
                |--------------------------------------------------------------------------
                */

                slotMinTime:
                    '07:00:00',

                slotMaxTime:
                    '22:00:00',


                /*
                |--------------------------------------------------------------------------
                | FORMATO
                |--------------------------------------------------------------------------
                */

                eventTimeFormat: {

                    hour:
                        '2-digit',

                    minute:
                        '2-digit',

                    hour12:
                        false

                },


                /*
                |--------------------------------------------------------------------------
                | EVENTOS
                |--------------------------------------------------------------------------
                */

                events:
                    "{{ route('admin.agenda.eventos') }}",


                /*
                |--------------------------------------------------------------------------
                | CLICAR EM UMA DATA
                |--------------------------------------------------------------------------
                */

                dateClick: function (info) {

                    document
                        .getElementById('data')
                        .value =
                        info.dateStr;


                    document
                        .getElementById('titulo')
                        .focus();

                },


                /*
                |--------------------------------------------------------------------------
                | CORES DOS EVENTOS
                |--------------------------------------------------------------------------
                */

                eventDidMount: function (info) {

                    const tipo =
                        info.event
                            .extendedProps
                            .tipo;


                    if (
                        tipo ===
                        'agendamento'
                    ) {

                        info.el.classList.add(
                            'evento-cliente'
                        );

                    }


                    if (
                        tipo ===
                        'compromisso'
                    ) {

                        info.el.classList.add(
                            'evento-compromisso'
                        );

                    }

                },


                /*
                |--------------------------------------------------------------------------
                | CLICAR NO EVENTO
                |--------------------------------------------------------------------------
                */

                eventClick: function (info) {

                    abrirModalCancelamento(
                        info.event
                    );

                }

            }
        );


    calendar.render();


    /* =====================================================
       ELEMENTOS DO MODAL
    ====================================================== */

    const modal =
        document.getElementById(
            'modalCancelamento'
        );


    const btnFechar =
        document.getElementById(
            'fecharCancelamento'
        );


    const btnVoltar =
        document.getElementById(
            'btnVoltarCancelamento'
        );


    const btnConfirmar =
        document.getElementById(
            'btnConfirmarCancelamento'
        );


    let eventoSelecionado =
        null;


    let tipoSelecionado =
        null;


    /* =====================================================
       ABRIR MODAL
    ====================================================== */

    function abrirModalCancelamento(evento) {

        eventoSelecionado =
            evento;


        tipoSelecionado =
            evento.extendedProps.tipo;


        const titulo =
            document.getElementById(
                'modalTitulo'
            );


        const cliente =
            document.getElementById(
                'modalCliente'
            );


        const procedimento =
            document.getElementById(
                'modalProcedimento'
            );


        const data =
            document.getElementById(
                'modalData'
            );


        const horario =
            document.getElementById(
                'modalHorario'
            );


        const observacao =
            document.getElementById(
                'modalObservacao'
            );


        const linhaCliente =
            document.getElementById(
                'linhaCliente'
            );


        const linhaProcedimento =
            document.getElementById(
                'linhaProcedimento'
            );


        const linhaObservacao =
            document.getElementById(
                'linhaObservacao'
            );


        /* =================================================
           DATA
        ================================================== */

        let dataFormatada =
            '-';


        if (evento.start) {

            dataFormatada =
                evento.start.toLocaleDateString(
                    'pt-BR'
                );

        }


        /* =================================================
           HORÁRIO INICIAL
        ================================================== */

        let horarioInicial =
            '-';


        if (evento.start) {

            horarioInicial =
                evento.start.toLocaleTimeString(
                    'pt-BR',
                    {
                        hour:
                            '2-digit',

                        minute:
                            '2-digit'
                    }
                );

        }


        /* =================================================
           AGENDAMENTO
        ================================================== */

        if (
            tipoSelecionado ===
            'agendamento'
        ) {


            titulo.textContent =
                'Cancelar agendamento';


            cliente.textContent =
                evento.extendedProps.cliente
                || 'Cliente';


            procedimento.textContent =
                evento.extendedProps.procedimento
                || 'Procedimento';


            data.textContent =
                dataFormatada;


            horario.textContent =
                horarioInicial;


            linhaCliente.style.display =
                'flex';


            linhaProcedimento.style.display =
                'flex';


            linhaObservacao.style.display =
                'none';


            btnConfirmar.textContent =
                'Cancelar agendamento';

        }


        /* =================================================
           COMPROMISSO
        ================================================== */

        if (
            tipoSelecionado ===
            'compromisso'
        ) {


            titulo.textContent =
                'Cancelar compromisso';


            linhaCliente.style.display =
                'none';


            procedimento.textContent =
                evento.title
                || 'Compromisso';


            data.textContent =
                dataFormatada;


            let horarioFinal =
                '';


            if (evento.end) {

                horarioFinal =
                    evento.end.toLocaleTimeString(
                        'pt-BR',
                        {
                            hour:
                                '2-digit',

                            minute:
                                '2-digit'
                        }
                    );

            }


            if (horarioFinal) {

                horarioFinal =
                    horarioInicial +
                    ' às ' +
                    horarioFinal;

            } else {

                horarioFinal =
                    horarioInicial;

            }


            horario.textContent =
                horarioFinal;


            const descricao =
                evento.extendedProps.descricao;


            if (descricao) {

                observacao.textContent =
                    descricao;


                linhaObservacao.style.display =
                    'flex';

            } else {

                linhaObservacao.style.display =
                    'none';

            }


            linhaProcedimento.style.display =
                'flex';


            btnConfirmar.textContent =
                'Cancelar compromisso';

        }


        modal.style.display =
            'flex';


        modal.setAttribute(
            'aria-hidden',
            'false'
        );

    }


    /* =====================================================
       FECHAR MODAL
    ====================================================== */

    function fecharModalCancelamento() {

        modal.style.display =
            'none';


        modal.setAttribute(
            'aria-hidden',
            'true'
        );


        eventoSelecionado =
            null;


        tipoSelecionado =
            null;

    }


    btnFechar.addEventListener(
        'click',
        fecharModalCancelamento
    );


    btnVoltar.addEventListener(
        'click',
        fecharModalCancelamento
    );


    /* =====================================================
       CLICAR FORA
    ====================================================== */

    modal.addEventListener(
        'click',
        function (event) {

            if (
                event.target ===
                modal
            ) {

                fecharModalCancelamento();

            }

        }
    );


    /* =====================================================
       ESC
    ====================================================== */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key ===
                'Escape' &&
                modal.style.display ===
                'flex'
            ) {

                fecharModalCancelamento();

            }

        }
    );


    /* =====================================================
       CONFIRMAR CANCELAMENTO
    ====================================================== */

    btnConfirmar.addEventListener(
        'click',
        function () {


            if (
                !eventoSelecionado ||
                !tipoSelecionado
            ) {

                return;

            }


            if (
                tipoSelecionado ===
                'agendamento'
            ) {

                cancelarAgendamento(
                    eventoSelecionado.id
                );

                return;

            }


            if (
                tipoSelecionado ===
                'compromisso'
            ) {

                cancelarCompromisso(
                    eventoSelecionado.id
                );

            }

        }
    );


    /* =====================================================
       CANCELAR AGENDAMENTO
    ====================================================== */

    function cancelarAgendamento(eventId) {

        const id =
            eventId.replace(
                'agendamento-',
                ''
            );


        const url =
            "{{ route(
                'admin.agenda.agendamento.destroy',
                ['agendamento' => '__ID__']
            ) }}"
            .replace(
                '__ID__',
                id
            );


        enviarFormularioDelete(
            url
        );

    }


    /* =====================================================
       CANCELAR COMPROMISSO
    ====================================================== */

    function cancelarCompromisso(eventId) {

        const id =
            eventId.replace(
                'compromisso-',
                ''
            );


        const url =
            "{{ route(
                'admin.agenda.destroy',
                ['compromisso' => '__ID__']
            ) }}"
            .replace(
                '__ID__',
                id
            );


        enviarFormularioDelete(
            url
        );

    }


    /* =====================================================
       ENVIA DELETE
    ====================================================== */

    function enviarFormularioDelete(url) {

        const form =
            document.createElement(
                'form'
            );


        form.method =
            'POST';


        form.action =
            url;


        form.style.display =
            'none';


        /* CSRF */

        const csrf =
            document.createElement(
                'input'
            );


        csrf.type =
            'hidden';


        csrf.name =
            '_token';


        csrf.value =
            '{{ csrf_token() }}';


        form.appendChild(
            csrf
        );


        /* MÉTODO DELETE */

        const method =
            document.createElement(
                'input'
            );


        method.type =
            'hidden';


        method.name =
            '_method';


        method.value =
            'DELETE';


        form.appendChild(
            method
        );


        document
            .body
            .appendChild(
                form
            );


        form.submit();

    }

});

</script>


</body>

</html>