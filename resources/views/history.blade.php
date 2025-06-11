@extends('welcome_layout.app')
@section('content')
    <a href="{{ url('/jatengai') }}"
        class="fixed bottom-6 right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition duration-300 z-50"
        title="Jateng AI">
        <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
            alt="Jateng AI" class="w-8 h-8 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
    </a>

    <div class="relative">
        <img src="https://infoekonomi.id/wp-content/uploads/2024/01/GEDUNG_BANK_JATENG_MERAH_PUTIH_1-e1704443807735.webp"
            alt="Gedung Bank Jateng" class="w-full h-[700px] md:h-[700px] object-cover" />

        <!-- Card -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-[-120px] w-full max-w-4xl px-4">
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 md:p-10">
                <h1 class="text-xl sm:text-2xl md:text-3xl font-semibold text-[#1E5B85] text-center mb-2">Sejarah Bank
                    Jateng</h1>
                <div class="w-32 sm:w-80 h-1 bg-[#1E5B85] mx-auto mb-6"></div>
                <p class="text-sm md:text-base text-justify text-black leading-relaxed">
                    Bank Pembangunan Daerah Jawa Tengah didirikan di Semarang berdasarkan Surat Persetujuan Menteri
                    Pemerintah
                    Umum & Otonomi Daerah No. DU 57/1/35 tanggal 13 Maret 1963 serta Izin Usaha dari Menteri Urusan Bank
                    Sentral
                    No. 4/Kep/MUBS/63 tanggal 14 Maret 1963. Operasional pertamanya dimulai pada 6 April 1963 di Gedung
                    Bapindo,
                    Jl. Pahlawan No. 3 Semarang. Tujuan pendiriannya adalah mengelola keuangan daerah sebagai pemegang
                    Kas Daerah
                    serta mendukung peningkatan ekonomi daerah melalui pemberian kredit kepada pengusaha kecil. Bank ini
                    dimiliki
                    oleh Pemerintah Provinsi Jawa Tengah bersama Pemerintah Kabupaten/Kota se-Jawa Tengah. Sejak awal
                    berdiri,
                    Bank mengalami beberapa perubahan bentuk badan usaha. Tahun 1969, ditetapkan sebagai BUMD melalui
                    Perda No. 3
                    Tahun 1969. Pada tahun 1993, statusnya berubah menjadi Perusahaan Daerah melalui Perda No. 1 Tahun
                    1993.
                    Kemudian, berdasarkan Perda No. 6 Tahun 1998 dan Akta Pendirian No.1 tanggal 1 Mei 1999, serta
                    disahkan oleh
                    Keputusan Menteri Kehakiman RI No. C2.8223.HT.01.01 Tahun 1999 tanggal 15 Mei 1999, bank berubah
                    menjadi
                    Perseroan Terbatas. Pada 7 Mei 1999, Bank mengikuti Program Rekapitalisasi Perbankan, dan
                    menyelesaikannya
                    pada 7 Mei 2005 melalui pembelian kembali saham yang dimiliki Pemerintah Pusat oleh Pemerintah
                    Provinsi dan
                    Kabupaten/Kota se-Jawa Tengah.
                </p>
            </div>
        </div>
    </div>

    <!-- Spacer -->
    <div class="h-[180px] md:h-[150px]"></div>

    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Visi & Misi -->
            <div>
                <h2 class="text-2xl font-bold text-center mb-2">Visi & Misi</h2>
                <div class="w-32 h-1 bg-[#1E5B85] mx-auto mb-6"></div>

                <!-- Visi -->
                <div class="bg-white shadow-md rounded-lg p-4 sm:p-6 mb-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 bg-[#FFF5CC] rounded-full flex items-center justify-center font-bold text-xl">
                            1.</div>
                        <h3 class="text-lg font-bold">VISI</h3>
                    </div>
                    <p class="text-sm text-[#2A788A] leading-relaxed">
                        1. Bank Terpercaya, menjadi kebanggaan masyarakat, mampu menunjang pembangunan daerah
                    </p>
                </div>

                <!-- Misi -->
                <div class="bg-white shadow-md rounded-lg p-4 sm:p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 bg-[#FFF5CC] rounded-full flex items-center justify-center font-bold text-xl">
                            2.</div>
                        <h3 class="text-lg font-bold">MISI</h3>
                    </div>
                    <ol class="list-decimal list-inside text-sm text-[#2A788A] space-y-1">
                        <li>Memberikan layanan prima didukung oleh kehandalan SDM dengan teknologi modern, serta
                            jaringan yang luas.</li>
                        <li>Membangun budaya Bank dan mempertahankan Bank sehat.</li>
                        <li>Mendukung pertumbuhan ekonomi regional dengan mengutamakan kegiatan retail banking.</li>
                        <li>Meningkatkan kontribusi dan komitmen pemilik guna memperkokoh bank.</li>
                    </ol>
                </div>
            </div>

            <!-- Budaya Perusahaan -->
            <div>
                <h2 class="text-2xl font-bold text-center mb-2">Budaya Perusahaan</h2>
                <div class="w-48 sm:w-64 h-1 bg-[#1E5B85] mx-auto mb-6"></div>

                <div class="bg-white shadow-md rounded-lg p-4 sm:p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 bg-[#FFF5CC] rounded-full flex items-center justify-center font-bold text-xl">
                            1.</div>
                        <h3 class="text-lg font-bold">Nilai Nilai Bank Jateng</h3>
                    </div>
                    <div class="text-sm text-[#264653] leading-relaxed space-y-4">
                        <div>
                            <p><strong>PRINSIP :</strong> <span class="uppercase">PR</span>ofesional, <span
                                    class="uppercase">IN</span>tegritas, inova<span class="uppercase">SI</span>, ke<span
                                    class="uppercase">PEM</span>impinan.</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li class="text-[#2A788A]">Profesional.</li>
                                <li class="text-[#2A788A]">Integritas.</li>
                                <li class="text-[#2A788A]">Inovasi.</li>
                                <li class="text-[#2A788A]">Kepemimpinan</li>
                            </ol>
                        </div>
                        <div>
                            <p class="font-bold">Penjelasan Akronim</p>
                            <ol class="list-decimal list-inside mt-2 space-y-2">
                                <li class="text-[#2A788A]"><span class="font-bold text-[#2A788A]">PRINSIP</span> adalah
                                    <br /> Nilai-nilai budaya Bank Jateng merupakan “PRINSIP” yang selalu dipegang teguh
                                    oleh seluruh Stakeholder Bank Jateng dalam berperilaku sehari-hari.
                                </li>
                                <li class="text-[#2A788A]"><span class="font-bold text-[#2A788A]">PROFESIONAL</span><br />
                                    Bekerja dengan
                                    tanggung jawab dan komitmen memberikan hasil yang terbaik.</li>
                                <li class="text-[#2A788A]"><span class="font-bold text-[#2A788A]">INTEGRITAS</span><br />
                                    Sikap berani menyatakan
                                    kebenaran, bertindak jujur, bermoral tinggi, serta konsisten sesuai standar etika.
                                </li>
                                <li class="text-[#2A788A]"><span class="font-bold text-[#2A788A]">INOVASI</span><br />
                                    Memiliki gagasan, ide-ide kreatif, smart serta melakukan perubahan yang
                                    terus-menerus untuk pengembangan perusahaan.</li>
                                <li class="text-[#2A788A]"><span class="font-bold text-[#2A788A]">KEPEMIMPINAN</span><br />
                                    Memotivasi dan
                                    mempengaruhi orang lain untuk bekerja mencapai tujuan bersama dan berperilaku
                                    sebagai teladan.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Spacer -->
        <div class="h-24"></div>

        <div class="max-w-[1400px] mx-auto py-8 px-4 text-center">
            <!-- Judul -->
            <div class="flex flex-col items-center space-y-2 mb-6">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold text-[#1C4471]">Identitas Perusahaan</h1>
                <div class="w-64 sm:w-[400px] h-[2px] bg-[#1C4471]"></div>
            </div>

            <!-- Logo -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-4 mb-6">
                <img src="https://www.bankjateng.co.id/media/Logo_Bank_Jateng_Biru_Transparan.png"
                    alt="Logo Bank Jateng Putih" class="w-full max-w-xs md:max-w-md h-auto" />
                <img src="https://www.bankjateng.co.id/media/Logo_Bank_Jateng_Putih_Backgorund_Biru.jpg"
                    alt="Logo Bank Jateng Biru" class="w-full max-w-xs md:max-w-md h-auto" />
            </div>

            <!-- Paragraf utama -->
            <p class="text-sm md:text-base text-justify mb-6 leading-relaxed">
                Identitas Bank Jateng dilambangkan dengan bentuk SINAR MATAHARI, yang merupakan sumber kehidupan dan
                cahaya penuntun bagi Bank Jateng dalam menjalankan roda bisnisnya dan menunjukkan kemajuan dalam setiap
                pola pikir dan pembaharuan bagi lingkungan dalam mencapai prestasi serta melambangkan kesehatan dan
                kesejahteraan bank, termasuk semua pihak yang terkait di dalamnya (karyawan, stakeholder, konsumen).
                Pancarannya merupakan sumber energi yang tidak terbatas, begitu luas hingga menjangkau pelosok daerah.
                Kehadirannya setiap hari menunjukkan komitmen, integritas, kekuatan dan kebanggaan yang abadi. Huruf
                yang digunakan adalah jenis sans-serif modifikasi, menunjukkan fleksibilitas, modernitas, tanpa
                meninggalkan nilai-nilai warisan.
                <br /><br />
                <span class="font-semibold">Arti & Filosofi Warna-Warna Yang Digunakan Adalah Sebagai Berikut:</span>
            </p>

            <!-- Warna Kuning -->
            <div class="text-left mb-4">
                <h2 class="text-[#D8A826] font-bold uppercase mb-1">KUNING</h2>
                <p>
                    Warna yang melambangkan kehangatan, kecerdasan,<br />
                    dan perkembangan yang pesat Bank Jateng, serta<br />
                    menyatukan unsur-unsur yang ada didalamnya.
                </p>
            </div>

            <!-- Warna Biru -->
            <div class="text-right mb-4">
                <h2 class="text-[#1C4471] font-bold uppercase mb-1">BIRU</h2>
                <p>
                    Adalah warna langit dan laut dan diasosiasikan dengan<br />
                    kedalaman, stabilitas dan fleksibilitas bagi Bank Jateng<br />
                    dalam menjalankan bisnisnya. Selain itu biru menyimbolkan<br />
                    nilai kesetiaan, kebijaksanaan dan kepercayaan diri.
                </p>
            </div>

            <!-- Warna Merah -->
            <div class="text-left mb-4">
                <h2 class="text-[#E63946] font-bold uppercase mb-1">MERAH</h2>
                <p>
                    Merupakan warna yang memperkuat kehangatan dan<br />
                    fleksibilitas, serta menjadi landasan bagi Bank Jateng<br />
                    untuk perkembangan di masa yang akan datang.
                </p>
            </div>
        </div>
    </div>
@endsection
