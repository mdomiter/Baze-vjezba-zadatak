<?php

use Illuminate\Database\Seeder;

class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Rent::create([
            'rent_date' => '2018-05-14',
            'return_date' => '2018-06-28',
            'client_id' => 1,
            'car_id' => 1
        ]);
    }
}
