<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RootserverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Letter	IPv4 address	IPv6 address	Old name	Operator Software countryid        
        $file = fopen('rootserverseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('rootservers')->insert([
                'letter'=> $line[0],
                'ipv4'=> $line[1],
                'ipv6'=> $line[2],
                'oldname'=> $line[3],
                'operator'=> $line[4],
                'software'=> $line[5],
                'countryid'=> $line[6]
            ]);
        }
        
        fclose($file);
    }
}
