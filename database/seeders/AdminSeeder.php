<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Admin::count() === 0) {
        Admin::create([

            'name' => 'admin_name',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123456'),
        ]);

        $this->command->info('Admin seeded successfully.');
    } else {
        $this->command->info('Admins table already contains records. Skipping seeding.');
    }
    }
}

