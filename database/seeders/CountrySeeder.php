<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen('countryseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('countries')->insert([
                'name'=> $line[0],
                'formalname'=> $line[0],                
                'disputedsovereignty'=> $line[2],
                'unsystem_id'=> 0,
            ]);
        }
        
        fclose($file);
    }
}
