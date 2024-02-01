@include('partials.header')
@extends('partials.footer')

<style>
    body {
        position: relative;
            background-image: url('/img/back.avif');
            background-color: rgba(0, 0, 0, 0.5);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
    }

    .container {
        margin-top: 30px;
    }

    .card {
        border: 1px solid #ccc;
        transition: transform 0.3s ease;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 30px;
        height: 100%; 
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card img {
        height: 250px; 
        object-fit: cover;
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        height: 230px; 
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem; 
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .card-text {
        color: #666;
        margin-bottom: 15px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .price {
        font-size: 1.6rem;
        font-weight: bold;
        color: #e44d26;
    }

    .btn-dark {
        background-color: #2c3e50;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #1a252f;
    }
</style>

<div class="container">
    <div class="row">
        @foreach ($hotels as $hotel)
            <div class="col-md-4 my-4">
                <div class="card">
                    <img src="/img/{{ $hotel->hotels_image_path }}" class="img-fluid rounded-start" alt="Hotel Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel->hotels_name }}</h5>
                        <p class="card-text">{{ $hotel->hotels_description }}</p>

                        <p class="price text-danger">
                            @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $hotel->hotels_star)
                            <i class="fa fa-star text-warning"></i>
                            @else
                            <i class="fa fa-star text-muted"></i>
                            @endif
                            @endfor
                            <p class="price text-danger">₹{{ $hotel->hotels_price }}</p>
                        </p>

                        <a href="{{ route('add', ['id' => $hotel->hotel_id]) }}" class="btn btn-dark">View hotel</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


