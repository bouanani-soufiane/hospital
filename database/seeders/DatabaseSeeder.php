<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Image;
use App\Models\Medicine;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Speciality::factory()
            ->has(Medicine::factory()->count(2))
            ->count(3)
            ->create();
        Image::factory()->count(9)->create();
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
