<?php

namespace Database\Seeders;
use App\Models\Recipe;

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Recipe;
        $r->name = 'Wine Sauce';
        $r->cuisine_id = 2;
        $r->diet_id = 1;
        $r->color_id = 2;
        $r->save();

        $r = new Recipe;
        $r->name = 'Hot Wine';
        $r->cuisine_id = 1;
        $r->diet_id = 1;
        $r->color_id = 2;
     
        $r->save();

        $r = new Recipe;
        $r->name = 'Christmas Dream with Rum';
        $r->cuisine_id = 4;
        $r->diet_id = 1;     
        $r->color_id = 2;
        $r->save();

    }
}