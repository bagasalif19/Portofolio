<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio landing page.
     */
    public function index(): View
    {
        $profile = [
            'name' => 'Bagas Alif Muhammad Nasution, S.Kom',
            'short_name' => 'Bagas Alif',
            'role' => 'Full-Stack Developer | Web Programmer',
            'tagline' => 'Digitalizing public services through modern, robust web applications & data systems.',
            'current_position' => 'IT Team / Full-Stack Developer @ Dinas Kominfo Deli Serdang',
            'summary' => 'Lulusan Informatika dengan keterampilan analitis yang kuat dan pengalaman sebagai Full-Stack Developer dalam mendigitalisasi layanan publik melalui pengembangan aplikasi web dan sistem manajemen data. Berorientasi pada solusi untuk meningkatkan efisiensi operasional melalui teknologi.',
            'location' => 'Medan, Sumatera Utara',
            'phone' => '081269907315',
            'whatsapp' => 'https://wa.me/6281269907315',
            'email' => 'bagasalif19@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/bagasalif',
            'github' => 'https://github.com/bagasalif19',
            'resume' => asset('documents/CV-Bagas-Alif-Muhammad-Nasution.pdf'),
            'avatar' => asset('images/avatar.jpg'),
            'bnsp' => 'BNSP Certified: Pengembang Web Pratama (No: 62090 2513 3 0169001 2026)',
        ];

        $about = [
            'paragraphs' => [
                'Saya adalah seorang Full-Stack Developer yang saat ini aktif bekerja di Dinas Kominfo Deli Serdang. Saya memiliki keahlian mendalam dalam membangun aplikasi web yang responsif, terstruktur, dan berfokus pada peningkatan efisiensi alur kerja birokrasi maupun pelayanan publik.',
                'Memiliki latar belakang pendidikan Sarjana Informatika dari Universitas Islam Indonesia (IPK 3.39/4.00) serta didukung sertifikasi resmi Badan Nasional Sertifikasi Profesi (BNSP) sebagai Pengembang Web Pratama.',
            ],
            'hard_skills' => [
                'Bahasa & Framework' => ['PHP', 'Laravel', 'SQL'],
                'Desain & Antarmuka' => ['Tailwind CSS', 'Bootstrap'],
                'Basis Data' => ['MySQL', 'PostgreSQL', 'phpMyAdmin'],
                'DevOps & Tools' => ['Git', 'GitHub', 'GitLab', 'Docker', 'ESP8266 / ESP32 (IoT)'],
            ],

            'soft_skills' => [
                'Analytical Thinking',
                'Problem Solving',
                'Communication Skills',
                'Teamwork & Collaboration',
            ],
        ];

        $experiences = [
            [
                'role' => 'IT Team / Full-Stack Developer (Kontrak)',
                'company' => 'Dinas Kominfo Deli Serdang',
                'period' => 'Desember 2025 – Sekarang',
                'location' => 'Deli Serdang, Sumatera Utara',
                'bullets' => [
                    'Melakukan perancangan, pengembangan, pengujian, dan pemeliharaan aplikasi atau sistem perangkat lunak sesuai kebutuhan instansi.',
                    'Menjalankan dan memelihara infrastruktur dan Sistem teknologi informasi (TI) yang sudah ada untuk memastikan ketersediaan dan kinerja yang optimal.',
                    'Memastikan pengelolaan data yang efektif, termasuk pemeliharaan database, untuk mendukung operasional sistem inforrnasi.',
                ],
                'tags' => ['#Laravel', '#TailwindCSS', '#PHP', '#MySQL', '#GovTech', '#Bootstrap'],
            ],
        ];

        $projects = [
            [
                'id' => 'website-desa',
                'title' => 'Website Desa se-Kabupaten Deli Serdang',
                'category' => 'GovTech / Public Service',
                'year' => '2026',
                'summary' => 'Proyek skala kabupaten untuk membangun dan menyeragamkan platform website resmi bagi desa-desa di Deli Serdang.',
                'description' => 'Membangun standardisasi arsitektur website desa di Deli Serdang guna memudahkan transparansi informasi publik, tata kelola administrasi surat-menyurat warga, dan digitalisasi pelayanan aparatur desa.',
                'tech' => ['Laravel', 'Tailwind CSS', 'MySQL', 'PHP'],
                'icon' => '🏛️',
            ],
            [
                'id' => 'sidisko',
                'title' => 'Aplikasi SIDISKO (Sistem Informasi Diskominfo)',
                'category' => 'Internal Government System',
                'year' => '2026',
                'summary' => 'Aplikasi internal Dinas Kominfo untuk memantau kinerja tim IT dan mengelola penugasan departemen secara efisien.',
                'description' => 'Sistem monitoring terpusat untuk distribusi tiket pekerjaan tim IT, log pemeliharaan infrastruktur jaringan, serta pelaporan kinerja operasional dinas secara real-time.',
                'tech' => ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
                'icon' => '📊',
            ],
            [
                'id' => 'jdih',
                'title' => 'JDIH (Jaringan Dokumentasi & Informasi Hukum)',
                'category' => 'Legal Documentation Portal',
                'year' => '2026',
                'summary' => 'Aplikasi web repositori dan dokumentasi produk hukum daerah yang responsif dan mudah diakses masyarakat.',
                'description' => 'Membangun dan mengoptimalkan sistem katalog produk hukum daerah dengan pencarian cepat, kategorisasi regulasi, dan preview dokumen digital menggunakan Laravel dan Tailwind CSS.',
                'tech' => ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
                'icon' => '⚖️',
            ],
            [
                'id' => 'antrean-mpp',
                'title' => 'Sistem Antrean MPP (Mal Pelayanan Publik)',
                'category' => 'Hardware Integration & Queue System',
                'year' => '2026',
                'summary' => 'Sistem antrean terintegrasi untuk pusat pelayanan publik komprehensif di Mal Pelayanan Publik.',
                'description' => 'Merancang sistem manajemen antrean loket pelayanan publik, tampilan display nomor antrean responsif, pemanggilan otomatis, dan integrasi langsung ke pencetakan tiket mesin cetak termal.',
                'tech' => ['PHP', 'Laravel', 'MySQL', 'Thermal Printing API'],
                'icon' => '🎫',
            ],
            [
                'id' => 'Kopi POS',
                'title' => 'Kopi POS & Smart Digital Ordering System',
                'category' => 'POS & Enterprise Web App',
                'year' => '2026',
                'summary' => 'Sistem manajemen kafe dan Point of Sale (POS) terintegrasi dengan pemesanan pelanggan berbasis QR Code meja dan integrasi payment gateway',
                'description' => 'Merancang dan mengembangkan platform operasional kafe & POS end-to-end berbasis Laravel 12. Mengimplementasikan fitur pemesanan mandiri oleh pelanggan via scan QR Meja, sinkronisasi pesanan real-time kasir/dapur, integrasi payment gateway Midtrans (QRIS/E-Wallet), role-based access control (Spatie), serta sistem analitis keuangan & stok bahan.',
                'tech' => ['PHP', 'Laravel 12', 'Bootstrap 5 (Metronic)', 'Tailwind CSS', 'MySQL / SQLite', 'Midtrans API'],
                'icon' => '☕',
            ],
        ];

        $education = [
            'degree' => 'Bachelor of Informatics (S.Kom)',
            'institution' => 'Universitas Islam Indonesia (UII)',
            'period' => 'Juli 2020 – Oktober 2024',
            'gpa' => '3.39 / 4.00',
            'final_project' => 'Penelitian mengenai pemanfaatan media sosial untuk pemasaran dan digitalisasi bisnis.',
        ];

        $certifications = [
            [
                'title' => 'Pengembang Web Pratama',
                'issuer' => 'Badan Nasional Sertifikasi Profesi (BNSP)',
                'credential' => 'No: 62090 2513 3 0169001 2026',
                'date' => 'Januari 2026',
                'verified' => true,
            ],
            [
                'title' => 'Data Analysis: Fullstack Intensive Bootcamp',
                'issuer' => 'MySkill',
                'credential' => 'SQL, Python, Statistik, Pembersihan & Visualisasi Data',
                'date' => 'Juni 2025 – Juli 2025',
                'verified' => true,
            ],
        ];

        $organizations = [
            [
                'role' => 'Kepala Divisi Kreasi Mahasiswa',
                'org' => 'Lembaga Eksekutif Mahasiswa (LEM) FTI UII',
                'period' => 'Juni 2023 – Januari 2024',
            ],
            [
                'role' => 'Kepala Divisi Sosial dan Keagamaan',
                'org' => 'Himpunan Mahasiswa Informatika (HMIF) UII',
                'period' => 'Juli 2022 – Januari 2023',
            ],
            [
                'role' => 'Kepala Koordinator Penggalangan Dana Bisnis',
                'org' => 'INPUT 2022',
                'period' => 'Nov 2022 – Des 2022',
            ],
        ];

        return view('portfolio', compact(
            'profile',
            'about',
            'experiences',
            'projects',
            'education',
            'certifications',
            'organizations'
        ));
    }

    /**
     * Store an incoming contact message.
     */
    public function storeContact(StoreContactMessageRequest $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validated();
        $validated['ip_address'] = $request->ip();

        ContactMessage::create($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda berhasil dikirim! Terima kasih, saya akan segera menghubungi Anda.',
            ]);
        }

        return back()->with('success', 'Pesan Anda berhasil dikirim! Terima kasih, saya akan segera menghubungi Anda.');
    }
}
