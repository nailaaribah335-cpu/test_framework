<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<!-- Navbar Header -->
<nav class="bg-neutral-950/90 backdrop-blur-md border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="<?= base_url() ?>" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-primary-500 flex items-center justify-center text-neutral-950 font-black text-xl shadow-lg shadow-primary-500/30 group-hover:scale-105 transition-transform">
                    Z
                </div>
                <div class="flex flex-col">
                    <span class="font-display text-xl font-bold tracking-tight text-white group-hover:text-primary-400 transition-colors">ZAHRA</span>
                    <span class="text-[10px] tracking-widest text-primary-400 font-semibold uppercase -mt-1">Nasi Tempong Jawa Timur</span>
                </div>
            </a>
            
            <div class="flex items-center gap-4">
                <a href="<?= base_url() ?>#menu" class="px-4 py-2 rounded-xl bg-neutral-900 hover:bg-neutral-800 border border-white/10 text-sm text-neutral-300 hover:text-primary-400 font-medium transition-all flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left text-xs"></i>
                    <span>Kembali ke Menu</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Breadcrumb -->
<div class="bg-neutral-900/50 border-b border-white/5 py-3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2 text-xs text-neutral-400">
        <a href="<?= base_url() ?>" class="hover:text-primary-400 transition-colors">Beranda</a>
        <i class="fa-solid fa-chevron-right text-[10px]"></i>
        <a href="<?= base_url() ?>#menu" class="hover:text-primary-400 transition-colors">Menu Jawa Timur</a>
        <i class="fa-solid fa-chevron-right text-[10px]"></i>
        <span class="text-primary-400 font-semibold"><?= esc($item['nama_makanan']) ?></span>
    </div>
</div>

<!-- Main Detail Content -->
<main class="py-10 lg:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
        
        <!-- Left Column: Image Showcase with AI Badge & Tags (5 cols) -->
        <div class="lg:col-span-5 space-y-6">
            <div class="relative group">
                <div class="absolute -inset-1.5 bg-gradient-to-r from-primary-500 to-emerald-600 rounded-3xl blur-xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                <div class="relative rounded-2xl overflow-hidden bg-neutral-900 border border-white/10 shadow-2xl">
                    <img id="mainFoodImage" 
                         src="<?= base_url('uploads/' . esc($item['gambar'])) ?>" 
                         alt="<?= esc($item['nama_makanan']) ?>" 
                         class="w-full h-[380px] sm:h-[460px] object-cover group-hover:scale-105 transition-transform duration-700"
                         onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&auto=format&fit=crop&q=80'">
                    
                    <!-- Badges -->
                    <div class="absolute top-4 left-4 flex flex-col gap-2">
                        <span class="bg-neutral-950/80 backdrop-blur-md px-3 py-1.5 rounded-full border border-primary-500/30 text-xs font-semibold text-primary-400 flex items-center gap-1.5 shadow-lg">
                            <i class="fa-solid fa-wand-magic-sparkles text-primary-400"></i>
                            <span>Foto Visual AI</span>
                        </span>
                        <span class="bg-neutral-950/80 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/10 text-xs font-semibold text-accent-50 flex items-center gap-1.5 shadow-lg">
                            <i class="fa-solid fa-map-pin text-primary-400"></i>
                            <span><?= esc($item['asal_daerah']) ?></span>
                        </span>
                    </div>

                    <div class="absolute bottom-4 right-4 bg-red-600/90 backdrop-blur-md px-3 py-1.5 rounded-xl text-xs font-bold text-white flex items-center gap-1.5 shadow-lg">
                        <i class="fa-solid fa-pepper-hot"></i>
                        <span>Sambal Tempong Khas</span>
                    </div>
                </div>
            </div>

            <!-- Highlights Specs -->
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-neutral-900/80 p-4 rounded-xl border border-white/5 text-center">
                    <i class="fa-solid fa-fire text-amber-500 text-lg mb-1"></i>
                    <span class="block text-[11px] text-neutral-400 uppercase font-semibold">Tingkat Pedas</span>
                    <span class="text-xs font-bold text-white">Pedas Mantap</span>
                </div>
                <div class="bg-neutral-900/80 p-4 rounded-xl border border-white/5 text-center">
                    <i class="fa-solid fa-clock text-primary-400 text-lg mb-1"></i>
                    <span class="block text-[11px] text-neutral-400 uppercase font-semibold">Penyajian</span>
                    <span class="text-xs font-bold text-white">10-15 Menit</span>
                </div>
                <div class="bg-neutral-900/80 p-4 rounded-xl border border-white/5 text-center">
                    <i class="fa-solid fa-thumbs-up text-emerald-400 text-lg mb-1"></i>
                    <span class="block text-[11px] text-neutral-400 uppercase font-semibold">Kualitas</span>
                    <span class="text-xs font-bold text-white">100% Autentik</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Interactive Details & Order Calculator (7 cols) -->
        <div class="lg:col-span-7 space-y-6">
            
            <!-- Title & Price Banner -->
            <div class="bg-neutral-900/60 p-6 rounded-2xl border border-white/10 space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-accent-50 text-neutral-950 border border-amber-200/50">
                        🔥 Kuliner Khas Banyuwangi
                    </span>
                    <div class="flex items-center gap-1 text-amber-400 text-sm">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span class="text-neutral-300 font-semibold text-xs ml-1">(4.9/5 dari 128 ulasan)</span>
                    </div>
                </div>

                <h1 class="text-3xl sm:text-4xl font-black text-white font-display leading-tight">
                    <?= esc($item['nama_makanan']) ?>
                </h1>

                <div class="flex items-baseline gap-3 pt-2">
                    <span class="text-3xl sm:text-4xl font-black text-primary-400">
                        Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                    </span>
                    <span class="text-xs text-neutral-400 font-medium">/ porsi komplit</span>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-neutral-900/40 p-6 rounded-2xl border border-white/5 space-y-3">
                <h3 class="text-base font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-circle-info text-primary-400"></i>
                    <span>Deskripsi & Cita Rasa</span>
                </h3>
                <p class="text-neutral-300 text-sm sm:text-base leading-relaxed">
                    <?= nl2br(esc($item['deskripsi_singkat'])) ?>
                </p>
            </div>

            <!-- FITUR TAMBAHAN: Interactive Order & Sambal Customizer -->
            <div class="bg-gradient-to-br from-neutral-900 to-neutral-950 p-6 rounded-2xl border border-primary-500/30 space-y-6 shadow-xl relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-primary-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex items-center justify-between border-b border-white/10 pb-4">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-sliders text-primary-400 text-lg"></i>
                        <h3 class="text-base font-bold text-white">Fitur Interactive Order</h3>
                    </div>
                    <span class="text-[11px] bg-primary-500/20 text-primary-400 font-semibold px-2.5 py-1 rounded-md border border-primary-500/30">Kalkulator Real-time</span>
                </div>

                <!-- Sambal Level Selector -->
                <div class="space-y-3">
                    <label class="block text-xs font-semibold text-neutral-300 uppercase tracking-wider">
                        Pilih Tingkat Kepedasan Sambal Tempong:
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5" id="levelContainer">
                        <button type="button" onclick="selectLevel(1, 'Pedas Sedang')" class="level-btn py-2.5 px-3 rounded-xl border border-white/10 bg-neutral-800 text-xs font-semibold text-neutral-300 hover:border-primary-500 transition-all text-center" data-level="1">
                            🌶️ Level 1<br><span class="text-[10px] text-neutral-400 font-normal">Pedas Sedang</span>
                        </button>
                        <button type="button" onclick="selectLevel(2, 'Pedas Mantap')" class="level-btn active-level py-2.5 px-3 rounded-xl border border-primary-500 bg-primary-500/20 text-xs font-bold text-primary-400 transition-all text-center" data-level="2">
                            🌶️🌶️ Level 2<br><span class="text-[10px] text-primary-300 font-normal">Pedas Mantap</span>
                        </button>
                        <button type="button" onclick="selectLevel(3, 'Pedas Garang')" class="level-btn py-2.5 px-3 rounded-xl border border-white/10 bg-neutral-800 text-xs font-semibold text-neutral-300 hover:border-primary-500 transition-all text-center" data-level="3">
                            🌶️🌶️🌶️ Level 3<br><span class="text-[10px] text-neutral-400 font-normal">Pedas Garang</span>
                        </button>
                        <button type="button" onclick="selectLevel(4, 'Pedas Mbledos')" class="level-btn py-2.5 px-3 rounded-xl border border-white/10 bg-neutral-800 text-xs font-semibold text-neutral-300 hover:border-primary-500 transition-all text-center" data-level="4">
                            🔥 Level 4<br><span class="text-[10px] text-neutral-400 font-normal">Pedas Mbledos</span>
                        </button>
                    </div>
                </div>

                <!-- Quantity Counter -->
                <div class="flex items-center justify-between pt-2">
                    <span class="text-xs font-semibold text-neutral-300 uppercase tracking-wider">Jumlah Porsi:</span>
                    <div class="flex items-center gap-3 bg-neutral-800 p-1.5 rounded-xl border border-white/10">
                        <button type="button" onclick="changeQty(-1)" class="w-8 h-8 rounded-lg bg-neutral-700 hover:bg-neutral-600 text-white font-bold flex items-center justify-center transition-colors">
                            <i class="fa-solid fa-minus text-xs"></i>
                        </button>
                        <span id="qtyVal" class="w-8 text-center font-bold text-white text-base">1</span>
                        <button type="button" onclick="changeQty(1)" class="w-8 h-8 rounded-lg bg-primary-500 hover:bg-primary-600 text-neutral-950 font-bold flex items-center justify-center transition-colors">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Total Estimator -->
                <div class="bg-neutral-950/80 p-4 rounded-xl border border-white/10 flex items-center justify-between">
                    <div>
                        <span class="text-xs text-neutral-400 block">Total Estimasi Harga:</span>
                        <span id="selectedLevelText" class="text-[11px] text-primary-400">Tingkat Sambal: Level 2 (Pedas Mantap)</span>
                    </div>
                    <div id="totalPrice" class="text-2xl font-black text-primary-400">
                        Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                    </div>
                </div>

                <!-- Order via WhatsApp Button -->
                <button type="button" onclick="orderWhatsApp()" class="w-full py-4 bg-primary-500 hover:bg-primary-600 text-neutral-950 font-extrabold rounded-xl flex items-center justify-center gap-3 shadow-lg shadow-primary-500/25 transition-all text-base btn-glow">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    <span>Pesan Langsung via WhatsApp</span>
                </button>
            </div>

            <!-- FITUR VALIDASI FORM: Ulasan & Review Pelanggan -->
            <div class="bg-neutral-900/60 p-6 rounded-2xl border border-white/10 space-y-6">
                <div class="flex items-center justify-between border-b border-white/10 pb-4">
                    <h3 class="text-base font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-comments text-primary-400"></i>
                        <span>Ulasan & Penilaian Pelanggan</span>
                    </h3>
                    <span class="text-xs text-neutral-400">Validasi Real-time</span>
                </div>

                <!-- Review Form with Client Validation -->
                <form id="reviewForm" onsubmit="handleReviewSubmit(event)" class="space-y-4">
                    <div id="reviewSuccessAlert" class="hidden p-4 rounded-xl bg-primary-500/20 border border-primary-500 text-primary-400 text-xs font-semibold">
                        <i class="fa-solid fa-circle-check mr-2"></i> Terima kasih! Ulasan Anda berhasil dikirim dan akan ditampilkan setelah verifikasi.
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="rev_nama" class="block text-xs font-medium text-neutral-300 mb-1">Nama Lengkap *</label>
                            <input type="text" id="rev_nama" placeholder="Masukkan nama Anda" class="w-full px-4 py-2.5 bg-neutral-800 border border-white/10 rounded-xl text-sm text-white focus:outline-none focus:border-primary-500 transition-colors">
                            <span id="err_rev_nama" class="text-[11px] text-red-400 hidden mt-1 block"></span>
                        </div>
                        <div>
                            <label for="rev_rating" class="block text-xs font-medium text-neutral-300 mb-1">Rating *</label>
                            <select id="rev_rating" class="w-full px-4 py-2.5 bg-neutral-800 border border-white/10 rounded-xl text-sm text-white focus:outline-none focus:border-primary-500 transition-colors">
                                <option value="5">⭐⭐⭐⭐⭐ (5/5) Sempurna!</option>
                                <option value="4">⭐⭐⭐⭐ (4/5) Enak Banget</option>
                                <option value="3">⭐⭐⭐ (3/5) Cukup Baik</option>
                                <option value="2">⭐⭐ (2/5) Kurang Pedas</option>
                                <option value="1">⭐ (1/5) Perlu Perbaikan</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="rev_pesan" class="block text-xs font-medium text-neutral-300 mb-1">Komentar / Ulasan *</label>
                        <textarea id="rev_pesan" rows="3" placeholder="Bagaimana rasa sambal tempong dan lauknya?" class="w-full px-4 py-2.5 bg-neutral-800 border border-white/10 rounded-xl text-sm text-white focus:outline-none focus:border-primary-500 transition-colors"></textarea>
                        <span id="err_rev_pesan" class="text-[11px] text-red-400 hidden mt-1 block"></span>
                    </div>

                    <button type="submit" class="px-6 py-2.5 bg-neutral-800 hover:bg-neutral-700 text-white font-bold text-xs rounded-xl border border-white/10 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane text-primary-400"></i>
                        <span>Kirim Ulasan</span>
                    </button>
                </form>

                <!-- Sample Reviews -->
                <div class="space-y-3 pt-4 border-t border-white/5">
                    <div class="p-4 rounded-xl bg-neutral-950/60 border border-white/5">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-xs font-bold text-white">Budi Santoso (Surabaya)</span>
                            <span class="text-amber-400 text-xs">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-xs text-neutral-300">"Sambal tempongnya bener-bener mbledos di lidah! Lauknya gurih renyah, serasa makan di Banyuwangi langsung."</p>
                    </div>
                    <div class="p-4 rounded-xl bg-neutral-950/60 border border-white/5">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-xs font-bold text-white">Siti Rahma (Malang)</span>
                            <span class="text-amber-400 text-xs">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-xs text-neutral-300">"Porsi kenyang, harga ramah kantong. Pilihan terbaik kuliner Jawa Timur di restoran Restoran Zahra!"</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Related Menu Section -->
    <?php if (!empty($related)): ?>
    <section class="mt-20 pt-12 border-t border-white/10 space-y-8">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <span class="text-xs font-bold text-primary-400 tracking-wider uppercase">Rekomendasi Spesial</span>
                <h2 class="text-2xl sm:text-3xl font-bold font-display text-white mt-1">
                    Varian Nasi Tempong Khas Jawa Timur Lainnya
                </h2>
            </div>
            <a href="<?= base_url() ?>#menu" class="text-xs font-semibold text-primary-400 hover:underline flex items-center gap-1">
                <span>Lihat Semua Menu</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($related as $rel): ?>
            <a href="<?= base_url('detail/' . $rel['id']) ?>" class="group bg-neutral-900 rounded-2xl border border-white/10 overflow-hidden hover:border-primary-500/50 transition-all duration-300 hover:-translate-y-2 shadow-xl">
                <div class="h-52 overflow-hidden relative">
                    <img src="<?= base_url('uploads/' . esc($rel['gambar'])) ?>" alt="<?= esc($rel['nama_makanan']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&auto=format&fit=crop&q=80'">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-neutral-950/80 backdrop-blur-md text-[10px] font-semibold text-primary-400 border border-white/10">
                        <?= esc($rel['asal_daerah']) ?>
                    </span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-white group-hover:text-primary-400 transition-colors line-clamp-1"><?= esc($rel['nama_makanan']) ?></h3>
                    <p class="text-xs text-neutral-400 mt-1 line-clamp-2"><?= esc($rel['deskripsi_singkat']) ?></p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="font-extrabold text-primary-400 text-lg">Rp <?= number_format($rel['harga'], 0, ',', '.') ?></span>
                        <span class="text-xs font-semibold text-neutral-300 group-hover:text-primary-400 transition-colors flex items-center gap-1">
                            <span>Detail</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<!-- JS Scripts for Interactive Features & Validation -->
<script>
    const unitPrice = <?= (int)$item['harga'] ?>;
    const foodName = "<?= addslashes(esc($item['nama_makanan'])) ?>";
    let currentQty = 1;
    let selectedLevel = 2;
    let selectedLevelLabel = "Level 2 (Pedas Mantap)";

    function selectLevel(lvl, label) {
        selectedLevel = lvl;
        selectedLevelLabel = `Level ${lvl} (${label})`;
        
        document.querySelectorAll('.level-btn').forEach(btn => {
            btn.classList.remove('border-primary-500', 'bg-primary-500/20', 'text-primary-400', 'font-bold');
            btn.classList.add('border-white/10', 'bg-neutral-800', 'text-neutral-300');
        });

        const activeBtn = document.querySelector(`.level-btn[data-level="${lvl}"]`);
        if (activeBtn) {
            activeBtn.classList.remove('border-white/10', 'bg-neutral-800', 'text-neutral-300');
            activeBtn.classList.add('border-primary-500', 'bg-primary-500/20', 'text-primary-400', 'font-bold');
        }

        document.getElementById('selectedLevelText').innerText = `Tingkat Sambal: ${selectedLevelLabel}`;
    }

    function changeQty(delta) {
        currentQty = Math.max(1, currentQty + delta);
        document.getElementById('qtyVal').innerText = currentQty;
        updateTotal();
    }

    function updateTotal() {
        const total = unitPrice * currentQty;
        document.getElementById('totalPrice').innerText = 'Rp ' + total.toLocaleString('id-ID');
    }

    function orderWhatsApp() {
        const total = unitPrice * currentQty;
        const msg = `Halo Restoran Zahra (Naila Aribah Zahra)! Saya ingin pesan:\n\n` +
                    `🍽️ Menu: ${foodName}\n` +
                    `🌶️ Sambal: ${selectedLevelLabel}\n` +
                    `📦 Jumlah: ${currentQty} porsi\n` +
                    `💰 Total: Rp ${total.toLocaleString('id-ID')}\n\n` +
                    `Mohon diproses untuk lokasi pengiriman saya. Terima kasih!`;
        const url = `https://wa.me/6281234567890?text=${encodeURIComponent(msg)}`;
        window.open(url, '_blank');
    }

    function handleReviewSubmit(e) {
        e.preventDefault();
        const nama = document.getElementById('rev_nama').value.trim();
        const pesan = document.getElementById('rev_pesan').value.trim();
        let valid = true;

        // Reset errors
        document.getElementById('err_rev_nama').classList.add('hidden');
        document.getElementById('err_rev_pesan').classList.add('hidden');

        if (nama.length < 3) {
            document.getElementById('err_rev_nama').innerText = 'Nama minimal 3 karakter.';
            document.getElementById('err_rev_nama').classList.remove('hidden');
            valid = false;
        }

        if (pesan.length < 5) {
            document.getElementById('err_rev_pesan').innerText = 'Ulasan minimal 5 karakter.';
            document.getElementById('err_rev_pesan').classList.remove('hidden');
            valid = false;
        }

        if (valid) {
            document.getElementById('reviewSuccessAlert').classList.remove('hidden');
            document.getElementById('reviewForm').reset();
            setTimeout(() => {
                document.getElementById('reviewSuccessAlert').classList.add('hidden');
            }, 5000);
        }
    }
</script>

<footer class="bg-neutral-950 border-t border-white/10 py-8 mt-12 text-center text-xs text-neutral-500">
    <p>&copy; <?= date('Y') ?> Restoran Zahra - Kuliner Khas Jawa Timur (Nasi Tempong). Hak Cipta Dilindungi.</p>
</footer>

<?= $this->endSection() ?>
