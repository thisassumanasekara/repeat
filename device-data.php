<html>

<head>
    <title>Device Data</title>
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
    <div class="data-table">
        <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Mobile Name</td>
                    <td>Mobile Price</td>
                    <td>64 Stock</td>
                    <td>128 Stock</td>
                    <td>256 Stock</td>
                    <td>Mobile Image</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = include('includes/dbconnect.php');
                $query = "SELECT * FROM mobile";
                $query_run = mysqli_query($connection, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;"><?php echo $row['id']; ?></td>
                            <td style="border: 1px solid black;"><?php echo $row['mobile_name']; ?></td>
                            <td style="border: 1px solid black;"><?php echo $row['mobile_price']; ?></td>
                            <td style="border: 1px solid black;"><?php echo $row['64_stock']; ?></td>
                            <td style="border: 1px solid black;"><?php echo $row['128_stock']; ?></td>
                            <td style="border: 1px solid black;"><?php echo $row['256_stock']; ?></td>
                            <td style="border: 1px solid black;"><img src="assets/<?php echo $row['mobile_image']; ?>" style="height: 200px;width:200px;"></td>
                            <td style="border: 1px solid black;">
                                <form action="device-edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button style="width: 100px;" name="edit_btn" class="btn btn-warning btn-icon-split">Edit</button>
                                </form>

                            </td>
                            <td style="border: 1px solid black;">
                                <form action="code/device-edit.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button style="width: 100px;" name="user_delete" class="btn btn-danger btn-icon-split">Delete</button>
                                </form>

                            </td>

                        </tr>

                        </tr>
                <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>