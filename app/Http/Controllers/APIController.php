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

    public function recipes(Request $request) {
        $cuisine_input = $request->input('cuisine', null); 
        $color_input = $request->input('color', null); 
        $diet_input = $request->input('diet', null); 
        $page = $request->input('page', 0);

        $recipes = Restaurant::query();

        if($cuisine_input !== null){
            $cuisine_id = Cuisine::where('name', $cuisine_input)->value('id'); // 1
            // dd($cuisine_id);
        	$recipes->where('cuisine_id', $cuisine_id);
        }

        if($color_input !== null){
        	$color_id = Color::where('color', $color_input)->value('id'); // 1
        	$recipes->where('color_id', $color_id);
        }

        if($diet_input !== null){
        	$diet_id = Wine::where('name', $diet_input)->value('id'); // 1
        	$recipes->where('diet_id', $diet_id);
        }

        $recipes = $recipes->offset(4 * $page)->limit(4)->orderBy('id', 'desc')->get();
        return compact('recipes');
    }
}
