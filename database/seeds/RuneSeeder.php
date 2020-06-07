<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuneSeeder extends Seeder
{
    public function run()
    {
        DB::table('runes')->insert(
            [
                'name' => 'ancientRune',
                'image_url' => 'http://some-hosting-storage.com/ancientRuneImage',
                'bonus' => '{"bonusValue":50}',
                'user_id' => 1
            ]
        );
    }
}
