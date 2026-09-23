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
            <a href="/admin" class="text-white/40 hover:text-white text-sm transition-colors flex items-center gap-1.5">
                <i class="fas fa-arrow-left"></i>
                <span class="hidden sm:inline">Kembali</span>
            </a>
        </div>
    </div>
</nav>

<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="mb-8">
        <a href="/admin" class="text-white/40 hover:text-primary-400 text-sm transition-colors inline-flex items-center gap-1 mb-4">
            <i class="fas fa-arrow-left text-xs"></i> Kembali ke Daftar Menu
        </a>
        <h1 class="text-2xl font-bold text-white"><?= esc($title) ?></h1>
        <p class="text-white/40 text-sm mt-1"><?= $item ? 'Edit informasi menu yang sudah ada' : 'Tambahkan menu baru ke restoran' ?></p>
    </div>

    <!-- Validation Errors -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="bg-red-500/10 border border-red-500/20 rounded-xl p-4 mb-6">
            <div class="flex items-center gap-2 mb-2">
                <i class="fas fa-exclamation-triangle text-red-400"></i>
                <span class="text-red-300 text-sm font-semibold">Validasi gagal:</span>
            </div>
            <ul class="list-disc list-inside text-red-300/80 text-xs space-y-1 ml-5">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form -->
    <form action="<?= $action ?>" method="post" enctype="multipart/form-data" id="menuForm" class="space-y-6" novalidate>
        <?= csrf_field() ?>
        
        <div class="bg-neutral-900/80 rounded-2xl border border-white/5 p-6 sm:p-8 space-y-6">
            <!-- Nama Makanan -->
            <div>
                <label for="nama_makanan" class="block text-sm font-medium text-white/70 mb-2">
                    Nama Makanan <span class="text-red-400">*</span>
                </label>
                <input 
                    type="text" 
                    name="nama_makanan" 
                    id="nama_makanan"
                    value="<?= old('nama_makanan', $item['nama_makanan'] ?? '') ?>"
                    placeholder="Contoh: Nasi Tempong Original" 
                    class="w-full bg-neutral-800/50 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:ring-1 focus:ring-primary-500/20 transition-all duration-300 text-sm"
                    required
                    minlength="3"
                    maxlength="255"
                >
                <p id="namaMakananError" class="text-red-400 text-xs mt-1.5 hidden"></p>
            </div>

            <!-- Asal Daerah -->
            <div>
                <label for="asal_daerah" class="block text-sm font-medium text-white/70 mb-2">
                    Asal Daerah <span class="text-red-400">*</span>
                </label>
                <input 
                    type="text" 
                    name="asal_daerah" 
                    id="asal_daerah"
                    value="<?= old('asal_daerah', $item['asal_daerah'] ?? 'Banyuwangi, Jawa Timur') ?>"
                    placeholder="Contoh: Banyuwangi, Jawa Timur" 
                    class="w-full bg-neutral-800/50 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:ring-1 focus:ring-primary-500/20 transition-all duration-300 text-sm"
                    required
                    minlength="3"
                    maxlength="255"
                >
                <p id="asalDaerahError" class="text-red-400 text-xs mt-1.5 hidden"></p>
            </div>

            <!-- Deskripsi Singkat -->
            <div>
                <label for="deskripsi_singkat" class="block text-sm font-medium text-white/70 mb-2">
                    Deskripsi Singkat <span class="text-red-400">*</span>
                </label>
                <textarea 
                    name="deskripsi_singkat" 
                    id="deskripsi_singkat"
                    rows="4"
                    placeholder="Jelaskan menu ini secara singkat..." 
                    class="w-full bg-neutral-800/50 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:ring-1 focus:ring-primary-500/20 transition-all duration-300 text-sm resize-none"
                    required
                    minlength="10"
                ><?= old('deskripsi_singkat', $item['deskripsi_singkat'] ?? '') ?></textarea>
                <div class="flex items-center justify-between mt-1.5">
                    <p id="deskripsiError" class="text-red-400 text-xs hidden"></p>
                    <span id="charCount" class="text-white/20 text-xs">0 karakter</span>
                </div>
            </div>

            <!-- Harga -->
            <div>
                <label for="harga" class="block text-sm font-medium text-white/70 mb-2">
                    Harga (Rp) <span class="text-red-400">*</span>
                </label>
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/30 text-sm font-medium">Rp</span>
                    <input 
                        type="number" 
                        name="harga" 
                        id="harga"
                        value="<?= old('harga', $item['harga'] ?? '') ?>"
                        placeholder="25000" 
                        class="w-full bg-neutral-800/50 border border-white/10 rounded-xl pl-12 pr-4 py-3.5 text-white placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:ring-1 focus:ring-primary-500/20 transition-all duration-300 text-sm"
                        required
                        min="1"
                    >
                </div>
                <p id="hargaError" class="text-red-400 text-xs mt-1.5 hidden"></p>
            </div>

            <!-- Gambar -->
            <div>
                <label for="gambar" class="block text-sm font-medium text-white/70 mb-2">
                    Gambar <?= $item ? '(Kosongkan jika tidak ingin mengubah)' : '' ?>
                </label>
                
                <?php if ($item && $item['gambar']): ?>
                    <div class="mb-3 flex items-center gap-3">
                        <img src="/uploads/<?= esc($item['gambar']) ?>" alt="Current image" class="w-20 h-20 object-cover rounded-xl border border-white/10">
                        <span class="text-white/30 text-xs">Gambar saat ini</span>
                    </div>
                <?php endif; ?>

                <div class="relative">
                    <input 
                        type="file" 
                        name="gambar" 
                        id="gambar"
                        accept="image/*"
                        class="w-full bg-neutral-800/50 border border-white/10 border-dashed rounded-xl px-4 py-3.5 text-white/40 focus:outline-none focus:border-primary-500/50 transition-all duration-300 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary-500/10 file:text-primary-400 hover:file:bg-primary-500/20"
                    >
                </div>
                <p class="text-white/20 text-xs mt-1.5">Format: JPG, PNG, GIF. Maksimal 2MB.</p>
                <p id="gambarError" class="text-red-400 text-xs mt-1 hidden"></p>

                <!-- Image Preview -->
                <div id="imagePreview" class="hidden mt-3">
                    <img id="previewImg" src="" alt="Preview" class="w-32 h-32 object-cover rounded-xl border border-primary-500/30">
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-3 justify-end">
            <a href="/admin" class="px-6 py-3 border border-white/10 hover:border-white/20 text-white/60 rounded-xl text-sm font-medium transition-all duration-300 inline-flex items-center gap-2">
                <i class="fas fa-times"></i> Batal
            </a>
            <button type="submit" class="bg-primary-500 hover:bg-primary-600 text-white px-8 py-3 rounded-xl font-semibold text-sm transition-all duration-300 btn-glow inline-flex items-center gap-2">
                <i class="fas fa-save"></i>
                <?= $item ? 'Perbarui Menu' : 'Simpan Menu' ?>
            </button>
        </div>
    </form>
</div>

<script>
    // Character count for description
    const deskripsi = document.getElementById('deskripsi_singkat');
    const charCount = document.getElementById('charCount');
    
    function updateCharCount() {
        charCount.textContent = deskripsi.value.length + ' karakter';
        if (deskripsi.value.length > 0 && deskripsi.value.length < 10) {
            charCount.classList.add('text-red-400');
            charCount.classList.remove('text-white/20', 'text-primary-400');
        } else if (deskripsi.value.length >= 10) {
            charCount.classList.add('text-primary-400');
            charCount.classList.remove('text-white/20', 'text-red-400');
        } else {
            charCount.classList.add('text-white/20');
            charCount.classList.remove('text-red-400', 'text-primary-400');
        }
    }
    deskripsi.addEventListener('input', updateCharCount);
    updateCharCount();

    // Image preview
    document.getElementById('gambar').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const preview = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');
        const gambarError = document.getElementById('gambarError');
        
        gambarError.classList.add('hidden');
        
        if (file) {
            // Validate file size (2MB)
            if (file.size > 2 * 1024 * 1024) {
                gambarError.textContent = 'Ukuran gambar maksimal 2MB.';
                gambarError.classList.remove('hidden');
                this.value = '';
                preview.classList.add('hidden');
                return;
            }
            
            // Validate file type
            if (!file.type.startsWith('image/')) {
                gambarError.textContent = 'File harus berupa gambar.';
                gambarError.classList.remove('hidden');
                this.value = '';
                preview.classList.add('hidden');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden');
        }
    });

    // Client-side form validation
    document.getElementById('menuForm').addEventListener('submit', function(e) {
        let isValid = true;
        
        const fields = [
            { id: 'nama_makanan', errorId: 'namaMakananError', label: 'Nama makanan', minLength: 3, required: true },
            { id: 'asal_daerah', errorId: 'asalDaerahError', label: 'Asal daerah', minLength: 3, required: true },
            { id: 'deskripsi_singkat', errorId: 'deskripsiError', label: 'Deskripsi', minLength: 10, required: true },
            { id: 'harga', errorId: 'hargaError', label: 'Harga', required: true, isNumber: true },
        ];
        
        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const error = document.getElementById(field.errorId);
            const value = input.value.trim();
            
            error.classList.add('hidden');
            input.classList.remove('border-red-500/50');
            
            if (field.required && value === '') {
                error.textContent = field.label + ' wajib diisi.';
                error.classList.remove('hidden');
                input.classList.add('border-red-500/50');
                isValid = false;
            } else if (field.minLength && value.length < field.minLength) {
                error.textContent = field.label + ' minimal ' + field.minLength + ' karakter.';
                error.classList.remove('hidden');
                input.classList.add('border-red-500/50');
                isValid = false;
            } else if (field.isNumber && (isNaN(value) || parseInt(value) <= 0)) {
                error.textContent = field.label + ' harus berupa angka lebih dari 0.';
                error.classList.remove('hidden');
                input.classList.add('border-red-500/50');
                isValid = false;
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            // Scroll to first error
            const firstError = document.querySelector('.border-red-500\\/50');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
</script>

<?= $this->endSection() ?>
