<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travels</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            padding-top: 56px;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .sear {
            border-radius: 20px;
        }

        .nav-link {
            color: #000000;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border: none;
        }

        .dropdown-item {
            color: #000000;
        }

        .dropdown-item:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .fa-user {
            color: #000000;
        }

        .fa-user:hover {
            color: #007bff;
        }

        .custom-modal {
            /* width: 100%; Adjust this value as needed */
            width: 1300px;
            /* Add a max-width if necessary */
            margin-top: 355px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .custom-modal .btn-close {
            color: #000000;
        }

        .custom-modal input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .custom-modal button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-modal button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg justify-content-center">
        <ul class="nav nav-tabs" id="navId" role="tablist">
            <li class="nav-item immg">
                <a href="/" class="nav-link"><img src="img\logo.png" width="150px" alt="logo"></a>
            </li>
            <li class="nav-item">
                <div class="me-auto mx-2 my-3">
                    <form action="" class="d-flex">
                        <input name="search" class="form-control sear me-2" style="width:550px" type="search"
                            placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-4" data-bs-toggle="modal" data-bs-target="#locationmodal">Location</a>
            </li>
            <li class="nav-item ico">
                <i id="liveToastBtn" class="fa fa-user float-right mx-2 my-3"
                    style="font-size:30px; cursor: pointer;"></i>
            </li>
        </ul>
    </nav>

    <div class="modal fade" id="locationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom-modal">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="mt-3 row">
                        <!-- Wrap each pair of image and text in a col -->
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/mumbai.png" alt="MUMBAI"
                                class="img-fluid">
                            <span>Mumbai</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/ncr.png" alt="NCR"
                                class="img-fluid">
                            <span>Delhi</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/bang.png" alt="BANG"
                                class="img-fluid">
                            <span>Bengaluru</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/hyd.png" alt="HYD"
                                class="img-fluid">
                            <span>Hyderabad</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/ahd.png" alt="AHD"
                                class="img-fluid">
                            <span>Ahmedabad</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/chd.png" alt="CHD"
                                class="img-fluid">
                            <span>Chandigarh</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/chen.png" alt="CHEN"
                                class="img-fluid">
                            <span>Chennai</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/pune.png" alt="PUNE"
                                class="img-fluid">
                            <span>Pune</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/kolk.png" alt="KOLK"
                                class="img-fluid">
                            <span>Kolkata</span>
                        </div>
                        <div class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/koch.png" alt="KOCH"
                                class="img-fluid">
                            <span>Kochi</span>
                        </div>
                    </div>
                    <div class="container my-3 col">
                        <div class="my-3 col d-flex justify-content-center align-items-center">
                            <div class="bwc__sc-ttnkwg-4 Ettpg ">
                                <ul class="bwc__sc-ttnkwg-6 khSHCa hidden row ">
                                    
                                    
                                    <li class="bwc__sc-ttnkwg-7 gtXMtL col-6">
                                        <div class="bwc__sc-ttnkwg-8 fsJkBY"></div>
                                    </li>

                                </ul>                           
                                </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>






</html>
