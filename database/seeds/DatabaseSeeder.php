<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //need to add all seeder files here
        $this->call(UserSeeder::class);
        $this->call(AppConfigSeeder::class);
        
        Model::reguard();
    }
}
