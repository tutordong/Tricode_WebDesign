<?php 
include '../config/koneksi.php';

session_start();

if(!isset($_SESSION["login"])) {
  header("Location: ../login");
  exit;
}

$sukses = ""; 

// Mengambil ID dari URL
$id = $_GET['id'] ?? null;
if ($id) {
    // Ambil data makanan berdasarkan ID
    $data_makanan = query("SELECT * FROM makanan WHERE uuid = '$id'")[0]; // Mengambil data pertama

    if (!$data_makanan) {
        echo "<script>
            alert('Data tidak ditemukan');
            document.location.href = 'makanan';
            </script>";
        exit;
    }
}

if(isset($_POST['submit'])) {
    if(edit_makanan($_POST, $id) > 0){ // Ganti fungsi ini sesuai dengan logika edit Anda
        echo "
            <script>
            alert('Data berhasil diupdate');
            document.location.href = 'makanan';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data gagal diupdate');
            document.location.href = 'makanan';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card-body container">
        <h1>Edit Form</h1>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="foto">Foto Makanan/Minuman</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <div class="form-group mb-3">
                <label for="nama">Nama Makanan/Minuman</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_makanan['nama'] ?>" placeholder="Masukkan nama" required>
            </div>

            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"><?= $data_makanan['deskripsi'] ?></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="menu">Menu</label>
                <input type="text" class="form-control" id="menu" name="menu" value="<?= $data_makanan['menu'] ?>" placeholder="Daftar menu" required>
            </div>

            <div class="form-group mb-3">
                <label for="buka">Buka</label>
                <input type="text" class="form-control" id="buka" name="buka" value="<?= $data_makanan['buka'] ?>" placeholder="Waktu buka" required>
            </div>

            <div class="form-group mb-3">
                <label for="tlp">No Telpon</label>
                <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $data_makanan['tlp'] ?>" placeholder="Nomor telepon" required>
            </div>

            <div class="form-group mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?= $data_makanan['harga'] ?>" placeholder="Masukkan harga" required>
            </div>

            <div class="form-group mb-3">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $data_makanan['lokasi'] ?>" placeholder="Masukkan lokasi" required>
            </div>

            <div class="form-group mb-3">
                <label for="seo">SEO</label>
                <input type="text" class="form-control" id="seo" name="seo" value="<?= $data_makanan['data_name'] ?>" placeholder="Masukkan seo" required>
            </div>

            <div class="form-group mb-3">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $data_makanan['instagram'] ?>" placeholder="Masukkan instagram" required>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <a href="./" class="btn btn-danger">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
