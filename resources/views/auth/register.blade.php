<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar Bank Jateng</title>
  <link rel="stylesheet" href="/css/app.css">
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="font-sans bg-gradient-to-b from-[#1D426D] to-[#2C7F8E] min-h-screen overflow-y-auto flex flex-col items-center justify-start relative">

  <!-- Gambar wayang -->
  <img src="/images/wayang.png" alt="Wayang Kiri" class="absolute left-0 top-1/2 transform -translate-y-1/2 w-30 opacity-70">
  <img src="/images/image 8 (1).png" alt="Wayang Kanan" class="absolute right-0 top-30 transform -translate-y-1/2 w-70 opacity-70">

  <!-- Card Register -->
  <div class="bg-[#3E607C] rounded-xl shadow-lg p-8 w-full max-w-md text-white relative z-10 mt-20 mb-5">
    <div class="text-center mb-6">
      <img src="https://syariah.bankjateng.co.id/media/LOGO_SYARIAH-04.png" alt="Bank Jateng" class="mx-auto h-12 mb-2">
      <h1 class="text-2xl font-semibold">Daftar ke Bank Jateng</h1>
      <p class="text-yellow-400 text-sm font-semibold">Internet Banking Personal Bank Jateng Syariah</p>
    </div>

    <!-- Notifikasi error global -->
    @if ($errors->any())
      <div class="bg-red-600 text-white p-3 mb-4 rounded text-sm">
        <strong>Oops! Ada kesalahan:</strong>
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Notifikasi error dari session -->
    @if(session('error'))
      <div class="bg-red-500 text-white p-2 rounded mb-4 text-sm text-center">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="space-y-4 text-sm">

        <!-- Nama -->
        <div>
          <label class="block font-semibold mb-1" for="name">Nama</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full rounded-md px-4 py-2 text-black" required>
          @error('name') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div>
          <label class="block font-semibold mb-1" for="email">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full rounded-md px-4 py-2 text-black" required>
          @error('email') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Password -->
        <div>
          <label class="block font-semibold mb-1" for="password">Password</label>
          <div class="relative">
            <input type="password" id="password" name="password" class="w-full rounded-md px-4 py-2 text-black pr-10" required>
            <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center toggle-password" tabindex="-1">
              <i data-feather="eye"></i>
            </button>
          </div>
          @error('password') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Konfirmasi Password -->
        <div>
          <label class="block font-semibold mb-1" for="password_confirmation">Konfirmasi Password</label>
          <div class="relative">
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full rounded-md px-4 py-2 text-black pr-10" required>
            <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center toggle-password" tabindex="-1">
              <i data-feather="eye"></i>
            </button>
          </div>
          @error('password_confirmation') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Jenis Kelamin -->
        <div>
          <label class="block font-semibold mb-1">Jenis Kelamin</label>
          <div class="flex gap-4">
            <label class="flex items-center">
              <input type="radio" name="gender" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }} required>
              <span class="ml-2">Laki-laki</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="gender" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }} required>
              <span class="ml-2">Perempuan</span>
            </label>
          </div>
          @error('gender') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- NIK -->
        <!-- NIK -->
<div>
    <label class="block font-semibold mb-1" for="nik">Nomor Induk Kependudukan (NIK)</label>
    <input
      type="text"
      id="nik"
      name="nik"
      value="{{ old('nik') }}"
      class="w-full rounded-md px-4 py-2 text-black"
      inputmode="numeric"
      pattern="\d{16}"
      maxlength="16"
      required
    >
    @error('nik') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
  </div>


        <!-- Alamat -->
        <div>
          <label class="block font-semibold mb-1" for="alamat">Alamat</label>
          <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}" class="w-full rounded-md px-4 py-2 text-black" required>
          @error('alamat') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- No HP -->
        <div>
          <label class="block font-semibold mb-1" for="no_hp">No HP</label>
          <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" class="w-full rounded-md px-4 py-2 text-black" required>
          @error('no_hp') <p class="text-red-300 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="w-full bg-blue-400 text-white font-bold py-2 rounded-md hover:bg-blue-500">Daftar</button>
      </div>
    </form>
  </div>

  <!-- Link ke login -->
  <div class="text-center mt-2 text-xs text-white z-10 mb-5">
    Sudah punya akun? <a href="/login" class="text-blue-300 hover:underline">Login di sini</a>
  </div>

  <!-- Script -->
  <script>
    // Feather icons
    feather.replace();

    // Toggle visibility password
    document.querySelectorAll('.toggle-password').forEach(btn => {
      btn.addEventListener('click', function () {
        const input = this.previousElementSibling;
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.innerHTML = type === 'password' ? feather.icons.eye.toSvg() : feather.icons['eye-off'].toSvg();
      });
    });

    // No HP hanya angka
    document.getElementById('no_hp').addEventListener('input', function () {
      this.value = this.value.replace(/[^0-9]/g, '');
    });

    // NIK hanya angka
   // NIK hanya angka dan max 16 karakter
document.getElementById('nik').addEventListener('input', function () {
  this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);
});

  </script>
</body>
</html>
