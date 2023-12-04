<html>

<head>
    <title>Online Mobile store</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online Mobile Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/banner.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/banner.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/banner.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            $connection = include('includes/dbconnect.php');
            $query = "SELECT * FROM mobile";
            $query_run = mysqli_query($connection, $query);
            if (mysqli_num_rows($query_run)>0){
              while ($row = mysqli_fetch_assoc($query_run)){           
            ?>
            <div class="col">
              <div class="card text-black" style="max-width: 300px; max-height: 750px;">
                <img src="assets/<?php echo $row['mobile_image'];?>"
                  class="card-img-top" alt="iPhone" style="max-width: 250px; max-height: 550px;"/>
                <div class="card-body">
                  <div class="text-center mt-1">
                    <h4 class="card-title"><?php echo $row['mobile_name'];?></h4>
                    <h6 class="text-primary mb-1 pb-3">Starting at $<?php echo $row['mobile_price'];?></h6>
                  </div>
      
                  
      
                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Capacity</h5>
                    </div>
      
                    <div class="d-flex flex-column mb-4 lead">
                      <span class="mb-2">64GB Available: <?php echo $row['64_stock'];?></span>
                      <span class="mb-2">128GB Available: <?php echo $row['128_stock'];?></span>
                      <span>256GB Available:<?php echo $row['256_stock'];?></span>
                    </div>
                  </div>
      
                  <div class="d-flex flex-row">
                    <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                      Learn more
                    </button>
                    <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                  </div>
                </div>
              </div>
            </div>
            <?php
               }
              }else{
                echo "No Record Found";
              }
            ?>
          </div>
        </div>
      </section>
</body>

</html>