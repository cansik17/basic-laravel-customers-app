<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Jane Doe',
            'email'=>'janedoe@gmail.com',
            'password'=>bcrypt('12345678'),
            
        ]);
    }
}

