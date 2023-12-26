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
                'membershipun'=> $line[1],
                'sovereigntydispute'=> $line[2]
            ]);
               echo("</br>");
        }
        
        fclose($file);
    }
}
