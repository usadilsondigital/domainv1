<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnsystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen('unsystem.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('unsystem')->insert([
                'name'=> $line[0]
            ]);
        }
        
        fclose($file);
    }
}
