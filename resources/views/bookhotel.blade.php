@include('partials.header')
@extends('partials.footer')
@if (!Auth::check()) 
    <script>
         window.location.href = "/login";
    </script>
@else
<style>
    body {
        position: relative;
        background-color: rgb(255, 255, 255);
        height: 155vh;
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
        background: rgba(0, 0, 0, 0.2);
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

    h5 {
        margin-left: 10px;
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
        position: absolute;
        top: 400px;
        left: 1200px;
        right: 0;

    }

    .container3 {
        background-color: white;
        padding: 20px;
        margin-top: 12px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        position: absolute;
        top: 800px;
        left: 50px;
        right: 0;

    }

    .container4 {
    background-color: white;
    padding: 20px;
    margin-top: 12px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    position: absolute;
    top: 1000px;
    left: 1200px;
    right: 0;
   
}

    .top{
        display: flex;
    }

    .ak {
    width: 330px; /* Adjust the width as needed */
}

.p {
    overflow: hidden;
    word-wrap: break-word;
    max-width: 100%; /* Ensure the text doesn't overflow its container */
}

    .bbtn{
        position: absolute;
        right :15px;
    }

    .media {
        display: flex;
    }

    .media-body {
        display: flex;
        overflow: hidden;
    word-wrap: break-word;
        width: 330px;
    }

    .media-footer{
        position: absolute;
        right: 10px;
    }

    .p {
        margin-left: 35px;
    }

    .text-dark {
        text-decoration: none;
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
        font-size: 20px;
        font-weight: bold;
        margin-top: 5px;
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
            <?php
            $discount = $hotels->hotels_price + 1200;
            ?>
            <p class="m-0 ling-trough" id="taxAmount"><s>₹{{ number_format($discount) }}</s></p>
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
<div class="container3">
    <h1 class="py-2">Give Your Review</h1>
    <form action="{{ route('save.thread', ['id' => $hotels->hotel_id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1"> Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                possible</small>
        </div>
        <input type="hidden" name="sno" value="">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Elaborate Your Concern</label>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-warning mt-2">Submit</button>
    </form>
</div>

<div class="container4 " id="ques">
    <div class="top">
    <h1 class="py-2">Browse Reviews</h1>
    <button type="button" class="btn btn-warning bbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        View All
      </button>
</div>
    @if ($threads->isEmpty())
        <div class="jumbotron jumbotron-fluid mb-0">
            <div class="container">
                <p class="display-4">No Reviews Found</p>
                <p class="lead">Be the first person to Give a Review.</p>
            </div>
        </div>
    @else
        @foreach ($threads->take(2) as $thread)
            <div class="media my-3">
                <div class="dbs">
                    <div class="media-body">
                        <img src="/img/userdefult.png" width="54px" class="mr-3" alt="User Avatar">
                        <h5 class="mt-0"><a class="text-dark" >{{ $thread->thread_title }}</a></h5>
                    </div>
                    <div class="ak">
                    <p class="p">{{ $thread->thread_desc }}</p>
                </div>
                </div>
                <div class="media-footer font-weight-bold my-0">
                    <div class="text-muted">Asked by:</div>
                    <div>{{ $thread->user->email }}</div>
                    <div class="text-muted">at:</div>
                    <div>{{ $thread->created_at->format('d M Y') }}</div>
                </div>
            </div>
        @endforeach
    @endif
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            @if ($threads->isEmpty())
            <h1 class="modal-title fs-5" id="exampleModalLabel">No Reviews Found</h1>
            @else
            <h1 class="modal-title fs-5" id="exampleModalLabel">All Reviews</h1>
          @endif
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if ($threads->isEmpty())
            <div class="jumbotron jumbotron-fluid mb-0">
                <div class="container">
                    <p class="display-4">No Reviews Found</p>
                    <p class="lead">Be the first person to Give a Review.</p>
                </div>
            </div>
        @else
            @foreach ($threads as $thread)
            <div class="media my-3">
                <div class="dbs">
                    <div class="media-body">
                        <img src="/img/userdefult.png" width="35px" class="mr-3" alt="User Avatar">
                        <h5 class="mt-0"><a class="text-dark" >{{ $thread->thread_title }}</a></h5>
                    </div>
                    <div class="ak">
                    <p class="p">{{ $thread->thread_desc }}</p> 
                </div>
                </div>
                <div class="media-footer font-weight-bold my-0">
                    <div class="text-muted">Asked by:</div>
                    <div>{{ $thread->user->email }}</div>
                    <div class="text-muted">at:</div>
                    <div>{{ $thread->created_at->format('d M Y') }}</div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endif