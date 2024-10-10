<?php 
include '../config/koneksi.php';

session_start();

if(!isset($_SESSION["login"])) {
  header("Location: ../login");
  exit;
}

$result_makanan = mysqli_query($conn, "SELECT COUNT(*) AS total_makanan FROM makanan");
$row_makanan = mysqli_fetch_assoc($result_makanan);
$total_makanan = $row_makanan['total_makanan'];

$result_minuman = mysqli_query($conn, "SELECT COUNT(*) AS total_minuman FROM minuman");
$row_minuman = mysqli_fetch_assoc($result_minuman);
$total_minuman = $row_minuman['total_minuman'];

$result_streetfood = mysqli_query($conn, "SELECT COUNT(*) AS total_streetfood FROM streetfood");
$row_streetfood = mysqli_fetch_assoc($result_streetfood);
$total_streetfood = $row_streetfood['total_streetfood'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makanan">Restoran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caffe">Caffe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="street-food">Street Food</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="logout" class="btn btn-outline-danger">Keluar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="h3 mb-4 text-gray-800">Dashboard Overview</h1>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Restoran</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_makanan; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-utensils fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Minuman</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_minuman; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-coffee fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Total Street Food</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_streetfood; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-coffee fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
