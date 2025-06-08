<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JatengAI Chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-xl bg-white shadow-lg rounded-lg flex flex-col h-[80vh]">
        <div class="bg-blue-600 text-white text-center py-4 rounded-t-lg">
            <h2 class="text-lg font-semibold">Tanya JatengAI 🤖</h2>
        </div>

        <div id="chatBox" class="flex-1 overflow-y-auto p-4 space-y-4">
            <div class="bg-gray-100 text-gray-800 p-3 rounded-xl w-fit max-w-[80%]">
                Halo! Saya JatengAI, asisten AI dari Bank Jateng Syariah. Silakan tanyakan apa pun.
            </div>
        </div>

        <form id="chatForm" class="flex p-4 border-t border-gray-200 gap-2">
            <input type="text" id="questionInput" placeholder="Tulis pertanyaan..." required
                class="flex-1 px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400" />
            <button id="sendButton" type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-full transition disabled:opacity-50">
                Kirim
            </button>
        </form>
    </div>

    <script>
        const chatForm = document.getElementById('chatForm');
        const questionInput = document.getElementById('questionInput');
        const chatBox = document.getElementById('chatBox');
        const sendButton = document.getElementById('sendButton');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const question = questionInput.value.trim();
            if (!question) return;

            addMessage(question, 'bg-green-100 self-end text-gray-800');
            questionInput.value = '';
            sendButton.disabled = true;

            const loading = addMessage(
                '<div class="flex gap-1"><span class="animate-bounce delay-0">.</span><span class="animate-bounce delay-150">.</span><span class="animate-bounce delay-300">.</span></div>',
                'bg-gray-200 text-gray-700');

            try {
                const response = await fetch("{{ route('chat.ask') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        question
                    })
                });

                const data = await response.json();
                loading.innerHTML = data.answer.replace(/\n/g, '<br>');
            } catch (err) {
                loading.innerHTML = '⚠️ Gagal menghubungi server.';
            } finally {
                sendButton.disabled = false;
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        });

        function addMessage(html, className) {
            const msg = document.createElement('div');
            msg.className = `p-3 rounded-xl w-fit max-w-[80%] ${className}`;
            msg.innerHTML = html;
            chatBox.appendChild(msg);
            chatBox.scrollTop = chatBox.scrollHeight;
            return msg;
        }
    </script>

</body>

</html>
