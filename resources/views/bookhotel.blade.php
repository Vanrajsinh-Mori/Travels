@include('partials.header')
@extends('partials.footer')

<style>
     body {
            position: relative;
            background-color: white;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            filter: blur(2px);
            z-index: -1;
        }
</style>
    




<div class="container-fluid row my-4" id="productContainer">


    <div class="col-5 container-fluid">
        <div class="card">

            <img src="/img/{{ $hotels->hotels_image_path}}" class="border card-img-top" alt="...">

        </div>
    </div>




    <div class="col-5 bg-light rounded">

        <div class="card-body">
            <h5 class="card-title">{{ $hotels->hotels_name }}</h5>
            <p class="card-text">{{ $hotels->hotels_description }}</p>
           

        </div>




        <div class="my-3">
            <b>{{ $hotels->hotels_name }}</b>
        </div>
        <span><b></b>
        </span>
        <br>
        <ul>
            <li>
                <span> <b>{{ $hotels->hotels_description }}</b> </span>
            </li>
        </ul> 
       <h4> @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $hotels->hotels_star)
        <i class="fa fa-star text-warning"></i>
        @else
        <i class="fa fa-star text-muted"></i>
        @endif
        @endfor</h4>
        <h3>₹{{ $hotels->hotels_price }}</h3>

        <form action="{{ route('book', $hotels->hotel_id) }}" method="POST" class="my-5">
            @csrf
            <button type="submit" class="btn btn-warning   " style="font-size:30px">Book</button>
        </form>

    </div>

    

</div>


