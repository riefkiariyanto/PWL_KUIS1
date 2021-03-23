<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PelangganTableSeeder extends Seeder
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
                'id' => 1,
                'nama_pelangan' => 'slamet junaedi',
                'alamat' =>"jalang permata indah",
                'no_tlp' =>'0896957795867',
                'email' =>"asepeira3@gmail.com",
                
            ],
            [   'id' => 2,
                'nama_pelangan' => 'ahmad supriyadi',
                'alamat' =>"jalang mutiara indah",
                'no_tlp' =>'0879587795867',
                'email' =>"ahmadsupri244@gmail.com",
                
            ],
            [   'id' => 3,
                'nama_pelangan' => 'jhonathan priyadi',
                'alamat' =>"jalang Ikan paus no 44",
                'no_tlp' =>'08254957795342',
                'email' =>"jopriyadi343@gmail.com",
                
            ],
            [   'id' => 4,
                'nama_pelangan' => 'ihkram bahtiar',
                'alamat' =>"jalang gudang baru no 37",
                'no_tlp' =>'08954957794327',
                'email' =>"bahtiaram2947@gmail.com",
                
            ],
            [   'id' => 5,
                'nama_pelangan' => 'nur hidayat',
                'alamat' =>"jalan permata indah no 48",
                'no_tlp' =>'08969574322234',
                'email' =>"nurhidayat13iy@gmail.com",
                
            ],
            [   'id' => 6,
                'nama_pelangan' => 'anang hermansyah',
                'alamat' =>"jalan puri matahari",
                'no_tlp' =>'08969577343222',
                'email' =>"hermasyahanang4@gmail.com",
                
            ],
            [   'id' => 7,
                'nama_pelangan' => 'indah pertiwi',
                'alamat' =>"jalan gunung gede no74 ",
                'no_tlp' =>'0896957795867',
                'email' =>"indahpertiwi22@gmail.com",
                
            ],
            [   'id' => 8,
                'nama_pelangan' => 'dini agustini',
                'alamat' =>"jalan makmur arif no 96",
                'no_tlp' =>'0823957884577',
                'email' =>"diniagustin13@gmail.com",
                
            ],
            [   'id' => 9,
                'nama_pelangan' => 'arif roziq',
                'alamat' =>"jalan permata baru no 45",
                'no_tlp' =>'0834957798438',
                'email' =>"arifroziq1@gmail.com",
                
            ],
            [   'id' => 10,
                'nama_pelangan' => 'slamet baskara',
                'alamat' =>"jalan imam bonjol no 112",
                'no_tlp' =>'08139577954333',
                'email' =>"slametbaskara09@gmail.com",
                
            ],
        );
        DB::table('pelanggans')->insert($data);
     
}
}
