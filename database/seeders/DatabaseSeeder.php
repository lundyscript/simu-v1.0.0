<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Profil;
use App\Models\Siswa;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'slug' => 'lundy',
            'email' => 'lundyscript@gmail.com',
            'password' => bcrypt('12345'),
            'nuptk' => '1210651002',
            'nama' => 'muhamad lundy',
            'tempatlahir' => 'jember',
            'tanggallahir' => '1994-05-19',
            'jk' => 'L',
            'alamat' => 'jl karimata gg masjid lingk gumuk kerang sumbersari',
            'pendidikan' => 'S1',
            'gelar' => 'S.Kom.',
            'jabatan' => 'admin',

        ]);
        User::factory(6)->create();
        Kategori::create([
            'nama' => 'Berita',
            'slug' => 'berita'
        ]);
        Kategori::create([
            'nama' => 'Pengumuman',
            'slug' => 'pengumuman'
        ]);
        Status::create([
            'nama' => 'Draft',
            'slug' => 'draft'
        ]);
        Status::create([
            'nama' => 'Terbit',
            'slug' => 'terbit'
        ]);
        Artikel::factory(20)->create();
        Siswa::factory(50)->create();
        Profil::factory(8)->create();
    }
}
