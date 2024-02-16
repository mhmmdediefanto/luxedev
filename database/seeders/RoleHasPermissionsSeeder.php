<?php

namespace Database\Seeders;

use App\Models\RoleHasPermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolesHasPermissions = [
            // admin
            [
                'permission_id' => 1,
                'role_id' => 2 //admin
            ],
            [
                'permission_id' => 2,
                'role_id' => 2
            ],
            [
                'permission_id' => 3,
                'role_id' => 2
            ],
            [
                'permission_id' => 4,
                'role_id' => 2
            ],
            [
                'permission_id' => 5,
                'role_id' => 2
            ],
            [
                'permission_id' => 6,
                'role_id' => 2
            ],

            // super admin
            [
                'permission_id' => 1,
                'role_id' => 1 //super admin
            ],
            [
                'permission_id' => 2,
                'role_id' => 1
            ],
            [
                'permission_id' => 3,
                'role_id' => 1
            ],
            [
                'permission_id' => 4,
                'role_id' => 1
            ],
            [
                'permission_id' => 5,
                'role_id' => 1
            ],
            [
                'permission_id' => 6,
                'role_id' => 1
            ],
            [
                'permission_id' => 7,
                'role_id' => 1
            ],
            [
                'permission_id' => 8,
                'role_id' => 1
            ],
            [
                'permission_id' => 9,
                'role_id' => 1
            ],
            [
                'permission_id' => 10,
                'role_id' => 1
            ],
            [
                'permission_id' => 11,
                'role_id' => 1
            ],
            [
                'permission_id' => 12,
                'role_id' => 1
            ],
        ];

        foreach ($rolesHasPermissions as $rolesHasPermission) {
            RoleHasPermissions::create($rolesHasPermission);
        };
    }
}
