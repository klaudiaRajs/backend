<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Albus Percival Wulfric Brian Dumbledorw',
                'remember_token' => 'myToken'
            ]
        );
    }
}
