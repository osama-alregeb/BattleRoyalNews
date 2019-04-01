<?php

use Illuminate\Database\Seeder;

class gamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game')->insert([
            'age' => int_random(250),
            'name' => str_random(100),
            'game_urls' => str_random(50),
            'icon' => str_random(50),
            'background' => str_random(50),
            'type' => str_random(50),
            'description' => str_random(50),

        ]);
    }
}
