<?php

namespace Database\Seeders;

use App\Models\SchoolClub;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin_school@gmail.com',
            'password' => Hash::make('123')
        ]);

        SchoolClub::factory()->create([
            'club_name' => 'Seni',
            'desc' => 'Eksrakulikuler'
        ]);
    }
}
