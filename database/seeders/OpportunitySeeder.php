<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    public function run(): void
    {
        // 1. Embed Mode Example (YouTube)
        Opportunity::create([
            'title' => 'Sosialisasi Program Kampus Merdeka 2026',
            'slug' => 'sosialisasi-kampus-merdeka-2026',
            'category' => 'Program',
            'description' => 'Saksikan siaran langsung sosialisasi program Kampus Merdeka tahun 2026 yang diselenggarakan oleh Kemdikbud Ristek. Dapatkan informasi terbaru mengenai pendaftaran, kuota, dan mekanisme konversi SKS untuk mahasiswa seluruh Indonesia.',
            'thumbnail' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=800&auto=format&fit=crop',
            'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', // Dummy YouTube Embed
            'external_url' => 'https://kampusmerdeka.kemdikbud.go.id/',
            'provider' => 'Kemdikbud Ristek',
            'is_featured' => true,
        ]);

        // 2. External Link Mode Example (No Embed)
        Opportunity::create([
            'title' => 'Beasiswa LPDP Tahap II Tahun 2026',
            'slug' => 'beasiswa-lpdp-tahap-2-2026',
            'category' => 'Beasiswa',
            'description' => 'Pendaftaran Beasiswa LPDP Tahap II telah dibuka. Program ini ditujukan bagi WNI yang ingin melanjutkan studi Magister (S2) dan Doktoral (S3) di perguruan tinggi dalam maupun luar negeri dengan pembiayaan penuh dari negara.',
            'thumbnail' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=800&auto=format&fit=crop',
            'embed_url' => null, // Empty so it falls back to external URL preview
            'external_url' => 'https://lpdp.kemenkeu.go.id/',
            'provider' => 'Kementerian Keuangan RI',
            'is_featured' => true,
        ]);

        // 3. Regular Event
        Opportunity::create([
            'title' => 'Pelatihan Kepemimpinan Nasional SEMMI',
            'slug' => 'pelatihan-kepemimpinan-nasional-semmi',
            'category' => 'Pelatihan',
            'description' => 'Pelatihan intensif selama 3 hari untuk membentuk kader pemimpin masa depan. Kuota terbatas hanya untuk 100 pendaftar pertama dari seluruh cabang.',
            'thumbnail' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=800&auto=format&fit=crop',
            'embed_url' => null,
            'external_url' => 'https://semmi.or.id/events',
            'provider' => 'PB SEMMI',
            'is_featured' => false,
        ]);

        // 4. Competition
        Opportunity::create([
            'title' => 'National Business Plan Competition 2026',
            'slug' => 'national-business-plan-competition-2026',
            'category' => 'Kompetisi',
            'description' => 'Kompetisi rancangan bisnis tingkat nasional dengan total hadiah puluhan juta rupiah. Terbuka untuk seluruh mahasiswa aktif D3/S1 se-Indonesia.',
            'thumbnail' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32d7?q=80&w=800&auto=format&fit=crop',
            'embed_url' => null,
            'external_url' => 'https://example.com/competition',
            'provider' => 'Universitas Indonesia',
            'is_featured' => false,
        ]);
    }
}
