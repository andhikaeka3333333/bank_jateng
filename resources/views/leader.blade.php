@extends('welcome_layout.app')
@section('content')
    <a href="{{ url('/jatengai') }}"
        class="fixed bottom-6 right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition duration-300 z-50"
        title="Jateng AI">
        <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
            alt="Jateng AI" class="w-8 h-8 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
    </a>

    <section class="py-12 bg-white">
    <div class="text-center max-w-6xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-semibold mb-8 border-b-4 inline-block pb-2 text-center w-fit mx-auto"
            style="color: #000A63; border-color: #000A63;">
            Pimpinan Direksi
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    <!-- IRIANTO HARKO SAPUTRO -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden w-full text-center">
        <img src="images/Irianto_Harko_Saputro_TEvvoWJ 4.png" alt="Irianto Harko Saputro" class="w-full h-[300px] object-contain bg-white" />
        <div class="p-4">
            <h3 class="font-extrabold text-sm text-black leading-tight uppercase mb-1">IRIANTO HARKO SAPUTRO</h3>
            <p class="text-sm font-semibold text-yellow-500 mb-2">Direktur Bisnis Dana, Jasa dan UMKM</p>
            <p class="text-sm text-gray-800 leading-snug">
                Irianto Harko Saputro merupakan lulusan Magister Manajemen Universitas Atma Jaya Yogyakarta. Ia telah menempati berbagai posisi penting di Bank Jateng, termasuk Kepala Divisi Umum dan Sekretaris Perusahaan, hingga saat ini menjabat sebagai Direktur Bisnis Dana, Jasa dan UMKM.
            </p>
        </div>
    </div>

    <!-- ONY SUHARSONO -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden w-full text-center">
        <img src="images/Ony_Suharsono_JRl2X7k 5.png" alt="Ony Suharsono" class="w-full h-[300px] object-contain bg-white" />
        <div class="p-4">
            <h3 class="font-extrabold text-sm text-black leading-tight uppercase mb-1">ONY SUHARSONO</h3>
            <p class="text-sm font-semibold text-yellow-500 mb-2">Direktur Bisnis Kelembagaan dan Unit Usaha Syariah</p>
            <p class="text-sm text-gray-800 leading-snug">
                Ony Suharsono meraih gelar Sarjana Teknik Kimia dari Universitas Sriwijaya dan Magister Manajemen dari Universitas Gadjah Mada. Beliau memiliki pengalaman luas di bidang treasury dan kepatuhan, kini menjabat sebagai Direktur Bisnis Kelembagaan dan Unit Usaha Syariah.
            </p>
        </div>
    </div>

    <!-- ERIK ABIBON -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden w-full text-center">
        <img src="images/Erik_Abibon_6q9T5wt 1.png" alt="Erik Abibon" class="w-full h-[300px] object-contain bg-white" />
        <div class="p-4">
            <h3 class="font-extrabold text-sm text-black leading-tight uppercase mb-1">ERIK ABIBON</h3>
            <p class="text-sm font-semibold text-yellow-500 mb-2">Direktur Kepatuhan & Manajemen Risiko</p>
            <p class="text-sm text-gray-800 leading-snug">
                Lulusan Magister Hukum Universitas Diponegoro ini memiliki latar belakang kuat di bidang audit dan manajemen risiko. Saat ini, Erik Abibon menjabat sebagai Direktur Kepatuhan & Manajemen Risiko di Bank Jateng.
            </p>
        </div>
    </div>

    <!-- RISTIANI SAPTUTI -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden w-full text-center">
        <img src="images/Ristiani_Saptuti_ZOdEWrg 3.png" alt="Ristiani Saptuti" class="w-full h-[300px] object-contain bg-white" />
        <div class="p-4">
            <h3 class="font-extrabold text-sm text-black leading-tight uppercase mb-1">RISTIANI SAPTUTI</h3>
            <p class="text-sm font-semibold text-yellow-500 mb-2">Direktur Keuangan</p>
            <p class="text-sm text-gray-800 leading-snug">
                Berpengalaman di bidang treasury dan lembaga keuangan, Ristiani Saptuti adalah lulusan Magister Manajemen Universitas Gadjah Mada yang kini mengemban tugas sebagai Direktur Keuangan Bank Jateng.
            </p>
        </div>
    </div>

    <!-- EKO TRI PRASETYO -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden w-full text-center">
        <img src="images/Eko_Tri_Prasetyo_RNphFHW 3.png" alt="Eko Tri Prasetyo" class="w-full h-[300px] object-contain bg-white" />
        <div class="p-4">
            <h3 class="font-extrabold text-sm text-black leading-tight uppercase mb-1">EKO TRI PRASETYO</h3>
            <p class="text-sm font-semibold text-yellow-500 mb-2">Direktur Digital dan Bisnis Konsumer</p>
            <p class="text-sm text-gray-800 leading-snug">
                Eko Tri Prasetyo merupakan calon Direktur Bisnis Dana, Jasa, dan UMKM yang penunjukannya akan efektif setelah mendapat persetujuan OJK dan sesuai dengan ketentuan perundang-undangan yang berlaku.
            </p>
        </div>
    </div>

    <!-- ANNA KUSUMARITA -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden w-full text-center">
        <img src="images/Anna_Kusumarita_2_2x-removebg-preview 1.png" alt="Anna Kusumarita" class="w-full h-[300px] object-contain bg-white" />
        <div class="p-4">
            <h3 class="font-extrabold text-sm text-black leading-tight uppercase mb-1">ANNA KUSUMARITA</h3>
            <p class="text-sm font-semibold text-yellow-500 mb-2">Direktur SDM dan Umum</p>
            <p class="text-sm text-gray-800 leading-snug">
                Anna Kusumarita berperan penting dalam pengembangan sumber daya manusia dan pengelolaan umum di Bank Jateng. Saat ini, beliau menjabat sebagai Direktur SDM dan Umum.
            </p>
        </div>
    </div>

</div>



    </div>
</section>

@endsection
