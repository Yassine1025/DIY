<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
            'nom' => 'yassine','prenom' => 'elmediouni','adresse' => '108 uuuu','level_id' => 1,'role_id' => 1,'email'=>'yassine@gmail.com','email_verified_at'=>now(),'password'=>Hash::make('yassine1234'), 'created_at' =>now(),'updated_at' =>now(),'remember_token'=>Str::random(10)
        ];
        DB::table('users')->insert($user);
    }
}
