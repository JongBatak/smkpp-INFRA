<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
>>>>>>> master
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
=======
        $this->call([
            UserSeeder::class,
            VisiMisiSeeder::class,
>>>>>>> master
        ]);
    }
}
