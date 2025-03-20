<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Membuat Administrator
         User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'), // Ganti dengan password yang aman
            'role' => 'administrator',
        ]);

        // Membuat Teacher
        User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'password' => Hash::make('teacher'), // Ganti dengan password yang aman
            'role' => 'teacher',
        ]);

        // Membuat Student
        User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => Hash::make('student'), // Ganti dengan password yang aman
            'role' => 'student',
        ]);
    }
}
