<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class identitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = [
            ['no_pengguna' => 1001, 'nama' => ' Novy Safitri', 'alamat' => 'Kp.Pasawahan', 'tgl_lahir' => '2004-11-04', 'jk' => 'P', 'no_tlp' => '20041104', 'no_ktp' => '20041104'],
        ];
        DB::table('identitas')->insert($table);

    }
}
