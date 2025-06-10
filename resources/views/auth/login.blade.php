<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Bank Jateng</title>
  <link rel="stylesheet" href="/css/app.css">

</head>
<body class="font-sans bg-gradient-to-b from-[#1D426D] to-[#2C7F8E] min-h-screen flex items-center justify-center flex-col relative overflow-hidden">


  <!-- Gambar wayang kiri -->
  <img src="/images/wayang.png" alt="Wayang Kiri" class="absolute left-0 top-1/2 transform -translate-y-1/2 w-30 opacity-70">

  <!-- Gambar wayang kanan (opsional, bisa hapus jika tidak ingin) -->
  <img src="/images/image 8 (1).png" alt="Wayang Kanan" class="absolute right-0 top-30 transform -translate-y-1/2 w-70 opacity-70 ">

  <!-- Card Login -->
  <div class="bg-[#3E607C] rounded-xl shadow-lg p-8 w-full max-w-md text-white relative z-10 mb-5 mt-20">
    <div class="text-center mb-6">
      <img src="https://syariah.bankjateng.co.id/media/LOGO_SYARIAH-04.png" alt="Bank Jateng" class="mx-auto h-12 mb-2">
      <h1 class="text-2xl font-semibold">Masuk ke Bank Jateng</h1>
      <p class="text-yellow-400 text-sm font-semibold">Internet Banking Personal Bank Jateng Syariah</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-4">
        <label for="email" class="block text-sm font-semibold mb-2">Email</label>
        <input type="email" id="email" name="email" class="text-sm w-full px-4 py-2 rounded-md text-black focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="you@example.com" required>
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-semibold mb-2">Password</label>
        <div class="relative">
          <input type="password" id="password" name="password" class="text-sm w-full px-4 py-2 rounded-md text-black pr-10 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
          <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600">
            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
      </div>

      <div class="flex items-center mb-4">
        <input type="checkbox" id="remember" name="remember" class="mr-2">
        <label for="remember" class="text-sm">Ingat saya</label>
      </div>

      <button type="submit" class="w-full bg-blue-400 text-white font-bold py-2 rounded-md hover:bg-blue-500">Login</button>
    </form>

    <div class="text-center mt-4">
      <a href="#" class="text-sm text-white hover:underline">Lupa Password</a>
    </div>
  </div>

  <!-- Tambahan di luar card -->
  <div class="text-center mt-2 text-xs text-white z-10">
    Belum punya akun? <a href="/register" class="text-blue-300 hover:underline">Daftar disini</a>
  </div>

  <script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    togglePassword.addEventListener("click", () => {
      const isPassword = passwordInput.type === "password";
      passwordInput.type = isPassword ? "text" : "password";

      eyeIcon.innerHTML = isPassword
        ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.964 9.964 0 012.317-3.642m1.575-1.44A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.963 9.963 0 01-4.687 5.379M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />`
        : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />`;
    });
  </script>
</body>
</html>
