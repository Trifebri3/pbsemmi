<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Database\Seeder;

class MapDataSeeder extends Seeder
{
    public function run(): void
    {
        $jabar = Province::updateOrCreate(
            ['id' => '32'],
            [
                'name' => 'JAWA BARAT',
                'latitude' => -6.920432,
                'longitude' => 107.604608,
            ]
        );

        $bandung = Regency::updateOrCreate(
            ['id' => '3273'],
            [
                'province_id' => '32',
                'name' => 'KOTA BANDUNG',
                'latitude' => -6.914744,
                'longitude' => 107.609810,
            ]
        );

        // Add 50 dummy locations in Bandung
        for ($i = 1; $i <= 50; $i++) {
            Location::create([
                'name' => 'Sekretariat SEMMI Ranting '.$i,
                'province_id' => '32',
                'regency_id' => '3273',
                'district_name' => 'Kecamatan '.$i,
                'latitude' => -6.914744 + (mt_rand(-500, 500) / 10000),
                'longitude' => 107.609810 + (mt_rand(-500, 500) / 10000),
                'category' => 'Ranting',
                'status' => 'Aktif',
                'description' => "Kantor cabang ranting ke-$i di Bandung yang fokus pada advokasi kemahasiswaan dan pengabdian masyarakat.",
                'photo' => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&q=80&w=400',
                'address' => "Jl. Mahasiswa No. $i, Kota Bandung, Jawa Barat",
                'contact_number' => '0812'.str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT),
                'instagram_url' => 'https://instagram.com/semmi_ranting_'.$i,
            ]);
        }
    }
}
