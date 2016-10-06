<?php

use Illuminate\Database\Seeder;

class BottlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bottles')->delete();

        DB::table('bottles')->insert([
            'id' => 1
        ]);

        DB::table('bottles')->insert([
            'id' => 2
        ]);

        DB::table('bottles')->insert([
            'id' => 3
        ]);
    }
}
