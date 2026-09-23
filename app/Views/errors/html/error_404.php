<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Halaman Tidak Ditemukan - Restoran Zahra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 500: '#22C55E', 600: '#16a34a' },
                        accent: { 50: '#FFF7ED' }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-neutral-950 text-white min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full text-center space-y-6 bg-neutral-900/80 p-8 rounded-3xl border border-white/10 shadow-2xl backdrop-blur-md">
        <div class="w-20 h-20 bg-primary-500/20 text-primary-500 rounded-full flex items-center justify-center mx-auto text-4xl">
            🌶️
        </div>
        <div class="space-y-2">
            <span class="text-6xl font-black text-primary-500 tracking-tight">404</span>
            <h1 class="text-2xl font-bold text-white">Halaman Tidak Ditemukan</h1>
            <p class="text-xs text-neutral-400 leading-relaxed">
                Maaf, menu atau halaman yang Anda cari tidak tersedia di Restoran Zahra Nasi Tempong.
            </p>
        </div>
        <a href="<?= base_url() ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-primary-500 hover:bg-primary-600 text-neutral-950 font-bold text-xs rounded-xl transition-all shadow-lg shadow-primary-500/25">
            <i class="fa-solid fa-house"></i>
            <span>Kembali ke Beranda Utama</span>
        </a>
    </div>
</body>
</html>
