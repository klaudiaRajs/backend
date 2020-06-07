<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemBlueprintSeeder extends Seeder
{
    public function run()
    {
        DB::table('item_blueprints')->insert(
            [
                'type' => 'BOX',
                'name' => 'brownBox',
                'attributes' => json_encode(['name' => 'brownBox', 'image_url' => 'http://some-hosting-storage.com/image', 'price' => 20.50])
            ]
        );
        DB::table('item_blueprints')->insert(
            [
                'type' => 'RUNE',
                'name' => 'ancientRune',
                'attributes' => json_encode(['name' => 'brownBox', 'image_url' => 'http://some-hosting-storage.com/image', 'bonus' => json_encode(['bonusValue' => 10])])
            ]
        );
        DB::table('item_blueprints')->insert(
            [
                'type' => 'REWARD',
                'name' => 'anniversaryReward',
                'attributes' => json_encode(['name' => 'brownBox', 'image_url' => 'http://some-hosting-storage.com/image', 'code' => "YEAR2020", 'status' => 1])
            ]
        );
    }
}
