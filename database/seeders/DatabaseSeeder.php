<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RootserverSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\UnsystemSeeder;
use Database\Seeders\AsnumberSeeder;
use Database\Seeders\AutonomoussystemSeeder;
use Database\Seeders\TypetldSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //flow of app

        $this->call([
                // UnsystemSeeder::class,
                //CountrySeeder::class,
                //AutonomoussystemSeeder::class,
                //RootserverSeeder::class,
                //AsnumberSeeder::class,
            TypetldSeeder::class
        ]);
    }
}
