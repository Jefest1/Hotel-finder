<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/8da83a5fd6.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- imported links for styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body id="page-top">

    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Hotels</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="hotels.php">Hotels</a></li>
                        <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="signin.html">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead hotelshead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-lg-8 align-self-end">
                            <h1 class="text-white font-weight-bold">Find Your dream Hotel</h1>
                            <hr class="divider" />
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                            <p class="text-white-75 mb-5">Explore most rated Hotels in the world</p>
                            <div class="s004">
                                <form method="POST" action="search.php">
                                    <fieldset>
                                        <div class="inner-form">
                                            <div class="input-field">
                                                <input class="form-control" id="choices-text-preset-values" type="text"
                                                    placeholder="Type to search..." name="search_query" />
                                                <button class="btn-search" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </header>

        <section class="py-5 bg-light top-hotels">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Top Hotels</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card h-100 d-none d-md-block">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/kem.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Kempinski Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fa-thin fa-pot-food me-2"></i>
                                                    <span>Free Luch</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://www.kempinski.com/en/hotel-gold-coast-city/overview"
                                                target="_blank">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://www.kempinski.com/en/hotel-gold-coast-city/overview"
                                                target="_blank">View Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100 d-none d-md-block">
                                    <!-- Hotel image -->
                                    <img class="card-img-top img-fluid" src="images/lab1.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Labadi Beach Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://labadibeachhotelgh.com/hotel/">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://labadibeachhotelgh.com/">View Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100 d-none d-md-block">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/mov2.webp" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">MovenPick Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://all.accor.com/ssr/app/movenpick/rates/B4P0/index.en.shtml?dateIn=2023-04-29&nights=1&compositions=2&stayplus=false&snu=false&accessibleRooms=false&partner_id=movenpick">Book
                                                Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://movenpick.accor.com/en/africa/ghana/accra/moevenpick-ambassador-hotel-accra.html">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card h-100">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/roy1.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">The Royal Senchi Hotel and Resort</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fa-thin fa-pot-food me-2"></i>
                                                    <span>Free Luch</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://royalsenchi.reserve-online.net/">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://www.theroyalsenchi.com/">View Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/ac1.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Accra Marriott Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://www.marriott.com/reservation/rateListMenu.mi">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://www.marriott.com/en-us/hotels/accmc-accra-marriott-hotel/overview/">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="card h-100">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/as1.webp" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Asantewaa Premier Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="http://www.asantewaapremierguesthouse.com/search.html?h=ehjedcb&checkin=2022-12-17&checkout=2022-12-18&adults=1&children=0">Book
                                                Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="http://www.asantewaapremierguesthouse.com/">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
        </section>

        <section class="py-5 bg-light top-hotels">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Most Visited Hotels</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card h-100 d-none d-md-block">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/kem.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Kempinski Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fa-thin fa-pot-food me-2"></i>
                                                    <span>Free Luch</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://www.kempinski.com/en/hotel-gold-coast-city/overview"
                                                target="_blank">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://www.kempinski.com/en/hotel-gold-coast-city/overview"
                                                target="_blank">View Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100 d-none d-md-block">
                                    <!-- Hotel image -->
                                    <img class="card-img-top img-fluid" src="images/lab1.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Labadi Beach Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://labadibeachhotelgh.com/hotel/">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://labadibeachhotelgh.com/">View Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100 d-none d-md-block">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/mov2.webp" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">MovenPick Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://all.accor.com/ssr/app/movenpick/rates/B4P0/index.en.shtml?dateIn=2023-04-29&nights=1&compositions=2&stayplus=false&snu=false&accessibleRooms=false&partner_id=movenpick">Book
                                                Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://movenpick.accor.com/en/africa/ghana/accra/moevenpick-ambassador-hotel-accra.html">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card h-100">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/roy1.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">The Royal Senchi Hotel and Resort</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fa-thin fa-pot-food me-2"></i>
                                                    <span>Free Luch</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://royalsenchi.reserve-online.net/">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://www.theroyalsenchi.com/">View Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/ac1.jpg" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Accra Marriott Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="https://www.marriott.com/reservation/rateListMenu.mi">Book Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="https://www.marriott.com/en-us/hotels/accmc-accra-marriott-hotel/overview/">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="card h-100">
                                    <!-- Hotel image -->
                                    <img class="card-img-top" src="images/as1.webp" alt="..." />
                                    <!-- Hotel features -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder mb-3">Asantewaa Premier Hotel</h5>
                                            <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                                <div>
                                                    <i class="fas fa-wifi me-2"></i>
                                                    <span>Free Wi-Fi</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-parking me-2"></i>
                                                    <span>Free Parking</span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-pool me-2"></i>
                                                    <span>Pool</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hotel actions -->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-left">
                                            <a class="btn btn-primary mt-auto"
                                                href="http://www.asantewaapremierguesthouse.com/search.html?h=ehjedcb&checkin=2022-12-17&checkout=2022-12-18&adults=1&children=0">Book
                                                Now</a>
                                        </div>
                                        <div class="text-left">
                                            <a class="btn btn-outline-dark mt-auto"
                                                href="http://www.asantewaapremierguesthouse.com/">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
        </section>




        <!-- Carousel wrapper -->
        <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
            <h1 class="text-lg-center">Testimonies from Customers</h1>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="rounded-circle shadow-1-strong mb-4" src="images/joojo.jpg" alt="avatar"
                        style="width: 150px; height: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Anyan Festus</h5>
                            <p>CEO of FesTech</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>Needed to travel to Accra for an urgent meeting.
                                Came to this site found Hotels which I booked and the experience was great
                            </p>
                        </div>
                    </div>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                    </ul>
                </div>
                <div class="carousel-item">
                    <img class="rounded-circle shadow-1-strong mb-4" src="images/pera2.jpg" alt="avatar"
                        style="width: 150px; height: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Prospera Kusaane</h5>
                            <p>Lawyer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i> I will like to recommend Hotels to anyone looking
                                for a place to search hotels.
                            </p>
                        </div>
                    </div>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                    </ul>
                </div>
                <div class="carousel-item">
                    <img class="rounded-circle shadow-1-strong mb-4"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                        style="width: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Anna Deynah</h5>
                            <p>UX Designer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Minus et deleniti nesciunt sint eligendi reprehenderit reiciendis,
                                quibusdam illo, beatae quia fugit consequatur laudantium velit
                                magnam error. Consectetur distinctio fugit doloremque.
                            </p>
                        </div>
                    </div>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                    </ul>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Most visited -->

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #45526e" id="footer">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Hotels
                            </h6>
                            <p>
                                Looking for a nice Hotel for your vacation or meeting, Hotels has got you covered. You
                                can search for any hotel accross the world and get access to the hotel immediately.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i>Universit of Cape Coast, GH</p>
                            <p><i class="fas fa-envelope mr-3"></i> anyanf101@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> +233 553 544 522</p>
                        </div>
                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />
                        <div class="col-md-5">
                            <h5 class="text-md-center">SEND US A MESSAGE</h5>
                            <hr>
                            <form class="contact">
                                <fieldset class=" form-group ">
                                    <input type="email " class="form-control " id="inputEmail "
                                        placeholder="Enter email ">
                                </fieldset>
                                <fieldset class="form-group ">
                                    <textarea class="form-control " id="inputMessage "
                                        placeholder="Message "></textarea>
                                </fieldset>
                                <fieldset class="form-group text-xs-right ">
                                    <button type="button " class="btn btn-secondary btn-lg ">Send</button>
                                </fieldset>
                            </form>
                        </div>

                        <!-- Grid column -->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-3 ">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0 ">
                    <div class="row d-flex align-items-center ">
                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start ">
                            <!-- Copyright -->
                            <div class="p-3 ">
                                © 2020 Copyright:
                                <a class="text-white " href="# ">Hotels</a>
                            </div>
                            <!-- Copyright -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end ">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1 " class="text-white " role="button "><i
                                    class="fab fa-facebook-f "></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1 " class="text-white " role="button "><i
                                    class="fab fa-twitter "></i></a>

                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1 " class="text-white " role="button "><i
                                    class="fab fa-google "></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1 " class="text-white " role="button "><i
                                    class="fab fa-instagram "></i></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                </section>
                <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js "></script>
        <script src="https://kit.fontawesome.com/8da83a5fd6.js " crossorigin="anonymous "></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js">
        </script>

        <script src="script.js "></script>
        <script src="extention/choices.js "></script>
        <script>
            var textPresetVal = new Choices('#choices-text-preset-values', {
                removeItemButton: true,
            });
        </script>
    </body>

</html>