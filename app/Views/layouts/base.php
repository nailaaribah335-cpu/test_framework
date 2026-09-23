<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Zahra Nasi Tempong - Kuliner Khas Banyuwangi' ?></title>
    <meta name="description" content="Zahra Nasi Tempong - Restoran Nasi Tempong khas Banyuwangi, Jawa Timur. Sambal pedas legendaris dengan cita rasa autentik.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22C55E',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        accent: {
                            50: '#FFF7ED',
                            100: '#FFEDD5',
                            200: '#FED7AA',
                            300: '#FDBA74',
                            400: '#FB923C',
                            500: '#F97316',
                        },
                    },
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'body': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
        
        /* Smooth scrolling */
        html { scroll-behavior: smooth; }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f0f0f; }
        ::-webkit-scrollbar-thumb { background: #22C55E; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #16a34a; }
        
        /* Hero parallax effect */
        .hero-gradient {
            background: linear-gradient(135deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(34,197,94,0.2) 100%);
        }
        
        /* Card hover effect */
        .menu-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .menu-card:hover {
            transform: translateY(-12px);
        }
        .menu-card:hover .card-img {
            transform: scale(1.1);
        }
        .card-img {
            transition: transform 0.6s ease;
        }
        
        /* Navbar blur effect */
        .nav-blur {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        
        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .float-anim { animation: float 3s ease-in-out infinite; }
        
        /* Fade in animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up { animation: fadeInUp 0.8s ease forwards; }
        .fade-in-up-delay-1 { animation: fadeInUp 0.8s ease 0.2s forwards; opacity: 0; }
        .fade-in-up-delay-2 { animation: fadeInUp 0.8s ease 0.4s forwards; opacity: 0; }
        .fade-in-up-delay-3 { animation: fadeInUp 0.8s ease 0.6s forwards; opacity: 0; }
        
        /* Shimmer loading */
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(34,197,94,0.1), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        /* Pulse glow on primary buttons */
        .btn-glow {
            box-shadow: 0 0 20px rgba(34,197,94,0.3);
            transition: all 0.3s ease;
        }
        .btn-glow:hover {
            box-shadow: 0 0 40px rgba(34,197,94,0.5);
        }

        /* Badge style */
        .badge-spicy {
            background: linear-gradient(135deg, #ef4444, #dc2626);
        }
    </style>
</head>
<body class="bg-neutral-950 text-white font-body">
    <?= $this->renderSection('content') ?>
</body>
</html>
