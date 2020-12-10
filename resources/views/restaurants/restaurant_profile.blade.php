
@extends('layouts.app')

@section('content')
<div>

<p>{{ $restaurant->restaurant_name }}</p>
<p>{{ $restaurant->price_range }}</p>
<p>{{ $restaurant->cuisine }}</p>
</div>


<form method="post" action="{{ action('RestaurantsController@storeReview', [$restaurant->id]) }}">
    @csrf
    <p>
        <label>Rating </label>
        <input type="number" name="rating"/>
    </p>
    <p>
        <label>Text</label>
        <input type="text" name="text"/>
    </p>

    <input type="submit">
</form>

@foreach($restaurant->reviews as $review)
    <hr/>
    <p>{{ $review->text }}</p>
    <strong>{{ $review->rating }} / 100</strong>
@endforeach



@endsection
