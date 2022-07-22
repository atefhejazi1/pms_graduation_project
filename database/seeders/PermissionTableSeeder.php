<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'users-list',
            'users-create',
            'users-edit',
            'users-delete',

            'roles-list',
            'roles-create',
            'roles-edit',
            'roles-delete',


            'brands-list',
            'brands-create',
            'brands-edit',
            'brands-delete',

            'about-list',
            'about-create',
            'about-edit',
            'about-delete',

            'departments-list',
            'departments-create',
            'departments-edit',
            'departments-delete',

            'blogs-list',
            'blogs-create',
            'blogs-edit',
            'blogs-delete',

            'partners-list',
            'partners-create',
            'partners-edit',
            'partners-delete',

            'services-list',
            'services-create',
            'services-edit',
            'services-delete',

            'offers-list',
            'offers-create',
            'offers-edit',
            'offers-delete',

            'messages-list',
            'messages-create',
            'messages-edit',
            'messages-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
