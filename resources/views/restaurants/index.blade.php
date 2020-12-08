@extends('layouts.app') 
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ Croppa::url('/media/slider_1.jpg','1000', '300') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Croppa::url('/media/slider_2.jpg','1000', '300') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Croppa::url('/media/slider_3.jpg','1000', '300') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="center">



    <div id="app"></div>
  
    
    


        <table class="table">

        
            <thead>
                <th>
                    
            
                    <td class="row1">
                        User Image
                    </td>
                    <td class="row2">
                        Name
                    </td>
                    <td class="row3">
                        Handy points
                    </td>  
                    <td class="row4">
                        Hopeful/Helpmate
                    </td>
                    <td class="row5">
                        Service
                    </td>
                    <td class="row6">
                        Email
                    </td>

                </th>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                
                    <tr>
                        <td></td>
                        

                        
                        <td class="row2"style=""><a class="link" href="">{{ $restaurant->restaurant_name }}</a></td>
                        <td class="row3"style="">{{ $restaurant->price_range }}</td>
                        <td class="row4">{{ $restaurant->quisine }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="{{ mix('js/app.js') }}"></script>
  
</div>



    @endsection