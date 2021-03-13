<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Belajar Model Dengan Laravel',
                'slug' => ' belajar-model-dengan-laravel',
                'isi' =>'1',
                'penulis' =>"abababba",
                'draft' =>0
            ],
            [
                'title' => 'Belajar baca',
                'slug' => ' belajar-baca dengan mudah',
                'isi' =>'1',
                'penulis' =>"abababba",
                'draft' =>0
            ],
            [
                'title' => 'Belajar nyanyi',
                'slug' => ' belajar- bernyanyi dengan mudah',
                'isi' =>'1',
                'penulis' =>"abababba",
                'draft' =>0
            ],
            ];
             DB::table('artikel')->insert($data);
          
           
        
         
            }
}
