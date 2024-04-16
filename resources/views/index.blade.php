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
</style>
@if (session()->has('alert'))
    <div class="alert alert-success alert-dismissible fade show position-fixed"
        style="top: 20px; right: 20px; z-index: 9999; width: 350px;">

        {{ session('alert')['success'] }}
    </div>
@endif
<script>
    $(document).ready(function() {
        $(".alert").animate({
            top: '-=50px',
            opacity: 0
        }, 2500, function() {
            $(this).remove();
        });
    });
</script>




<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Blog Template · Bootstrap v5.3</title>



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }


        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
        }

        .blog-header-logo {
            font-size: 2rem;
            font-weight: bold;
        }

        .nav-scroller .nav-link {
            padding: 0.5rem 1rem;
        }

        .featured-post {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
        }

        .featured-post h1 {
            color: #212529;
        }

        .featured-post p {
            color: #6c757d;
        }

        .blog-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .blog-card .card-img-top {
            border-bottom: 1px solid #dee2e6;
        }

        .blog-card .card-text {
            color: #6c757d;
        }

        .blog-pagination {
            justify-content: center;
        }

        .blog-pagination .page-link {
            color: #007bff;
        }

        .blog-pagination .page-link:hover {
            color: #0056b3;
        }

        .blog-footer {
            padding: 2rem 0;
            background-color: rgb(255, 255, 255, 0.6);
        }

        .blog-footer a {
            color: #007bff;
        }

        .blog-footer a:hover {
            color: #0056b3;
        }

        .bg-light1 {
            background-color: rgb(255, 255, 255, 0.6);
        }

        .d-block {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container2 {
            height: 200px;
        }

        .col-md-8 {
            background-color: rgb(255, 255, 255, 0.6);
        }
    </style>


    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    <link href="blog.css" rel="stylesheet">
</head>

<body>

    </div>

    <main class="container mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/back1.webp" style="height: 450px; width:100%" class="d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="/img/back2.jpg" style="height: 450px; width:100%" class="d-block" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="/img/back3.jpg" style="height: 450px; width:100%" class="d-block" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    <main class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-light1">
                    <div class="col p-4 d-flex flex-column position-static" data-bs-toggle="modal"
                        data-bs-target="#locationmodal">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Booking</strong>
                        <h3 class="mb-0">Lets Book Hotels</h3>
                        <div class="mb-1 text-body-secondary">Curent</div>
                        <p class="card-text mb-auto">This is a List of Citys of all India to visit, travel and get
                            pleasure everyday.</p>
                        <a class="icon-link gap-1 icon-link-hover stretched-link">
                            View Citys
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="/img/backu1.webp"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">

                        </img>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-light1">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Booked</strong>
                        <h3 class="mb-0">List Of booking</h3>
                        <div class="mb-1 text-body-secondary">Till Now</div>
                        <p class="mb-auto">This is a list of hotels you have booked till now, we hope that you get
                            pleasure from our servies.</p>
                        @php
                            $user_id = Auth::id();
                        @endphp

                        <a href="{{ Auth::check() ? ($booking->where('user_id', $user_id)->isNotEmpty() ? route('list') : '#1') : '#' }}"
                            class="icon-link gap-1 icon-link-hover stretched-link" id="bookingLink">
                            View List Of Booking
                        

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#bookingLink').click(function(e) {
                                    e.preventDefault();
                                    if ($(this).attr('href') === '#') {
                                        var alertDiv =
                                            '<div class="alert alert-danger alert-dismissible fade show position-fixed" ' +
                                            'style="top: 20px; right: 20px; z-index: 9999; width: 200px;">' +
                                            'First Login</div>';
                                        $('body').append(alertDiv);
                                        $(".alert").animate({
                                            top: '-=50px',
                                            opacity: 0
                                        }, 2500, function() {
                                            $(this).remove();
                                        });
                                    } else if ($(this).attr('href') === '#1') {
                                        // If the user is logged in but has no bookings
                                        var alertDiv =
                                            '<div class="alert alert-danger alert-dismissible fade show position-fixed" ' +
                                            'style="top: 20px; right: 20px; z-index: 9999; width: 200px;">' +
                                            'No Booking Found</div>';
                                        $('body').append(alertDiv);
                                        $(".alert").animate({
                                            top: '-=50px',
                                            opacity: 0
                                        }, 2500, function() {
                                            $(this).remove();
                                        });
                                    } else {
                                        window.location.href = $(this).attr('href');
                                    }
                                });
                            });
                        </script>


                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="/img/backu2.jpg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">


                        </img>
                    </div>
                </div>
            </div>
        </div>

        <div class="container2"></div>
        <div class="container3">
            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="p-4 mb-4 fst-italic border-bottom">
                        Facts of Travels
                    </h3>

                    <article class="blog-post">
                        <h2 class="display-5 link-body-emphasis mb-1">
                            Fascinating Travel Facts: Exploring the World with Bootstrap</h2>
                        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                        <p>Explore diverse travel facts showcasing various elements supported and adorned by Bootstrap.
                            From intriguing destinations to fascinating cultural tidbits, immerse yourself in a journey
                            through travel trivia, offering insights into geography, history, and adventure. Discover
                            intriguing facts about destinations, landmarks, cuisines, and traditions, all presented in a
                            concise and engaging manner.</p>
                        <hr>
                        <p>Prepare to be enthralled by a treasure trove of captivating facts about global destinations,
                            meticulously presented to showcase the rich tapestry of our world. From iconic landmarks to
                            hidden gems, culinary delights, and cultural traditions, immerse yourself in a whirlwind of
                            intriguing insights that will fuel your wanderlust and inspire your next journey. Keep an
                            eye out for this recurring snippet, strategically placed to demonstrate the seamless flow of
                            content and its impact on the overall narrative.</p>
                        <h2>Travel Insights</h2>
                        <p>Delve into intriguing travel insights:</p>
                        <blockquote class="blockquote">
                            <p>Did you know?</p>
                            <p>Quoted fact goes here.</p>
                        </blockquote>
                        <p>Embark on a journey through fascinating snippets of travel knowledge, meticulously curated to
                            broaden your horizons and ignite your curiosity. Dive deep into the world's wonders, from
                            ancient marvels to modern marvels, and uncover the hidden stories behind each destination.
                            Keep an eye out for these enlightening tidbits as they enrich your travel experience and
                            shape your perception of the world.</p>
                        <h3>Travel Insights Unveiled</h3>
                        <p>Explore concise and engaging travel insights:</p>
                        <ul>
                            <li>Discover fascinating facts about diverse cultures</li>
                            <li>Unravel the mysteries behind iconic landmarks</li>
                            <li>Unlock the hidden gems of off-the-beaten-path destinations</li>
                        </ul>
                        <p>Dive into a world of knowledge with our curated list of travel insights. From intriguing
                            cultural customs to awe-inspiring natural wonders, each snippet offers a glimpse into the
                            rich tapestry of our planet's diversity.</p>
                        <p>Take a journey through the depths of history and the heights of modern innovation as you
                            uncover the stories that shape our global landscape.</p>
                        <ol>
                            <li>Learn about ancient civilizations and their enduring legacies</li>
                            <li>Gain insights into sustainable travel practices and eco-friendly destinations</li>
                            <li>Explore the intersection of art, architecture, and cultural heritage</li>
                        </ol>
                        <p>Embark on an adventure of discovery and enlightenment as you immerse yourself in the vibrant
                            tapestry of our world's travel narratives.</p>
                        <dl>
                            <dt>Travel Enthusiast</dt>
                            <dd>Passionate individuals who seek new experiences and embrace cultural diversity</dd>
                            <dt>Explorer's Spirit</dt>
                            <dd>Those driven by curiosity and a thirst for adventure, always seeking the next discovery
                            </dd>
                            <dt>Global Citizen</dt>
                            <dd>Travelers committed to responsible tourism and making a positive impact on the world
                            </dd>
                        </dl>
                        <h2>Discover the Power of Inline HTML Elements</h2>
                        <p>HTML offers a diverse array of inline tags, each with its unique purpose:</p>
                        <ul>
                            <li><strong>To emphasize text</strong>, wrap it with <code>&lt;strong&gt;</code>.</li>
                            <li><em>To add emphasis through italics</em>, enclose text with <code>&lt;em&gt;</code>.
                            </li>
                            <li>Use <code>&lt;abbr&gt;</code> for abbreviations, such as <abbr
                                    title="HyperText Markup Language">HTML</abbr>, with an optional <code>title</code>
                                attribute.</li>
                            <li>References, like <cite>— Mark Otto</cite>, can be indicated with
                                <code>&lt;cite&gt;</code>.
                            </li>
                            <li><del>Deleted</del> text is denoted by <code>&lt;del&gt;</code>, while
                                <ins>inserted</ins> text is marked with <code>&lt;ins&gt;</code>.
                            </li>
                            <li><sup>Superscript</sup> and <sub>subscript</sub> text are handled by
                                <code>&lt;sup&gt;</code> and <code>&lt;sub&gt;</code> tags, respectively.
                            </li>
                        </ul>
                        <p>These elements are typically styled by browsers, requiring minimal adjustments from
                            developers.</p>
                        <h2>Explore Captivating Headings</h2>
                        <p>Dive into the captivating world of headings:</p>
                        <h3>Discover Intriguing Sub-headings</h3>
                        <p>Embark on a journey through engaging sub-headings:</p>
                        <pre><code>Experience the thrill of example code blocks</code></pre>
                        <p>Delve deeper into the world of web development with example code blocks:</p>


                        <article class="blog-post">
                            <h2 class="display-5 link-body-emphasis mb-1">Discover Another Travel Insight</h2>
                            <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
                            <p>Embark on a new journey with another captivating travel insight. This paragraph serves as
                                a placeholder to demonstrate how longer text affects the surrounding content.</p>
                            <blockquote>
                                <p>Here's a longer quote to inspire your wanderlust, perhaps intertwined with some
                                    <strong>emphasized text</strong>.
                                </p>
                            </blockquote>
                            <p>Continue your exploration with this additional paragraph placeholder content. It's
                                written to maintain the flow of the demonstration, so keep an eye out for this recurring
                                text.</p>
                        </article>

                        <article class="blog-post">
                            <h3>Experience with an Example Table</h3>
                            <p>Don't overlook the importance of tables in these travel insights:</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Upvotes</th>
                                        <th>Downvotes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Alice</td>
                                        <td>10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Bob</td>
                                        <td>4</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Charlie</td>
                                        <td>7</td>
                                        <td>9</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Totals</td>
                                        <td>21</td>
                                        <td>23</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <p>Here's some additional paragraph placeholder content, providing a slightly shorter
                                version of the repeated body text.</p>
                        </article>

                        <article class="blog-post">
                            <h2 class="display-5 link-body-emphasis mb-1">Exploring a New Feature</h2>
                            <p class="blog-post-meta">April 11, 2024 by <a href="#">Traveler</a></p>
                            <p>Let's delve into a new feature with this demonstration:</p>
                            <ul>
                                <li>First list item</li>
                                <li>Second list item with a longer description</li>
                                <li>Third list item to close it out</li>
                            </ul>
                            <p>This is additional paragraph placeholder content, a slightly condensed version of the
                                text used throughout.</p>
                        </article>


                </div>


                <div class="col-md-4 bg-light1">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 my-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic">About</h4>
                            <p class="mb-0">Discover fascinating insights about travel destinations, experiences, and
                                more. Tailor this section to provide your readers with valuable information about your
                                travel expertise, recommendations, and unique perspectives.</p>
                        </div>

                        <div>
                            <h4 class="fst-italic">Populer Hotels</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="/add/229">
                                        <img class="bd-placeholder-img" width="120px" height="96"
                                            src="/img/ahh1.jpg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                        </img>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">ITC Narmada, A Luxury Collection Hotel, Ahmedabad</h6>
                                            <small class="text-body-secondary">January 15, 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="/add/230">
                                        <img class="bd-placeholder-img" width="120px" height="96"
                                            src="/img/ahh2.jpg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Taj Skyline Ahmedabad</h6>
                                            <small class="text-body-secondary">January 14, 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none"
                                        href="/add/36">
                                        <img class="bd-placeholder-img" width="120px" height="96"
                                            src="/img/mh12.jpg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                        </img>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Hotel Sahara Star-Mumbai Airport</h6>
                                            <small class="text-body-secondary">January 13, 2024</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="p-4">
                            <h4 class="fst-italic">Archives</h4>
                            <ol class="list-unstyled mb-0">
                                <li><a href="#">March 2021</a></li>
                                <li><a href="#">February 2021</a></li>
                                <li><a href="#">January 2021</a></li>
                                <li><a href="#">December 2020</a></li>
                                <li><a href="#">November 2020</a></li>
                                <li><a href="#">October 2020</a></li>
                                <li><a href="#">September 2020</a></li>
                                <li><a href="#">August 2020</a></li>
                                <li><a href="#">July 2020</a></li>
                                <li><a href="#">June 2020</a></li>
                                <li><a href="#">May 2020</a></li>
                                <li><a href="#">April 2020</a></li>
                            </ol>
                        </div>

                        <div class="p-4">
                            <h4 class="fst-italic">Elsewhere</h4>
                            <ol class="list-unstyled">

                                <li><a href=https://github.com/ardacarofficial/links-website>GitHub</a></li>
                                <li><a href="https://twitter.com/travelingbharat?lang=en">Twitter</a></li>
                                <li><a href="https://www.facebook.com/profiletravelandtours/">Facebook</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

    </main>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var myCarousel = new bootstrap.Carousel(document.querySelector('#carouselExampleIndicators'), {
                interval: 5000,
                wrap: true
            });
        });
    </script>
</body>

</html>
