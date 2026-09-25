<x-layouts.app>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 space-y-24">

        <!-- HERO SECTION -->
        <section id="hero" class="pt-6 sm:pt-10 pb-4">
            <div class="flex flex-col-reverse md:flex-row items-center md:items-start justify-between gap-8 md:gap-12">
                <!-- Text Details -->
                <div class="space-y-4 text-center md:text-left flex-1">
                    
                    <!-- Status Badge -->
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-500/30 text-emerald-800 dark:text-emerald-300 font-mono text-xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>{{ $profile['current_position'] }}</span>
                    </div>

                    <!-- Main Name & Degree -->
                    <div class="space-y-1">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                            {{ $profile['name'] }}
                        </h1>
                        <p class="font-mono text-base sm:text-lg font-semibold text-emerald-600 dark:text-emerald-400">
                            {{ $profile['role'] }}
                        </p>
                    </div>

                    <!-- Summary Statement -->
                    <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed font-normal max-w-xl">
                        "{{ $profile['summary'] }}"
                    </p>

                    <!-- Official Credentials Badge -->
                    <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 pt-1 font-mono text-xs">
                        <span class="px-3 py-1.5 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 shadow-sm flex items-center gap-1.5">
                            <span class="text-emerald-500 font-bold">✓</span>
                            <span>Sertifikasi BNSP: Pengembang Web Pratama</span>
                        </span>
                        <span class="px-3 py-1.5 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 shadow-sm flex items-center gap-1.5">
                            <span>📍</span>
                            <span>{{ $profile['location'] }}</span>
                        </span>
                    </div>

                    <!-- Action CTAs -->
                    <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 pt-3">
                        <a href="{{ $profile['resume'] }}" target="_blank" download="CV-Bagas-Alif-Muhammad-Nasution.pdf" class="px-5 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-mono text-xs font-semibold shadow-sm transition-all flex items-center gap-2 group">
                            <svg class="w-4 h-4 transition-transform group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Unduh CV / Resume</span>
                        </a>
                        <a href="#projects" class="px-5 py-2.5 rounded-lg border border-slate-300 dark:border-slate-700 hover:border-emerald-500 dark:hover:border-emerald-500 text-slate-700 dark:text-slate-200 font-mono text-xs font-medium transition-all flex items-center gap-2">
                            <span>Jelajahi Proyek</span>
                            <span>↓</span>
                        </a>
                        <a href="{{ $profile['whatsapp'] }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-mono text-xs transition-colors flex items-center gap-1.5">
                            <span>WhatsApp</span>
                            <span>↗</span>
                        </a>
                        <a href="mailto:{{ $profile['email'] }}" class="px-4 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-mono text-xs transition-colors">
                            Email
                        </a>
                    </div>

                </div>

                <!-- Avatar Card -->
                <div class="shrink-0">
                    <div class="relative p-1.5 rounded-2xl bg-gradient-to-b from-emerald-500/40 via-slate-200 to-slate-300 dark:via-slate-800 dark:to-slate-900 shadow-lg">
                        <div class="w-36 sm:w-44 aspect-[3/4] rounded-xl overflow-hidden bg-slate-900 border border-white/40 dark:border-slate-700/50">
                            <img src="{{ $profile['avatar'] }}" alt="{{ $profile['name'] }}" class="w-full h-full object-cover object-top">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 01: TENTANG SAYA -->
        <section id="about" class="space-y-6 scroll-mt-24">
            <h2 class="flex items-center gap-3 text-xl sm:text-2xl font-bold font-mono text-slate-900 dark:text-white">
                <span class="text-emerald-600 dark:text-emerald-400">01.</span>
                <span>Tentang Saya</span>
                <span class="flex-grow h-[1px] bg-slate-200 dark:bg-slate-800"></span>
            </h2>

            <div class="space-y-4 text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                @foreach ($about['paragraphs'] as $p)
                    <p>{{ $p }}</p>
                @endforeach
            </div>

            <!-- Skills Breakdown Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 pt-2">
                @foreach ($about['hard_skills'] as $category => $items)
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-sm space-y-2.5">
                        <h3 class="font-mono text-xs font-bold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">
                            {{ $category }}
                        </h3>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach ($items as $item)
                                <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200 font-mono text-xs">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <!-- Soft skills card (Spans full on small) -->
                <div class="sm:col-span-2 md:col-span-3 p-4 rounded-xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-sm space-y-2">
                    <h3 class="font-mono text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                        Keahlian Lunak (Soft Skills)
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($about['soft_skills'] as $skill)
                            <span class="px-3 py-1 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-mono text-xs">
                                ✦ {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 02: PENGALAMAN KERJA -->
        <section id="experience" class="space-y-6 scroll-mt-24">
            <h2 class="flex items-center gap-3 text-xl sm:text-2xl font-bold font-mono text-slate-900 dark:text-white">
                <span class="text-emerald-600 dark:text-emerald-400">02.</span>
                <span>Pengalaman Kerja</span>
                <span class="flex-grow h-[1px] bg-slate-200 dark:bg-slate-800"></span>
            </h2>

            <div class="space-y-6">
                @foreach ($experiences as $exp)
                    <div class="p-6 sm:p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-sm space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-baseline justify-between gap-1 pb-3 border-b border-slate-100 dark:border-slate-800/80">
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">
                                    {{ $exp['role'] }}
                                </h3>
                                <p class="font-mono text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                                    {{ $exp['company'] }} <span class="text-slate-400 font-normal">· {{ $exp['location'] }}</span>
                                </p>
                            </div>
                            <span class="font-mono text-xs text-slate-500 dark:text-slate-400">
                                {{ $exp['period'] }}
                            </span>
                        </div>

                        <!-- Bullets -->
                        <ul class="space-y-3 font-mono text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                            @foreach ($exp['bullets'] as $bullet)
                                <li class="flex items-start gap-2.5 leading-relaxed">
                                    <span class="text-emerald-500 font-bold shrink-0 mt-0.5">▹</span>
                                    <span>{{ $bullet }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Tech tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            @foreach ($exp['tags'] as $tag)
                                <span class="font-mono text-xs text-emerald-700 dark:text-emerald-300 bg-emerald-50 dark:bg-emerald-950/40 px-2.5 py-1 rounded-md">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- SECTION 03: PROYEK UNGGULAN (INTERACTIVE LIST / TIMELINE) -->
        <section id="projects" class="space-y-6 scroll-mt-24" x-data="{ expanded: null }">
            <div class="flex items-center justify-between gap-4">
                <h2 class="flex items-center gap-3 text-xl sm:text-2xl font-bold font-mono text-slate-900 dark:text-white flex-grow">
                    <span class="text-emerald-600 dark:text-emerald-400">03.</span>
                    <span>Proyek Unggulan</span>
                    <span class="flex-grow h-[1px] bg-slate-200 dark:bg-slate-800"></span>
                </h2>
                <span class="font-mono text-xs text-slate-400 shrink-0">
                    {{ count($projects) }} Proyek Terpilih
                </span>
            </div>

            <p class="text-xs sm:text-sm font-mono text-slate-500 dark:text-slate-400">
                Klik pada salah satu proyek di bawah untuk melihat rincian arsitektur teknis dan implementasinya:
            </p>

            <!-- Interactive Accordion List -->
            <div class="divide-y divide-slate-200 dark:divide-slate-800 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
                @foreach ($projects as $index => $project)
                    <div class="transition-colors" :class="expanded === {{ $index }} ? 'bg-slate-50/70 dark:bg-slate-800/40' : ''">
                        <!-- Clickable Header Row -->
                        <button @click="expanded = expanded === {{ $index }} ? null : {{ $index }}" 
                                type="button" 
                                class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors focus:outline-none">
                            <div class="flex items-center gap-3.5 min-w-0">
                                <span class="text-xl shrink-0">{{ $project['icon'] }}</span>
                                <div class="min-w-0">
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <h3 class="font-bold text-slate-900 dark:text-white text-sm sm:text-base truncate">
                                            {{ $project['title'] }}
                                        </h3>
                                        <span class="px-2 py-0.5 rounded text-[11px] font-mono bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-500/20">
                                            {{ $project['category'] }}
                                        </span>
                                    </div>
                                    <p class="text-xs font-mono text-slate-500 dark:text-slate-400 truncate mt-0.5">
                                        {{ $project['summary'] }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 shrink-0">
                                <span class="font-mono text-xs text-slate-400 hidden sm:inline-block">
                                    {{ $project['year'] }}
                                </span>
                                <svg class="w-5 h-5 text-slate-400 transition-transform duration-200" 
                                     :class="expanded === {{ $index }} ? 'rotate-180 text-emerald-600 dark:text-emerald-400' : ''" 
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>

                        <!-- Expandable Body -->
                        <div x-show="expanded === {{ $index }}" 
                             x-cloak 
                             x-collapse 
                             class="px-5 pb-5 pt-1 border-t border-slate-100 dark:border-slate-800/60 space-y-4">
                            <div class="p-4 rounded-xl bg-slate-100/70 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/50">
                                <p class="font-mono text-xs uppercase tracking-wider text-slate-400 mb-1">Rincian Teknis & Implementasi:</p>
                                <p class="text-xs sm:text-sm text-slate-700 dark:text-slate-300 leading-relaxed font-mono">
                                    {{ $project['description'] }}
                                </p>
                            </div>

                            <div class="flex flex-wrap items-center justify-between gap-3 pt-1">
                                <div class="flex flex-wrap items-center gap-1.5">
                                    <span class="text-xs font-mono text-slate-400 mr-1">Teknologi:</span>
                                    @foreach ($project['tech'] as $t)
                                        <span class="px-2 py-0.5 rounded bg-slate-200/70 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-mono text-xs">
                                            {{ $t }}
                                        </span>
                                    @endforeach
                                </div>

                                <span class="font-mono text-[11px] text-emerald-600 dark:text-emerald-400 flex items-center gap-1">
                                    <span>●</span> Diimplementasikan dalam produksi
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- SECTION 04: PENDIDIKAN & SERTIFIKASI -->
        <section id="education" class="space-y-6 scroll-mt-24">
            <h2 class="flex items-center gap-3 text-xl sm:text-2xl font-bold font-mono text-slate-900 dark:text-white">
                <span class="text-emerald-600 dark:text-emerald-400">04.</span>
                <span>Pendidikan & Sertifikasi</span>
                <span class="flex-grow h-[1px] bg-slate-200 dark:bg-slate-800"></span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Formal Education -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-sm space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="font-mono text-xs uppercase tracking-wider text-emerald-600 dark:text-emerald-400 font-bold">
                            Pendidikan Formal
                        </span>
                        <span class="font-mono text-xs text-slate-400">{{ $education['period'] }}</span>
                    </div>

                    <div>
                        <h3 class="font-bold text-base text-slate-900 dark:text-white">
                            {{ $education['degree'] }}
                        </h3>
                        <p class="font-mono text-xs text-slate-500 dark:text-slate-400">
                            {{ $education['institution'] }}
                        </p>
                    </div>

                    <div class="inline-block px-2.5 py-1 rounded bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-mono text-xs font-semibold">
                        IPK: {{ $education['gpa'] }}
                    </div>

                    <div class="pt-2 border-t border-slate-100 dark:border-slate-800 text-xs font-mono text-slate-600 dark:text-slate-300">
                        <span class="font-bold text-slate-700 dark:text-slate-200">Proyek Akhir:</span> {{ $education['final_project'] }}
                    </div>
                </div>

                <!-- Certifications & Training -->
                <div class="space-y-4">
                    @foreach ($certifications as $cert)
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-sm space-y-1.5">
                            <div class="flex items-center justify-between text-xs font-mono">
                                <span class="text-emerald-600 dark:text-emerald-400 font-semibold flex items-center gap-1">
                                    <span>🛡️</span> {{ $cert['issuer'] }}
                                </span>
                                <span class="text-slate-400">{{ $cert['date'] }}</span>
                            </div>
                            <h4 class="font-bold text-sm text-slate-900 dark:text-white">
                                {{ $cert['title'] }}
                            </h4>
                            <p class="font-mono text-xs text-slate-500 dark:text-slate-400">
                                {{ $cert['credential'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Leadership & Organization -->
            <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 shadow-sm space-y-3">
                <h3 class="font-mono text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    Pengalaman Organisasi & Kepemimpinan
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-1 font-mono text-xs">
                    @foreach ($organizations as $org)
                        <div class="space-y-1 border-l-2 border-emerald-500/50 pl-3">
                            <p class="font-bold text-slate-800 dark:text-slate-200">{{ $org['role'] }}</p>
                            <p class="text-slate-500 dark:text-slate-400">{{ $org['org'] }}</p>
                            <p class="text-[11px] text-emerald-600 dark:text-emerald-400">{{ $org['period'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- SECTION 05: KONTAK -->
        <section id="contact" class="py-8 scroll-mt-24 space-y-8" x-data="{ openDirectForm: false }">
            <h2 class="flex items-center gap-3 text-xl sm:text-2xl font-bold font-mono text-slate-900 dark:text-white">
                <span class="text-emerald-600 dark:text-emerald-400">05.</span>
                <span>Kontak & Kolaborasi</span>
                <span class="flex-grow h-[1px] bg-slate-200 dark:bg-slate-800"></span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Direct Contact Details -->
                <div class="space-y-5 font-mono text-xs sm:text-sm">
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed font-sans text-sm">
                        Terbuka untuk diskusi teknis, kolaborasi pengembangan sistem web pemerintahan maupun komersial, atau peluang kerja sama profesional.
                    </p>

                    <div class="space-y-3">
                        <!-- Email -->
                        <div class="p-3.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase">Email</p>
                                <a href="mailto:{{ $profile['email'] }}" class="font-semibold text-slate-900 dark:text-white hover:text-emerald-500">
                                    {{ $profile['email'] }}
                                </a>
                            </div>
                            <a href="mailto:{{ $profile['email'] }}" class="text-emerald-600 dark:text-emerald-400 text-xs hover:underline">
                                Kirim Email ↗
                            </a>
                        </div>

                        <!-- WhatsApp / Phone -->
                        <div class="p-3.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase">Telepon / WhatsApp</p>
                                <a href="{{ $profile['whatsapp'] }}" target="_blank" class="font-semibold text-slate-900 dark:text-white hover:text-emerald-500">
                                    {{ $profile['phone'] }}
                                </a>
                            </div>
                            <a href="{{ $profile['whatsapp'] }}" target="_blank" class="text-emerald-600 dark:text-emerald-400 text-xs hover:underline">
                                Chat WhatsApp ↗
                            </a>
                        </div>

                        <!-- LinkedIn Profile -->
                        <div class="p-3.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase">LinkedIn</p>
                                <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="font-semibold text-slate-900 dark:text-white hover:text-emerald-500">
                                    in/bagasalif
                                </a>
                            </div>
                            <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="text-emerald-600 dark:text-emerald-400 text-xs hover:underline">
                                Buka Profil ↗
                            </a>
                        </div>

                        <!-- Location -->
                        <div class="p-3.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase">Domisili</p>
                                <p class="font-semibold text-slate-900 dark:text-white">
                                    {{ $profile['location'] }}
                                </p>
                            </div>
                            <span class="text-slate-400 text-xs">Indonesia</span>
                        </div>
                    </div>
                </div>

                <!-- Direct Message Form -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm space-y-4 font-mono text-xs">
                    <h3 class="font-bold text-slate-900 dark:text-white text-sm">
                        Kirim Pesan Langsung
                    </h3>

                    @if ($errors->any())
                        <div class="p-3 rounded-lg bg-red-50 dark:bg-red-950/50 border border-red-500/30 text-red-600 dark:text-red-400">
                            Mohon periksa data formulir Anda.
                        </div>
                    @endif

                    <form action="{{ route('portfolio.contact') }}" method="POST" class="space-y-3.5">
                        @csrf
                        <div class="space-y-1">
                            <label for="name" class="block font-semibold text-slate-700 dark:text-slate-300">Nama Anda *</label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="misal: Rian Syahputra" 
                                   class="w-full px-3 py-2 rounded-lg bg-slate-50 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500">
                        </div>

                        <div class="space-y-1">
                            <label for="email" class="block font-semibold text-slate-700 dark:text-slate-300">Email Anda *</label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="rian@example.com" 
                                   class="w-full px-3 py-2 rounded-lg bg-slate-50 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500">
                        </div>

                        <div class="space-y-1">
                            <label for="message" class="block font-semibold text-slate-700 dark:text-slate-300">Pesan / Diskusi *</label>
                            <textarea id="message" name="message" rows="3" required placeholder="Tuliskan pesan atau keperluan Anda..." 
                                      class="w-full px-3 py-2 rounded-lg bg-slate-50 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500 resize-none">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-semibold transition-colors">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
