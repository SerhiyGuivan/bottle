<?php

use Illuminate\Database\Seeder;

class NodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nodes')->delete();

        DB::table('nodes')->insert([
            'id' => 1,
            'bottle_id' => 1,
            'title' =>  'This is a node of first bottle',
            'author' => 'Anonymous'
        ]);

        DB::table('nodes')->insert([
            'id' => 2,
            'bottle_id' => 2,
            'title' =>  'This is a node of second bottle',
            'author' => 'Anonymous'
        ]);

        DB::table('nodes')->insert([
            'id' => 3,
            'bottle_id' => 3,
            'title' =>  'This is a node of third bottle',
            'author' => 'Anonymous'
        ]);
    }
}
