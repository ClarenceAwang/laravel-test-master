@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="container">
                <div class="row">
                <div class="col-sm">
                <img src= images\mundo.jpg class="img-thumbnail">
                <h3 class="mt-2">Dr Mundo Poster</h3>
                <h3 class="mt-4"> $20 </h3>
                <a href="/dr-mundo-poster" class = "btn btn-light">View Details</a>
                </div>
                <div class="col-sm">
                <img src= images\starwars.jpg class="img-thumbnail">
                <h3 class="mt-2">Star Wars Poster</h3>
                <h3 class="mt-4"> $20 </h3>
                <a href="/star-wars-poster" class = "btn btn-light">View Details</a>
                </div>
                <div class="col-sm">
                <img src="images\poster4.png" class="img-thumbnail">
                <h3 class="mt-2">Dine and Dash Poster</h3>
                <h3 class="mt-4"> $20 </h3>
                <a href="/dine-and-dash-poster" class = "btn btn-light">View Details</a>
                </div>
                 </div>
            </div>
            </br>
            
            <div class="container">
                <div class="row">
                <div class="col-sm">
                <img src="images\randomposter.jpg" class="img-thumbnail">
                <h3 class="mt-2">Cat Poster</h3>
                <h3 class="mt-4"> $20 </h3>
                <a href="/cat-poster" class = "btn btn-light">View Details</a>
                </div>
                <div class="col-sm">
                <img src="images\pool.jpg" class="img-thumbnail">
                <h3 class="mt-2">Deadpool Poster</h3>
                <h3 class="mt-4"> $20 </h3>
                <a href="/deadpool-poster" class = "btn btn-light">View Details</a>
                </div>
                <div class="col-sm">
                <img src="images\totoro.jpg" class="img-thumbnail">
                <h3 class="mt-2">My neighbor totoro Poster</h3>
                <h3 class="mt-4"> $20 </h3>
                <a href="/my-neighbor-totoro-poster" class = "btn btn-light">View Details</a>
                </div>
                 </div>
            </div>

            
                
            </div>
        </div>
    </div>
</div>
@endsection

