<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;


class APIController extends Controller
{
    //
    public function search(Request $request)
    {
       // return  '%' . $request->input('search') . '%';
        return Restaurant::where('restaurant_name', 'like', '%' . $request->input('search') . '%' )->get();
    }

    public function allRestaurants()
    {
        $restaurants = Restaurant::get();
        return $restaurants;
    }

    public function filter(Request $request) {
        $cuisine_input = $request->input('cuisine', null);
        $color_input = $request->input('color', null); 
        $price_input = $request->input('price', null); 
        $page = $request->input('page', 0);

        $recipes = Recipe::query();

        if($cuisine_input !== null){
            $cuisine_id = Cuisine::where('cuisine', $cuisine_input)->value('id'); 
        	$recipes->where('cuisine_id', $cuisine_id);
        }

        if($color_input !== null){
        	$color_id = Color::where('color', $color_input)->value('id'); 
        	$recipes->where('total_color_id', $color_id);
        }

        if($price_input !== null){
        	$price_id = Price::where('price', $price_input)->value('id'); 
        	$recipes->where('price_id', $price_id);
        }

        $recipes = $recipes->offset(4 * $page)->limit(10)->orderBy('id', 'desc')->get();
        return compact('wines');
    }
}
