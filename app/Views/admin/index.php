<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<!-- Admin Navbar -->
<nav class="bg-neutral-900 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-4">
                <a href="/" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-primary-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-pepper-hot text-white text-sm"></i>
                    </div>
                    <span class="text-lg font-bold text-white">ZAHRA</span>
                </a>
                <span class="text-white/20">|</span>
                <span class="text-white/50 text-sm font-medium">Admin Panel</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 text-white/50 text-sm">
                    <div class="w-8 h-8 bg-primary-500/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-primary-400 text-xs"></i>
                    </div>
                    <span class="hidden sm:inline"><?= esc(session()->get('nama') ?? 'Admin') ?></span>
                </div>
                <a href="/" class="text-white/40 hover:text-white text-sm transition-colors" title="Lihat Website">
                    <i class="fas fa-external-link-alt"></i>
                </a>
                <a href="/logout" class="text-red-400/60 hover:text-red-400 text-sm transition-colors flex items-center gap-1.5">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="hidden sm:inline">Logout</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Kelola Menu</h1>
            <p class="text-white/40 text-sm mt-1">Total <span class="text-primary-400 font-semibold"><?= count($menu) ?></span> menu tersedia</p>
        </div>
        <a href="/admin/create" class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 btn-glow inline-flex items-center gap-2">
            <i class="fas fa-plus"></i>
            Tambah Menu
        </a>
    </div>

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-primary-500/10 border border-primary-500/20 rounded-xl p-4 mb-6 flex items-center gap-3" id="flashSuccess">
            <i class="fas fa-check-circle text-primary-400"></i>
            <span class="text-primary-300 text-sm"><?= session()->getFlashdata('success') ?></span>
            <button onclick="this.parentElement.remove()" class="ml-auto text-white/30 hover:text-white/60">
                <i class="fas fa-times"></i>
            </button>
        </div>
    <?php endif; ?>

    <!-- Menu Table -->
    <div class="bg-neutral-900/80 rounded-2xl border border-white/5 overflow-hidden">
        <!-- Desktop Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-white/5">
                        <th class="text-left text-xs font-semibold text-white/40 uppercase tracking-wider px-6 py-4">Menu</th>
                        <th class="text-left text-xs font-semibold text-white/40 uppercase tracking-wider px-6 py-4">Asal Daerah</th>
                        <th class="text-left text-xs font-semibold text-white/40 uppercase tracking-wider px-6 py-4">Harga</th>
                        <th class="text-right text-xs font-semibold text-white/40 uppercase tracking-wider px-6 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php if (empty($menu)): ?>
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center">
                                <div class="text-4xl mb-3">🍽️</div>
                                <p class="text-white/40 text-sm">Belum ada menu. Mulai tambahkan sekarang!</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($menu as $item): ?>
                            <tr class="hover:bg-white/[0.02] transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-14 h-14 rounded-xl overflow-hidden flex-shrink-0 border border-white/10">
                                            <?php $imgSrc = $item['gambar'] ? '/uploads/' . $item['gambar'] : '/uploads/hero-banner.jpg'; ?>
                                            <img src="<?= $imgSrc ?>" alt="<?= esc($item['nama_makanan']) ?>" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <h3 class="text-white font-semibold text-sm"><?= esc($item['nama_makanan']) ?></h3>
                                            <p class="text-white/30 text-xs mt-0.5 line-clamp-1 max-w-xs"><?= esc($item['deskripsi_singkat']) ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-white/50 text-sm flex items-center gap-1.5">
                                        <i class="fas fa-map-marker-alt text-primary-400 text-xs"></i>
                                        <?= esc($item['asal_daerah']) ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-primary-400 font-semibold text-sm">Rp <?= number_format($item['harga'], 0, ',', '.') ?></span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="/detail/<?= $item['id'] ?>" class="w-8 h-8 bg-white/5 hover:bg-white/10 rounded-lg flex items-center justify-center transition-colors" title="Lihat">
                                            <i class="fas fa-eye text-white/40 text-xs"></i>
                                        </a>
                                        <a href="/admin/edit/<?= $item['id'] ?>" class="w-8 h-8 bg-primary-500/10 hover:bg-primary-500/20 rounded-lg flex items-center justify-center transition-colors" title="Edit">
                                            <i class="fas fa-pen text-primary-400 text-xs"></i>
                                        </a>
                                        <a href="/admin/delete/<?= $item['id'] ?>" onclick="return confirm('Yakin ingin menghapus menu ini?')" class="w-8 h-8 bg-red-500/10 hover:bg-red-500/20 rounded-lg flex items-center justify-center transition-colors" title="Hapus">
                                            <i class="fas fa-trash text-red-400 text-xs"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Mobile Cards -->
        <div class="md:hidden divide-y divide-white/5">
            <?php if (!empty($menu)): ?>
                <?php foreach ($menu as $item): ?>
                    <div class="p-4">
                        <div class="flex items-start gap-3">
                            <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 border border-white/10">
                                <?php $imgSrc = $item['gambar'] ? '/uploads/' . $item['gambar'] : '/uploads/hero-banner.jpg'; ?>
                                <img src="<?= $imgSrc ?>" alt="<?= esc($item['nama_makanan']) ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-white font-semibold text-sm"><?= esc($item['nama_makanan']) ?></h3>
                                <p class="text-white/30 text-xs mt-0.5"><?= esc($item['asal_daerah']) ?></p>
                                <p class="text-primary-400 font-semibold text-sm mt-1">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                            </div>
                            <div class="flex gap-1.5">
                                <a href="/admin/edit/<?= $item['id'] ?>" class="w-8 h-8 bg-primary-500/10 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-pen text-primary-400 text-xs"></i>
                                </a>
                                <a href="/admin/delete/<?= $item['id'] ?>" onclick="return confirm('Yakin hapus?')" class="w-8 h-8 bg-red-500/10 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-trash text-red-400 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    // Auto-hide flash message
    const flash = document.getElementById('flashSuccess');
    if (flash) {
        setTimeout(() => {
            flash.style.transition = 'all 0.5s ease';
            flash.style.opacity = '0';
            flash.style.transform = 'translateY(-10px)';
            setTimeout(() => flash.remove(), 500);
        }, 4000);
    }
</script>

<?= $this->endSection() ?>
