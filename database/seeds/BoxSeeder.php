<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoxSeeder extends Seeder
{
    public function run()
    {
        DB::table('boxes')->insert(
            [
                'name' => 'brownBox',
                'image_url' => 'http://some-hosting-storage.com/brownBoxImage',
                'price' => 20.50,
                'user_id' => 1
            ]
        );

        DB::table('boxes')->insert(
            [
                'name' => 'silverBox',
                'image_url' => 'http://some-hosting-storage.com/silverBoxImage',
                'price' => 50.20,
                'user_id' => 1
            ]
        );
    }
}
