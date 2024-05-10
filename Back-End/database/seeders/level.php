<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class level extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level=[
            'name' => 'Master', 'created_at' =>now(),'updated_at' =>now()
        ];
        DB::table('levels')->insert($level);
    }
}
