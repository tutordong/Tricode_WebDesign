<?php 
include '../config/koneksi.php';

session_start();

if(!isset($_SESSION["login"])) {
  header("Location: ../login");
  exit;
}

$sukses = ""; 

if(isset($_POST['submit'])) {
    if(tambah_streetfood($_POST) > 0){
        echo "
            <script>
            alert('Data berhasil diupload');
            document.location.href = 'street-food';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data gagal diupload');
            document.location.href = 'street-food';
            </script>
        ";
    }
}

$list_streetfood = query("SELECT * FROM streetfood");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                        <a class="nav-link" aria-current="page" href="index">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makanan">Restoran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caffe">Caffe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="street-food">Street Food</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="logout" class="btn btn-outline-danger">Keluar</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="h3 mb-4 text-gray-800">Tambah Street Food</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form Tambah Data Street Food</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="foto">Foto Street Food</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Nama Street Food</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="menu">Menu</label>
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Daftar menu" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="buka">Buka</label>
                        <input type="text" class="form-control" id="buka" name="buka" placeholder="Waktu buka" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tlp">No Telpon</label>
                        <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Nomor telepon" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan lokasi" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="seo">Seo</label>
                        <input type="text" class="form-control" id="seo" name="data_name" placeholder="Masukkan seo" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="seo">Seo</label>
                        <input type="text" class="form-control" id="seo" name="instagram" placeholder="Masukkan seo" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Daftar Street Food</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Menu</th>
                                <th>Buka</th>
                                <th>No Telpon</th>
                                <th>Harga</th>
                                <th>Lokasi</th>
                                <th>SEO</th>
                                <th>SEO</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list_streetfood as $streetfood) :?>
                            <tr>
                                <td><img src="../img/<?= $streetfood['foto'] ?>" alt="Foto" class="img-thumbnail" width="150"></td>
                                <td><?= $streetfood['nama'] ?></td>
                                <td><?= $streetfood['deskripsi'] ?></td>
                                <td><?= $streetfood['menu'] ?></td>
                                <td><?= $streetfood['buka'] ?></td>
                                <td><?= $streetfood['tlp'] ?></td>
                                <td><?= $streetfood['harga'] ?></td>
                                <td><?= $streetfood['lokasi'] ?></td>
                                <td><?= $streetfood['data_name'] ?></td>
                                <td>
                                    <a href="edit_streetfood?id=<?= $streetfood['uuid'] ?>" class="btn btn-warning mb-1 mb-md-0 mr-1" style="width: 100px;">Edit</a>
                                    <form action="" method="POST" style="display: inline;">
                                        <input type="hidden" name="uuid" value="<?= $streetfood['uuid']; ?>">
                                        <button type="submit" name="hapus_streetfood" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus makanan ini?');" style="width: 100px;">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>
