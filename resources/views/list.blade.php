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

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('/img/back.avif');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        filter: blur(2px);
        z-index: -1;
    }

    .container1 {
        background-color: white;
        border-radius: 12px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, 1%);
        max-height: 80vh;
        /* Set a maximum height for the container */
        overflow-y: auto;
        /* Add vertical scroll when content exceeds container height */
    }

    .container1::-webkit-scrollbar {
        display: none;
        /* Hide the scrollbar for WebKit browsers */
    }

    .card {
        max-width: 800px;
        /* Adjust the max-width as needed */
        margin: auto;
        /* Center the card horizontally */
        background-color: #ffffff;
        /* Set card background color */
        border-radius: 10px;
        /* Add rounded corners to the card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Add shadow to the card */
    }

    .card-body {
        padding: 20px;
        /* Add padding to the card body */
    }

    .img-fluid1 {
        width: 100%;
        /* Ensure images fill their container */
        height: 200px;
        /* Set a fixed height for the images */
        object-fit: cover;
        /* Ensure the images maintain aspect ratio and cover the container */
        border-top-left-radius: 10px;
        /* Add rounded corners to image */
        border-bottom-left-radius: 10px;
        /* Add rounded corners to image */
    }

    .stick {
        position: sticky;
        border-bottom: 1px solid black;
        margin-top: -21px;
        top: -17px;
        z-index: 1;
        background-color: white;
        width: 100%;
        padding: 20px;
    }
    .noc{
        display: flex;
    }
</style>





<div class="container1 p-3 my-4">
    <div class="stick">
        <h5> List Of Hotels You have Booked</h5>
    </div>
    @php
        $user_id = Auth::id(); // Get the ID of the currently authenticated user
    @endphp

    @if ($booking->where('user_id', $user_id)->isNotEmpty())
        @foreach ($booking->where('user_id', $user_id) as $book)
            <!-- Filter bookings for the authenticated user -->
            <div class="card my-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/{{ $book->hotel_image_path }}" class="img-fluid1 rounded-start" alt="Hotel Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->name }}</h5>
                            <div class="noc">
                            <p class="card-text">₹{{ $book->price }}</p>
                            @if ($book->status == 1)
                                <p class="card-text ps-3"><span class="text-success">Payed</span></p>
                            @else
                                <p class="card-text ps-3"><span class="text-danger">Pending</span></p>
                            @endif
                        </div>
                            <p class="card-text">Check-in date: <small
                                    class="text-body-secondary">{{ $book->checkin_date }}</small></p>
                            <p class="card-text">Check-out date: <small
                                    class="text-body-secondary">{{ $book->checkout_date }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
