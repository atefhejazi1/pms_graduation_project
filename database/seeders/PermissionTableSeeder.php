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
            'users-all',
            'users-show',
            'users-create',
            'users-edit',
            'users-delete',

            'roles-list',
            'roles-all',
            'roles-create',
            'roles-edit',
            'roles-delete',


            'brands-list',
            'brands-all',
            'brands-create',
            'brands-edit',
            'brands-delete',

            'about-list',
            'about-all',
            'about-create',
            'about-edit',
            'about-delete',

            'departments-list',
            'departments-all',
            'departments-create',
            'departments-edit',
            'departments-delete',

            'blogs-list',
            'blogs-all',
            'blogs-create',
            'blogs-edit',
            'blogs-delete',

            'partners-list',
            'partners-all',
            'partners-create',
            'partners-edit',
            'partners-delete',

            'services-list',
            'services-all',
            'services-create',
            'services-edit',
            'services-delete',
            'services-request',
            'services-requested-all',
            'services-activation',

            'offers-list',
            'offers-all',
            'offers-create',
            'offers-edit',
            'offers-delete',

            'messages-list',
            'messages-all',
            'messages-create',
            'messages-edit',
            'messages-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
