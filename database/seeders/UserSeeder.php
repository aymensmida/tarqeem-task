<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        if (User::count() === 0) {
            User::factory(1)->create([
                'email' => 'user1@example.com',
                'password' => bcrypt('password1'),
            ]);

            User::factory(1)->create([
                'email' => 'user2@example.com',
                'password' => bcrypt('password2'),
            ]);
            User::factory(1)->create([
                'email' => 'user3@example.com',
                'password' => bcrypt('password3'),
            ]);
            User::factory(10)->create([

            ]);
            $this->command->info('Users seeded successfully.');
        } else {
            $this->command->info('Users table already contains records. Skipping seeding.');
        }

    }
}
