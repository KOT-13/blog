<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //DB::table('users')->delete();
        DB::table('categories')->delete();
        //factory(App\User::class, 10)->create();
        factory(\App\Category::class, 10)->create();
        $this->call(AdminSeeder::class);
    }
}
