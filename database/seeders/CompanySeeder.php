<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $companies = [
            [
                'name' =>    'Damien Entreprise',
                'vat_id' => 'BE07.078.5659',
                'street_name' => 'La tortue',
                'street_number' => '7A',
                'zip_code' => 1000,
                'locality' => 'Brussels',
                'email' => 'dams@fakecompany.com',
                'company_type'=> 'main'
            ],

            [
                'name' =>    'OVH Entreprise',
                'vat_id' => 'FR05.078.5659',
                'street_name' => 'La tortue',
                'street_number' => '7A',
                'zip_code' => 1000,
                'locality' => 'Paris',
                'email' => 'ovh@fakecompany.com',
                'company_type'=> 'provider'
            ],


            [
                'name' =>    'Atelier de danse',
                'vat_id' => 'BE01.078.5659',
                'street_name' => 'La tortue',
                'street_number' => '7A',
                'zip_code' => 1000,
                'locality' => 'Brussels',
                'email' => 'atd@fakecompany.com',
                'company_type'=> 'client'
            ],


            [
                'name' =>    'Atelier de peinture',
                'vat_id' => 'BE07.728.5659',
                'street_name' => 'La tortue',
                'street_number' => '7A',
                'zip_code' => 1000,
                'locality' => 'Brussels',
                'email' => 'atp@fakecompany.com',
                'company_type'=> 'client'
            ],
        ];

        foreach($companies as $data){
            DB::table('companies')->insert([
                'name' =>    $data['name'],
                'vat_id' =>  $data['vat_id'],
                'street_name' => $data['street_name'],
                'street_number' => $data['street_number'],
                'zip_code' => $data['zip_code'],
                'locality' => $data['locality'],
                'email' => $data['email'],
                'company_type'=>   $data['company_type'],
            ]);
        }
    
    }
}
