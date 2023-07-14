<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Survey All', 
            'email' => 'admin@surveyall.com', 
            'password' => bcrypt('Pa$$word!'), 
            'is_admin' => 1,
        ]);
    }
}
