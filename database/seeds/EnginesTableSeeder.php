<?php

use Illuminate\Database\Seeder;

class EnginesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Engine::create([
            'type' => 'Diesel'
        ]);
    }
}
