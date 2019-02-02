<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Client::create([
            'first_name' => 'Pero',
            'last_name' => 'Perić',
            'address' => 'Zagreb, Zagrebačka bb',
            'vat_id' => '12345678901'
        ]);
    }
}
