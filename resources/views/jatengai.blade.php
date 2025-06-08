<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat dengan Jatengai</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .chat-container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            height: 80vh;
        }
        .chat-header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            padding: 15px 20px;
            border-radius: 12px 12px 0 0;
            text-align: center;
        }
        .chat-header h2 {
            margin: 0;
            font-size: 1.2rem;
        }
        .chat-box {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .message {
            display: flex;
            max-width: 80%;
            padding: 10px 15px;
            border-radius: 18px;
            line-height: 1.5;
        }
        .user-message {
            background-color: #e1ffc7;
            align-self: flex-end;
            border-radius: 18px 18px 4px 18px;
        }
        .bot-message {
            background-color: #f1f0f0;
            align-self: flex-start;
            border-radius: 18px 18px 18px 4px;
        }
        .loading-dots span {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #888;
            animation: blink 1.4s infinite both;
        }
        .loading-dots span:nth-child(2) { animation-delay: .2s; }
        .loading-dots span:nth-child(3) { animation-delay: .4s; }
        @keyframes blink {
            0% { opacity: .2; }
            20% { opacity: 1; }
            100% { opacity: .2; }
        }
        .input-form {
            display: flex;
            padding: 15px;
            border-top: 1px solid #e0e0e0;
        }
        #questionInput {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-right: 10px;
            font-size: 1rem;
        }
        #sendButton {
            padding: 12px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #sendButton:disabled {
            background-color: #aaa;
        }
    </style>
</head>
<body>
<div class="chat-container">
    <div class="chat-header">
        <h2>Tanya Jatengai 🤖</h2>
    </div>
    <div class="chat-box" id="chatBox">
        <div class="message bot-message">
            Halo! Saya Jatengai, asisten AI dari Bank Jateng Syariah. Silakan tanyakan apa pun mengenai produk dan layanan kami.
        </div>
    </div>
    <form class="input-form" id="chatForm" autocomplete="off">
        <input type="text" id="questionInput" placeholder="Ketik pertanyaan Anda..." required>
        <button type="submit" id="sendButton">Kirim</button>
    </form>
</div>

<script>
    const chatForm = document.getElementById('chatForm');
    const questionInput = document.getElementById('questionInput');
    const sendButton = document.getElementById('sendButton');
    const chatBox = document.getElementById('chatBox');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    chatForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        const question = questionInput.value.trim();
        if (!question) return;

        addMessage(question, 'user-message');
        questionInput.value = '';
        sendButton.disabled = true;

        const loadingMessage = addLoadingIndicator();

        try {
            const response = await fetch("{{ route('jatengai.ask') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ question: question })
            });

            if (!response.ok) {
                throw new Error(`Gagal (${response.status})`);
            }

            const data = await response.json();
            const answer = data.answer || data.error || "Terjadi kesalahan tidak dikenal.";
            loadingMessage.innerHTML = answer.replace(/\n/g, '<br>');

        } catch (error) {
            loadingMessage.innerText = 'Terjadi kesalahan: ' + error.message;
        } finally {
            sendButton.disabled = false;
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    });

    function addMessage(text, className) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', className);
        messageDiv.innerHTML = text;
        chatBox.appendChild(messageDiv);
        chatBox.scrollTop = chatBox.scrollHeight;
        return messageDiv;
    }

    function addLoadingIndicator() {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', 'bot-message');
        messageDiv.innerHTML = `
            <div class="loading-dots">
                <span></span><span></span><span></span>
            </div>
        `;
        chatBox.appendChild(messageDiv);
        chatBox.scrollTop = chatBox.scrollHeight;
        return messageDiv;
    }
</script>
</body>
</html>
