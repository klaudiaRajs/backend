<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
{
    public function run()
    {
        DB::table('rewards')->insert(
            [
                'name' => 'anniversaryReward',
                'image_url' => 'http://some-hosting-storage.com/image',
                'code' => "YEAR2020",
                'status' => 1,
                'user_id' => 1
            ]
        );
    }
}
