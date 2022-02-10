<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2= Role::create(['name' => 'docente']);
        
        $permiso1 = Permission::create([
            'name' => 'listar admins',
            'guard_name' => 'web'
        ]);


        $user1= User::create([
            'name' => 'admin rojas',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);
        $user2= User::create([
            'name' => 'docente rojas',
            'email' => 'docente@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_Admin' => false,
            'remember_token' => Str::random(10),
        ]);


        $user1->assignRole('admin');
        $user2->assignRole('docente');
    }
}
