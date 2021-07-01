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
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
            ['username'=>'admin1', 'password'=>bcrypt('123456')],
            ['username'=>'admin2', 'password'=>bcrypt('654321')], 
        ]);
    }
}
