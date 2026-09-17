<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat Branch Dummy
        $branch = Branch::updateOrCreate(
            ['name' => 'Cabang Kota Bandung'],
            [
                'location' => 'Bandung',
                'address' => 'Jl. Mahasiswa No. 1, Kota Bandung, Jawa Barat',
                'contact_number' => '081234567890',
                'instagram_url' => 'https://instagram.com/semmi_bandung',
                'description' => 'Kantor cabang SEMMI Kota Bandung yang aktif menjalankan kaderisasi dan pengabdian.',
                'photo' => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&q=80&w=400',
            ]
        );

        // 2. Buat Super Admin
        User::updateOrCreate(
            ['email' => 'admin@semmi.or.id'],
            [
                'name' => 'Super Admin SEMMI',
                'password' => bcrypt('password'),
                'role' => 'super_admin',
            ]
        );

        // 3. Buat Branch Admin
        User::updateOrCreate(
            ['email' => 'cabang.bandung@semmi.or.id'],
            [
                'name' => 'Admin Cabang Bandung',
                'password' => bcrypt('password'),
                'role' => 'branch_admin',
                'branch_id' => $branch->id,
            ]
        );
    }
}
