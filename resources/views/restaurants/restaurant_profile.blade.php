
@extends('layouts.app')

@section('content')
<div class="profile-container">
    <h1>Restaurant Profile</h1>
    <div>
        <p>{{ $restaurant->restaurant_name }}</p>
        <p>{{ $restaurant->price_range }}</p>
        <p>{{ $restaurant->cuisine }}</p>
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
            <textarea type="text" name="text" col ="200" row="4"></textarea>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>

    <h3>User Reviews</h3>
</div>
@foreach($restaurant->reviews as $review)
    <div class ="rating-box">
        <strong>Rating: {{ $review->rating }}</strong><i class="fa fa-star" aria-hidden="true"></i>
        <br>
        <p>{{ $review->text }}</p>
    </div>
@endforeach



@endsection
