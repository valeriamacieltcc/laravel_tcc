
<div id="chatbox-widget">

    <!-- Botão flutuante -->
    <button id="chatbox-toggle" type="button"
        aria-label="Abrir atendimento virtual">
        💬
    </button>

    <!-- Janela do chat -->
    <div id="chatbox-window" style="display: none;">

        <div class="chatbox-header">
            <div>
                <strong>Valéria Maciel</strong>
                <small>Assistente virtual</small>
            </div>

            <button id="chatbox-close" type="button"
                aria-label="Fechar chat">
                ×
            </button>
        </div>

        <div id="chatbox-messages">

            <div class="chat-message bot">
                Olá! Seja bem-vinda à Valéria Maciel Estética.
                Como posso ajudar você hoje?
            </div>

        </div>

        <form id="chatbox-form">

            <input
                type="text"
                id="chatbox-input"
                placeholder="Digite sua mensagem..."
                maxlength="1000"
                autocomplete="off"
                required
            >

            <button type="submit" id="chatbox-send">
                Enviar
            </button>

        </form>

    </div>

</div>

<style>
/* =========================================================
   CHATBOT - VALÉRIA MACIEL ESTÉTICA
   ELEGANTE | MODERNO | SOFISTICADO
========================================================= */

/* Fontes exclusivas do chatbot */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&family=Parisienne&display=swap');

#chatbox-widget {
    --chat-verde: #315f55;
    --chat-verde-escuro: #25483f;
    --chat-salvia: #e6ebe3;
    --chat-bege: #f8f6ef;
    --chat-dourado: #b49a6a;
    --chat-texto: #34443b;
    --chat-secundario: #849087;

    font-family: 'DM Sans', sans-serif;
}

/* =========================================================
   BOTÃO FLUTUANTE
========================================================= */

#chatbox-widget #chatbox-toggle {
    position: fixed;
    right: 30px;
    bottom: 30px;

    width: 62px;
    height: 62px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: var(--chat-verde);
    color: #fff;

    border: 1px solid rgba(180, 154, 106, .55);
    border-radius: 50%;

    font-size: 26px;

    cursor: pointer;
    z-index: 9999;

    box-shadow: 0 8px 25px rgba(37, 72, 63, .22);

    transition: .3s ease;
}

#chatbox-widget #chatbox-toggle:hover {
    background: var(--chat-verde-escuro);
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(37, 72, 63, .28);
}

/* =========================================================
   JANELA PRINCIPAL
========================================================= */

#chatbox-widget #chatbox-window {
    position: fixed;
    right: 30px;
    bottom: 108px;

    width: 380px;
    max-width: calc(100vw - 30px);

    height: 520px;
    max-height: calc(100vh - 135px);

    flex-direction: column;

    background: var(--chat-bege);

    border: 1px solid rgba(180, 154, 106, .35);
    border-radius: 18px;

    overflow: hidden;

    box-shadow: 0 18px 55px rgba(37, 72, 63, .20);

    z-index: 9999;
}

/* =========================================================
   CABEÇALHO
========================================================= */

#chatbox-widget .chatbox-header {
    min-height: 94px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 22px;
    background: var(--chat-verde);
    color: #fff;
    border-bottom: 2px solid var(--chat-dourado);
}

#chatbox-widget .chatbox-header strong {
    display: block;
    font-family: 'Parisienne', cursive;
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.2;
}

#chatbox-widget .chatbox-header small {
    display: block;
    margin-top: 5px;
    color: #dce5dc;
    font-family: 'DM Sans', sans-serif;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
}
/* Botão fechar */

#chatbox-widget #chatbox-close {
    width: 34px;
    height: 34px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255, 255, 255, .08);
    color: #fff;

    border: 1px solid rgba(255, 255, 255, .18);
    border-radius: 50%;

    font-family: 'DM Sans', sans-serif;
    font-size: 23px;
    font-weight: 300;

    cursor: pointer;

    transition: .25s ease;
}

#chatbox-widget #chatbox-close:hover {
    background: rgba(255, 255, 255, .18);
    transform: rotate(90deg);
}

/* =========================================================
   ÁREA DAS MENSAGENS
========================================================= */

#chatbox-widget #chatbox-messages {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 16px;
    padding: 22px 18px;
    overflow-y: auto;
    background:
        radial-gradient(circle at top right, rgba(213, 222, 211, .38), transparent 45%),
        var(--chat-bege);
}

#chatbox-widget .chat-message {
    display: block;
    width: fit-content;
    max-width: 86%;
    box-sizing: border-box;
    padding: 13px 16px;
    border-radius: 14px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.7;
    text-align: left;
    white-space: pre-wrap;
    overflow-wrap: anywhere;
}

#chatbox-widget .chat-message.bot {
    align-self: flex-start;
    margin-right: auto;
    background: #fff;
    color: var(--chat-texto);
    border: 1px solid #e8e7dc;
    border-bottom-left-radius: 4px;
}

#chatbox-widget .chat-message.user {
    align-self: flex-end;
    margin-left: auto;
    background: var(--chat-verde);
    color: #fff;
    border: 1px solid var(--chat-verde);
    border-bottom-right-radius: 4px;
}

/* =========================================================
   ÁREA DE DIGITAÇÃO
========================================================= */

#chatbox-widget #chatbox-form {
    display: flex;
    align-items: center;
    gap: 10px;

    padding: 16px;

    background: #fff;

    border-top: 1px solid #e8e7dc;
}

/* Campo de texto */

#chatbox-widget #chatbox-input {
    flex: 1;
    min-width: 0;

    height: 45px;

    padding: 0 15px;

    background: #f8f8f3;
    color: var(--chat-texto);

    border: 1px solid #e1e5dc;
    border-radius: 9px;

    outline: none;

    font-family: 'DM Sans', sans-serif;
    font-size: 12px;

    box-shadow: none;

    transition: .25s ease;
}

#chatbox-widget #chatbox-input::placeholder {
    color: #9ba49a;
}

#chatbox-widget #chatbox-input:focus {
    background: #fff;
    border-color: var(--chat-verde);
    box-shadow: 0 0 0 3px rgba(49, 95, 85, .07);
}

#chatbox-widget #chatbox-input:disabled {
    opacity: .6;
}

/* Botão enviar */

#chatbox-widget #chatbox-send {
    height: 45px;

    padding: 0 17px;

    background: var(--chat-verde);
    color: #fff;

    border: none;
    border-radius: 9px;

    font-family: 'DM Sans', sans-serif;
    font-size: 10px;
    font-weight: 600;

    letter-spacing: 1px;
    text-transform: uppercase;

    cursor: pointer;

    transition: .25s ease;
}

#chatbox-widget #chatbox-send:hover {
    background: var(--chat-verde-escuro);
}

#chatbox-widget #chatbox-send:disabled {
    opacity: .55;
    cursor: wait;
}

/* =========================================================
   RESPONSIVIDADE
========================================================= */

@media (max-width: 480px) {

    #chatbox-widget #chatbox-window {
        right: 15px;
        bottom: 85px;

        width: calc(100vw - 30px);
        height: 65vh;

        border-radius: 16px;
    }

    #chatbox-widget #chatbox-toggle {
        right: 17px;
        bottom: 17px;

        width: 56px;
        height: 56px;
    }

    #chatbox-widget .chatbox-header {
        min-height: 82px;
        padding: 16px;
    }

    #chatbox-widget .chatbox-header strong {
        font-size: 21px;
    }

    #chatbox-widget #chatbox-messages {
        padding: 18px 14px;
    }

    #chatbox-widget #chatbox-form {
        padding: 12px;
    }

    #chatbox-widget #chatbox-send {
        padding: 0 13px;
    }
}

/* Correção da mensagem automática inicial */
#chatbox-widget #chatbox-messages > .chat-message.bot:first-child {
    align-self: flex-start !important;
    margin: 0 auto 0 0 !important;

    width: fit-content;
    max-width: 86%;

    text-align: left !important;
    line-height: 1.7;

    padding: 14px 16px;

    white-space: normal;
    overflow-wrap: break-word;
}
</style>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.getElementById('chatbox-toggle');
    const windowChat = document.getElementById('chatbox-window');
    const close = document.getElementById('chatbox-close');
    const form = document.getElementById('chatbox-form');
    const input = document.getElementById('chatbox-input');
    const messagesDiv = document.getElementById('chatbox-messages');
    const sendButton = document.getElementById('chatbox-send');

    const csrfToken = @json(csrf_token());

    // Histórico temporário da conversa.
    let historico = [];

    toggle.addEventListener('click', function () {
        windowChat.style.display = 'flex';
        toggle.style.display = 'none';
        input.focus();
    });

    close.addEventListener('click', function () {
        windowChat.style.display = 'none';
        toggle.style.display = 'flex';
    });

    function adicionarMensagem(texto, tipo) {
        const mensagem = document.createElement('div');

        mensagem.className = 'chat-message ' + tipo;

        // textContent evita interpretar respostas como HTML.
        mensagem.textContent = texto;

        messagesDiv.appendChild(mensagem);
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }

    form.addEventListener('submit', async function (event) {

        event.preventDefault();

        const texto = input.value.trim();

        if (!texto) {
            return;
        }

        adicionarMensagem(texto, 'user');

        historico.push({
            role: 'user',
            content: texto
        });

        historico = historico.slice(-20);

        input.value = '';
        input.disabled = true;
        sendButton.disabled = true;
        sendButton.textContent = '...';

        try {

            const response = await fetch(
                @json(route('chatbot.enviar')),
                {
                    method: 'POST',

                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },

                    body: JSON.stringify({
                        messages: historico
                    })
                }
            );

            const dados = await response.json();

            if (!response.ok) {
                throw new Error(
                    dados.message || 'Não foi possível enviar a mensagem.'
                );
            }

            adicionarMensagem(dados.message, 'bot');

            historico.push({
                role: 'assistant',
                content: dados.message
            });

            historico = historico.slice(-20);

        } catch (error) {

            adicionarMensagem(
                error.message || 'Erro ao conectar com o atendimento.',
                'bot'
            );

        } finally {

            input.disabled = false;
            sendButton.disabled = false;
            sendButton.textContent = 'Enviar';
            input.focus();

        }

    });

});
</script>
