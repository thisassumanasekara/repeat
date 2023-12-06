<html>

<head>
  <title>Online Mobile store</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/48be92d504.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Online Mobile Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        if (mysqli_num_rows($query_run) > 0) {
          while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <div class="col">
              <div class="card text-black" style="max-width: 300px; max-height: 750px;">
                <img src="assets/<?php echo $row['mobile_image']; ?>" class="card-img-top" alt="iPhone" style="width: auto; height: 300px;" />
                <div class="card-body">
                  <div class="text-center mt-1">
                    <h4 class="card-title"><?php echo $row['mobile_name']; ?></h4>
                    <h6 class="text-primary mb-1 pb-3">Starting at $<?php echo $row['mobile_price']; ?></h6>
                    
                  </div>



                  <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                    <h5 class="mb-0">Capacity</h5>
                  </div>

                  <div class="d-flex flex-column mb-4 lead">
                    <span class="mb-2">64GB Available: <?php echo $row['64_stock']; ?></span>
                    <span class="mb-2">128GB Available: <?php echo $row['128_stock']; ?></span>
                    <span>256GB Available:<?php echo $row['256_stock']; ?></span>
                  </div>
                </div>

                <div class="d-flex flex-row">
                  <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                    Learn more
                  </button>
                  <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                </div>
              </div>
            </div> <?php
          }
        } else {
          echo "No Record Found";
        }
  ?>
      </div>
 
    </div>
    </div>
  </section>
  <section class="location">
    <div class="about">
      <h1>About Us</h1>
      <div class="about-left">
        <p><br><br><br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>
      <div class="about-right"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.63217015621!2d79.98521638715816!3d6.841586999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251dceebf13a3%3A0x4f7fdb1c65b63ddc!2sMobile%20Planet!5e0!3m2!1sen!2slk!4v1701843293695!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
  </section>
  <section class="testamonials">
    <figure class="snip1574">
      <img src="images/1.png" alt="profile-sample2" />
      <figcaption>
        <blockquote>
          <p>Which is worse, that everyone has his price, or that the price is always so low.</p>
        </blockquote>
        <h3>Sue Shei</h3>
        <h5>Founder</h5>
      </figcaption>
    </figure>
    <figure class="snip1574"><img src="images/2.png" alt="profile-sample7" />
      <figcaption>
        <blockquote>
          <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
        </blockquote>
        <h3>Will Barrow</h3>
        <h5>Web Designer</h5>
      </figcaption>
    </figure>
    <figure class="snip1574"><img src="images/3.png" alt="profile-sample6" />
      <figcaption>
        <blockquote>
          <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </blockquote>
        <h3>Indigo Violet</h3>
        <h5>Public Relations</h5>
      </figcaption>
    </figure>
  </section>

  <footer>
    <div class="foot-text">
      <p>&copy Thisas Sumanasekara</p><br>
      <p>The Mobile Store</p>
    </div>
  </footer>

</body>

</html>
<script>
  $(".hover").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
</script>