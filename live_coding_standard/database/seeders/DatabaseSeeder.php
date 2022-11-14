<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brief;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            Brief::create(
                [
                    'name' => Str::random(8),
                    'date_livraison' => Carbon::now(),
                    'date_recuperation' => Carbon::now()
                ]
            );
            Student::create(
                [
                    'name' => Str::random(8),
                   
                ]
            );


            
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
