<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin-dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/48be92d504.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online Mobile Store Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin-dashboard.php">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="stats">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Current Users</h5>
                            <?php
                                $query = "SELECT id FROM users ORDER BY id"; 
                                $connection = include('includes/dbconnect.php');
                                $query_run = mysqli_query($connection, $query);                               
                                $row = mysqli_num_rows($query_run);
                                echo '<h6 class="card-subtitle mb-2 text-muted"> Total Users: ' . $row . '</h6>';
                            ?>
                            <p class="card-text">All Details on our customers are stored here refer here to gain any details.</p>
                            <a href="user-data.php" class="card-link">View Data</a>
                            <a href="#" class="card-link">Add User</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Current Admins</h5>
                            <?php
                                $query = "SELECT id FROM admins ORDER BY id"; 
                                $connection = include('includes/dbconnect.php');
                                $query_run = mysqli_query($connection, $query);                               
                                $row = mysqli_num_rows($query_run);
                                echo '<h6 class="card-subtitle mb-2 text-muted"> Total Users: ' . $row . '</h6>';
                            ?>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="admin-data.php" class="card-link">View Data</a>
                            <a href="admin-reg.php" class="card-link">Add Admin</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total Devices</h5>
                            <?php
                                $query = "SELECT id FROM mobile ORDER BY id"; 
                                $connection = include('includes/dbconnect.php');
                                $query_run = mysqli_query($connection, $query);                               
                                $row = mysqli_num_rows($query_run);
                                echo '<h6 class="card-subtitle mb-2 text-muted"> Total Devices: ' . $row . '</h6>';
                            ?>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="device-data.php" class="card-link">View Data</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total Checkouts</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
    </section>
</body>

</html>