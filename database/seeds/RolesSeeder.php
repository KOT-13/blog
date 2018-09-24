<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

/**
 * Class RolesSeeder
 */
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        Role::create(['name' => 'admin']);
        $user = User::create([
            'name' => 'Alex',
            'email' => 'alex13.nazarenco@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $user->assignRole('admin');
    }
}
