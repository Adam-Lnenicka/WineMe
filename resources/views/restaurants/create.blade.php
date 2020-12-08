@extends('layouts.app')

@section('content')

<h1>New User</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('RestaurantsController@store') }}" method="POST">
    @csrf
    <label for="restaurant_name">First Name</label>
    <input type="text" name="restaurant_name" id="restaurant_name"/>
    <br/>
    <label for="cuisine">Cuisine</label>
    <input type="text" name="cuisine" id="cuisine"/>
    <br/>
    <label for="email">Email</label>
    <input type="text" name="email" id="email"/>
    <br/>

    <br/>
    <input type="submit" value="submit">
</form>