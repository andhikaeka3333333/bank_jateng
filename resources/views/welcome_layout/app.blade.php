<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Branch Bank Jateng')</title>
    <link rel="icon"
        href="{{ asset('https://bucket-api.baznas.go.id/bucket-api/file?bucket=bzn-fdr-smb-p5739641&file=attachments/rekening/172292650008666680_497-v2-Bank-Jateng-Syariah.png') }}"
        type="image/png">
    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <style>
        .nav-link {
            @apply text-gray-600 hover:text-yellow-500 transition font-medium;
        }

        .nav-link-active {
            @apply text-yellow-600 font-semibold border-b-2 border-yellow-600;
        }

        .btn-danger {
            @apply bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded;
        }
    </style>
</head>


<body class="font-sans bg-gray-50 min-h-screen overflow-x-hidden">
    <!-- Floating Button JatengAI -->
    <a href="{{ url('/jatengai') }}"
        class="fixed bottom-6 right-6 bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition duration-300"
        title="Jateng AI">
        <img src="https://img.freepik.com/free-vector/graident-ai-robot-vectorart_78370-4114.jpg?semt=ais_hybrid&w=740"
            alt="Jateng AI" class="w-50 h-50 object-cover rounded-full shadow-[0_0_10px_rgba(253,224,71,0.8)]" />
    </a>

    <!-- Include Navigation -->
    @include('welcome_layout.navigation')


    <!-- Main Content -->
    <main class="">
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('welcome_layout.footer')
</body>

</html>
