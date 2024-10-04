<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Trainer']);
        Role::create(['name' => 'Trainee']);
    

        $admin = User::find(1);
        $admin->assignRole('Admin');
    
    }
}
