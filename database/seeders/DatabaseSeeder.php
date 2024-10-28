<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        //Role::create(['name' => 'Admin', 'guard'=> 'web']);
        //Role::create(['name'=> 'Guesst', 'guard'=>'web']);


        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'middle_name' => '',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'phone' => '07013483389',
        ]);

        $user->assignRole('Admin');

    }
}
