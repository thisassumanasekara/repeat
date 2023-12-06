<html>

<head>
    <title>Device Add</title>
    <link rel="stylesheet" href="css/user-data.css">
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
    <div class="container-fluid">
        <div class="card sahdow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight=bold text-promary"> Edit User Data</h6>
            </div>
            <div class="card-body">
                        <form action="code/device-add.php" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label>Mobile Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Mobile Name" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Enter Mobile price" required>
                            </div>
                            <div class="form-group">
                                <label>64 Stock</label>
                                <input type="text" name="64" class="form-control" placeholder="Enter Stock" required>
                            </div>
                            <div class="form-group">
                                <label>128 Stock</label>
                                <input type="text" name="128" class="form-control" placeholder="Enter Stock" required>
                            </div>
                            <div class="form-group">
                                <label>256 Stock</label>
                                <input type="text" name="256" class="form-control" placeholder="Enter Stock" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile Image</label>
                                <input type="file" name="image"  class="form-control" placeholder="Enter Image" required>
                            </div>
                            <a href="user-data.php" class="btn btn-danger">CANCEL</a>
                            <button type="submit" name="user_updatebtn" class="btn btn-primary">Add Device</button>
                        </form>
            </div>
        </div>
    </div>
</body>

</html>