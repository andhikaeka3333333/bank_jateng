@extends('welcome_layout.app')

@section('content')
    <!-- Floating Button JatengAI -->
    <a href="{{ url('/jatengai') }}"
        class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center shadow-lg transition duration-300 z-50"
        title="Jateng AI">
        <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
            alt="Jateng AI" class="w-6 h-6 sm:w-8 sm:h-8 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
    </a>

    <!-- HERO SECTION -->
    <div class="w-full h-screen bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url('/images/hero.png');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <div class="relative z-10 text-center text-white px-4 sm:max-w-md">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-2">Selamat Datang</h1>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-2">di E-Branch</h1>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-8 sm:mb-16">
                Bank Jateng <span class="text-yellow-400">Syariah</span>
            </h1>
            <a href="#"
                class="inline-block bg-yellow-500 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-full shadow-md font-semibold hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                Mulai Sekarang
            </a>
        </div>
    </div>

    <section class="flex flex-col md:flex-row w-full min-h-screen bg-white">
        <div class="w-full md:w-1/2 p-6 sm:p-10 md:p-20 flex flex-col justify-center mb-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#000A63] leading-tight">
                Solusi Digital<br>Perbankan Syariah
            </h1>
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#000A63] leading-tight">
                Cepat dan Mudah
            </h1>
            <p class="text-gray-600 mt-4 sm:mt-6 text-sm sm:text-base">
                Bank Jateng Syariah adalah layanan inovatif perbankan digital yang dirancang khusus untuk memberikan
                kemudahan bagi masyarakat dalam mengakses berbagai produk dan layanan keuangan syariah.
                Melalui platform ini, Anda dapat membuka tabungan, deposito, serta mengajukan pembiayaan secara online tanpa
                perlu datang ke kantor cabang.
                Semua proses dilakukan dengan cepat, aman, transparan, dan tentunya sesuai dengan prinsip-prinsip syariah.
                E-Branch hadir sebagai solusi modern untuk memenuhi kebutuhan finansial Anda kapan saja dan di mana saja,
                mendukung gaya hidup praktis dan efisien di era digital.
            </p>
        </div>
        <div class="w-full md:w-1/2 flex items-center justify-center px-4">
            <img src="/images/salamjateng.jpg" alt="Bank Jateng Syariah" class="w-full max-w-md h-auto object-contain">
        </div>
    </section>

    <!-- Section Mengapa pilih E-Branch -->
    <section class="bg-white py-8 sm:py-12">
        <div class="max-w-7xl mx-auto text-center px-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold mb-6 sm:mb-8 border-b-4 inline-block pb-2"
                style="color: #000A63; border-color: #000A63;">
                Mengapa pilih E-Branch
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] gap-x-4 gap-y-6 mt-6 sm:mt-10 items-start">
                <!-- Box 1 -->
                <div class="bg-white shadow-md p-4 sm:p-6 rounded-lg">
                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div
                            class="w-20 sm:w-[150px] h-6 sm:h-[30px] flex items-center justify-center bg-yellow-200 text-xs sm:text-sm font-bold text-gray-800 rounded-full">
                            1
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-1">100% Syariah Compliance</h3>
                            <p class="text-xs sm:text-sm text-gray-600 text-left">
                                Seluruh layanan E-Branch dikelola sesuai prinsip syariah yang adil dan transparan. Transaksi
                                bebas riba, dijalankan dengan akad yang sah menurut Islam, serta diawasi langsung oleh Dewan
                                Syariah Nasional untuk memastikan integritas dan kepatuhan syariah dalam setiap proses.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="flex justify-center items-center h-full md:block hidden">
                    <img src="images/arrow.png" class="w-[150px] sm:w-[200px] h-auto" />
                </div>

                <!-- Box 2 -->
                <div class="bg-white shadow-md p-4 sm:p-6 roundedZg-lg">
                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div
                            class="w-20 sm:w-[150px] h-6 sm:h-[30px] flex items-center justify-center bg-yellow-200 text-xs sm:text-sm font-bold text-gray-800 rounded-full">
                            2
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-1">Praktis & Cepat</h3>
                            <p class="text-xs sm:text-sm text-gray-600 text-left">
                                Nikmati kemudahan membuka rekening, menyetor dana, hingga mengajukan pembiayaan tanpa perlu
                                datang ke kantor cabang. Cukup melalui aplikasi atau website, semua proses dapat dilakukan
                                kapan saja dan di mana saja, secara cepat dan efisien.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-span-1 md:col-span-3 flex justify-center">
                    <div class="bg-white shadow-md p-4 sm:p-6 rounded-lg w-full max-w-full sm:max-w-[calc(50%-1rem)]">
                        <div class="flex items-start space-x-3 sm:space-x-4">
                            <div
                                class="w-20 sm:w-[150px] h-6 sm:h-[30px] flex items-center justify-center bg-yellow-200 text-xs sm:text-sm font-bold text-gray-800 rounded-full">
                                3
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-1">Aman & Terpercaya</h3>
                                <p class="text-xs sm:text-sm text-gray-600 text-left">
                                    Keamanan data dan transaksi Anda menjadi prioritas. E-Branch dilengkapi sistem enkripsi
                                    canggih dan diawasi oleh regulasi perbankan nasional. Didukung langsung oleh Pemerintah
                                    Provinsi Jawa Tengah, E-Branch menjadi solusi keuangan yang terpercaya dan aman.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Berita + AJAX pagination -->
<div class="w-full mx-auto px-4 sm:px-6 lg:px-20 mt-20 sm:mt-40">
    <div id="berita" class="mb-6">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-[#18494C]">Berita</h1>
        <div class="w-16 sm:w-24 h-2 bg-[#45B7BE] mt-2"></div>
    </div>

    <div id="berita-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        @if ($articles->isEmpty())
            <div class="col-span-1 sm:col-span-2 lg:col-span-4 text-center">
                <p class="text-gray-600 text-sm sm:text-base">Tidak ada berita tersedia saat ini.</p>
            </div>
        @else
            @foreach ($articles as $article)
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                    @if ($article->image)
                        <div class="w-full h-32 sm:h-40 overflow-hidden flex items-center justify-center bg-gray-100 mb-3">
                            <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-full object-cover"
                                alt="Gambar {{ $article->title }}" />
                        </div>
                    @endif
                    <div class="px-4 pb-4">
                        <p class="text-xs text-gray-600 mb-1">
                            {{ $article->created_at->format('d/m/Y') }} | {{ $article->author }}
                        </p>
                        <h2 class="text-sm sm:text-base font-bold text-gray-900 mb-1 leading-snug">
                            {{ $article->title }}
                        </h2>
                        <p class="text-xs sm:text-sm text-gray-500 mb-3">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 50, '....') }}
                        </p>
                        <a href="{{ route('news.show', $article->id) }}"
                            class="text-indigo-600 hover:underline font-semibold text-xs sm:text-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div id="pagination-links" class="mt-6 sm:mt-8">
        @if (!$articles->isEmpty())
            {{ $articles->links() }}
        @endif
    </div>
</div>
    <section
        class="relative mt-12 sm:mt-24 lg:mt-32 w-full flex justify-center mb-10 sm:mb-16 lg:mb-24 px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col lg:flex-row items-center justify-between gap-6 sm:gap-8 lg:gap-12 max-w-7xl w-full z-10 relative">
            <!-- Image Section -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-start mb-6 lg:mb-0">
                <img src="{{ asset('/images/faq.png') }}"
                    class="w-full max-w-[200px] sm:max-w-[280px] lg:max-w-[360px] xl:max-w-[400px] object-contain"
                    alt="FAQ Bank Jateng Syariah">
            </div>

            <!-- FAQ Section -->
            <div class="w-full lg:w-1/2 max-w-3xl">
                <h2
                    class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-bold text-gray-800 mb-4 sm:mb-5 lg:mb-6 tracking-tight">
                    Pertanyaan Seputar Bank Jateng Syariah
                </h2>
                <div class="space-y-3 sm:space-y-4">
                    <details class="bg-white border border-gray-200 rounded-lg shadow-sm transition-all duration-200">
                        <summary
                            class="flex justify-between items-center p-3 sm:p-4 cursor-pointer text-gray-900 hover:bg-gray-50 text-sm sm:text-base font-medium">
                            Apa itu E-Branch Bank Jateng Syariah?
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 transform transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="text-xs sm:text-sm p-3 sm:p-4 border-t border-gray-200 text-gray-700">
                            Layanan digital untuk deposito saldo, pembiayaan, dan tabungan lewat website E-Branch Bank
                            Jateng Syariah.
                        </div>
                    </details>

                    <details class="bg-white border border-gray-200 rounded-lg shadow-sm transition-all duration-200">
                        <summary
                            class="flex justify-between items-center p-3 sm:p-4 cursor-pointer text-gray-900 hover:bg-gray-50 text-sm sm:text-base font-medium">
                            Apakah diawasi OJK dan dijamin LPS?
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 transform transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="text-xs sm:text-sm p-3 sm:p-4 border-t border-gray-200 text-gray-700">
                            Ya, Bank Jateng Syariah diawasi oleh OJK dan simpanannya dijamin oleh LPS.
                        </div>
                    </details>

                    <details class="bg-white border border-gray-200 rounded-lg shadow-sm transition-all duration-200">
                        <summary
                            class="flex justify-between items-center p-3 sm:p-4 cursor-pointer text-gray-900 hover:bg-gray-50 text-sm sm:text-base font-medium">
                            Bagaimana cara membayar zakat?
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 transform transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="text-xs sm:text-sm p-3 sm:p-4 border-t border-gray-200 text-gray-700">
                            Transfer ke rekening Baznas Jateng melalui Bank Jateng Syariah dan konfirmasi ke website resmi
                            Baznas.
                        </div>
                    </details>

                    <details class="bg-white border border-gray-200 rounded-lg shadow-sm transition-all duration-200">
                        <summary
                            class="flex justify-between items-center p-3 sm:p-4 cursor-pointer text-gray-900 hover:bg-gray-50 text-sm sm:text-base font-medium">
                            Apa saja produk tabungan yang tersedia?
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 transform transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="text-xs sm:text-sm p-3 sm:p-4 border-t border-gray-200 text-gray-700">
                            Tabungan iB Bima, Amanah, Simpel, Giro iB, Deposito iB, serta pembiayaan usaha, haji, dan
                            lainnya.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

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
