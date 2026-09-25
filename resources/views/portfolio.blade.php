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

                <!-- Direct Message Card with WhatsApp & Email Options -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm space-y-4 font-mono text-xs"
                     x-data="{
                        name: '{{ old('name') }}',
                        email: '{{ old('email') }}',
                        message: '{{ old('message') }}',
                        error: '',
                        successNotice: false,
                        
                        validate() {
                            if (!this.name.trim() || !this.email.trim() || !this.message.trim()) {
                                this.error = 'Mohon lengkapi Nama, Email, dan Pesan terlebih dahulu.';
                                return false;
                            }
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (!emailRegex.test(this.email.trim())) {
                                this.error = 'Mohon masukkan format email yang valid.';
                                return false;
                            }
                            this.error = '';
                            return true;
                        },

                        async logToDatabase() {
                            try {
                                fetch('{{ route('portfolio.contact') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        name: this.name,
                                        email: this.email,
                                        message: this.message
                                    })
                                });
                            } catch (e) {
                                // silent fallback
                            }
                        },

                        sendWhatsApp() {
                            if (!this.validate()) return;
                            this.logToDatabase();
                            this.successNotice = true;
                            const text = `Halo Bagas Alif,\n\nNama: ${this.name}\nEmail: ${this.email}\n\nPesan:\n${this.message}\n\n(Dikirim melalui bagasalif.my.id)`;
                            const url = `https://wa.me/6281269907315?text=${encodeURIComponent(text)}`;
                            window.open(url, '_blank');
                        },

                        sendEmail() {
                            if (!this.validate()) return;
                            this.logToDatabase();
                            this.successNotice = true;
                            const subject = `Pesan Portofolio dari ${this.name}`;
                            const body = `Halo Bagas Alif,\n\nNama: ${this.name}\nEmail: ${this.email}\n\nPesan:\n${this.message}\n\n---\nDikirim melalui bagasalif.my.id`;
                            const mailtoUrl = `mailto:bagasalif19@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
                            window.location.href = mailtoUrl;
                        }
                     }">
                    
                    <div class="space-y-1">
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">
                            Kirim Pesan Langsung
                        </h3>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400 font-sans">
                            Tulis pesan Anda, lalu pilih ingin mengirim via WhatsApp atau Email resmi.
                        </p>
                    </div>

                    <template x-if="error">
                        <div class="p-3 rounded-lg bg-red-50 dark:bg-red-950/50 border border-red-500/30 text-red-600 dark:text-red-400 text-xs">
                            <span x-text="error"></span>
                        </div>
                    </template>

                    <template x-if="successNotice">
                        <div class="p-3 rounded-lg bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-500/30 text-emerald-800 dark:text-emerald-300 text-xs flex items-center gap-2">
                            <span>✓</span>
                            <span>Aplikasi tujuan telah dibuka! Terima kasih telah menghubungi.</span>
                        </div>
                    </template>

                    <div class="space-y-3.5">
                        <div class="space-y-1">
                            <label for="contact-name" class="block font-semibold text-slate-700 dark:text-slate-300">Nama Anda *</label>
                            <input type="text" id="contact-name" x-model="name" placeholder="misal: Rian Syahputra" 
                                   class="w-full px-3 py-2 rounded-lg bg-slate-50 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500">
                        </div>

                        <div class="space-y-1">
                            <label for="contact-email" class="block font-semibold text-slate-700 dark:text-slate-300">Email Anda *</label>
                            <input type="email" id="contact-email" x-model="email" placeholder="rian@example.com" 
                                   class="w-full px-3 py-2 rounded-lg bg-slate-50 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500">
                        </div>

                        <div class="space-y-1">
                            <label for="contact-message" class="block font-semibold text-slate-700 dark:text-slate-300">Pesan / Diskusi *</label>
                            <textarea id="contact-message" x-model="message" rows="3" placeholder="Tuliskan pesan atau keperluan Anda..." 
                                      class="w-full px-3 py-2 rounded-lg bg-slate-50 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500 resize-none"></textarea>
                        </div>

                        <div class="pt-2 space-y-2">
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 text-center font-mono">
                                Pilih metode pengiriman:
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                <!-- WhatsApp Button -->
                                <button type="button" @click="sendWhatsApp()" 
                                        class="w-full py-2.5 px-3 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-semibold transition-all flex items-center justify-center gap-2 shadow-sm cursor-pointer">
                                    <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                    <span>Kirim via WhatsApp</span>
                                </button>

                                <!-- Email Button -->
                                <button type="button" @click="sendEmail()" 
                                        class="w-full py-2.5 px-3 rounded-lg border border-slate-300 dark:border-slate-700 hover:border-emerald-500 dark:hover:border-emerald-500 bg-slate-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-750 text-slate-800 dark:text-slate-200 font-semibold transition-all flex items-center justify-center gap-2 shadow-sm cursor-pointer">
                                    <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Kirim via Email</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
