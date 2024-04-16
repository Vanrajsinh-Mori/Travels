@include('partials.header')
@extends('partials.footer')
@if (!Auth::check()) 
    <script>
        {!! session()->flash('alert', ['erorr' => 'Login First']) !!}
        window.location.href = "/login";
    </script>
@else
<style>
    body {
        font-family: 'Arial', sans-serif;
        height: 100vh;
        margin: 0;
        padding: 0;
    }

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

    .container6 {
        background-color: white;
        padding: 20px;
        margin: 20px auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
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

    .container6 {
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
        margin-top: 20px;
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

    .float-end {
        float: right;
    }

    .box-2 {
        display: flex;
        justify-content: space-between;
    }

    .box-2 p {
        margin: 0;
    }

    .box-3 {
        display: flex;
        justify-content: space-between;
    }

    .box-3 p {
        margin: 0;
    }

    .box-4 {
        background-color: rgb(216, 215, 215);
        display: flex;
        justify-content: space-between;
    }

    .box-4 p {
        margin: 0;
    }

    .form-check-label a {
        text-decoration: none;
    }

    .container1 {
        background-color: white;
        padding: 20px;
        margin-top: 12px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        position: absolute;
        top: 110px;
        left: -1250px;
        right: 0;
        overflow-y: auto;
        max-height: calc(100vh - 160px);
    }

    .container1::-webkit-scrollbar {
        display: none;
    }

    .container1::-webkit-scrollbar {
        width: 8px;
    }

    .container1::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 4px;
    }

    .container1::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }

    .container1::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        border-radius: 4px;
    }


    .container2 {
        padding: 20px;
        margin-top: 12px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        position: absolute;
        top: 68px;
        right: 0px;
        left: 1280px;

        max-height: calc(100vh - 160px);
    }

    .modal1-header {
        position: sticky;
        border-bottom: 1px solid black;
        margin-top: -21px;
        top: -21px;
        z-index: 1;
        background-color: #fff;
        width: 100%;
        padding: 20px;

    }

    .modal1-content {
        margin-top: 0px;
        padding-bottom: 0px;
    }


    .top {
        display: flex;
    }

    .ak {
        width: 330px;
    }

    .mo {
        display: flex;
    }

    .p {
        overflow: hidden;
        margin-left: 30px;
        word-wrap: break-word;
        max-width: 100%;
    }

    .bbtn {
        position: absolute;
        right: 15px;
    }

    .media {
        display: flex;
    }

    .media1-body {
        display: flex;
        overflow: hidden;
        word-wrap: break-word;
        width: 330px;
    }

    .text-dark {
        margin-left: 10px;
    }

    h5 a {
        text-decoration: none;
    }

    .modal-dialog {
        max-width: 64%;
        margin: 1.75rem auto;
    }

    .modal-body {
        position: relative;
    }

    .modal-bg-image {
        width: 100%;
        padding: 0;
        height: 100%;
        object-fit: cover;
    }

    .modal-header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
    }

    .modal-header .btn-close {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1000;
        background-color: transparent;
        color: #000;
        border: none;
    }

    .modal-header .btn-close:hover {
        color: red;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .hi {
        display: none;
    }

    .hi1 {
        display: none;
        padding-left: 29px;
        text-decoration: none;
    }

    .hi2 {
        display: none;
    }

    .hi3 {
        display: none;
        padding-left: 29px;
        text-decoration: none;
    }

    .qrimage {
        filter: blur(2px);
    }

    .view-button {
        width: 94px;
        height: 26px;
        border-radius: 15px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .35);
        margin: auto;
        cursor: pointer;
        border: solid 1px #0089ff;
        background-color: #fff;
        z-index: 1;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        outline: 0; 
        color: #0089ff;
    }

    .nuu {
        display: none;
    }

    .view-button:focus {
        outline: none;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/qrcode@latest"></script>

<div class="boxx">
    <form action=" {{ route('paid', ['id' => $hotels->hotel_id]) }}" method="POST">
        @csrf
        <div class="container6 mx-auto">
            <div class="hotel-details">
                <div class="hotel">
                    <h4 class="card-title pt-3">{{ $hotels->hotels_name }}</h4>
                    <img src="/img/{{ $hotels->hotels_image_path }}" height="150px" width="150px"
                        class="img-fluid float-end" alt="Hotel Image">
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
                    <p class="m-0 ling-trough" id="taxAmount1"><s>₹{{ number_format($discount) }}</s></p>
                    <p class="price text-success fs-30">₹{{ $hotels->hotels_price }}</p>
                    <p class="card-text">{{ $hotels->hotels_description }}</p>
                </div>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reg">
                    Book Now
                </button>

                <div class="info">
                    <h4 class="text-warning">Important information</h4>
                    <ul class="imptInfo__list">
                        <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                                class="font12 ruleText">Passport, Aadhar, Driving License and Govt. ID are accepted as
                                ID
                                proof(s)</span></li>
                        <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                                class="font12 ruleText">Pets
                                are not allowed.</span></li>
                        <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                                class="font12 ruleText">Smoking within the premises is not allowed</span></li>
                        <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                                class="font12 ruleText">Unmarried couples allowed</span></li>
                        <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                                class="font12 ruleText">Only 2 Adults and 1 Child alowed in a Room</span></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <img src="/img/backk.png" class="modal-bg-image" alt="">
                    <div class="modal-body">

                        <div class="col-12">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputname" required
                                placeholder="Enter your Name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8 mb-3">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" required
                                    placeholder="Enter your Email" value="{{ Auth::user()->email }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="inputphonenumber" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" maxlength="10" id="inputphonenumber" required
                                    placeholder="Enter Phonenumber" value="{{ Auth::user()->mobile }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress"
                                placeholder="Enter your Address"required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity"
                                    placeholder="Enter your City"required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="inputState" class="form-label" required>State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option value="andhra_pradesh">Andhra Pradesh</option>
                                    <option value="arunachal_pradesh">Arunachal Pradesh</option>
                                    <option value="assam">Assam</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="chhattisgarh">Chhattisgarh</option>
                                    <option value="goa">Goa</option>
                                    <option value="gujarat">Gujarat</option>
                                    <option value="haryana">Haryana</option>
                                    <option value="himachal_pradesh">Himachal Pradesh</option>
                                    <option value="jammu_kashmir">Jammu and Kashmir</option>
                                    <option value="jharkhand">Jharkhand</option>
                                    <option value="karnataka">Karnataka</option>
                                    <option value="kerala">Kerala</option>
                                    <option value="madhya_pradesh">Madhya Pradesh</option>
                                    <option value="maharashtra">Maharashtra</option>
                                    <option value="manipur">Manipur</option>
                                    <option value="meghalaya">Meghalaya</option>
                                    <option value="mizoram">Mizoram</option>
                                    <option value="nagaland">Nagaland</option>
                                    <option value="odisha">Odisha</option>
                                    <option value="punjab">Punjab</option>
                                    <option value="rajasthan">Rajasthan</option>
                                    <option value="sikkim">Sikkim</option>
                                    <option value="tamil_nadu">Tamil Nadu</option>
                                    <option value="telangana">Telangana</option>
                                    <option value="tripura">Tripura</option>
                                    <option value="uttar_pradesh">Uttar Pradesh</option>
                                    <option value="uttarakhand">Uttarakhand</option>
                                    <option value="west_bengal">West Bengal</option>
                                    <option value="andaman_nicobar">Andaman and Nicobar Islands</option>
                                    <option value="chandigarh">Chandigarh</option>
                                    <option value="dadra_nagar_haveli">Dadra and Nagar Haveli</option>
                                    <option value="daman_diu">Daman and Diu</option>
                                    <option value="delhi">Delhi</option>
                                    <option value="lakshadweep">Lakshadweep</option>
                                    <option value="puducherry">Puducherry</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Pin code</label>
                                <input type="text" maxlength="6" class="form-control" required id="inputZip"
                                    placeholder="Code">
                            </div>
                            <div class="col-md-4">
                                <label for="checkin">Check-in Date:</label>
                                <input type="date" id="checkin" name="checkin" required>
                            </div>
                            <div class="col-md-4">
                                <label for="checkout">Check-out Date:</label>
                                <input type="date" id="checkout" name="checkout" required>
                            </div>
                        </div>
                        <div class="payment bg-light p-3 mt-3">
                            <div class="box rounded-top">
                                <h4>Price Breakup</h4>
                            </div>
                            <div class="box-2 ">
                                <p><strong>Night Amount</strong></p>
                                <p class="float-end" id="nightAmount">₹{{ number_format($hotels->hotels_price, 2) }}
                                </p>
                            </div>
                            <hr>
                            <div class="box-3 ">
                                <p><strong>Hotel Taxes</strong></p><span class="sprite grayInfoIcon pointer"></span>
                                <?php
                                $taxAmount = ($hotels->hotels_price * 12) / 100;
                                $totalPrice = $hotels->hotels_price + $taxAmount;
                                ?>
                                <p class="float-end" id="taxAmount">₹{{ number_format($taxAmount, 2) }}</p>
                            </div>
                        </div>
                      
                        <div class="box-4 p-2 rounded-bottom">
                            <p><strong>Total Amount to be paid</strong></p>
                            <p id="totalPrice" class="float-end">₹{{ number_format($totalPrice, 2) }}</p>
                            <input type="number" class="nuu" id="totalPrice1" name="totalPrice" value="">
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-check">
                                <input class="form-check-input me-2" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">By proceeding, I agree to Travels <a
                                        href="#">User
                                        Agreement, Terms of Service</a> and <a href="#">Cancellation & Property
                                        Booking
                                        Policies.</a></label>
                            </div>
                            <div class="container5 mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action disabled"
                                                id="list-upi-liasdfst" data-bs-toggle="list" href="#list-asdf"
                                                role="tab" aria-controls="list-upi">Payment Options</a>
                                            <a class="list-group-item list-group-item-action active"
                                                id="list-upi-list" data-bs-toggle="list" href="#list-upi"
                                                role="tab" aria-controls="list-upi">
                                                <img src="/img/upi.png" alt="UPI Logo" class="mr-2"
                                                    style="width: 30px;">UPI Option
                                            </a>
                                            <a class="list-group-item list-group-item-action"
                                                id="list-google-pay-list" data-bs-toggle="list"
                                                href="#list-google-pay" role="tab"
                                                aria-controls="list-google-pay">
                                                <img src="/img/gpay.webp" alt="UPI Logo" class="mr-2"
                                                    style="width: 30px;">Google Pay
                                            </a>
                                            <a class="list-group-item list-group-item-action" id="list-book-now-list"
                                                data-bs-toggle="list" href="#list-book-now" role="tab"
                                                aria-controls="list-book-now">
                                                <img src="/img/icon.png" alt="UPI Logo" class="mr-2"
                                                    style="width: 30px;">Pay Later

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-upi" role="tabpanel"
                                                aria-labelledby="list-upi-list">
                                                <h4>UPI Option</h4>
                                                <div class="mo">
                                                    <i class="fa fa-mobile text-warning me-2 fs-3"></i>
                                                    <p class="ye text-warning">Keep your phone handy!</p>
                                                </div>
                                                <div class="image-container">
                                                    <li class="text-danger q1">First Select Dates</li>
                                                    <img src="" class="imm qrimage hi" width="150px"
                                                        alt="qr">
                                                    <a class="view-button hi1">View</a>
                                                </div>
                                                <p>Scan the QR code to make the payment.</p>
                                            </div>
                                            <div class="tab-pane fade" id="list-google-pay" role="tabpanel"
                                                aria-labelledby="list-google-pay-list">
                                                <h4>Google Pay</h4>
                                                <div class="mo">
                                                    <i class="fa fa-mobile text-warning me-2 fs-3"></i>
                                                    <p class="ye text-warning ">Keep your phone handy!</p>
                                                </div>
                                                <div class="image-container">
                                                    <li class="text-danger q2">First Select Dates</li>
                                                    <img src="" class="imm qrimage hi2" width="150px"
                                                        alt="qr">
                                                    <a class="view-button hi3">View</a>
                                                </div>

                                                <p>This is a sample Google Pay option content.</p>

                                            </div>
                                            <div class="tab-pane fade" id="list-book-now" role="tabpanel"
                                                aria-labelledby="list-book-now-list">
                                                <h4>Book Now Pay Later</h4>
                                                <p>We are soory to say that this method is curruntly unavelable</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Done</button>
    </form>

</div>
</div>
</div>
</div>


<div class="container1 mx-auto">
    @if ($threads->isEmpty())
        <div class="jumbotron jumbotron-fluid mb-0">
            <div class="container">
                <p class="display-4">No Reviews Found</p>
                <p class="lead">Be the first person to Give a Review.</p>
            </div>
        </div>
    @else
        <div class="modal1-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">All Reviews</h1>
        </div>
        <div class="modal1-content">
            <div class="modal-body">
                @foreach ($threads as $thread)
                    <div class="media my-3">
                        <div class="dbs">
                            <div class="media1-body">
                                <img src="/img/userdefult.png" width="35px" class="mr-3" alt="User Avatar">
                                <h5 class="mt-0"><a class="text-dark">{{ $thread->thread_title }}</a></h5>
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
</div>
</div>
</form>
</div>



<script>
    function updatePhoneNumber() {
        var select = document.getElementById("inputState");
        var selectedOption = select.options[select.selectedIndex];

        var phoneNumber = selectedOption.value;

        document.getElementById("selectedPhoneNumber").textContent = phoneNumber;
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var checkinInput = document.getElementById("checkin");
        var checkoutInput = document.getElementById("checkout");

        checkinInput.addEventListener("change", updateMinDate);
        checkoutInput.addEventListener("change", updatePrice);

        updateMinDate();
    });

    function updateMinDate() {
        var checkinInput = document.getElementById("checkin");
        var checkoutInput = document.getElementById("checkout");

        var hotelPrice = parseFloat("{{ $hotels->hotels_price }}");

        var today = new Date();
        var formattedToday = formatDate(today);

        var checkinDate = new Date(checkinInput.value);
        var formattedCheckinDate = formatDate(checkinDate);

        checkinInput.min = formattedToday;

        checkoutInput.min = formattedCheckinDate;

        checkoutInput.disabled = checkinInput.value === checkoutInput.value;

        checkoutInput.style.backgroundColor = checkoutInput.disabled ? "#ffe6e6" : "";
    }

    function formatDate(date) {
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (day < 10) {
            day = '0' + day;
        }
        if (month < 10) {
            month = '0' + month;
        }

        return year + '-' + month + '-' + day;
    }


    function updatePrice() {
        var checkinInput = document.getElementById("checkin");
        var checkoutInput = document.getElementById("checkout");
        var hotelPrice = parseFloat("{{ $hotels->hotels_price }}");
        var checkinDate = new Date(checkinInput.value);
        var checkoutDate = new Date(checkoutInput.value);


        let qrImage = document.getElementById("qrImage");



        if (checkoutDate <= checkinDate) {
            alert("If you select same date then you need to check-out at 6 PM");
            return;
        }

        var nightDifference = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

        var nightAmount = nightDifference * hotelPrice;

        var taxRate = 0.12;
        var taxAmount = hotelPrice * taxRate * nightDifference;
        var totalPrice = nightAmount + taxAmount;

        if (checkoutInput.value) {
            document.querySelector(".hi").style.display = 'block';
            document.querySelector(".hi1").style.display = 'block';
            document.querySelector(".hi2").style.display = 'block';
            document.querySelector(".hi3").style.display = 'block';
            document.querySelector(".q1").style.display = 'none';
            document.querySelector(".q2").style.display = 'none';


        } else {
            console.log("error");
        }

        $(document).ready(function() {
            let qrUrl = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + totalPrice.toFixed(
                2);
            $(".qrimage").attr("src", qrUrl);
        })

        document.getElementById("nightAmount").textContent = "₹" + nightAmount.toFixed(2);
        document.getElementById("taxAmount").textContent = "₹" + taxAmount.toFixed(2);
        document.getElementById("totalPrice").textContent = "₹" + totalPrice.toFixed(2);
        document.getElementById("totalPrice1").value =  totalPrice.toFixed(2);
    }

    function formatDate(date) {
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        return year + "-" + (month < 10 ? "0" : "") + month + "-" + (day < 10 ? "0" : "") + day;
    }


    $(document).ready(function() {
        $('.view-button').on('click', function() {
            $(this).siblings('.qrimage').css('filter', 'blur(0)');
            $(this).hide();
        });
    });
</script>
@endif