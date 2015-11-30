<?php

use Illuminate\Database\Seeder;

class AppConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_configs')->delete();
        
        App\AppConfig::create(array(
            'key'=>'best_buy_api_key',
            'value'=>'sds252jk62quyu9s3suwvnpr'
        ));
    }
}
