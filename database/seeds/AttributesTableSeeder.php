<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Attribute::create([
            'attribute_name' => 'Boja',
            'is_allowed' => 'Da',
            'attribute_type' => 'Crvena'
        ]);
    }
}
