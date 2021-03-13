<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AngotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nama_anggota' => 'asep junaedi',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'089695774832',
                'alamat' =>"jalan yang benar no 44",
            ],
            [
                'nama_anggota' => 'edi irawan',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'089695454334',
                'alamat' =>"jalan makmur baru no 93",
            ],
            [
                'nama_anggota' => 'rezaldy rafi',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'0896957742233',
                'alamat' =>"jalan ikan paus  no 15",
            ],
            [
                'nama_anggota' => 'aisyah maulidya',
                'jenis_kelamin' => ' perempuan',
                'no_tlp' =>'0893295774343',
                'alamat' =>"jalan merpati no 23",
            ],
            [
                'nama_anggota' => 'lazuardi_alief',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'08963438547',
                'alamat' =>"jalan garuda no 12",
            ],
            [
                'nama_anggota' => 'rozak juandi',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'08969439375',
                'alamat' =>"jalan makmur arif no 77",
            ],
            [
                'nama_anggota' => 'ilham nur febriyanto',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'089645845992',
                'alamat' =>"jalan pisang kipas no 21",
            ],
            [
                'nama_anggota' => 'soni wijanarko',
                'jenis_kelamin' => ' laki_laki',
                'no_tlp' =>'0896934343542',
                'alamat' =>"jalan suber sari no 129",
            ],
            [
                'nama_anggota' => 'widya dwi rahmawati',
                'jenis_kelamin' => ' perempuan',
                'no_tlp' =>'084455774832',
                'alamat' =>"jalan permata baru no 54",
            ],
            [
                'nama_anggota' => 'nadya putri',
                'jenis_kelamin' => ' perempuan',
                'no_tlp' =>'081697456838',
                'alamat' =>"jalan selong permai no 343",
            ],
        );
        DB::table('angotas')->insert($data);
     
}
}
