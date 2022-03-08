<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Admin;
use Illuminate\Database\Seeder;
use App\Models\User;
use Encore\Admin\Auth\Database\AdminTablesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //User::factory(10)->create();
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class
        ]);
    }
}
