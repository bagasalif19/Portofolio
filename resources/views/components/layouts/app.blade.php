<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Script to set theme immediately and prevent flicker -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <title>{{ $title ?? 'Bagas Alif Muhammad Nasution, S.Kom | Full-Stack Developer' }}</title>
    <meta name="description" content="Portfolio of Bagas Alif Muhammad Nasution, S.Kom - Full-Stack Developer @ Dinas Kominfo Deli Serdang. BNSP Certified Web Developer.">
    <meta name="author" content="Bagas Alif Muhammad Nasution">

    <!-- Open Graph / WhatsApp / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bagasalif.my.id">
    <meta property="og:title" content="Bagas Alif Muhammad Nasution, S.Kom | Full-Stack Developer">
    <meta property="og:description" content="Full-Stack Developer @ Dinas Kominfo Deli Serdang. BNSP Certified Web Developer specializing in Laravel, PHP, and modern web applications.">
    <meta property="og:image" content="{{ asset('images/bagas_alif.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bagas Alif Muhammad Nasution, S.Kom | Full-Stack Developer">
    <meta name="twitter:description" content="Full-Stack Developer @ Dinas Kominfo Deli Serdang. BNSP Certified Web Developer.">
    <meta name="twitter:image" content="{{ asset('images/bagas_alif.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-bam.png') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-bam.png') }}?v=2">

    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8fafc] text-slate-800 dark:bg-[#0f172a] dark:text-slate-200 antialiased min-h-screen flex flex-col justify-between selection:bg-indigo-600 selection:text-white transition-colors duration-200"
      x-data="{ 
          darkMode: document.documentElement.classList.contains('dark'),
          mobileMenuOpen: false,
          toggleTheme() {
              this.darkMode = !this.darkMode;
              if (this.darkMode) {
                  document.documentElement.classList.add('dark');
                  localStorage.setItem('theme', 'dark');
              } else {
                  document.documentElement.classList.remove('dark');
                  localStorage.setItem('theme', 'light');
              }
          }
      }">

    <!-- DIGITAL PERCENTAGE LOADER (CONCEPT 2) -->
    <div id="splash-loader" 
         class="fixed inset-0 flex flex-col justify-between p-6 sm:p-12 transition-all duration-700 ease-out select-none"
         style="background-color: #060c18 !important; z-index: 99999;"
         x-data="{
             progress: 0,
             loaded: false,
             get formatted() {
                 return (this.progress < 10 ? '0' : '') + this.progress + '%';
             },
             init() {
                 document.body.style.overflow = 'hidden';
                 const timer = setInterval(() => {
                     this.progress += Math.floor(Math.random() * 4) + 2;
                     if (this.progress >= 100) {
                         this.progress = 100;
                         clearInterval(timer);
                         setTimeout(() => {
                             this.loaded = true;
                             document.body.style.overflow = '';
                             setTimeout(() => {
                                 const el = document.getElementById('splash-loader');
                                 if (el) el.remove();
                             }, 750);
                         }, 400);
                     }
                 }, 45);
             }
         }"
         :class="{ 'opacity-0 pointer-events-none -translate-y-4': loaded }">

        <!-- Top Header (Logo BAM & Label) -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2.5">
                <div class="h-7 w-7 flex items-center justify-center">
                    <img src="{{ asset('images/logo-bam-white.png') }}" alt="BAM Logo" class="h-full w-full object-contain">
                </div>
                <span class="font-mono text-xs font-bold tracking-wider text-slate-300">BAM</span>
            </div>
            <span class="font-mono text-[11px] text-slate-500 tracking-wider">PORTFOLIO '26</span>
        </div>

        <!-- Center: Bold Digital Percentage & Glowing Dot -->
        <div class="text-center my-auto space-y-3">
            <div class="inline-flex items-baseline justify-center">
                <span class="font-mono text-7xl sm:text-8xl md:text-9xl font-extrabold text-white tracking-tighter" x-text="formatted">00%</span>
                <span class="inline-block w-3.5 h-3.5 sm:w-4 sm:h-4 md:w-5 md:h-5 rounded-full bg-emerald-500 shadow-[0_0_24px_rgba(16,185,129,0.9)] animate-pulse ml-2 sm:ml-3"></span>
            </div>
            <p class="font-mono text-[10px] sm:text-xs text-slate-400 tracking-[0.3em] uppercase">
                LOADING EXPERIENCE
            </p>
        </div>

        <!-- Bottom: Ultra-thin Progress Line & Status -->
        <div class="space-y-3">
            <div class="flex justify-between items-center font-mono text-[11px] text-slate-500">
                <span>BAGAS ALIF MUHAMMAD NASUTION</span>
                <span class="text-emerald-400" x-text="progress === 100 ? 'READY' : 'INITIALIZING...'"></span>
            </div>
            <div class="w-full h-[2px] bg-slate-800/80 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-emerald-500 via-teal-400 to-cyan-400 transition-all duration-75 ease-out shadow-[0_0_12px_rgba(16,185,129,0.7)]" 
                     :style="'width: ' + progress + '%'"></div>
            </div>
        </div>
    </div>

    <!-- Fixed Left Sidebar: Social Links (Desktop) -->
    <div class="fixed bottom-0 left-6 lg:left-12 hidden md:flex flex-col items-center gap-6 z-40">
        <a href="https://github.com/bagasalif19" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-emerald-600 dark:text-slate-400 dark:hover:text-emerald-400 hover:-translate-y-1 transition-all" aria-label="GitHub">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
            </svg>
        </a>
        <a href="https://www.linkedin.com/in/bagasalif" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-emerald-600 dark:text-slate-400 dark:hover:text-emerald-400 hover:-translate-y-1 transition-all" aria-label="LinkedIn">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
        </a>
        <a href="https://wa.me/6281269907315" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-emerald-600 dark:text-slate-400 dark:hover:text-emerald-400 hover:-translate-y-1 transition-all" aria-label="WhatsApp">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
        </a>
        <a href="mailto:bagasalif19@gmail.com" class="text-slate-500 hover:text-emerald-600 dark:text-slate-400 dark:hover:text-emerald-400 hover:-translate-y-1 transition-all" aria-label="Email">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </a>
        <div class="w-[1px] h-24 bg-slate-300 dark:bg-slate-700"></div>
    </div>

    <!-- Fixed Right Sidebar: Location Text (Desktop) -->
    <div class="fixed bottom-0 right-6 lg:right-12 hidden md:flex flex-col items-center gap-6 z-40">
        <div class="font-mono text-xs text-slate-500 dark:text-slate-400 tracking-wider hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors [writing-mode:vertical-rl] select-none">
            📍 Medan, Sumatera Utara
        </div>
        <div class="w-[1px] h-24 bg-slate-300 dark:bg-slate-700"></div>
    </div>

    <!-- Navigation Header -->
    <header class="sticky top-0 z-40 backdrop-blur-md bg-[#f8fafc]/90 dark:bg-[#0b1120]/90 border-b border-slate-200/80 dark:border-slate-800/80">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Monogram (BAM Logo) -->
                <a href="#hero" class="group flex items-center gap-3 font-mono text-base tracking-tight hover:opacity-90 transition-opacity">
                    <div class="h-7 w-7 sm:h-8 sm:w-8 shrink-0 flex items-center justify-center">
                        <img src="{{ asset('images/logo-bam-white.png') }}" alt="BAM Logo" class="h-full w-full object-contain hidden dark:block transition-transform duration-200 group-hover:scale-110">
                        <img src="{{ asset('images/logo-bam-dark.png') }}" alt="BAM Logo" class="h-full w-full object-contain block dark:hidden transition-transform duration-200 group-hover:scale-110">
                    </div>
                    <div class="flex items-center gap-1 font-bold text-slate-900 dark:text-white">
                        <span>bagas.alif</span>
                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-pulse ml-0.5"></span>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center gap-6 lg:gap-8 font-mono text-xs text-slate-700 dark:text-slate-300">
                    <a href="#about" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Tentang</a>
                    <a href="#experience" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Pengalaman</a>
                    <a href="#projects" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Proyek</a>
                    <a href="#education" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Pendidikan & Sertifikasi</a>
                    <a href="#contact" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Kontak</a>

                    <!-- Resume Button -->
                    <a href="{{ asset('documents/CV-Bagas-Alif-Muhammad-Nasution.pdf') }}" target="_blank" download="CV-Bagas-Alif-Muhammad-Nasution.pdf" class="px-3.5 py-1.5 rounded-lg border border-emerald-600 dark:border-emerald-400 text-emerald-600 dark:text-emerald-400 hover:bg-emerald-600 hover:text-white dark:hover:bg-emerald-500 dark:hover:text-white transition-all font-semibold flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        <span>CV / Resume</span>
                    </a>

                    <!-- Dark/Light Theme Toggle -->
                    <button @click="toggleTheme()" 
                            type="button" 
                            class="p-2 rounded-lg text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white hover:bg-slate-200/60 dark:hover:bg-slate-800 transition-colors"
                            aria-label="Toggle theme">
                        <!-- Sun Icon (show in dark mode) -->
                        <svg x-show="darkMode" class="w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <!-- Moon Icon (show in light mode) -->
                        <svg x-show="!darkMode" class="w-5 h-5 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>
                </nav>

                <!-- Mobile Menu Button & Theme toggle -->
                <div class="flex items-center gap-3 md:hidden">
                    <button @click="toggleTheme()" type="button" class="p-2 rounded-lg text-slate-600 dark:text-slate-300" aria-label="Toggle theme">
                        <svg x-show="darkMode" class="w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <svg x-show="!darkMode" class="w-5 h-5 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>

                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="p-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800" aria-label="Toggle menu">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-cloak class="md:hidden border-b border-slate-200 dark:border-slate-800 bg-[#f8fafc] dark:bg-[#0b1120] px-6 py-6 space-y-4 font-mono text-sm">
            <a @click="mobileMenuOpen = false" href="#about" class="block py-1 hover:text-emerald-600 dark:hover:text-emerald-400">Tentang</a>
            <a @click="mobileMenuOpen = false" href="#experience" class="block py-1 hover:text-emerald-600 dark:hover:text-emerald-400">Pengalaman</a>
            <a @click="mobileMenuOpen = false" href="#projects" class="block py-1 hover:text-emerald-600 dark:hover:text-emerald-400">Proyek</a>
            <a @click="mobileMenuOpen = false" href="#education" class="block py-1 hover:text-emerald-600 dark:hover:text-emerald-400">Pendidikan & Sertifikasi</a>
            <a @click="mobileMenuOpen = false" href="#contact" class="block py-1 hover:text-emerald-600 dark:hover:text-emerald-400">Kontak</a>
            <div class="pt-2">
                <a @click="mobileMenuOpen = false" href="{{ asset('documents/CV-Bagas-Alif-Muhammad-Nasution.pdf') }}" target="_blank" download="CV-Bagas-Alif-Muhammad-Nasution.pdf" class="block text-center py-2.5 rounded-lg border border-emerald-600 dark:border-emerald-400 text-emerald-600 dark:text-emerald-400 font-semibold">
                    📥 Unduh CV / Resume
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @if (session('success'))
            <div class="max-w-4xl mx-auto px-4 mt-6">
                <div class="p-4 rounded-xl bg-emerald-50 dark:bg-emerald-950/60 border border-emerald-500/40 text-emerald-800 dark:text-emerald-200 text-sm font-mono flex items-center gap-3">
                    <span class="text-emerald-500 font-bold text-lg">✓</span>
                    <div>{{ session('success') }}</div>
                </div>
            </div>
        @endif

        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="py-12 border-t border-slate-200 dark:border-slate-800 text-center font-mono text-xs text-slate-500 dark:text-slate-400 space-y-2">
        <p>👨‍💻 Dirancang & Dibangun oleh <span class="text-slate-800 dark:text-slate-200 font-semibold">Bagas Alif Muhammad Nasution</span></p>
        <p>Ditenagai oleh <span class="text-emerald-600 dark:text-emerald-400 font-semibold">Laravel</span> & <span class="text-cyan-600 dark:text-cyan-400 font-semibold">Tailwind CSS</span> · Medan, Indonesia</p>
    </footer>

</body>
</html>
