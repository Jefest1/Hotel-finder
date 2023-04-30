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
    <section class="py-5 bg-light top-hotels">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Top Hotels</h2>
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 justify-content-center">
                <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "hotels");

        // Check connection
        if ($conn === false) {
          die("ERROR: Could not connect. "
            . mysqli_connect_error());
        }
        //Get user input from the search form
        $search_query = $_POST['search_query'];
        // Retrieve data from the database
        $sql = "SELECT hotel_name, image, feature1, feature2, feature3, book_now_link, view_details_link FROM featured_hotels WHERE hotel_name LIKE '%$search_query%'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            ?>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="<?= $row["image"] ?>" alt="...">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder mb-3">
                                    <?= $row["hotel_name"] ?>
                                </h5>
                                <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                                    <div>
                                        <i class="fas fa-wifi me-2"></i>
                                        <span>
                                            <?= $row["feature1"] ?>
                                        </span>
                                    </div>
                                    <div>
                                        <i class="fas fa-parking me-2"></i>
                                        <span>
                                            <?= $row["feature2"] ?>
                                        </span>
                                    </div>
                                    <div>
                                        <i class="fa-thin fa-pot-food me-2"></i>
                                        <span>
                                            <?= $row["feature3"] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-left">
                                <a class="btn btn-primary mt-auto" href="<?= $row["book_now_link"] ?>"
                                    target="_blank">Book
                                    Now</a>
                            </div>
                            <div class="text-left">
                                <a class="btn btn-outline-dark mt-auto" href="<?= $row["view_details_link"] ?>"
                                    target="_blank">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
          }
        } else {
          echo "0 results";
        }

        // Close the database connection
        $conn->close();
        ?>

            </div>
        </div>
    </section>
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
                            Looking for a nice Hotel for your vacation or meeting, Hotels has got you covered. You can
                            search for any hotel accross the world and get access to the hotel immediately.
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
                                <input type="email " class="form-control " id="inputEmail " placeholder="Enter email ">
                            </fieldset>
                            <fieldset class="form-group ">
                                <textarea class="form-control " id="inputMessage " placeholder="Message "></textarea>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script src="script.js "></script>
    <script src="extention/choices.js "></script>
    <script>
    var textPresetVal = new Choices('#choices-text-preset-values', {
        removeItemButton: true,
    });
    </script>
</body>