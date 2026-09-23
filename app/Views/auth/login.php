<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="min-h-screen flex items-center justify-center bg-neutral-950 relative overflow-hidden px-4">
    <!-- Background decorations -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-primary-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-96 h-96 bg-primary-500/5 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary-500/3 rounded-full blur-3xl"></div>
    
    <div class="relative w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-10">
            <a href="/" class="inline-flex items-center gap-3 group">
                <div class="w-14 h-14 bg-primary-500 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-primary-500/20">
                    <i class="fas fa-pepper-hot text-white text-2xl"></i>
                </div>
                <div class="text-left">
                    <span class="text-2xl font-bold text-white tracking-tight">ZAHRA</span>
                    <span class="text-xs block text-primary-400 -mt-1 tracking-[0.2em] uppercase">Nasi Tempong</span>
                </div>
            </a>
        </div>

        <!-- Login Card -->
        <div class="bg-neutral-900/80 backdrop-blur-xl rounded-3xl border border-white/10 p-8 sm:p-10 shadow-2xl">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-white mb-2">Selamat Datang</h1>
                <p class="text-white/40 text-sm">Masuk ke panel admin untuk mengelola menu</p>
            </div>

            <!-- Error Messages -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-500/10 border border-red-500/20 rounded-xl p-4 mb-6 flex items-center gap-3">
                    <i class="fas fa-exclamation-circle text-red-400"></i>
                    <span class="text-red-300 text-sm"><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

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

            <!-- Login Form -->
            <form action="/login" method="post" id="loginForm" class="space-y-5" novalidate>
                <?= csrf_field() ?>
                
                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-white/60 mb-2">Username</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-white/30">
                            <i class="fas fa-user"></i>
                        </div>
                        <input 
                            type="text" 
                            name="username" 
                            id="username"
                            value="<?= old('username') ?>"
                            placeholder="Masukkan username" 
                            class="w-full bg-neutral-800/50 border border-white/10 rounded-xl pl-11 pr-4 py-3.5 text-white placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:ring-1 focus:ring-primary-500/20 transition-all duration-300 text-sm"
                            required
                            minlength="3"
                        >
                    </div>
                    <p id="usernameError" class="text-red-400 text-xs mt-1.5 hidden"></p>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-white/60 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-white/30">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            placeholder="Masukkan password" 
                            class="w-full bg-neutral-800/50 border border-white/10 rounded-xl pl-11 pr-12 py-3.5 text-white placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:ring-1 focus:ring-primary-500/20 transition-all duration-300 text-sm"
                            required
                            minlength="5"
                        >
                        <button type="button" id="togglePassword" class="absolute right-4 top-1/2 -translate-y-1/2 text-white/30 hover:text-white/60 transition-colors">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <p id="passwordError" class="text-red-400 text-xs mt-1.5 hidden"></p>
                </div>

                <!-- Submit -->
                <button type="submit" class="w-full bg-primary-500 hover:bg-primary-600 text-white py-4 rounded-xl font-semibold text-sm transition-all duration-300 btn-glow flex items-center justify-center gap-2 mt-2">
                    <i class="fas fa-sign-in-alt"></i>
                    Masuk ke Dashboard
                </button>
            </form>

            <!-- Info -->
            <div class="mt-6 p-4 bg-primary-500/5 border border-primary-500/10 rounded-xl">
                <div class="flex items-center gap-2 text-primary-400 text-xs">
                    <i class="fas fa-info-circle"></i>
                    <span>Default: <strong>admin</strong> / <strong>admin123</strong></span>
                </div>
            </div>
        </div>

        <!-- Back to home -->
        <div class="text-center mt-8">
            <a href="/" class="text-white/30 hover:text-primary-400 transition-colors text-sm inline-flex items-center gap-2">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

<script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    });

    // Client-side form validation
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        let isValid = true;
        
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const usernameError = document.getElementById('usernameError');
        const passwordError = document.getElementById('passwordError');
        
        // Reset errors
        usernameError.classList.add('hidden');
        passwordError.classList.add('hidden');
        username.classList.remove('border-red-500/50');
        password.classList.remove('border-red-500/50');
        
        // Validate username
        if (username.value.trim() === '') {
            usernameError.textContent = 'Username wajib diisi.';
            usernameError.classList.remove('hidden');
            username.classList.add('border-red-500/50');
            isValid = false;
        } else if (username.value.trim().length < 3) {
            usernameError.textContent = 'Username minimal 3 karakter.';
            usernameError.classList.remove('hidden');
            username.classList.add('border-red-500/50');
            isValid = false;
        }
        
        // Validate password
        if (password.value === '') {
            passwordError.textContent = 'Password wajib diisi.';
            passwordError.classList.remove('hidden');
            password.classList.add('border-red-500/50');
            isValid = false;
        } else if (password.value.length < 5) {
            passwordError.textContent = 'Password minimal 5 karakter.';
            passwordError.classList.remove('hidden');
            password.classList.add('border-red-500/50');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
</script>

<?= $this->endSection() ?>
