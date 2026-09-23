<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<!-- Navbar -->
<nav class="bg-neutral-900/90 backdrop-blur-md border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="<?= base_url() ?>" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-primary-500 flex items-center justify-center text-neutral-950 font-black text-xl shadow-lg shadow-primary-500/30 group-hover:scale-105 transition-transform">
                    Z
                </div>
                <div class="flex flex-col">
                    <span class="font-display text-xl font-bold tracking-tight text-white group-hover:text-primary-400 transition-colors">ZAHRA</span>
                    <span class="text-[10px] tracking-widest text-primary-400 font-semibold uppercase -mt-1">Nasi Tempong</span>
                </div>
            </a>
            
            <a href="<?= base_url() ?>#menu" class="flex items-center gap-2 text-sm text-neutral-300 hover:text-primary-400 font-medium transition-colors">
                <i class="fa-solid font-bold fa-arrow-left"></i>
                <span>Kembali ke Menu</span>
            </a>
        </div>
    </div>
</nav>

<!-- Main Detail Content -->
<main class="py-12 lg:py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
        
        <!-- Left Column: Image Gallery/Card -->
        <div class="relative group">
            <div class="absolute -inset-2 bg-gradient-to-r from-primary-500/30 to-emerald-600/30 rounded-3xl blur-xl opacity-50 group-hover:opacity-100 transition duration-1000"></div>
            <div class="relative rounded-2xl overflow-hidden bg-neutral-900 border border-white/10 shadow-2xl">
                <img src="<?= base_url('uploads/' . esc($item['gambar'])) ?>" 
                     alt="<?= esc($item['nama_makanan']) ?>" 
                     class="w-full h-[400px] sm:h-[500px] object-cover group-hover:scale-105 transition-transform duration-700"
                     onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&auto=format&fit=crop&q=80'">
                
                <div class="absolute top-4 right-4 bg-neutral-950/80 backdrop-blur-md px-4 py-2 rounded-full border border-white/10 text-xs font-semibold text-primary-400 flex items-center gap-2">
                    <i class="fa-solid fa-map-pin"></i>
                    <span><?= esc($item['asal_daerah']) ?></span>
                </div>
                
                <div class="absolute bottom-4 left-4 bg-red-600/90 backdrop-blur-md px-3 py-1.5 rounded-lg text-xs font-bold text-white flex items-center gap-1.5 shadow-lg">
                    <i class="fa-solid fa-pepper-hot"></i>
                    <span>Pedas Mantap</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Food Details -->
        <div class="flex flex-col space-y-6">
            <div>
                <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-primary-500/10 text-primary-400 border border-primary-500/20 mb-3">
                    Spesial Jawa Timur
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-display leading-tight">
                    <?= esc($item['nama_makanan']) ?>
                </h1>
                <p class="text-neutral-400 text-sm mt-1">
                    Authentic Recipe by Restoran Zahra
                </p>
            </div>

            <!-- Price & Rating -->
            <div class="flex items-baseline gap-4 py-4 border-y border-white/10">
                <div class="text-3xl sm:text-4xl font-extrabold text-primary-400">
                    Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                </div>
                <div class="flex items-center gap-1 text-amber-400 text-sm">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="text-neutral-400 text-xs ml-1">(4.9/5.0)</span>
                </div>
            </div>

            <!-- Description -->
            <div class="space-y-3">
                <h3 class="text-lg font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-align-left text-primary-500"></i>
                    <span>Deskripsi Menu</span>
                </h3>
                <p class="text-neutral-300 leading-relaxed text-base">
                    <?= nl2br(esc($item['deskripsi_singkat'])) ?>
                </p>
            </div>

            <!-- Features / Ingredients checklist -->
            <div class="grid grid-cols-2 gap-3 py-4">
                <div class="bg-neutral-900/60 p-3.5 rounded-xl border border-white/5 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-primary-500/20 text-primary-400 flex items-center justify-center">
                        <i class="fa-solid fa-pepper-hot"></i>
                    </div>
                    <div>
                        <span class="text-xs text-neutral-400 block">Sambal</span>
                        <span class="text-xs font-bold text-white">Tempong Fresh</span>
                    </div>
                </div>
                <div class="bg-neutral-900/60 p-3.5 rounded-xl border border-white/5 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-primary-500/20 text-primary-400 flex items-center justify-center">
                        <i class="fa-solid fa-[#FFF7ED]"></i>
                        <i class="fa-solid fa-bowl-rice"></i>
                    </div>
                    <div>
                        <span class="text-xs text-neutral-400 block">Nasi</span>
                        <span class="text-xs font-bold text-white">Pulen Hangat</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="pt-4 space-y-4">
                <a href="https://wa.me/6281234567890?text=Halo%20Restoran%20Zahra,%20saya%20ingin%20pesan%20<?= urlencode($item['nama_makanan']) ?>" 
                   target="_blank"
                   class="w-full py-4 bg-primary-500 hover:bg-primary-600 text-neutral-950 font-bold rounded-xl flex items-center justify-center gap-3 shadow-lg shadow-primary-500/25 transition-all text-base btn-glow">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    <span>Pesan via WhatsApp Now</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Related Menu Section -->
    <?php if (!empty($related)): ?>
    <section class="mt-24 pt-12 border-t border-white/10">
        <h2 class="text-2xl font-bold font-display text-white mb-8 flex items-center gap-3">
            <span class="w-3 h-8 bg-primary-500 rounded-full"></span>
            <span>Menu Khas Jawa Timur Lainnya</span>
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($related as $rel): ?>
            <a href="<?= base_url('detail/' . $rel['id']) ?>" class="group bg-neutral-900 rounded-2xl border border-white/10 overflow-hidden hover:border-primary-500/50 transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= base_url('uploads/' . esc($rel['gambar'])) ?>" alt="<?= esc($rel['nama_makanan']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&auto=format&fit=crop&q=80'">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-white group-hover:text-primary-400 transition-colors line-clamp-1"><?= esc($rel['nama_makanan']) ?></h3>
                    <p class="text-xs text-neutral-400 mt-1 line-clamp-2"><?= esc($rel['deskripsi_singkat']) ?></p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="font-extrabold text-primary-400">Rp <?= number_format($rel['harga'], 0, ',', '.') ?></span>
                        <span class="text-xs font-semibold text-neutral-300 group-hover:text-primary-400 transition-colors">Lihat Detail &rarr;</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<footer class="bg-neutral-950 border-t border-white/10 py-8 mt-12 text-center text-xs text-neutral-500">
    <p>&copy; <?= date('Y') ?> Zahra Nasi Tempong - Kuliner Khas Jawa Timur. Hak Cipta Dilindungi.</p>
</footer>

<?= $this->endSection() ?>
