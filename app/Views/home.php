<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<!-- Navbar Sticky -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 nav-blur bg-neutral-950/80 border-b border-white/5 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-primary-500 flex items-center justify-center text-neutral-950 font-black text-xl shadow-lg shadow-primary-500/30 group-hover:scale-105 transition-transform">
                    Z
                </div>
                <div class="flex flex-col">
                    <span class="font-display text-xl font-bold tracking-tight text-white group-hover:text-primary-400 transition-colors">ZAHRA</span>
                    <span class="text-[10px] tracking-widest text-primary-400 font-semibold uppercase -mt-1">Nasi Tempong Jawa Timur</span>
                </div>
            </a>

            <!-- Nav Links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#beranda" class="text-neutral-300 hover:text-primary-400 transition-colors">Beranda</a>
                <a href="#menu" class="text-neutral-300 hover:text-primary-400 transition-colors">Daftar Menu</a>
                <a href="#keunggulan" class="text-neutral-300 hover:text-primary-400 transition-colors">Keunggulan</a>
                <a href="#ulasan" class="text-neutral-300 hover:text-primary-400 transition-colors">Ulasan</a>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                <a href="<?= base_url('login') ?>" class="px-4 py-2 rounded-xl bg-neutral-900 hover:bg-neutral-800 border border-white/10 text-xs font-semibold text-neutral-300 hover:text-primary-400 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-lock text-[10px]"></i>
                    <span>Admin Login</span>
                </a>
                <a href="#menu" class="px-4 py-2 rounded-xl bg-primary-500 hover:bg-primary-600 text-neutral-950 font-bold text-xs shadow-lg shadow-primary-500/25 transition-all btn-glow hidden sm:flex items-center gap-2">
                    <i class="fa-solid fa-fire text-[10px]"></i>
                    <span>Pesan Sekarang</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="beranda" class="relative min-h-screen flex items-center pt-24 pb-16 overflow-hidden">
    <!-- Background Banner with AI Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?= base_url('uploads/hero-banner.jpg') ?>" 
             alt="Zahra Nasi Tempong Banner" 
             class="w-full h-full object-cover object-center opacity-30 scale-105"
             onerror="this.src='https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1600&auto=format&fit=crop&q=80'">
        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-neutral-950/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-neutral-950 via-neutral-950/60 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Hero Column -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Tagline Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-neutral-900/90 border border-primary-500/30 text-xs font-semibold text-primary-400 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-primary-500 animate-pulse"></span>
                    <span>Kuliner Khas Banyuwangi, Jawa Timur</span>
                    <span class="px-2 py-0.5 rounded-full bg-accent-50 text-neutral-950 text-[10px] font-bold">Autentik</span>
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-white font-display leading-tight tracking-tight">
                    Sensasi Pedas <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 via-emerald-300 to-primary-500">Nasi Tempong</span> <br>
                    Restoran Zahra
                </h1>

                <p class="text-neutral-300 text-base sm:text-lg max-w-xl font-normal leading-relaxed">
                    Nikmati kelezatan sepinggan Nasi Tempong khas Banyuwangi dengan lauk lengkap, lalapan fresh, dan sambal mentah ulek segar yang ditampar pedasnya!
                </p>

                <!-- FITUR 1: Search Form with Interactive Filtering -->
                <div class="pt-2 max-w-lg">
                    <form action="<?= base_url() ?>#menu" method="get" class="flex flex-col sm:flex-row gap-2 bg-neutral-900/90 p-2 rounded-2xl border border-white/10 shadow-2xl backdrop-blur-md">
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-neutral-400">
                                <i class="fa-solid fa-magnifying-glass text-sm"></i>
                            </div>
                            <input type="text" 
                                   name="search" 
                                   value="<?= esc($keyword ?? '') ?>"
                                   placeholder="Cari menu Nasi Tempong (Ayam, Bebek, Cumi...)" 
                                   class="w-full pl-10 pr-4 py-3 bg-transparent text-sm text-white placeholder-neutral-400 focus:outline-none">
                        </div>
                        <button type="submit" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-neutral-950 font-bold text-xs rounded-xl transition-all shadow-md flex items-center justify-center gap-2">
                            <span>Cari Menu</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                    <?php if (!empty($keyword)): ?>
                        <div class="mt-2 text-xs text-neutral-400 flex items-center gap-2">
                            <span>Menampilkan hasil pencarian untuk: <strong class="text-primary-400">"<?= esc($keyword) ?>"</strong></span>
                            <a href="<?= base_url() ?>#menu" class="text-red-400 hover:underline text-[11px]">(Reset)</a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Stats Badges -->
                <div class="grid grid-cols-3 gap-4 pt-4 border-t border-white/10 max-w-md">
                    <div>
                        <span class="text-2xl font-black text-white font-display">10+</span>
                        <span class="block text-xs text-neutral-400">Varian Lauk Khas</span>
                    </div>
                    <div>
                        <span class="text-2xl font-black text-primary-400 font-display">100%</span>
                        <span class="block text-xs text-neutral-400">Sambal Fresh Ulek</span>
                    </div>
                    <div>
                        <span class="text-2xl font-black text-white font-display">4.9★</span>
                        <span class="block text-xs text-neutral-400">Rating Kepuasan</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Card / Visual Showcase -->
            <div class="lg:col-span-5 relative">
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-primary-500 to-emerald-600 rounded-3xl blur-2xl opacity-50 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative bg-neutral-900 rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="<?= base_url('uploads/nasi-tempong-original.jpg') ?>" 
                             alt="Nasi Tempong Original Zahra" 
                             class="w-full h-[380px] sm:h-[440px] object-cover group-hover:scale-105 transition-transform duration-700"
                             onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&auto=format&fit=crop&q=80'">
                        
                        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-neutral-950 via-neutral-950/80 to-transparent p-6 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-md bg-primary-500/20 text-primary-400 text-xs font-bold border border-primary-500/30">Menu Utama Favorit</span>
                                <span class="text-xs font-extrabold text-amber-400">Rp 25.000</span>
                            </div>
                            <h3 class="text-xl font-bold text-white font-display">Nasi Tempong Original Banyuwangi</h3>
                            <p class="text-xs text-neutral-300 line-clamp-2">Lauk komplit dengan tempe, tahu, ikan asin, lalapan segar & sambal tempong membara khas Restoran Zahra.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Menu Listing Section -->
<section id="menu" class="py-20 bg-neutral-950 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-white/10 pb-6">
            <div>
                <div class="inline-flex items-center gap-2 text-xs font-bold text-primary-400 tracking-wider uppercase mb-2">
                    <i class="fa-solid fa-utensils"></i>
                    <span>Daftar Menu Makanan Khas Jawa Timur</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-black text-white font-display">
                    Pilihan Nasi Tempong Zahra
                </h2>
            </div>

            <!-- Interactive Category Filter Mockup -->
            <div class="flex flex-wrap items-center gap-2" id="filterBadges">
                <button type="button" onclick="filterCategory('all', this)" class="filter-badge active-badge px-4 py-2 rounded-xl text-xs font-bold bg-primary-500 text-neutral-950 transition-all">
                    Semua Menu
                </button>
                <button type="button" onclick="filterCategory('ayam', this)" class="filter-badge px-4 py-2 rounded-xl text-xs font-bold bg-neutral-900 text-neutral-300 hover:text-white border border-white/10 transition-all">
                    Ayam & Bebek
                </button>
                <button type="button" onclick="filterCategory('seafood', this)" class="filter-badge px-4 py-2 rounded-xl text-xs font-bold bg-neutral-900 text-neutral-300 hover:text-white border border-white/10 transition-all">
                    Seafood & Lele
                </button>
                <button type="button" onclick="filterCategory('daging', this)" class="filter-badge px-4 py-2 rounded-xl text-xs font-bold bg-neutral-900 text-neutral-300 hover:text-white border border-white/10 transition-all">
                    Daging & Spesial
                </button>
            </div>
        </div>

        <!-- Menu Cards Grid -->
        <?php if (!empty($menu)): ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="menuGrid">
            <?php foreach ($menu as $item): ?>
            <div class="menu-card menu-item-card bg-neutral-900/80 rounded-2xl border border-white/10 overflow-hidden flex flex-col hover:border-primary-500/50 transition-all duration-300 group shadow-xl"
                 data-title="<?= strtolower(esc($item['nama_makanan'])) ?>">
                
                <!-- Image Container -->
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= base_url('uploads/' . esc($item['gambar'])) ?>" 
                         alt="<?= esc($item['nama_makanan']) ?>" 
                         class="card-img w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&auto=format&fit=crop&q=80'">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-900 via-transparent to-transparent opacity-60"></div>
                    
                    <!-- Region Tag -->
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-neutral-950/80 backdrop-blur-md text-[11px] font-semibold text-primary-400 border border-white/10">
                        <i class="fa-solid fa-location-dot mr-1"></i>
                        <?= esc($item['asal_daerah']) ?>
                    </span>

                    <span class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-red-600/90 backdrop-blur-md text-[10px] font-bold text-white shadow-md">
                        🌶️ Tempong Fresh
                    </span>
                </div>

                <!-- Content Container -->
                <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                    <div>
                        <h3 class="text-xl font-bold text-white font-display group-hover:text-primary-400 transition-colors line-clamp-1">
                            <?= esc($item['nama_makanan']) ?>
                        </h3>
                        <p class="text-xs text-neutral-400 mt-2 line-clamp-2 leading-relaxed">
                            <?= esc($item['deskripsi_singkat']) ?>
                        </p>
                    </div>

                    <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-neutral-400 block uppercase font-medium">Harga / Porsi</span>
                            <span class="text-xl font-black text-primary-400">
                                Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                            </span>
                        </div>

                        <a href="<?= base_url('detail/' . $item['id']) ?>" 
                           class="px-4 py-2.5 bg-neutral-800 hover:bg-primary-500 hover:text-neutral-950 text-white font-bold text-xs rounded-xl transition-all flex items-center gap-1.5 group-hover:shadow-lg group-hover:shadow-primary-500/20">
                            <span>Lihat Detail</span>
                            <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center py-16 bg-neutral-900/50 rounded-2xl border border-white/10 space-y-4">
            <i class="fa-solid fa-utensils text-4xl text-neutral-600"></i>
            <h3 class="text-lg font-bold text-white">Menu tidak ditemukan</h3>
            <p class="text-xs text-neutral-400">Coba gunakan kata kunci pencarian yang lain.</p>
            <a href="<?= base_url() ?>#menu" class="inline-block px-4 py-2 bg-primary-500 text-neutral-950 font-bold text-xs rounded-xl">Lihat Semua Menu</a>
        </div>
        <?php endif; ?>

    </div>
</section>

<!-- Keunggulan Section -->
<section id="keunggulan" class="py-20 bg-neutral-900/50 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="text-center max-w-2xl mx-auto space-y-3">
            <span class="text-xs font-bold text-primary-400 uppercase tracking-wider">Mengapa Pilih Zahra Nasi Tempong?</span>
            <h2 class="text-3xl font-black text-white font-display">Keunggulan Kuliner Kami</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-neutral-900 p-8 rounded-2xl border border-white/10 space-y-4 hover:border-primary-500/40 transition-all">
                <div class="w-12 h-12 rounded-xl bg-primary-500/20 text-primary-400 flex items-center justify-center text-xl font-bold">
                    🌶️
                </div>
                <h3 class="text-lg font-bold text-white">Sambal Tempong Fresh</h3>
                <p class="text-xs text-neutral-400 leading-relaxed">Diulek dadakan tiap porsi dipesan menggunakan terasi Banyuwangi dan ranti segar. Pedasnya meledak dan otentik!</p>
            </div>

            <div class="bg-neutral-900 p-8 rounded-2xl border border-white/10 space-y-4 hover:border-primary-500/40 transition-all">
                <div class="w-12 h-12 rounded-xl bg-primary-500/20 text-primary-400 flex items-center justify-center text-xl font-bold">
                    🍗
                </div>
                <h3 class="text-lg font-bold text-white">Lauk Komplit Berlimpah</h3>
                <p class="text-xs text-neutral-400 leading-relaxed">Dilengkapi tahu goreng, tempe, ikan asin renyah, dadar jagung, serta lalapan terong & bayam rebus segar.</p>
            </div>

            <div class="bg-neutral-900 p-8 rounded-2xl border border-white/10 space-y-4 hover:border-primary-500/40 transition-all">
                <div class="w-12 h-12 rounded-xl bg-primary-500/20 text-primary-400 flex items-center justify-center text-xl font-bold">
                    🏆
                </div>
                <h3 class="text-lg font-bold text-white">Resep Khas Jawa Timur</h3>
                <p class="text-xs text-neutral-400 leading-relaxed">Dibuat langsung dengan resep warisan keluarga Zahra untuk melestarikan keanekaragaman cita rasa kuliner daerah.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-neutral-950 border-t border-white/10 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6 text-xs text-neutral-400">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-primary-500 flex items-center justify-center text-neutral-950 font-black text-sm">Z</div>
            <span class="font-bold text-white">Restoran Zahra Nasi Tempong</span>
        </div>
        <p>&copy; <?= date('Y') ?> Naila Aribah Zahra - Ujian Vibe Coding Framework CodeIgniter 4. Jawa Timur.</p>
    </div>
</footer>

<script>
    function filterCategory(cat, btn) {
        document.querySelectorAll('.filter-badge').forEach(b => {
            b.classList.remove('bg-primary-500', 'text-neutral-950');
            b.classList.add('bg-neutral-900', 'text-neutral-300');
        });
        btn.classList.remove('bg-neutral-900', 'text-neutral-300');
        btn.classList.add('bg-primary-500', 'text-neutral-950');

        const cards = document.querySelectorAll('.menu-item-card');
        cards.forEach(card => {
            const title = card.getAttribute('data-title') || '';
            if (cat === 'all') {
                card.style.display = 'flex';
            } else if (cat === 'ayam' && (title.includes('ayam') || title.includes('bebek'))) {
                card.style.display = 'flex';
            } else if (cat === 'seafood' && (title.includes('seafood') || title.includes('lele') || title.includes('cumi'))) {
                card.style.display = 'flex';
            } else if (cat === 'daging' && (title.includes('empal') || title.includes('iga') || title.includes('tahu') || title.includes('pecel') || title.includes('original'))) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

<?= $this->endSection() ?>