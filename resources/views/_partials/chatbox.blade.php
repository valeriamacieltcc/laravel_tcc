
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
                <strong>Valéria Maciel Estética</strong>
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
    #chatbox-widget {
        font-family: Arial, sans-serif;
    }

    #chatbox-toggle {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 60px;
        height: 60px;
        border: none;
        border-radius: 50%;
        background: #2c7771;
        color: white;
        font-size: 26px;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0,0,0,.2);
        z-index: 9999;
    }

    #chatbox-window {
        position: fixed;
        bottom: 100px;
        right: 25px;
        width: 350px;
        max-width: calc(100vw - 30px);
        height: 450px;
        max-height: calc(100vh - 130px);
        background: #f6f5e5;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,.2);
        z-index: 9999;
        display: flex;
        flex-direction: column;
    }

    .chatbox-header {
        background: #2c7771;
        color: white;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chatbox-header small {
        display: block;
        margin-top: 4px;
    }

    #chatbox-close {
        background: transparent;
        color: white;
        border: none;
        font-size: 25px;
        cursor: pointer;
    }

    #chatbox-messages {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .chat-message {
        padding: 10px 13px;
        border-radius: 12px;
        max-width: 85%;
        font-size: 14px;
        line-height: 1.5;
        white-space: pre-wrap;
        overflow-wrap: anywhere;
    }

    .chat-message.bot {
        background: white;
        color: #333;
        align-self: flex-start;
    }

    .chat-message.user {
        background: #2c7771;
        color: white;
        align-self: flex-end;
    }

    #chatbox-form {
        display: flex;
        padding: 12px;
        gap: 8px;
        background: white;
    }

    #chatbox-input {
        flex: 1;
        min-width: 0;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        outline-color: #2c7771;
    }

    #chatbox-send {
        background: #2c7771;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px;
        cursor: pointer;
    }

    #chatbox-send:disabled {
        opacity: .6;
        cursor: wait;
    }

    @media (max-width: 480px) {
        #chatbox-window {
            right: 15px;
            bottom: 90px;
            width: calc(100vw - 30px);
            height: 65vh;
        }

        #chatbox-toggle {
            right: 15px;
            bottom: 15px;
        }
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
        toggle.style.display = 'block';
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
