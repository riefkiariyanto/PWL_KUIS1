<?php

namespace Database\Seeders;

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

        // $this->call(ArtikelTableSeeder::class);
        $this->call(AngotasTableSeeder::class);
        $this->call(PegawaiTableSeeder::class);
        $this->call(pelangganTableSeeder::class);
        $this->call(SupplierTableSeeder::class);



    }
}
