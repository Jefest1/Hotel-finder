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

            // Retrieve data from the database
            $sql = "SELECT hotel_name, image, feature1, feature2, feature3, book_now_link, view_details_link FROM featured_hotels";
            $result = $conn->query($sql);

            // Display the data on the cards
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
          <div class="col mb-5">
            <div class="card h-100 animated">
              <img class="card-img-top" src="' . $row["image"] . '" alt="...">
              <div class="card-body p-4">
                <div class="text-center">
                  <h5 class="fw-bolder mb-3">' . $row["hotel_name"] . '</h5>
                  <div class="d-flex flex-column justify-content-end align-items-start mb-3">
                    <div>
                      <i class="fas fa-wifi me-2"></i>
                      <span>' . $row["feature1"] . '</span>
                    </div>
                    <div>
                      <i class="fas fa-parking me-2"></i>
                      <span>' . $row["feature2"] . '</span>
                    </div>
                    <div>
                      <i class="fa-thin fa-pot-food me-2"></i>
                      <span>' . $row["feature3"] . '</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-left">
                  <a class="btn btn-primary mt-auto" href="' . $row["book_now_link"] . '" target="_blank">Book Now</a>
                </div>
                <div class="text-left">
                  <a class="btn btn-outline-dark mt-auto" href="' . $row["view_details_link"] . '" target="_blank">View Details</a>
                </div>
              </div>
            </div>
            </div>
        ';
                }
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>


</body>