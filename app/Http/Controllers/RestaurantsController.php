<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Review;

class RestaurantsController extends Controller
{
    //
    public function restaurants()
    {
        $restaurants = Restaurant::get();

        return view('restaurants/index', compact('restaurants'));
    }
    
    public function top()
    {
        $top =Restaurant::orderBy('price_range','desc')
                            ->limit(10)
                            ->get();
        return $top;
    }


    public function profile($id)
    {

        $restaurant = Restaurant::with('reviews')->findOrFail($id);
    
        return view('restaurants/restaurant_profile', compact('restaurant'));
    }

   

    public function create()
    {
       // return 'hi';
       return view('restaurants/create');
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant;
        $restaurant->restaurant_name = $request->input('restaurant_name');
        $restaurant->cuisine = $request->input('cuisine');
        $restaurant->email = $request->input('email');
        $restaurant->save();
    }

    public function storeReview($restaurant_id, Request $request)
    {
    

        $restaurant = Restaurant::findOrFail($restaurant_id);

        $review          = new Review;
        $review->restaurant_id = $restaurant->id;
        $review->text   = $request->input('text');
        $review->rating = $request->input('rating');
        $review->save();

        return redirect(action('RestaurantsController@profile', [$restaurant->id]));
    }

}
