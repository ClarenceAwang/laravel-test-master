@extends('layouts.app')

@section('content')
<div class="container">
<a href="/Landing_page" class = "btn btn-dark"> Back to Home </a>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="media">
            <img class="img-fluid mr-3" src="images\mundo.jpg">
            <div class="media-body">
                <h3 class="mt-0">Dr Mundo Poster</h3>
                Available in various sizes:
                </br>
                <a href="/Add-to-cart" class = "btn btn-dark"> 18” x 24” </a>
                </br>
                </br>
                <a href="/Add-to-cart" class = "btn btn-dark"> 24” x 36” </a>
                </br>
                </br>
                <a href="/Add-to-cart" class = "btn btn-dark"> 27” x 40” </a>
            </div>
            </div>


            </div>
        </div>
    </div>
</div>
@endsection
