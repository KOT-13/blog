<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class DatabaseSeeder
 */
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
        DB::table('users')->delete();
        DB::table('categories')->delete();
        DB::table('posts')->delete();
        DB::table('comments')->delete();
        factory(App\User::class, 50)->create()->each(function ($u) {
            /** @var \App\Post $post */
            $post = $u->posts()->save(factory(\App\Post::class)->make());
            $post->comments()->save(factory(\App\Comment::class)->make());
        });
        factory(\App\Category::class, 10)->create();
        $this->call(RolesSeeder::class);
    }
}
