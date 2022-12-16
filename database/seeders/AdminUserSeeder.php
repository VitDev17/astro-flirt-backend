<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::factory()->create([
            'email' => 'admin@belicedigital.com',
            'password' => bcrypt('belicedigital')
        ]);
        $adminUser->assignRole('admin') && $adminUser->givePermissionTo('manage');
    }
}
