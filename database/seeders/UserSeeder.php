<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $allUsers=
            [
                [
                    'name' => "Jean",
                    'firstname' => "Charles",
                    'email' => 'admin@demo.com',
                    'phone' => '0032-489373721',
                    'mobile'=> '0032-489373721',
                    'gdpr_valided' => true,
                ],
                [
                    'name' => "Julia",
                    'firstname' => "Sally",
                    'email' => 'juju@demo.com',
                    'phone' => '0032-489373721',
                    'mobile'=> '0032-489373721',
                    'gdpr_valided' => true,
                ],
                [
                    'name' => "Robin",
                    'firstname' => "Taramo",
                    'email' => 'robin@demo.com',            
                    'phone' => '0032-489373721',
                    'mobile'=> '0032-489373721',
                    'gdpr_valided' => true,
                ]
            ];


        foreach($allUsers as $usr){
            DB::table('users')->insert([
                'name' => $usr['name'],
                'firstname'=> $usr['firstname'],
                'email' =>$usr['email'],
                'password' =>  Hash::make('password'),
                'phone' => $usr['phone'],
                'mobile'=> $usr['mobile'],
                'gdpr_valided' => $usr['gdpr_valided'],
            ]);
        }
    }
}
