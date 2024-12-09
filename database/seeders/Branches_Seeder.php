<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Branches_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insertOrIgnore([
            [
                'id' => 1,
                'branch' => 'Hồ Chí Minh',
                'branch_name'=> 'Chi Nhánh Hồ Chí Minh',
                'branch_address' => '123 Đường ABC Quận 1',
                'parent_id' => 0
            ],
            [
                'id' => 2,
                'branch' => 'Hà Nội',
                'branch_name'=> 'Chi Nhánh Hà Nội',
                'branch_address' => '123 Đường EDF Quận Hoàn Kiếm',
                'parent_id' => 0
            ],
            [
                'id' => 3,
                'branch' => 'Đà Nẵng',
                'branch_name'=> 'Chi Nhánh Đà Nẵng',
                'branch_address' => '789 Đường AAA Quận Sơn Trà',
                'parent_id' => 0
            ]
        ]);
    }
}
