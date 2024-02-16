<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'create content',
                'guard_name' => 'content'
            ],
            [
                'name' => 'edit content',
                'guard_name' => 'content'
            ],
            [
                'name' => 'delete content',
                'guard_name' => 'content'
            ],
            [
                'name' => 'create pengguna',
                'guard_name' => 'pengguna'
            ],
            [
                'name' => 'delete pengguna',
                'guard_name' => 'pengguna'
            ],
            [
                'name' => 'edit pengguna',
                'guard_name' => 'pengguna'
            ],
            [
                'name' => 'create admin',
                'guard_name' => 'management_admin'
            ],
            [
                'name' => 'edit admin',
                'guard_name' => 'management_admin'
            ],
            [
                'name' => 'hapus admin',
                'guard_name' => 'management_admin'
            ],
            [
                'name' => 'backup',
                'guard_name' => 'management_database'
            ],
            [
                'name' => 'eksport',
                'guard_name' => 'management_database'
            ],
            [
                'name' => 'import',
                'guard_name' => 'management_database'
            ]
        ];

        foreach ($permissions as $permission) {
            Permissions::create($permission);
        }
    }
}
