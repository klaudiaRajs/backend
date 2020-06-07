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
         $this->call(UserSeeder::class);
         $this->call(BoxSeeder::class);
         $this->call(RuneSeeder::class);
         $this->call(ItemBlueprintSeeder::class);
         $this->call(RewardSeeder::class);
    }
}
