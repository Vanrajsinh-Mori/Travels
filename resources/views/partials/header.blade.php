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


        .navbar {
            background-color: transparent;
            position: relative;
            z-index: 1;
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
            width: 1300px;
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

        #loc {
            margin-right: 300px;
            margin-left: 500px;
        }

        .bbb {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg ">
        <ul class="nav " id="navId" role="tablist">
            <li class="nav-item immg">
                <a href="/" class="nav-link"><img class="bbb p-2  rounded-3" src="/img/logo.png" width="150px"
                        alt="logo"></a>
            </li>
            <li id="loc" class="nav-item ">
                <div class="me-auto mx-2 mt-3">
                    <form action="" class="d-flex">
                        <input name="search" class="form-control sear me-2" style="width:550px" type="search"
                            placeholder="Search" aria-label="-">
                    </form>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-warning rounded-2 my-3 fs-4 bbb" data-bs-toggle="modal"
                    data-bs-target="#locationmodal">Location</a>
            </li>
            <li class="nav-item ico ms-3 mt-2">
                <i id="liveToastBtn"
                    class="fa fa-user float-right mx-2 my-3"style="font-size:30px; cursor: pointer;"></i>
            </li>
            @if (Auth::check())
                <li class="nav-item ico me-3 mt-4">
                    <h4>- {{ Auth::user()->name }}</h4>
                </li>
            @endif
        </ul>
    </nav>

    <div class="modal fade" id="locationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom-modal">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="mt-3 row">
                        <div id="Mumbai" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/mumbai.png" alt="MUMBAI"
                                class="img-fluid">
                            <span>Mumbai</span>
                        </div>
                        <div id="Delhi" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/ncr.png" alt="NCR"
                                class="img-fluid"><br>
                            <span class="ms-3">Delhi</span>
                        </div>
                        <div id="Bengaluru" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/bang.png" alt="BANG"
                                class="img-fluid">
                            <span>Bengaluru</span>
                        </div>
                        <div id="Hyderabad" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/hyd.png" alt="HYD"
                                class="img-fluid">
                            <span>Hyderabad</span>
                        </div>
                        <div id="Ahmedabad" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/ahd.png" alt="AHD"
                                class="img-fluid">
                            <span>Ahmedabad</span>
                        </div>
                        <div id="Chennai" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/chen.png" alt="CHEN"
                                class="img-fluid">
                            <span>Chennai</span>
                        </div>
                        <div id="Kolkata" class="col mx-2">
                            <img src="//in.bmscdn.com/m6/images/common-modules/regions/kolk.png" alt="KOLK"
                                class="img-fluid"><br>
                            <span class="ms-3">Kolkata</span>
                        </div>
                    </div>
                    <div class="container my-3 col">
                        <div class="my-3 col d-flex justify-content-center align-items-center">
                            <div class="bwc__sc-ttnkwg-4 Ettpg ">
                                <ul class="bwc__sc-ttnkwg-6 khSHCa hidden row ">

                                    @foreach ($citys as $city)
                                    <li class="bwc__sc-ttnkwg-7 gtXMtL col-6">
                                        @if(Auth::check())
                                            <a href="{{ route('hotels', ['id' => $city->city_id]) }}"
                                               class="text-decoration-none text-dark">{{ $city->citys_name }}</a>
                                        @else
                                            <a href="{{ route('login') }}"
                                               class="text-decoration-none text-dark">{{ $city->citys_name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                                

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @if (Auth::check())
        

    <script>
        $(document).ready(function () {
    
            $("#Mumbai").click(function () {
    
                window.location.href = "/hotels/3";
            });
        });
        $(document).ready(function () {
    
            $("#Delhi").click(function () {
    
                window.location.href = "/hotels/8";
            });
        });
        $(document).ready(function () {
    
            $("#Hyderabad").click(function () {
    
                window.location.href = "/hotels/5";
            });
        });
        $(document).ready(function () {
    
            $("#Hyderabad").click(function () {
    
                window.location.href = "/hotels/6";
            });
        });
        $(document).ready(function () {
    
            $("#Ahmedabad").click(function () {
    
                window.location.href = "/hotels/20";
            });
        });
        $(document).ready(function () {
    
            $("#Chennai").click(function () {
    
                window.location.href = "/hotels/18";
            });
        });
        $(document).ready(function () {
    
            $("#Kolkata").click(function () {
    
                window.location.href = "/hotels/4";
            });
        });
    </script>
        @endif
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <div class="toast-container position-fixed top-4 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <button type="button" class="btn-close float-right" data-bs-dismiss="toast"
                aria-label="Close"></button>
            <div class="toast-header">
                <h6><strong> @auth
                            <strong> Welcome:{{ Auth::user()->name }} </strong>
                        @else
                            <div class="text-denger"> Guest </div>

                        @endauth
                    </strong> <br>
                    <p class="mb-0">Manage cart, Orders and wishlist</p>
                </h6>
            </div>
            @if (Auth::check())
                <div class="toast-body">
                    <a href="{{ route('logout') }}" class="btn btn-outline-dark float-right">Logout</a>
                </div>
            @else
                <div class="toast-body">
                    <a href="{{ route('login') }}" class="btn btn-outline-dark float-left">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-dark float-right">Register</a>
                </div>
            @endif
        </div>
    </div>

    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
            const toastBootstrap = new bootstrap.Toast(toastLiveExample)
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
        }
    </script>
</body>

</html>
