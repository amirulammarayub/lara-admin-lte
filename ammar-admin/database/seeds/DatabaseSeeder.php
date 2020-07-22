<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // factory(App\Admin::class, 1)->create();
        factory(App\Staff::class,50)->create();
        // ->each(function ($admin) {
        //     $admin->staffs()->saveMany(factory(App\Staff::class,50)->make());
        // });
        // factory(App\Staff::class, 50)->create()->each(function ($admin) {
        //     $admin->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
