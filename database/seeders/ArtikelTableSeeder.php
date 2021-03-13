<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
            [
                'id' => 1,
                'judul' => 'Belajar Model Dengan Laravel',
                'slug' => ' belajar-model-dengan-laravel',
                'isi' =>'1',
                
                'penulis' =>"abababba"
            ],
            [
                'id' => 2,
                'judul' => 'Belajar baca',
                'slug' => ' belajar-baca dengan mudah',
                'isi' =>'1',
                
                'penulis' =>"abababba"
            ],
            [
                'id' => 3,
                'judul' => 'Belajar nyanyi',
                'slug' => ' belajar- bernyanyi dengan mudah',
                'isi' =>'1',
                'penulis' =>"abababba"
                
            ],
        );
             DB::table('artikels')->insert($data);
    }
}
