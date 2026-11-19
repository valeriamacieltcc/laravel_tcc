
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda | Valéria Maciel Estética</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/skeleton.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/agenda(admin).css') }}?v=3">

    <!-- Scripts FullCalendar -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/all/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@7.0.2/locales/pt-br/global.js"></script>

</head>

<body>

@include('admin._partials_admin.header_admin')

<main class="agenda-container">

    <!-- CABEÇALHO -->
    <header class="titulo-agenda">

        <div class="titulo-conteudo">
    

            <h1>Agenda</h1>

    
        </div>
 

    </header>


    <!-- MENSAGENS -->
    @if(session('sucesso'))
        <div class="alerta-agenda alerta-sucesso">
            <span class="alerta-icone">✓</span>
            {{ session('sucesso') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alerta-agenda alerta-erro">
            <span class="alerta-icone">!</span>

            <div>
                @foreach($errors->all() as $erro)
                    <p>{{ $erro }}</p>
                @endforeach
            </div>
        </div>
    @endif


    <!-- LEGENDA -->
    <div class="legenda-agenda">

        <span class="legenda-titulo">LEGENDA</span>

        <div class="legenda-item">
            <span class="legenda-cor legenda-cliente"></span>
            <span>Agendamento de cliente</span>
        </div>

        <div class="legenda-item">
            <span class="legenda-cor legenda-compromisso"></span>
            <span>Compromisso</span>
        </div>

    </div>


    <!-- CONTEÚDO PRINCIPAL -->
    <div class="area-agenda">


        <!-- CALENDÁRIO -->
        <section class="calendario-area">

            <div class="calendario-topo">

                <div>
                    <span class="calendario-label">VISÃO GERAL</span>

                    <h2>Calendário</h2>

                    <p>Visualize e acompanhe seus horários.</p>
                </div>

                <div class="calendario-status">
                    <span class="status-ponto"></span>
                    Agenda atualizada
                </div>

            </div>


            <div class="calendario-conteudo">

                <!-- CALENDÁRIO -->
                <div id="calendar" class="agenda-calendar"></div>

            </div>


            <div class="calendario-rodape">
                <span>VALÉRIA MACIEL ESTÉTICA</span>
                <span>ORGANIZAÇÃO • CUIDADO • BEM-ESTAR</span>
            </div>

        </section>



        <!-- FORMULÁRIO -->
        <aside class="novo-compromisso">

            <div class="formulario-topo">

                <div class="formulario-icone">+</div>

                <div>
                    <span class="calendario-label">ORGANIZAÇÃO</span>
                    <h2>Novo compromisso</h2>
                </div>

            </div>


            <p class="formulario-descricao">
                Registre seus compromissos e mantenha sua rotina organizada.
            </p>


            <div class="formulario-divisor"></div>


            <form method="POST" action="{{ route('admin.agenda.store') }}">

                @csrf

                <div class="campo">

                    <label for="titulo">Nome do compromisso</label>

                    <input
                        type="text"
                        name="titulo"
                        id="titulo"
                        value="{{ old('titulo') }}"
                        placeholder="Ex.: Reunião, almoço..."
                        required>

                </div>


                <div class="campo">

                    <label for="data">Data</label>

                    <input
                        type="date"
                        name="data"
                        id="data"
                        value="{{ old('data') }}"
                        required>

                </div>


                <div class="campo-horarios">

                    <div class="campo">

                        <label for="hora_inicio">Horário inicial</label>

                        <input
                            type="time"
                            name="hora_inicio"
                            id="hora_inicio"
                            value="{{ old('hora_inicio') }}"
                            required>

                    </div>


                    <div class="campo">

                        <label for="hora_fim">Horário final</label>

                        <input
                            type="time"
                            name="hora_fim"
                            id="hora_fim"
                            value="{{ old('hora_fim') }}"
                            required>

                    </div>

                </div>


                <div class="campo">

                    <label for="descricao">
                        Observação <span>(opcional)</span>
                    </label>

                    <textarea
                        name="descricao"
                        id="descricao"
                        rows="4"
                        placeholder="Adicione detalhes sobre o compromisso...">{{ old('descricao') }}</textarea>

                </div>


                <button type="submit" class="btn-salvar">

                    <span>Adicionar compromisso</span>

                    <span class="btn-salvar-seta">→</span>

                </button>

            </form>


            <div class="formulario-nota">

                <span class="nota-icone">✦</span>

                <p>
                    Organize seus horários com praticidade e mantenha tudo sob controle.
                </p>

            </div>

        </aside>

    </div>

</main>



<!-- =====================================================
     MODAL DE CANCELAMENTO
===================================================== -->

<div id="modalCancelamento" class="modal-cancelamento" aria-hidden="true">

    <div
        class="caixa-cancelamento"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modalTitulo">


        <button
            type="button"
            class="fechar-cancelamento"
            id="fecharCancelamento"
            aria-label="Fechar">

            &times;

        </button>


        <div class="icone-cancelamento">!</div>

        <h2 id="modalTitulo">Cancelar agendamento</h2>

        <p class="texto-confirmacao">
            Tem certeza que deseja cancelar este item?
        </p>


        <div class="informacoes-cancelamento">

            <div class="informacao-item" id="linhaCliente">
                <span class="informacao-label">Cliente</span>
                <span class="informacao-valor" id="modalCliente">-</span>
            </div>


            <div class="informacao-item" id="linhaProcedimento">
                <span class="informacao-label">Procedimento</span>
                <span class="informacao-valor" id="modalProcedimento">-</span>
            </div>


            <div class="informacao-item">
                <span class="informacao-label">Data</span>
                <span class="informacao-valor" id="modalData">-</span>
            </div>


            <div class="informacao-item">
                <span class="informacao-label">Horário</span>
                <span class="informacao-valor" id="modalHorario">-</span>
            </div>


            <div class="informacao-item" id="linhaObservacao">
                <span class="informacao-label">Observação</span>
                <span class="informacao-valor" id="modalObservacao">-</span>
            </div>

        </div>


        <div class="botoes-cancelamento">

            <button
                type="button"
                class="btn-voltar"
                id="btnVoltarCancelamento">

                Voltar

            </button>


            <button
                type="button"
                class="btn-confirmar-cancelamento"
                id="btnConfirmarCancelamento">

                Cancelar

            </button>

        </div>

    </div>

</div>



@include('_partials.footer')


<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>



<!-- =====================================================
     JAVASCRIPT DA AGENDA
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const calendarEl = document.getElementById('calendar');


    /* =====================================================
       CONFIGURAÇÃO DO CALENDÁRIO
    ===================================================== */

    const calendar = new FullCalendar.Calendar(calendarEl, {

        locale: 'pt-br',

        initialView: 'dayGridMonth',

        firstDay: 1,


        /* CLASSES PERSONALIZADAS DO FULLCALENDAR 7 */

        toolbarClass: 'agenda-calendar-toolbar',

        toolbarSectionClass: 'agenda-calendar-toolbar-section',

        toolbarTitleClass: 'agenda-calendar-toolbar-title',

        buttonClass: 'agenda-calendar-button',

        dayHeaderClass: 'agenda-calendar-day-header',

        dayHeaderInnerClass: 'agenda-calendar-day-header-inner',

        dayCellClass: 'agenda-calendar-day-cell',

        dayCellTopClass: 'agenda-calendar-day-top',

        dayCellInnerClass: 'agenda-calendar-day-content',

        dayRowClass: 'agenda-calendar-day-row',

        dayHeaderDividerClass: 'agenda-calendar-header-divider',

        dayLaneClass: 'agenda-calendar-day-lane',


        /* CLASSES DOS EVENTOS */

        eventClass: function(info) {

            const tipo = info.event.extendedProps.tipo;

            if (tipo === 'agendamento') {
                return 'evento-cliente';
            }

            if (tipo === 'compromisso') {
                return 'evento-compromisso';
            }

            return '';

        },


        height: 'auto',

        contentHeight: 'auto',

        expandRows: true,


        /* BARRA DE NAVEGAÇÃO */

        headerToolbar: {

            left: 'prev,next today',

            center: 'title',

            right: 'dayGridMonth,timeGridWeek,timeGridDay'

        },


        buttonText: {

            today: 'Hoje',

            month: 'Mês',

            week: 'Semana',

            day: 'Dia'

        },


        /* HORÁRIOS */

        slotMinTime: '08:00:00',

        slotMaxTime: '20:00:00',

        slotDuration: '00:30:00',

        slotLabelInterval: '01:00:00',

        allDaySlot: false,


        eventTimeFormat: {

            hour: '2-digit',

            minute: '2-digit',

            hour12: false

        },


        /* EVENTOS DO BANCO DE DADOS */

        events: "{{ route('admin.agenda.eventos') }}",


        /* CLIQUE EM UMA DATA */

        dateClick: function (info) {

            document.getElementById('data').value = info.dateStr;

            document.getElementById('titulo').focus();

        },


        /* CLIQUE EM UM EVENTO */

        eventClick: function (info) {

            abrirModalCancelamento(info.event);

        }

    });


    calendar.render();



    /* =====================================================
       ELEMENTOS DO MODAL
    ===================================================== */

    const modal = document.getElementById('modalCancelamento');

    const btnFechar = document.getElementById('fecharCancelamento');

    const btnVoltar = document.getElementById('btnVoltarCancelamento');

    const btnConfirmar = document.getElementById('btnConfirmarCancelamento');


    let eventoSelecionado = null;

    let tipoSelecionado = null;



    /* =====================================================
       ABRIR MODAL
    ===================================================== */

    function abrirModalCancelamento(evento) {

        eventoSelecionado = evento;

        tipoSelecionado = evento.extendedProps.tipo;


        const titulo = document.getElementById('modalTitulo');

        const cliente = document.getElementById('modalCliente');

        const procedimento = document.getElementById('modalProcedimento');

        const data = document.getElementById('modalData');

        const horario = document.getElementById('modalHorario');

        const observacao = document.getElementById('modalObservacao');


        const linhaCliente = document.getElementById('linhaCliente');

        const linhaProcedimento = document.getElementById('linhaProcedimento');

        const linhaObservacao = document.getElementById('linhaObservacao');


        let dataFormatada = '-';

        if (evento.start) {

            dataFormatada = evento.start.toLocaleDateString('pt-BR');

        }


        let horarioInicial = '-';

        if (evento.start) {

            horarioInicial = evento.start.toLocaleTimeString('pt-BR', {

                hour: '2-digit',

                minute: '2-digit'

            });

        }


        /* AGENDAMENTO DE CLIENTE */

        if (tipoSelecionado === 'agendamento') {

            titulo.textContent = 'Cancelar agendamento';

            cliente.textContent = evento.extendedProps.cliente || 'Cliente';

            procedimento.textContent = evento.extendedProps.procedimento || 'Procedimento';

            data.textContent = dataFormatada;

            horario.textContent = horarioInicial;


            linhaCliente.style.display = 'flex';

            linhaProcedimento.style.display = 'flex';

            linhaObservacao.style.display = 'none';


            btnConfirmar.textContent = 'Cancelar agendamento';

        }


        /* COMPROMISSO */

        if (tipoSelecionado === 'compromisso') {

            titulo.textContent = 'Cancelar compromisso';

            linhaCliente.style.display = 'none';


            procedimento.textContent = evento.title || 'Compromisso';

            data.textContent = dataFormatada;


            let horarioFinal = '';

            if (evento.end) {

                horarioFinal = evento.end.toLocaleTimeString('pt-BR', {

                    hour: '2-digit',

                    minute: '2-digit'

                });

            }


            if (horarioFinal) {

                horarioFinal = horarioInicial + ' às ' + horarioFinal;

            } else {

                horarioFinal = horarioInicial;

            }


            horario.textContent = horarioFinal;


            const descricao = evento.extendedProps.descricao;


            if (descricao) {

                observacao.textContent = descricao;

                linhaObservacao.style.display = 'flex';

            } else {

                linhaObservacao.style.display = 'none';

            }


            linhaProcedimento.style.display = 'flex';

            btnConfirmar.textContent = 'Cancelar compromisso';

        }


        modal.style.display = 'flex';

        modal.setAttribute('aria-hidden', 'false');

    }



    /* =====================================================
       FECHAR MODAL
    ===================================================== */

    function fecharModalCancelamento() {

        modal.style.display = 'none';

        modal.setAttribute('aria-hidden', 'true');


        eventoSelecionado = null;

        tipoSelecionado = null;

    }


    btnFechar.addEventListener('click', fecharModalCancelamento);

    btnVoltar.addEventListener('click', fecharModalCancelamento);


    modal.addEventListener('click', function (event) {

        if (event.target === modal) {

            fecharModalCancelamento();

        }

    });


    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape' && modal.style.display === 'flex') {

            fecharModalCancelamento();

        }

    });



    /* =====================================================
       CONFIRMAR CANCELAMENTO
    ===================================================== */

    btnConfirmar.addEventListener('click', function () {

        if (!eventoSelecionado || !tipoSelecionado) {

            return;

        }


        if (tipoSelecionado === 'agendamento') {

            cancelarAgendamento(eventoSelecionado.id);

            return;

        }


        if (tipoSelecionado === 'compromisso') {

            cancelarCompromisso(eventoSelecionado.id);

        }

    });



    /* =====================================================
       CANCELAR AGENDAMENTO
    ===================================================== */

    function cancelarAgendamento(eventId) {

        const id = eventId.replace('agendamento-', '');


        const url = "{{ route('admin.agenda.agendamento.destroy', ['agendamento' => '__ID__']) }}"

            .replace('__ID__', id);


        enviarFormularioDelete(url);

    }



    /* =====================================================
       CANCELAR COMPROMISSO
    ===================================================== */

    function cancelarCompromisso(eventId) {

        const id = eventId.replace('compromisso-', '');


        const url = "{{ route('admin.agenda.destroy', ['compromisso' => '__ID__']) }}"

            .replace('__ID__', id);


        enviarFormularioDelete(url);

    }



    /* =====================================================
       ENVIO DELETE
    ===================================================== */

    function enviarFormularioDelete(url) {

        const form = document.createElement('form');

        form.method = 'POST';

        form.action = url;

        form.style.display = 'none';


        const csrf = document.createElement('input');

        csrf.type = 'hidden';

        csrf.name = '_token';

        csrf.value = '{{ csrf_token() }}';

        form.appendChild(csrf);


        const method = document.createElement('input');

        method.type = 'hidden';

        method.name = '_method';

        method.value = 'DELETE';

        form.appendChild(method);


        document.body.appendChild(form);

        form.submit();

    }

});

</script>

</body>
</html>
