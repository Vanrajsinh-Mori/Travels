@include('partials.header')
@extends('partials.footer')

<style>
    body {
        position: relative;
        background-color: white;
        margin: 0;
        padding: 0;
    }

    .adfs {
        position: relative;
        height: 600px;
        background-image: url("/img/{{ $hotels->hotels_image_path }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        display: flex;
        align-items: flex-end;
    }

    .adfs::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.4);
        color: white;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
    }

    .breadcrumb-item a {
        color: white;
        font-size: 20px;
        text-decoration: none;
    }

    h3 {
        margin-left: 200px;
    }

    h4 i {
        margin-right: 5px;
    }

    h4 {
        margin-left: 30px;
    }
</style>

<div class="adfs">
    <div>
        <footer>
            <h3>{{ $hotels->hotels_name }}</h3>
            <h4>
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $hotels->hotels_star)
                        <i class="fa fa-star text-warning"></i>
                    @else
                        <i class="fa fa-star text-muted"></i>
                    @endif
                @endfor
            </h4>
        </footer>
    </div>
</div>

<style>
    .container1 {
        background-color: white;
        padding: 20px;
        margin-top: 12px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        position: fixed;
        top: 350px;
        left: 1200px;
        right: 0;
        bottom: 90px;

    }

    .hotel {
        margin-bottom: 20px;
    }

    .card-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .img-fluid {
        border-radius: 5px;
        margin-top: 10px;
    }

    .fa-star {
        color: #FFD700;
    }

    .text-muted {
        color: #ccc;
    }

    .price {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }

    .card-text {
        font-size: 16px;
        margin-top: 10px;
    }

    .date {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    label {
        font-size: 14px;
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        margin-top: 5px;
    }

    #checkin {
        background-color: #e6f7ff;
    }

    #checkout {
        background-color: #ffe6e6;
    }

    .container {
        margin-top: 20px;
    }

    .guestDtls {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
    }

    .info {
        background-color: rgb(255, 248, 237);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .info h4 {
        color: #FFA500;

    }

    .imptInfo__list {
        list-style-type: none;
        padding: 0;
    }

    .blackDot {
        width: 8px;
        height: 8px;
        background-color: #000;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
    }
</style>
<div class="container1">
    <div class="hotel-details">
        <div class="hotel">
            <h4 class="card-title pt-3">{{ $hotels->hotels_name }}</h4>
            <img src="/img/{{ $hotels->hotels_image_path }}" height="150px" width="150px" class="img-fluid float-end"
                alt="Hotel Image">
            @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $hotels->hotels_star)
                    <i class="fa fa-star text-warning"></i>
                @else
                    <i class="fa fa-star text-muted"></i>
                @endif
            @endfor
            <p class="price text-success">₹{{ $hotels->hotels_price }}</p>
            <p class="card-text">{{ $hotels->hotels_description }}</p>
            <form action="{{ route('book', $hotels->hotel_id) }}" method="POST" class="">
                @csrf
                <button type="submit" class="btn btn-warning">Book This Now</button>
            </form>
        </div>
        <div class="info">
            <h4 class="text-warning">Important information</h4>
            <ul class="imptInfo__list">
                <li><span class="fs-30"><span class="appendLeft3 blackDot"></span></span><span
                        class="font12 ruleText">Passport, Aadhar, Driving License and Govt. ID are accepted as ID
                        proof(s)</span></li>
                <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                        class="font12 ruleText">Pets
                        are not allowed.</span></li>
            </ul>
        </div>
    </div>
</div>
