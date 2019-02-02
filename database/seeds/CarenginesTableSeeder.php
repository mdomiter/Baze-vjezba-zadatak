<?php

use Illuminate\Database\Seeder;

class CarenginesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Carengine::create([
            'car_id' => 1,
            'engine_id' => 1
        ]);
    }
}
