<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuisine;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cuisine = new Cuisine;
        $cuisine->cuisine = 'UK';
        $cuisine->save();

        $cuisine = new Cuisine;
        $cuisine->cuisine = 'France';
        $cuisine->save();

        $cuisine = new Cuisine;
        $cuisine->cuisine = 'Italy';
        $cuisine->save();
        
        $cuisine = new Cuisine;
        $cuisine->cuisine = 'South Europe';
        $cuisine->save();
        
        $cuisine = new Cuisine;
        $cuisine->cuisine = 'Eastern Europe';
        $cuisine->save();
    }
}
