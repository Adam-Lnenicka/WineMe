<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $collor = new Color;
        $collor->color = 'red';
        $collor->save();

        $collor = new Color;
        $collor->color = 'white';
        $collor->save();

        $collor = new Color;
        $collor->color = 'rose';
        $collor->save();
    }
}
