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
        //
        DB::table('users')->delete();
        
        App\User::create(array(
            'name'=>'admin',
            'email'=>'admin@smart-compare.com',
            'password'=>'admin123',
            'facebook'=>false,
            'google'=>false
        ));
    }
}