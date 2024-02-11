<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Speciality::factory(10)->create();
        \App\Models\Medicine::factory(10)->create();
        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@codex.com',
            'role' => 'admin',
            ]);
        Admin::factory()->create([
            'user_id' => $adminUser->id,
        ]);

    }
}
