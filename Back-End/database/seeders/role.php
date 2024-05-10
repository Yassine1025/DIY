<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            'name' => 'admin', 'created_at' =>now(),'updated_at' =>now()
        ];
        DB::table('roles')->insert($roles);
    }
}
