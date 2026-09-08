<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Novo Procedimento | Admin</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Parisienne&family=Playfair+Display+SC&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >

</head>

 
<body>


    <!-- =====================================================
         HEADER ADMINISTRATIVO
         A NAVBAR FICA DENTRO DO INCLUDE
    ====================================================== -->

    @include('admin._partials_admin.header_admin')


    <!-- =====================================================
         CONTEÚDO PRINCIPAL
    ====================================================== -->

    <main class="agenda-container">


        <!-- =================================================
             TÍTULO
        ================================================== -->

        <div class="titulo-agenda">

            <h1>Agenda</h1>

            <p>
                Acompanhe os agendamentos das clientes
                e os seus compromissos.
            </p>

        </div>


        <!-- =================================================
             MENSAGEM DE SUCESSO
        ================================================== -->

        @if(session('sucesso'))

            <div class="alert alert-success">

                {{ session('sucesso') }}

            </div>

        @endif


        <!-- =================================================
             ERROS
        ================================================== -->

        @if($errors->any())

            <div class="alert alert-danger">

                @foreach($errors->all() as $erro)

                    <p class="mb-1">
                        {{ $erro }}
                    </p>

                @endforeach

            </div>

        @endif


        <!-- =================================================
             LEGENDA
        ================================================== -->

        <div class="legenda-agenda">

            <div>

                <span class="legenda-cliente"></span>

                <span>
                    Agendamento de cliente
                </span>

            </div>


            <div>

                <span class="legenda-compromisso"></span>

                <span>
                    Compromisso
                </span>

            </div>

        </div>


        <!-- =================================================
             CALENDÁRIO + NOVO COMPROMISSO
        ================================================== -->

        <div class="area-agenda">


            <!-- =============================================
                 CALENDÁRIO
            ============================================== -->

            <section class="calendario-area">

                <div id="calendar"></div>

            </section>


            <!-- =============================================
                 NOVO COMPROMISSO
            ============================================== -->

            <aside class="novo-compromisso">


                <h2>
                    Novo compromisso
                </h2>


                <form
                    method="POST"
                    action="{{ route('admin.agenda.store') }}"
                >

                    @csrf


                    <!-- =====================================
                         COMPROMISSO
                    ====================================== -->

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


                    <!-- =====================================
                         DATA
                    ====================================== -->

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


                    <!-- =====================================
                         HORÁRIO INICIAL
                    ====================================== -->

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


                    <!-- =====================================
                         HORÁRIO FINAL
                    ====================================== -->

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


                    <!-- =====================================
                         OBSERVAÇÃO
                    ====================================== -->

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


                    <!-- =====================================
                         BOTÃO
                    ====================================== -->

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
         FOOTER ADMINISTRATIVO
    ====================================================== -->

    @include('admin._partials_admin.footer_admin')


    <!-- =====================================================
         BOOTSTRAP JS
    ====================================================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- =====================================================
         CALENDÁRIO
    ====================================================== -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {


            const calendarEl =
                document.getElementById('calendar');


            const calendar =
                new FullCalendar.Calendar(calendarEl, {


                    /* ========================================
                       IDIOMA
                    ======================================== */

                    locale: 'pt-br',


                    /* ========================================
                       VISUAL INICIAL
                    ======================================== */

                    initialView: 'dayGridMonth',


                    /* ========================================
                       CABEÇALHO
                    ======================================== */

                    headerToolbar: {

                        left:
                            'prev,next today',

                        center:
                            'title',

                        right:
                            'dayGridMonth,timeGridWeek,timeGridDay'

                    },


                    /* ========================================
                       NOMES DOS BOTÕES
                    ======================================== */

                    buttonText: {

                        today: 'Hoje',

                        month: 'Mês',

                        week: 'Semana',

                        day: 'Dia'

                    },


                    /* ========================================
                       HORÁRIOS
                    ======================================== */

                    slotMinTime: '07:00:00',

                    slotMaxTime: '22:00:00',


                    /* ========================================
                       FORMATO DO HORÁRIO
                    ======================================== */

                    eventTimeFormat: {

                        hour: '2-digit',

                        minute: '2-digit',

                        hour12: false

                    },


                    /* ========================================
                       EVENTOS
                    ======================================== */

                    events:
                        "{{ route('admin.agenda.eventos') }}",


                    /* ========================================
                       CLICAR EM UMA DATA
                    ======================================== */

                    dateClick: function(info) {


                        document
                            .getElementById('data')
                            .value = info.dateStr;


                        document
                            .getElementById('titulo')
                            .focus();

                    },


                    /* ========================================
                       CORES DOS EVENTOS
                    ======================================== */

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


                    /* ========================================
                       CLICAR NO EVENTO
                    ======================================== */

                    eventClick: function(info) {


                        const tipo =
                            info.event.extendedProps.tipo;


                        /* ====================================
                           AGENDAMENTO DA CLIENTE
                        ==================================== */

                        if (tipo === 'agendamento') {


                            const cliente =
                                info.event.extendedProps.cliente;


                            const procedimento =
                                info.event.extendedProps.procedimento;


                            alert(
                                'AGENDAMENTO\n\n'
                                +
                                'Cliente: '
                                +
                                cliente
                                +
                                '\n'
                                +
                                'Procedimento: '
                                +
                                procedimento
                            );

                        }


                        /* ====================================
                           COMPROMISSO
                        ==================================== */

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

