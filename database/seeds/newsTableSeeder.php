<?php

use Illuminate\Database\Seeder;

class newsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'description' => str_random(250),
            'summery' => str_random(100),
            'title' => str_random(50)
        ]);
    }
}
