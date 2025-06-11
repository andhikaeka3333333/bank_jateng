@extends('welcome_layout.app')

@section('content')
    <!-- Floating Button JatengAI -->
    <a href="{{ url('/jatengai') }}"
        class="fixed bottom-6 right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition duration-300 z-50"
        title="Jateng AI">
        <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
            alt="Jateng AI" class="w-8 h-8 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
    </a>

    <!-- HERO SECTION -->
    <div class="w-screen h-screen bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url('/images/hero.png');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <div class="relative z-10 text-center text-white max-w-md">
            <h1 class="text-5xl font-bold leading-tight mb-2">Selamat Datang</h1>
            <h1 class="text-5xl font-bold leading-tight mb-2">di E-Branch</h1>
            <h1 class="text-5xl font-bold leading-tight mb-16">
                Bank Jateng <span class="text-yellow-400">Syariah</span>
            </h1>
            <a href="#"
                class="inline-block bg-yellow-500 text-white px-6 py-3 rounded-full shadow-md font-semibold  hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                Mulai Sekarang
            </a>
        </div>
    </div>

    <section class="flex flex-row w-full min-h-screen bg-white">
        <div class="w-1/2 p-20 flex flex-col justify-center mb-8">
            <h1 class="text-4xl font-bold text-[#000A63] leading-tight ">
                Solusi Digital<br>Perbankan Syariah
            </h1>
            <h1 class="text-4xl font-bold text-[#000A63] leading-tight">
                Cepat dan Mudah
            </h1>
            <p class="text-gray-600 mt-6 text-base">
                Bank Jateng Syariah adalah layanan inovatif perbankan digital yang dirancang khusus untuk memberikan
                kemudahan bagi masyarakat dalam mengakses berbagai produk dan layanan keuangan syariah.
                Melalui platform ini, Anda dapat membuka tabungan, deposito, serta mengajukan pembiayaan secara online tanpa
                perlu datang ke kantor cabang.
                Semua proses dilakukan dengan cepat, aman, transparan, dan tentunya sesuai dengan prinsip-prinsip syariah.
                E-Branch hadir sebagai solusi modern untuk memenuhi kebutuhan finansial Anda kapan saja dan di mana saja,
                mendukung gaya hidup praktis dan efisien di era digital.
            </p>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <img src="/images/salamjateng.jpg" alt="Bank Jateng Syariah"
                class="w-3/4 h-auto object-contain">
        </div>
    </section>

    <!-- Section Mengapa pilih E-Branch -->
    <section class="max-w-6xl mx-auto  px-4 bg-white flex flex-col items-center">
        <h1 class="text-3xl font-bold text-[#1E3A8A] mb-4">Mengapa pilih E-Branch</h1>
        <div class="w-24 h-1 bg-[#1E3A8A] mb-12"></div>

        <div class="flex flex-col md:flex-row justify-between w-full gap-8  ">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 text-center flex-1">
                <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 bg-yellow-300 rounded-full flex items-center justify-center text-white font-bold">
                        1</div>
                </div>
                <h2 class="text-xl font-semibold text-[#1E3A8A] mb-2">100% Syariah Compliance</h2>
                <p class="text-gray-600 text-sm">
                    Seluruh layanan E-Branch dikelola sesuai prinsip syariah yang adil dan transparan. Transaksi bebas riba,
                    dijalankan dengan akad yang sah menurut Islam serta diawasi oleh Dewan Syariah Nasional untuk memastikan
                    integritas dan kepatuhan syariah dalam setiap proses.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 text-center flex-1 relative">
                <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 bg-yellow-300 rounded-full flex items-center justify-center text-white font-bold">
                        2</div>
                </div>
                <h2 class="text-xl font-semibold text-[#1E3A8A] mb-2">Praktis & Cepat</h2>
                <p class="text-gray-600 text-sm">
                    Nikmati kemudahan membuka rekening, menyetor dana, hingga mengajukan pembiayaan tanpa perlu datang ke
                    kantor cabang. Cukup melalui aplikasi atau website, semua proses dapat dilaksanakan dengan mudah dan di
                    mana saja, secara cepat dan efisien.
                </p>
                <div
                    class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[20px] border-l-transparent border-r-[20px] border-r-transparent border-b-[20px] border-b-white">
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 text-center flex-1">
                <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 bg-yellow-300 rounded-full flex items-center justify-center text-white font-bold">
                        3</div>
                </div>
                <h2 class="text-xl font-semibold text-[#1E3A8A] mb-2">Aman & Terpercaya</h2>
                <p class="text-gray-600 text-sm">
                    Keamanan data dan transaksi Anda menjaga prioritas. E-Branch dilengkapi sistem enkripsi canggih dan
                    diawasi oleh regulator perbankan nasional. Didukung oleh Pemerintah Provinsi Jawa Tengah, E-Branch
                    menjadi solusi keuangan yang terpercaya dan aman.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Berita + AJAX pagination -->
    <div class="w-full mx-auto px-20 mt-40">
        <div id="berita" class="mb-6">
            <h1 class="text-4xl font-bold leading-tight text-[#18494C]">Berita</h1>
            <div class="w-24 h-2 bg-[#45B7BE] mt-2"></div>
        </div>

        <div id="berita-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                    @if ($article->image)
                        <div class="w-full h-52 overflow-hidden flex items-center justify-center bg-gray-100">
                            <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-full object-cover"
                                alt="Gambar {{ $article->title }}" />
                        </div>
                    @endif
                    <div class="p-5">
                        <p class="text-sm text-gray-600 mb-1">
                            {{ $article->created_at->format('d/m/Y') }} | {{ $article->author }}
                        </p>
                        <h2 class="text-lg font-bold text-gray-900 mb-1 leading-tight">{{ $article->title }}</h2>
                        <p class="text-sm text-gray-500 mb-3">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 50, '....') }}
                        </p>
                        <a href="{{ route('news.show', $article->id) }}"
                            class="text-indigo-600 hover:underline font-semibold text-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="pagination-links" class="mt-8">
            {{ $articles->links() }}
        </div>
    </div>

    <!-- Tambahkan jQuery dan Script AJAX Pagination -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('click', '#pagination-links a', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');

            if (!url) return;

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    const html = $(response);
                    $('#berita-container').html(html.find('#berita-container').html());
                    $('#pagination-links').html(html.find('#pagination-links').html());

                    $('html, body').animate({
                        scrollTop: $('#berita').offset().top - 100
                    }, 500);
                },
                error: function() {
                    alert('Gagal memuat data. Silakan coba lagi.');
                }
            });
        });
    </script>
@endsection
