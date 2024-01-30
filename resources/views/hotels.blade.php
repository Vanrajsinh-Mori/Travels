@include("partials.header")
@extends("partials.footer")
<style>
    .img1 {

        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    #carouselExampleIndicators {
        margin: 0 auto;
        width: 70%;
    }

    .card {

        transition: transform 0.3s;
        height: 95%;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        height: 50%;
        object-fit: cover;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-text {
        color: #555;
    }
</style>

<div class="container show mb-5">
    <div class="container my-4 mt-5" id="ques">
        <div class="row my-4" id="productContainer">

            @foreach ($hotels as $hotel)
    <div class="col-3">
        <div class="card">
            <img src="/img/{{ $hotel->hotels_image_path }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $hotel->hotels_name }}</h5>
                <p class="card-text">{{ $hotel->hotels_description }}</p>
                <h3>₹{{ $hotel->hotels_price }}</h3>
                {{-- <a href="{{ route('add', ['id' => $hotel->id]) }}" class="btn btn-dark">Add to cart</a> --}}
            </div>
        </div>
    </div>
@endforeach


        </div>
    </div>
</div>


