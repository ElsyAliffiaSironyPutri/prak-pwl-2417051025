<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card - Elsy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-pink-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white/80 backdrop-blur-md border border-pink-200 shadow-xl rounded-3xl p-8 max-w-sm w-full text-center">
        
        <div class="relative w-32 h-32 mx-auto mb-6">
            <div class="w-full h-full rounded-full ring-4 ring-pink-300 ring-offset-4 overflow-hidden bg-pink-200 flex items-center justify-center shadow-inner">
                <svg class="w-20 h-20 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
            <span class="absolute bottom-1 right-1 bg-pink-500 text-white p-1.5 rounded-full shadow-md text-xs">✨</span>
        </div>

        <h2 class="text-2xl font-bold text-pink-600 mb-1">Kartu Profil</h2>
        <p class="text-xs text-pink-400 mb-6 font-medium">Praktikum Pemrograman Web Lanjut</p>

        <div class="space-y-3">
            <div class="bg-pink-50 border border-pink-200 rounded-xl p-3 shadow-sm">
                <p class="text-xs text-pink-400 font-semibold uppercase">Nama</p>
                <p class="text-base font-bold text-pink-700">{{ $nama }}</p>
            </div>

            <div class="bg-pink-50 border border-pink-200 rounded-xl p-3 shadow-sm">
                <p class="text-xs text-pink-400 font-semibold uppercase">Kelas</p>
                <p class="text-base font-bold text-pink-700">{{ $kelas }}</p>
            </div>

            <div class="bg-pink-50 border border-pink-200 rounded-xl p-3 shadow-sm">
                <p class="text-xs text-pink-400 font-semibold uppercase">NPM</p>
                <p class="text-base font-bold text-pink-700">{{ $npm }}</p>
            </div>
        </div>

    </div>

</body>
</html>