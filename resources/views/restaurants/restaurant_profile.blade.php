
@extends('layouts.app')

@section('content')
<div class="profile-container">
    
    <div class="detail">
        
            <img class="profile-image" src="{{ $restaurant->picture}}">
        
        <div class="restaurant-text">
            <h1>Restaurant Profile: {{ $restaurant->restaurant_name }}</h1>
            <br>
            <br>
            <p>Price range: {{ $restaurant->price_range }}</p>
            <p>Size of the restaurant: {{ $restaurant->size }}</p>
            <p>Description: {{ $restaurant->description }}</p>
        </div>   
</div>
<div class ="user-reviews">
<h3>User Reviews</h3>
@foreach($restaurant->reviews as $review)
    <div class ="rating-box">
        <strong>Rating: {{ $review->rating }}</strong><i class="fa fa-star" aria-hidden="true"></i>
        <br>
        <p>{{ $review->text }}</p>
    </div>
@endforeach
</div>
<h3>Submit a Review</h3>
    <form method="post" action="{{ action('RestaurantsController@storeReview', [$restaurant->id]) }}">
        @csrf
        <div>
            <label for ="rating">Your Rating </label>
            <input type="number" id="rating" name="rating" min="1" max="5"></inpu>
        </div>
        <div>
            <label for ="text">Text</label>
            <br>
            <textarea type="text" name="text" col ="700" row="6"></textarea>
        </div>

        <input class ="btn" type="submit" class="btn"></input>
    </form>
    </div>

@endsection
