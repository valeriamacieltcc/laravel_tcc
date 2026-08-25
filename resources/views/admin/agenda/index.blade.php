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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/all/global.js"></script>

    <!-- PORTUGUÊS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/locales/pt-br/global.js"></script>

</head>


<body>


<nav class="navbar">

    <!-- BOTÃO MENU -->
    <button
        class="menu-button"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#menuLateral"
        aria-controls="menuLateral">

        <img src="{{ asset('imagem/menu.png') }}" alt="Menu">

    </button>


    <!-- LINKS PRINCIPAIS -->
    <ul>
        <li><a href="{{ route('admin.home') }}">HOME</a></li>

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

</nav>



<main class="agenda-container">


    <!-- TÍTULO -->

    <div class="titulo-agenda">

        <h1>Agenda</h1>

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



    <div class="area-agenda">


        <!-- =====================================================
             CALENDÁRIO
        ====================================================== -->

        <section class="calendario-area">

            <div id="calendar"></div>

        </section>



        <!-- =====================================================
             NOVO COMPROMISSO
        ====================================================== -->

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


@include('_partials.footer')



<!-- BOOTSTRAP -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>



<!-- =====================================================
     CALENDÁRIO
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    const calendarEl =
        document.getElementById('calendar');


    const calendar =
        new FullCalendar.Calendar(calendarEl, {


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
            | NOMES DOS BOTÕES
            |--------------------------------------------------------------------------
            */

            buttonText: {

                today: 'Hoje',

                month: 'Mês',

                week: 'Semana',

                day: 'Dia'

            },



            /*
            |--------------------------------------------------------------------------
            | HORÁRIO
            |--------------------------------------------------------------------------
            */

            slotMinTime: '07:00:00',

            slotMaxTime: '22:00:00',



            /*
            |--------------------------------------------------------------------------
            | FORMATO DOS HORÁRIOS
            |--------------------------------------------------------------------------
            */

            eventTimeFormat: {

                hour: '2-digit',

                minute: '2-digit',

                hour12: false

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

            dateClick: function(info) {

                document
                    .getElementById('data')
                    .value = info.dateStr;


                document
                    .getElementById('titulo')
                    .focus();

            },



            /*
            |--------------------------------------------------------------------------
            | COR DOS EVENTOS
            |--------------------------------------------------------------------------
            */

            eventDidMount: function(info) {


                const tipo =
                    info.event.extendedProps.tipo;


                if (tipo === 'agendamento') {

                    info.el.classList.add(
                        'evento-cliente'
                    );

                }


                if (tipo === 'compromisso') {

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

            eventClick: function(info) {


                const tipo =
                    info.event.extendedProps.tipo;



                /*
                |--------------------------------------------------------------------------
                | AGENDAMENTO DE CLIENTE
                |--------------------------------------------------------------------------
                */

                if (tipo === 'agendamento') {


                    const cliente =
                        info.event.extendedProps.cliente;


                    const procedimento =
                        info.event.extendedProps.procedimento;


                    alert(
                        'AGENDAMENTO\n\n'
                        +
                        'Cliente: '
                        + cliente
                        +
                        '\n'
                        +
                        'Procedimento: '
                        + procedimento
                    );

                }



                /*
                |--------------------------------------------------------------------------
                | COMPROMISSO
                |--------------------------------------------------------------------------
                */

                if (tipo === 'compromisso') {


                    const descricao =
                        info.event.extendedProps.descricao;


                    let mensagem =
                        'COMPROMISSO\n\n'
                        +
                        info.event.title;


                    if (descricao) {

                        mensagem +=
                            '\n\nObservação: '
                            +
                            descricao;

                    }


                    alert(mensagem);

                }

            }


        });


    calendar.render();


});

</script>


</body>

</html>