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
        $this->call(ClientsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(EnginesTableSeeder::class);
        $this->call(CarenginesTableSeeder::class);
        $this->call(RentsTableSeeder::class);

        $this->call(AttributesTableSeeder::class);
    }
}
