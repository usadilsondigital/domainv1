<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutonomoussystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen('asseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('autonomoussystems')->insert([
                'numbermin'=> $line[0],
                'numbermax'=> $line[1],
                'bits'=> $line[2],
                'description'=> $line[3],
                'reference'=> $line[4]
            ]);
        }
        
        fclose($file);
    }
}
