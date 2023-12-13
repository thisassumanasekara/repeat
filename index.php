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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
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
    <h1 style="text-align:center;">About Us</h1>
    <div class="about">
      <div class="about-left">
        <p><br><br><br>we believe in the power of connectivity and the seamless integration of technology into our daily lives. Established with a passion for delivering
         cutting-edge mobile devices and accessories, we are your go-to destination for all things mobile.We are a team of tech enthusiasts driven by a common goal – to provide
          our customers with the latest and greatest in mobile technology. With a commitment to quality and innovation, we curate a diverse selection of smartphones, tablets,
           smartwatches, and accessories to meet the dynamic needs of our tech-savvy community.Explore the latest trends, discover innovative gadgets, and stay ahead in the fast-paced world of mobile technology. We are more than just a store; we are a community that shares a love for all things mobile.

          Thank you for choosing us!</p>
      </div>
      <div class="about-right"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.63217015621!2d79.98521638715816!3d6.841586999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251dceebf13a3%3A0x4f7fdb1c65b63ddc!2sMobile%20Planet!5e0!3m2!1sen!2slk!4v1701843293695!5m2!1sen!2slk" width="400" height="500" style="border:0;"></iframe></div>
    </div>
  </section>
  <section class="testimonials">
    <h1>Testimonials</h1>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 1</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 2</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 3</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 4</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 5</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 6</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 7</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574">
      <img src="images/1.png" />
      <figcaption>
        <blockquote>
          <p>It has been a great experience and thankyou for the extremley high quality product of yours</p>
        </blockquote>
        <h3>Customer 8</h3>
       
      </figcaption>
    </figure>
    <figure class="snip1574"><img src="images/2.png" />
      <figcaption>
        <blockquote>
          <p>We loved it, it was an amazing experience</p>
        </blockquote>
        <h3>Customer 9</h3>
        
      </figcaption>
    </figure>
    <figure class="snip1574"><img src="images/3.png" />
      <figcaption>
        <blockquote>
          <p>Thankyou guys for the wonderful experience and new devices</p>
        </blockquote>
        <h3>Thank You</h3>
        
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