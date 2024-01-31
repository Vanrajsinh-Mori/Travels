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
        background-color: rgb(216, 215, 215);
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
        /* Light blue for check-in */
    }

    #checkout {
        background-color: #ffe6e6;
        /* Light red for check-out */
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
        /* Orange color for the heading */
        /* margin-bottom: 10px; */
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
                <input type="date" id="checkin" name="checkin">
            </div>
            <div class="">
                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout">
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
            </ul>
        </div>
    </div>
</div>
<div class="container customer-details mx-auto">
    <form class="row g-3">
        <div class="col-12">
            <label for="inputname" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputname" placeholder="Enter your Name">
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mb-3">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your Email">
            </div>
        
            {{-- <div class="col-md-3 mb-3">
                <label for="inputCountry" class="form-label">Country</label>
                <div class="input-group">
            <select id="inputState" class="form-select" onchange="updatePhoneNumber()">
                <option selected>Choose...</option>
                <option value="+93">Afghanistan (+93)</option>
                <option value="+355">Albania (+355)</option>
                <option value="+213">Algeria (+213)</option>
                <option value="+1684">American Samoa (+1684)</option>
                <option value="+376">Andorra (+376)</option>
                <option value="+244">Angola (+244)</option>
                <option value="+1264">Anguilla (+1264)</option>
                <option value="+672">Antarctica (+672)</option>
                <option value="+1268">Antigua and Barbuda (+1268)</option>
                <option value="+54">Argentina (+54)</option>
                <option value="+374">Armenia (+374)</option>
                <option value="+297">Aruba (+297)</option>
                <option value="+61">Australia (+61)</option>
                <option value="+43">Austria (+43)</option>
                <option value="+994">Azerbaijan (+994)</option>
                <option value="+1242">Bahamas (+1242)</option>
                <option value="+973">Bahrain (+973)</option>
                <option value="+880">Bangladesh (+880)</option>
                <option value="+1246">Barbados (+1246)</option>
                <option value="+32">Belgium (+32)</option>
                <option value="+501">Belize (+501)</option>
                <option value="+229">Benin (+229)</option>
                <option value="+1441">Bermuda (+1441)</option>
                <option value="+975">Bhutan (+975)</option>
                <option value="+591">Bolivia (+591)</option>
                <option value="+267">Botswana (+267)</option>
                <option value="+55">Brazil (+55)</option>
                <option value="+246">British Indian Ocean Territory (+246)</option>
                <option value="+1284">British Virgin Islands (+1284)</option>
                <option value="+673">Brunei (+673)</option>
                <option value="+226">Burkina Faso (+226)</option>
                <option value="+257">Burundi (+257)</option>
                <option value="+855">Cambodia (+855)</option>
                <option value="+237">Cameroon (+237)</option>
                <option value="+1">Canada (+1)</option>
                <option value="+238">Cape Verde (+238)</option>
                <option value="+1345">Cayman Islands (+1345)</option>
                <option value="+236">Central African Republic (+236)</option>
                <option value="+235">Chad (+235)</option>
                <option value="+56">Chile (+56)</option>
                <option value="+86">China (+86)</option>
                <option value="+61">Christmas Island (+61)</option>
                <option value="+61">Cocos Islands (+61)</option>
                <option value="+57">Colombia (+57)</option>
                <option value="+269">Comoros (+269)</option>
                <option value="+682">Cook Islands (+682)</option>
                <option value="+506">Costa Rica (+506)</option>
                <option value="+599">Curacao (+599)</option>
                <option value="+357">Cyprus (+357)</option>
                <option value="+420">Czech Republic (+420)</option>
                <option value="+45">Denmark (+45)</option>
                <option value="+253">Djibouti (+253)</option>
                <option value="+1767">Dominica (+1767)</option>
                <option value="+18">Dominican Republic (+18)</option>
                <option value="+670">East Timor (+670)</option>
                <option value="+593">Ecuador (+593)</option>
                <option value="+20">Egypt (+20)</option>
                <option value="+503">El Salvador (+503)</option>
                <option value="+240">Equatorial Guinea (+240)</option>
                <option value="+291">Eritrea (+291)</option>
                <option value="+372">Estonia (+372)</option>
                <option value="+251">Ethiopia (+251)</option>
                <option value="+500">Falkland Islands (+500)</option>
                <option value="+298">Faroe Islands (+298)</option>
                <option value="+679">Fiji (+679)</option>
                <option value="+358">Finland (+358)</option>
                <option value="+33">France (+33)</option>
                <option value="+689">French Polynesia (+689)</option>
                <option value="+241">Gabon (+241)</option>
                <option value="+220">Gambia (+220)</option>
                <option value="+995">Georgia (+995)</option>
                <option value="+49">Germany (+49)</option>
                <option value="+233">Ghana (+233)</option>
                <option value="+350">Gibraltar (+350)</option>
                <option value="+30">Greece (+30)</option>
                <option value="+299">Greenland (+299)</option>
                <option value="+1473">Grenada (+1473)</option>
                <option value="+1671">Guam (+1671)</option>
                <option value="+502">Guatemala (+502)</option>
                <option value="+441481">Guernsey (+441481)</option>
                <option value="+224">Guinea (+224)</option>
                <option value="+245">Guinea-Bissau (+245)</option>
                <option value="+592">Guyana (+592)</option>
                <option value="+509">Haiti (+509)</option>
                <option value="+504">Honduras (+504)</option>
                <option value="+852">Hong Kong (+852)</option>
                <option value="+36">Hungary (+36)</option>
                <option value="+354">Iceland (+354)</option>
                <option value="+91">India (+91)</option>
                <option value="+62">Indonesia (+62)</option>
                <option value="+353">Ireland (+353)</option>
                <option value="+441624">Isle of Man (+441624)</option>
                <option value="+972">Israel (+972)</option>
                <option value="+39">Italy (+39)</option>
                <option value="+1876">Jamaica (+1876)</option>
                <option value="+81">Japan (+81)</option>
                <option value="+441534">Jersey (+441534)</option>
                <option value="+962">Jordan (+962)</option>
                <option value="+7">Kazakhstan (+7)</option>
                <option value="+254">Kenya (+254)</option>
                <option value="+686">Kiribati (+686)</option>
                <option value="+965">Kuwait (+965)</option>
                <option value="+996">Kyrgyzstan (+996)</option>
                <option value="+856">Laos (+856)</option>
                <option value="+371">Latvia (+371)</option>
                <option value="+266">Lesotho (+266)</option>
                <option value="+423">Liechtenstein (+423)</option>
                <option value="+370">Lithuania (+370)</option>
                <option value="+352">Luxembourg (+352)</option>
                <option value="+853">Macau (+853)</option>
                <option value="+389">Macedonia (+389)</option>
                <option value="+261">Madagascar (+261)</option>
                <option value="+265">Malawi (+265)</option>
                <option value="+60">Malaysia (+60)</option>
                <option value="+960">Maldives (+960)</option>
                <option value="+223">Mali (+223)</option>
                <option value="+356">Malta (+356)</option>
                <option value="+692">Marshall Islands (+692)</option>
                <option value="+222">Mauritania (+222)</option>
                <option value="+230">Mauritius (+230)</option>
                <option value="+262">Mayotte (+262)</option>
                <option value="+52">Mexico (+52)</option>
                <option value="+691">Micronesia (+691)</option>
                <option value="+377">Monaco (+377)</option>
                <option value="+976">Mongolia (+976)</option>
                <option value="+1664">Montserrat (+1664)</option>
                <option value="+212">Morocco (+212)</option>
                <option value="+258">Mozambique (+258)</option>
                <option value="+95">Myanmar (+95)</option>
                <option value="+264">Namibia (+264)</option>
                <option value="+674">Nauru (+674)</option>
                <option value="+977">Nepal (+977)</option>
                <option value="+31">Netherlands (+31)</option>
                <option value="+599">Netherlands Antilles (+599)</option>
                <option value="+687">New Caledonia (+687)</option>
                <option value="+64">New Zealand (+64)</option>
                <option value="+505">Nicaragua (+505)</option>
                <option value="+227">Niger (+227)</option>
                <option value="+234">Nigeria (+234)</option>
                <option value="+683">Niue (+683)</option>
                <option value="+1670">Northern Mariana Islands (+1670)</option>
                <option value="+47">Norway (+47)</option>
                <option value="+968">Oman (+968)</option>
                <option value="+92">Pakistan (+92)</option>
                <option value="+680">Palau (+680)</option>
                <option value="+970">Palestine (+970)</option>
                <option value="+507">Panama (+507)</option>
                <option value="+675">Papua New Guinea (+675)</option>
                <option value="+595">Paraguay (+595)</option>
                <option value="+51">Peru (+51)</option>
                <option value="+63">Philippines (+63)</option>
                <option value="+64">Pitcairn (+64)</option>
                <option value="+48">Poland (+48)</option>
                <option value="+351">Portugal (+351)</option>
                <option value="+1">Puerto Rico (+1)</option>
                <option value="+974">Qatar (+974)</option>
                <option value="+262">Reunion (+262)</option>
                <option value="+7">Russia (+7)</option>
                <option value="+250">Rwanda (+250)</option>
                <option value="+590">Saint Barthelemy (+590)</option>
                <option value="+290">Saint Helena (+290)</option>
                <option value="+1869">Saint Kitts and Nevis (+1869)</option>
                <option value="+1758">Saint Lucia (+1758)</option>
                <option value="+590">Saint Martin (+590)</option>
                <option value="+508">Saint Pierre and Miquelon (+508)</option>
                <option value="+1784">Saint Vincent and the Grenadines (+1784)</option>
                <option value="+685">Samoa (+685)</option>
                <option value="+378">San Marino (+378)</option>
                <option value="+239">Sao Tome and Principe (+239)</option>
                <option value="+966">Saudi Arabia (+966)</option>
                <option value="+221">Senegal (+221)</option>
                <option value="+248">Seychelles (+248)</option>
                <option value="+232">Sierra Leone (+232)</option>
                <option value="+65">Singapore (+65)</option>
                <option value="+1721">Sint Maarten (+1721)</option>
                <option value="+421">Slovakia (+421)</option>
                <option value="+677">Solomon Islands (+677)</option>
                <option value="+252">Somalia (+252)</option>
                <option value="+82">South Korea (+82)</option>
                <option value="+211">South Sudan (+211)</option>
                <option value="+94">Sri Lanka (+94)</option>
                <option value="+47">Svalbard and Jan Mayen (+47)</option>
                <option value="+268">Swaziland (+268)</option>
                <option value="+46">Sweden (+46)</option>
                <option value="+41">Switzerland (+41)</option>
                <option value="+886">Taiwan (+886)</option>
                <option value="+992">Tajikistan (+992)</option>
                <option value="+255">Tanzania (+255)</option>
                <option value="+66">Thailand (+66)</option>
                <option value="+228">Togo (+228)</option>
                <option value="+690">Tokelau (+690)</option>
                <option value="+676">Tonga (+676)</option>
                <option value="+1868">Trinidad and Tobago (+1868)</option>
                <option value="+216">Tunisia (+216)</option>
                <option value="+90">Turkey (+90)</option>
                <option value="+993">Turkmenistan (+993)</option>
                <option value="+1649">Turks and Caicos Islands (+1649)</option>
                <option value="+688">Tuvalu (+688)</option>
                <option value="+1340">U.S. Virgin Islands (+1340)</option>
                <option value="+256">Uganda (+256)</option>
                <option value="+380">Ukraine (+380)</option>
                <option value="+971">United Arab Emirates (+971)</option>
                <option value="+44">United Kingdom (+44)</option>
                <option value="+1">United States (+1)</option>
                <option value="+598">Uruguay (+598)</option>
                <option value="+998">Uzbekistan (+998)</option>
                <option value="+678">Vanuatu (+678)</option>
                <option value="+379">Vatican (+379)</option>
                <option value="+58">Venezuela (+58)</option>
                <option value="+84">Vietnam (+84)</option>
                <option value="+681">Wallis and Futuna (+681)</option>
                <option value="+212">Western Sahara (+212)</option>
                <option value="+967">Yemen (+967)</option>
                <option value="+260">Zambia (+260)</option>
                <option value="+387">Bosnia and Herzegovina (+387)</option>
                <option value="+359">Bulgaria (+359)</option>
                <option value="+385">Croatia (+385)</option>
                <option value="+383">Kosovo (+383)</option>
                <option value="+373">Moldova (+373)</option>
                <option value="+382">Montenegro (+382)</option>
                <option value="+389">North Macedonia (+389)</option>
                <option value="+40">Romania (+40)</option>
                <option value="+381">Serbia (+381)</option>
                <option value="+386">Slovenia (+386)</option>
                <option value="+375">Belarus (+375)</option>
                <option value="+95">Burma (+95)</option>
                <option value="+225">Cote D`Ivoire (Ivory Coast) (+225)</option>
                <option value="+243">Democratic Republic of Congo (+243)</option>
                <option value="+964">Iraq (+964)</option>
                <option value="+231">Liberia (+231)</option>
                <option value="+249">Sudan (+249)</option>
                <option value="+263">Zimbabwe (+263)</option>
            </select>
            <span class="input-group-text" id="selectedPhoneNumber"></span>
        </div>
    </div> --}}

    <div class="col-md-4 mb-3">
        <label for="inputphonenumber" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" maxlength="10" id="inputphonenumber" placeholder="Enter Phonenumber">
    </div>
</div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter your Address">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Enter your City">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">

            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Pin code</label>
            <input type="text" maxlength="6" class="form-control" id="inputZip" placeholder="Code">
        </div>
    </form>
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