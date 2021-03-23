<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SupplierTableSeeder extends Seeder
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
                    'nama_supplier' => 'slamet junaedi',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'3 Tahun',
                    'biaya' =>"Rp.1000000000",
                    
                ],
                [
                    'id' => 2,
                    'nama_supplier' => 'Abdul roziq',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'4 Tahun',
                    'biaya' =>"Rp.1100000000",
                    
                ],
                [
                    'id' => 3,
                    'nama_supplier' => 'rahmad tohir',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'3 Tahun',
                    'biaya' =>"Rp.1000000000",
                    
                ],
                [
                    'id' => 4,
                    'nama_supplier' => 'abdul saleh',
                    'jenis' =>"Perorangan",
                    'kontrak' =>'2Tahun',
                    'biaya' =>"Rp.800000000",
                    
                ],
                [
                    'id' => 5,
                    'nama_supplier' => 'slamet junaedi',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'3 Tahun',
                    'biaya' =>"Rp.1000000000",
                    
                ],
                [
                    'id' => 6,
                    'nama_supplier' => 'megawati ',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'5 Tahun',
                    'biaya' =>"Rp.1500000000",
                    
                ],
                [
                    'id' => 7,
                    'nama_supplier' => 'imam santoso',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'2 Tahun',
                    'biaya' =>"Rp.800000000",
                    
                ],
                [
                    'id' => 8,
                    'nama_supplier' => 'jamal ',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'3 Tahun',
                    'biaya' =>"Rp.1000000000",
                    
                ],
                [
                    'id' => 9,
                    'nama_supplier' => '= ahmadjunaedi',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'3 Tahun',
                    'biaya' =>"Rp.1000000000",
                    
                ],
                [
                    'id' => 10,
                    'nama_supplier' => 'marco saleh',
                    'jenis' =>"Perusahaan",
                    'kontrak' =>'3 Tahun',
                    'biaya' =>"Rp.1000000000",
                    
                ],

            );
        //
        DB::table('supplier')->insert($data);
    

        }
    }