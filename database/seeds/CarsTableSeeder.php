<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Car::create([
            'name' => 'i30',
            'registration' => 'ZG1234KK',
            'manufacturer' => 'Hyundai'
        ]);
    }
}
