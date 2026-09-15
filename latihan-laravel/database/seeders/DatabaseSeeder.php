<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call(ProgramStudiSeeder::class);
        $this->call(MatakuliahSeeder::class);

        Mahasiswa::factory()->count(30)->create();

        $daftarMatakuliahId = Matakuliah::pluck('id');

        Mahasiswa::all()->each(function (Mahasiswa $mahasiswa) use ($daftarMatakuliahId) {
            $diambil = $daftarMatakuliahId->random(random_int(2, 4));

            foreach ($diambil as $matakuliahId) {
                $mahasiswa->matakuliah()->attach($matakuliahId, [
                    'nilai' => fake()->randomFloat(2, 60, 100),
                ]);
            }
        });

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}