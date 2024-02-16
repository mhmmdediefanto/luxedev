<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Muhammad Ediefanto',
                'email' => 'ediefanto778@gmail.com',
                'password' => Hash::make('superadmin')
            ], [
                'name' => 'Muhammad arif Hidayat',
                'email' => 'arifhidayat778@gmail.com',
                'password' => Hash::make('admin')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
