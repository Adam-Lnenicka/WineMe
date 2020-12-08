<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = new Price;
        $price->price = '$';
        $price->save();

        $price = new Price;
        $price->price = '$$';
        $price->save();

        $price = new Price;
        $price->price = '$$$';
        $price->save();
    }
}
