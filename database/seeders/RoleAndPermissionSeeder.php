<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'play']);
        Permission::create(['name' => 'manage']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'user'])
            ->givePermissionTo(['play']);

        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(['manage']);
    }
}
