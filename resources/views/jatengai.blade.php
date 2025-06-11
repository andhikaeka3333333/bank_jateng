<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Tanya Jatengai</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans flex flex-col items-center min-h-screen">

  <h2 class="text-2xl font-semibold text-blue-600 mt-8 mb-4">Tanya Jatengai</h2>

  <!-- Chat container -->
  <div class="flex flex-col w-full max-w-2xl h-[60vh] overflow-y-auto px-4 mb-2" id="chatBox">
    <!-- Bot Message with Image -->
    <div class="flex items-start gap-2 mb-2">
      <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740" alt="Bot Avatar" class="w-10 h-10 rounded-full border border-blue-500 p-1">
      <div class="bg-blue-500 text-white rounded-xl rounded-tl-none px-4 py-3 max-w-[80%]">
        <p>
          Assalamualaikum warahmatullahi wabarakatuh.<br>
          Selamat datang di JatengAI, asisten virtual resmi dari<br>
          PT BPD Jateng Syariah (Bank Jateng Syariah).<br>
          Saya siap membantu Bapak/Ibu dengan informasi seputar produk dan layanan kami.
        </p>
      </div>
    </div>
    <!-- Bot follow-up -->
    <div class="flex items-start gap-2 mb-2">
      <div class="w-10"></div>
      <div class="bg-blue-500 text-white rounded-xl px-4 py-3 max-w-[80%]">
        Ada pertanyaan yang bisa saya bantu jawab?
      </div>
    </div>
  </div>

  <!-- Fixed input -->
  <form id="chatForm" autocomplete="off" class="fixed bottom-4 w-full max-w-2xl px-4 flex items-center gap-2">
    <input
      type="text"
      id="questionInput"
      placeholder="Masukkan pertanyaan..."
      required
      class="flex-grow bg-gray-100 border border-gray-300 rounded-full px-4 py-2 focus:outline-none"
    />
    <button
      type="submit"
      class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition"
    >
      Kirim
    </button>
  </form>

  <script>
    const chatForm = document.getElementById('chatForm');
    const questionInput = document.getElementById('questionInput');
    const chatBox = document.getElementById('chatBox');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    chatForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const question = questionInput.value.trim();
      if (!question) return;

      addMessage(question, 'user');
      questionInput.value = '';

      const loading = addLoadingIndicator();

      try {
        const response = await fetch("{{ route('jatengai.ask') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
          },
          body: JSON.stringify({ question })
        });

        const data = await response.json();
        loading.innerHTML = data.answer.replace(/\n/g, '<br>');
      } catch (err) {
        loading.innerText = 'Terjadi kesalahan: ' + err.message;
      }
    });

    function addMessage(text, type) {
      const wrapper = document.createElement('div');
      wrapper.className = `flex items-start mb-2 gap-2 ${
        type === 'user' ? 'justify-end' : ''
      }`;

      const msg = document.createElement('div');
      msg.className =
        type === 'user'
          ? 'bg-gray-200 text-black rounded-xl px-4 py-2 max-w-[80%]'
          : 'bg-blue-500 text-white rounded-xl px-4 py-2 max-w-[80%]';

      msg.innerHTML = text;

      if (type === 'bot') {
        const img = document.createElement('img');
        img.src = 'https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740';
        img.className = 'w-10 h-10 rounded-full border border-blue-500 p-1';
        wrapper.appendChild(img);
      } else {
        const spacer = document.createElement('div');
        spacer.className = 'w-10';
        wrapper.appendChild(spacer);
      }

      wrapper.appendChild(msg);
      chatBox.appendChild(wrapper);
      chatBox.scrollTop = chatBox.scrollHeight;
    }

    function addLoadingIndicator() {
      const wrapper = document.createElement('div');
      wrapper.className = 'flex items-start mb-2 gap-2';

      const img = document.createElement('img');
      img.src = 'https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740';
      img.className = 'w-10 h-10 rounded-full border border-blue-500 p-1';

      const msg = document.createElement('div');
      msg.className = 'bg-blue-500 text-white rounded-xl px-4 py-2 max-w-[80%]';
      msg.innerHTML = `<div class="flex gap-1">
        <span class="w-2 h-2 rounded-full bg-white animate-bounce"></span>
        <span class="w-2 h-2 rounded-full bg-white animate-bounce [animation-delay:0.2s]"></span>
        <span class="w-2 h-2 rounded-full bg-white animate-bounce [animation-delay:0.4s]"></span>
      </div>`;

      wrapper.appendChild(img);
      wrapper.appendChild(msg);
      chatBox.appendChild(wrapper);
      chatBox.scrollTop = chatBox.scrollHeight;
      return msg;
    }
  </script>

</body>
</html>
