<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Darma;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Darma::create([
            'judul' => 'Pendidikan',
            'deskripsi' => 'Program pendidikan untuk meningkatkan kualitas generasi muda.',
        ]);

        Darma::create([
            'judul' => 'Kemanusiaan',
            'deskripsi' => 'Kegiatan sosial dan kemanusiaan untuk membantu masyarakat.',
        ]);

        Darma::create([
            'judul' => 'Ekonomi',
            'deskripsi' => 'Mendorong kemandirian ekonomi dan pemberdayaan masyarakat.',
        ]);

        Darma::create([
            'judul' => 'Keagamaan',
            'deskripsi' => 'Kegiatan keagamaan dan pembinaan masyarakat.',
        ]);
    }
}