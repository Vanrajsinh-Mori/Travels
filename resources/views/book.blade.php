@include('partials.header')
@extends('partials.footer')

<style>
    body {
        font-family: 'Arial', sans-serif;
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

    .container {
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
</style>

<div class="container mx-auto">
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
        </div>
        <div class="date">
            <div class="">
                <label for="checkin">Check-in Date:</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>
            <div class="">
                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout" required>
            </div>
        </div>
        <div class="info">
            <h4 class="text-warning">Important information</h4>
            <ul class="imptInfo__list">
                <li><span class="fs-50"><span class="appendLeft3 blackDot"></span></span><span
                        class="font12 ruleText">Passport, Aadhar, Driving License and Govt. ID are accepted as ID
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
<div class="container customer-details mx-auto">
    <form class="row g-3">
        <div class="col-12">
            <label for="inputname" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputname" required placeholder="Enter your Name"
                value="{{ Auth::user()->name }}">
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" required placeholder="Enter your Email"
                    value="{{ Auth::user()->email }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="inputphonenumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" maxlength="10" id="inputphonenumber" required
                    placeholder="Enter Phonenumber" value="{{ Auth::user()->mobile }}">
            </div>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter your Address"required>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Enter your City"required>
        </div>
        <div class="col-md-4 ">
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

        <div class="col-md-2">
            <label for="inputZip" class="form-label">Pin code</label>
            <input type="text" maxlength="6" class="form-control" required id="inputZip" placeholder="Code">
        </div>
    </form>
</div>
<div class="container mx-auto ">
    <div class="payment bg-light p-3 ">
        <div class="box rounded-top">
            <h4>Price Breakup</h4>
        </div>
        <div class="box-2 ">
            <p><strong>Night Amount</strong></p>
            <p class="float-end" id="nightAmount">₹{{ $hotels->hotels_price }}</p>
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
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input me-2" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">By proceeding, I agree to Travels <a href="#">User
                    Agreement, Terms of Service</a> and <a href="#">Cancellation & Property Booking
                    Policies.</a></label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Pay now</button>
    </div>
</div>
<script>
    function updatePhoneNumber() {
        // Get the selected option
        var select = document.getElementById("inputState");
        var selectedOption = select.options[select.selectedIndex];

        // Get the value (phone number) of the selected option
        var phoneNumber = selectedOption.value;

        // Display the selected phone number in the designated span
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

        var checkinDate = new Date(checkinInput.value);

        var formattedCheckinDate = formatDate(checkinDate);

        checkoutInput.min = formattedCheckinDate;

        checkoutInput.disabled = checkinInput.value === checkoutInput.value;
        checkoutInput.style.backgroundColor = checkoutInput.disabled ? "#ffe6e6" : "";
    }

    function updatePrice() {
        var checkinInput = document.getElementById("checkin");
        var checkoutInput = document.getElementById("checkout");
        var hotelPrice = parseFloat("{{ $hotels->hotels_price }}");
        var checkinDate = new Date(checkinInput.value);
        var checkoutDate = new Date(checkoutInput.value);

        if (checkoutDate <= checkinDate) {
            alert("If you select same date then you need to check-out at 6 PM");
            return;
        }

        var nightDifference = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

        var nightAmount = nightDifference * hotelPrice;

        var taxRate = 0.12;
        var taxAmount = hotelPrice * taxRate * nightDifference;
        var totalPrice = nightAmount + taxAmount;

        document.getElementById("nightAmount").textContent = "₹" + nightAmount.toFixed(2);
        document.getElementById("taxAmount").textContent = "₹" + taxAmount.toFixed(2);
        document.getElementById("totalPrice").textContent = "₹" + totalPrice.toFixed(2);
    }

    function formatDate(date) {
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        return year + "-" + (month < 10 ? "0" : "") + month + "-" + (day < 10 ? "0" : "") + day;
    }
</script>
