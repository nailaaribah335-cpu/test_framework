<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 nav-blur bg-neutral-950/80 border-b border-white/5 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-primary-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-pepper-hot text-white text-lg"></i>
                </div>
                <div>
                    <span class="text-xl font-bold text-white tracking-tight">ZAHRA</span>
                    <span class="text-xs block text-primary-400 -mt-1 tracking-[0.2em] uppercase">Nasi Tempong</span>
                </div>
            </a>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-white/80 hover:text-primary-400 transition-colors text-sm font-medium tracking-wide">Beranda</a>
                <a href="#menu" class="text-white/80 hover:text-primary-400 transition-colors text-sm font-medium tracking-wide">Menu</a>
                <a href="#about" class="text-white/80 hover:text-primary-400 transition-colors text-sm font-medium tracking-wide">Tentang</a>
                <a href="#contact" class="text-white/80 hover:text-primary-400 transition-colors text-sm font-medium tracking-wide">Kontak</a>
                <a href="/login" class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 btn-glow">
                    <i class="fas fa-user-shield mr-2"></i>Admin
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-white/80 hover:text-primary-400 transition-colors">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-neutral-950/95 nav-blur border-t border-white/5">
        <div class="px-4 py-4 space-y-3">
            <a href="/" class="block text-white/80 hover:text-primary-400 transition-colors py-2 text-sm font-medium">Beranda</a>
            <a href="#menu" class="block text-white/80 hover:text-primary-400 transition-colors py-2 text-sm font-medium">Menu</a>
            <a href="#about" class="block text-white/80 hover:text-primary-400 transition-colors py-2 text-sm font-medium">Tentang</a>
            <a href="#contact" class="block text-white/80 hover:text-primary-400 transition-colors py-2 text-sm font-medium">Kontak</a>
            <a href="/login" class="block bg-primary-500 text-white text-center px-6 py-2.5 rounded-full text-sm font-semibold mt-2">Admin Login</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="/uploads/hero-banner.jpg" alt="Nasi Tempong Zahra" class="w-full h-full object-cover">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-transparent to-transparent"></div>
    </div>
    
    <!-- Floating decorative elements -->
    <div class="absolute top-40 right-20 w-20 h-20 bg-primary-500/10 rounded-full blur-2xl float-anim"></div>
    <div class="absolute bottom-40 left-20 w-32 h-32 bg-accent-400/10 rounded-full blur-3xl float-anim" style="animation-delay: 1s;"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="max-w-3xl">
            <!-- Badge -->
            <div class="fade-in-up inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-8 border border-white/10">
                <div class="w-2 h-2 bg-primary-400 rounded-full animate-pulse"></div>
                <span class="text-sm text-white/80 font-medium tracking-wide">Khas Banyuwangi, Jawa Timur</span>
            </div>
            
            <!-- Heading -->
            <h1 class="fade-in-up-delay-1 font-display text-5xl sm:text-6xl lg:text-8xl font-bold leading-none mb-6">
                <span class="text-white">Nasi</span><br>
                <span class="text-primary-400">Tempong</span>
                <span class="text-accent-50">.</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="fade-in-up-delay-2 text-lg sm:text-xl text-white/60 max-w-xl mb-10 leading-relaxed">
                Sambal pedas legendaris dari Banyuwangi yang membuat lidah <span class="text-primary-400 font-semibold">"tempong"</span> — terlempar oleh sensasi pedasnya yang menggigit.
            </p>
            
            <!-- CTAs -->
            <div class="fade-in-up-delay-3 flex flex-wrap gap-4">
                <a href="#menu" class="group bg-primary-500 hover:bg-primary-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 btn-glow inline-flex items-center gap-3">
                    Lihat Menu
                    <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform duration-300"></i>
                </a>
                <a href="#about" class="group border-2 border-white/20 hover:border-primary-500/50 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 inline-flex items-center gap-3 hover:bg-white/5">
                    Cerita Kami
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="mt-20 grid grid-cols-3 gap-8 max-w-lg">
            <div class="text-center">
                <div class="text-3xl sm:text-4xl font-bold text-primary-400">10+</div>
                <div class="text-xs text-white/50 mt-1 uppercase tracking-wider">Menu</div>
            </div>
            <div class="text-center border-x border-white/10">
                <div class="text-3xl sm:text-4xl font-bold text-primary-400">🔥</div>
                <div class="text-xs text-white/50 mt-1 uppercase tracking-wider">Super Pedas</div>
            </div>
            <div class="text-center">
                <div class="text-3xl sm:text-4xl font-bold text-primary-400">5★</div>
                <div class="text-xs text-white/50 mt-1 uppercase tracking-wider">Rating</div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
        <span class="text-xs text-white/40 uppercase tracking-widest">Scroll</span>
        <div class="w-6 h-10 border-2 border-white/20 rounded-full flex justify-center p-2">
            <div class="w-1.5 h-1.5 bg-primary-400 rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Search & Menu Section -->
<section id="menu" class="py-24 bg-neutral-950 relative">
    <!-- Background decoration -->
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500/30 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="text-primary-400 text-sm font-semibold uppercase tracking-[0.3em]">Menu Kami</span>
            <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white mt-4 mb-6">
                Pilih <span class="text-primary-400">Favoritmu</span>
            </h2>
            <p class="text-white/50 max-w-2xl mx-auto text-lg">Setiap hidangan dibuat dengan sambal tempong autentik racikan khas Banyuwangi.</p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto mb-16">
            <form action="/" method="get" class="relative group">
                <div class="absolute inset-0 bg-primary-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                <div class="relative flex items-center bg-neutral-900 border border-white/10 rounded-2xl overflow-hidden focus-within:border-primary-500/50 transition-all duration-300">
                    <div class="pl-6 text-white/30">
                        <i class="fas fa-search text-lg"></i>
                    </div>
                    <input 
                        type="text" 
                        name="search" 
                        value="<?= esc($keyword ?? '') ?>"
                        placeholder="Cari menu favoritmu..." 
                        class="w-full bg-transparent text-white placeholder-white/30 px-4 py-5 text-lg focus:outline-none"
                        id="searchInput"
                    >
                    <button type="submit" class="bg-primary-500 hover:bg-primary-600 text-white px-8 py-5 font-semibold transition-colors duration-300 text-sm uppercase tracking-wider">
                        Cari
                    </button>
                </div>
            </form>
            <?php if (!empty($keyword)): ?>
                <div class="mt-4 flex items-center justify-between">
                    <p class="text-white/50">
                        Hasil pencarian untuk "<span class="text-primary-400 font-semibold"><?= esc($keyword) ?></span>" 
                        — ditemukan <span class="text-white font-semibold"><?= count($menu) ?></span> menu
                    </p>
                    <a href="/" class="text-primary-400 hover:text-primary-300 text-sm flex items-center gap-2 transition-colors">
                        <i class="fas fa-times"></i> Reset
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Menu Grid -->
        <?php if (empty($menu)): ?>
            <div class="text-center py-20">
                <div class="text-6xl mb-6">🍽️</div>
                <h3 class="text-2xl font-bold text-white mb-2">Menu Tidak Ditemukan</h3>
                <p class="text-white/50 mb-6">Coba kata kunci lain atau lihat semua menu kami.</p>
                <a href="/" class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-full font-semibold transition-colors inline-flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Lihat Semua Menu
                </a>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($menu as $index => $item): ?>
                    <a href="/detail/<?= $item['id'] ?>" class="menu-card group block bg-neutral-900/80 rounded-2xl overflow-hidden border border-white/5 hover:border-primary-500/30">
                        <!-- Image -->
                        <div class="relative h-56 overflow-hidden">
                            <?php 
                            $imgSrc = $item['gambar'] ? '/uploads/' . $item['gambar'] : '/uploads/hero-banner.jpg';
                            ?>
                            <img src="<?= $imgSrc ?>" alt="<?= esc($item['nama_makanan']) ?>" class="card-img w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-900 via-transparent to-transparent opacity-60"></div>
                            
                            <!-- Price Badge -->
                            <div class="absolute top-4 right-4 bg-primary-500 text-white px-3 py-1.5 rounded-full text-sm font-bold shadow-lg">
                                Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                            </div>
                            
                            <!-- Region Badge -->
                            <div class="absolute bottom-4 left-4 flex items-center gap-2">
                                <span class="bg-black/50 backdrop-blur-sm text-white/80 px-3 py-1 rounded-full text-xs border border-white/10">
                                    <i class="fas fa-map-marker-alt text-primary-400 mr-1"></i>
                                    <?= esc($item['asal_daerah']) ?>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-white group-hover:text-primary-400 transition-colors duration-300 mb-2">
                                <?= esc($item['nama_makanan']) ?>
                            </h3>
                            <p class="text-white/40 text-sm leading-relaxed line-clamp-2">
                                <?= esc($item['deskripsi_singkat']) ?>
                            </p>
                            
                            <!-- Action -->
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-primary-400 text-sm font-semibold group-hover:underline inline-flex items-center gap-1">
                                    Lihat Detail
                                    <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                                </span>
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-fire text-orange-400 text-xs"></i>
                                    <span class="text-white/30 text-xs">Pedas</span>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-24 bg-neutral-900 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-accent-400/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div class="relative">
                <div class="absolute inset-0 bg-primary-500/20 rounded-3xl blur-3xl"></div>
                <img src="/uploads/hero-banner.jpg" alt="Tentang Zahra Nasi Tempong" class="relative rounded-3xl shadow-2xl border border-white/10 w-full object-cover h-[500px]">
                <div class="absolute -bottom-6 -right-6 bg-primary-500 text-white p-6 rounded-2xl shadow-xl">
                    <div class="text-3xl font-bold">Est.</div>
                    <div class="text-sm font-medium mt-1">2024</div>
                </div>
            </div>
            
            <!-- Content -->
            <div>
                <span class="text-primary-400 text-sm font-semibold uppercase tracking-[0.3em]">Tentang Kami</span>
                <h2 class="font-display text-4xl sm:text-5xl font-bold text-white mt-4 mb-6">
                    Cerita di Balik <br><span class="text-primary-400">Sambal Tempong</span>
                </h2>
                <div class="space-y-4 text-white/60 leading-relaxed">
                    <p>
                        <strong class="text-white">Zahra Nasi Tempong</strong> hadir membawa cita rasa autentik Banyuwangi ke meja makan Anda. 
                        Nama "tempong" berasal dari bahasa Osing yang berarti <em class="text-primary-400">"terlempar"</em> — menggambarkan sensasi pedas yang begitu kuat hingga membuat mulut serasa terlempar.
                    </p>
                    <p>
                        Setiap porsi sambal tempong kami diracik dari cabai rawit pilihan, terasi udang Banyuwangi asli, 
                        dan rempah-rempah tradisional yang telah diwariskan turun-temurun.
                    </p>
                </div>
                
                <!-- Features -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-neutral-800/50 border border-white/5 rounded-xl p-4 flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-leaf text-primary-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">100% Fresh</h4>
                            <p class="text-white/40 text-xs mt-1">Bahan segar pilihan setiap hari</p>
                        </div>
                    </div>
                    <div class="bg-neutral-800/50 border border-white/5 rounded-xl p-4 flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-fire text-primary-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">Sambal Asli</h4>
                            <p class="text-white/40 text-xs mt-1">Resep autentik Banyuwangi</p>
                        </div>
                    </div>
                    <div class="bg-neutral-800/50 border border-white/5 rounded-xl p-4 flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hand-holding-heart text-primary-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">Handmade</h4>
                            <p class="text-white/40 text-xs mt-1">Dibuat dengan penuh cinta</p>
                        </div>
                    </div>
                    <div class="bg-neutral-800/50 border border-white/5 rounded-xl p-4 flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-truck text-primary-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">Fast Delivery</h4>
                            <p class="text-white/40 text-xs mt-1">Sampai dalam 30 menit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact / Footer -->
<footer id="contact" class="bg-neutral-950 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-4 gap-12">
            <!-- Brand -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-pepper-hot text-white text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-white">ZAHRA</span>
                        <span class="text-xs block text-primary-400 -mt-1 tracking-[0.2em]">NASI TEMPONG</span>
                    </div>
                </div>
                <p class="text-white/40 leading-relaxed max-w-md">
                    Menghadirkan cita rasa autentik Nasi Tempong Banyuwangi dengan sambal pedas legendaris yang membuat ketagihan.
                </p>
                <div class="flex gap-3 mt-6">
                    <a href="#" class="w-10 h-10 bg-white/5 hover:bg-primary-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-instagram text-white/60 hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 hover:bg-primary-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-tiktok text-white/60 hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 hover:bg-primary-500 rounded-xl flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-whatsapp text-white/60 hover:text-white"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Menu</h4>
                <ul class="space-y-3">
                    <li><a href="#menu" class="text-white/40 hover:text-primary-400 transition-colors text-sm">Semua Menu</a></li>
                    <li><a href="#about" class="text-white/40 hover:text-primary-400 transition-colors text-sm">Tentang Kami</a></li>
                    <li><a href="/login" class="text-white/40 hover:text-primary-400 transition-colors text-sm">Admin Login</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Kontak</h4>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-white/40 text-sm">
                        <i class="fas fa-map-marker-alt text-primary-400 w-4"></i>
                        Banyuwangi, Jawa Timur
                    </li>
                    <li class="flex items-center gap-3 text-white/40 text-sm">
                        <i class="fas fa-phone text-primary-400 w-4"></i>
                        +62 812-3456-7890
                    </li>
                    <li class="flex items-center gap-3 text-white/40 text-sm">
                        <i class="fas fa-envelope text-primary-400 w-4"></i>
                        info@zahratempong.id
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-white/5 mt-12 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-white/30 text-sm">&copy; 2024 Zahra Nasi Tempong. Crafted by Naila Aribah Zahra.</p>
            <p class="text-white/20 text-xs">Makanan Khas Banyuwangi, Jawa Timur</p>
        </div>
    </div>
</footer>

<!-- Mobile menu script -->
<script>
    // Mobile Menu Toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('bg-neutral-950/95', 'shadow-xl');
        } else {
            navbar.classList.remove('bg-neutral-950/95', 'shadow-xl');
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                // Close mobile menu if open
                document.getElementById('mobileMenu').classList.add('hidden');
            }
        });
    });
</script>

<?= $this->endSection() ?>