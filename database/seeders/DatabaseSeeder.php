<?php

namespace Database\Seeders;

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
         // \App\Models\User::factory(10)->create();

         \App\Models\Role::create(['name'=>'Admin']);
         \App\Models\Role::create(['name'=>'Author']);
         \App\Models\Role::create(['name'=>'Editor']);
         \App\Models\Role::create(['name'=>'Subscriber']);
         


    }
}