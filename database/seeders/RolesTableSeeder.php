<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'code' => 'adm',
                'role' =>'Admin'
            ],
            [
                'code' => 'tcr',
                'role' =>'Teacher',
            ],
            [
                'code' => 'std',
                'role' =>'Student'
            ]
            ];
            DB::table('roles')->insert($roles);
    }
}
