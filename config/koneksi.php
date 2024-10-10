<?php 

$conn = mysqli_connect("localhost", "root", "", "kuliner");
date_default_timezone_set('Asia/Jakarta');
    $dibuat = date("Y-m-d H:i:s");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn, $dibuat;
    
        $foto = uplodaFoto();
        if(!$foto){
            return false;
        }
        
        $uniqid = uniqid();
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $menu = htmlspecialchars($data['menu']);
        $buka = htmlspecialchars($data['buka']);
        $tlp = htmlspecialchars($data['tlp']);
        $harga = htmlspecialchars($data['harga']);
        $lokasi = htmlspecialchars($data['lokasi']);
        $data_name = htmlspecialchars($data['data_name']);
        $instagram = htmlspecialchars($data['instagram']);
        $dibuat = date("Y-m-d H:i:s");

        $query = "INSERT INTO makanan (id, uuid, nama, foto, deskripsi, menu, buka, tlp, harga, lokasi, data_name, instagram, dibuat) 
                  VALUES ('', '$uniqid', '$nama', '$foto', '$deskripsi', '$menu', '$buka', '$tlp', '$harga', '$lokasi', '$data_name', '$instagram', '$dibuat')";
        
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function tambah_caffe($data){
        global $conn, $dibuat;
    
        $foto = uplodaFoto();
        if(!$foto){
            return false;
        }
        
        $uniqid = uniqid();
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $menu = htmlspecialchars($data['menu']);
        $buka = htmlspecialchars($data['buka']);
        $tlp = htmlspecialchars($data['tlp']);
        $harga = htmlspecialchars($data['harga']);
        $lokasi = htmlspecialchars($data['lokasi']);
        $data_name = htmlspecialchars($data['data_name']);
        $instagram = htmlspecialchars($data['instagram']);
        $dibuat = date("Y-m-d H:i:s");

        $query = "INSERT INTO minuman (id, uuid, nama, foto, deskripsi, menu, buka, tlp, harga, lokasi, data_name, instagram, dibuat) 
                  VALUES ('', '$uniqid', '$nama', '$foto', '$deskripsi', '$menu', '$buka', '$tlp', '$harga', '$lokasi', '$data_name', '$instagram', '$dibuat')";
        
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function tambah_streetfood($data){
        global $conn, $dibuat;
    
        $foto = uplodaFoto();
        if(!$foto){
            return false;
        }
        
        $uniqid = uniqid();
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $menu = htmlspecialchars($data['menu']);
        $buka = htmlspecialchars($data['buka']);
        $tlp = htmlspecialchars($data['tlp']);
        $harga = htmlspecialchars($data['harga']);
        $lokasi = htmlspecialchars($data['lokasi']);
        $data_name = htmlspecialchars($data['data_name']);
        $instagram = htmlspecialchars($data['instagram']);
        $dibuat = date("Y-m-d H:i:s");

        $query = "INSERT INTO streetfood (id, uuid, nama, foto, deskripsi, menu, buka, tlp, harga, lokasi, data_name, instagram, dibuat) 
                  VALUES ('', '$uniqid', '$nama', '$foto', '$deskripsi', '$menu', '$buka', '$tlp', '$harga', '$lokasi', '$data_name', '$instagram', '$dibuat')";
        
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
    
    
    function uplodaFoto(){
    
        $namafile = $_FILES['foto']['name'];
        $ukurafile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpname = $_FILES['foto']['tmp_name'];
    
        if($error === 4){
            echo '<script> alert("MASUKAN FOTO"); </script>';
            return false;
        }
    
        $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
        $ekstensiFoto = explode('.',$namafile);
        $ekstensiFoto = strtolower(end($ekstensiFoto));
    
        if(!in_array($ekstensiFoto, $ekstensiFotoValid)) {
            echo '<script> alert("FOTO JPG, JPEG, PNG") </script>';
            return false;
        }
    
        if($ukurafile > 2000000){
            echo '<script> alert("SIZE E KEBESAREN") </script>';
            return false;
        }
    
        $namaFilebaru = uniqid();
        $namaFilebaru .= '.';
        $namaFilebaru .= $ekstensiFoto;
    
        move_uploaded_file($tmpname, '../img/' . $namaFilebaru);
        return $namaFilebaru;
    }

// AWAL HAPUS MAKANAN
if (isset($_POST["hapus_makanan"])) {
    $uuid = $_POST["uuid"];
    $sql = "DELETE FROM makanan WHERE uuid = '$uuid'";

    if (mysqli_query($conn, $sql)) {
        echo "
            <script>
            alert('Data berhasil dihapus');
            document.location.href = 'makanan';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data gagal dihapus');
            document.location.href = 'makanan';
            </script>
        ";
    }
}
// AKHIR HAPUS MAKANAN

// AWAL EDIT MAKANAN
function edit_makanan($data, $id) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $menu = htmlspecialchars($data['menu']);
    $buka = htmlspecialchars($data['buka']);
    $tlp = htmlspecialchars($data['tlp']);
    $harga = htmlspecialchars($data['harga']);
    $lokasi = htmlspecialchars($data['lokasi']);
    $seo = htmlspecialchars($data['seo']);
    $instagram = htmlspecialchars($data['instagram']);
    
    $queryFoto = "SELECT foto FROM makanan WHERE uuid = '$id'";
    $resultFoto = mysqli_query($conn, $queryFoto);
    $dataFoto = mysqli_fetch_assoc($resultFoto);

    if ($dataFoto) {
        $existing_foto = $dataFoto['foto'];
    } else {

        return 0;
    }

    $foto = !empty($_FILES['foto']['name']) ? uplodaFoto() : $existing_foto;

    $query = "UPDATE makanan SET 
                foto = '$foto',
                nama = '$nama',
                deskripsi = '$deskripsi',
                menu = '$menu',
                buka = '$buka',
                tlp = '$tlp',
                harga = '$harga',
                lokasi = '$lokasi',
                data_name = '$seo',
                instagram = '$instagram'
              WHERE uuid = '$id'";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
// AKHIR EDIT MAKANAN

// AWAL HAPUS CAFFE
if (isset($_POST["hapus_caffe"])) {
    $uuid = $_POST["uuid"];
    $sql = "DELETE FROM minuman WHERE uuid = '$uuid'";

    if (mysqli_query($conn, $sql)) {
        echo "
            <script>
            alert('Data berhasil dihapus');
            document.location.href = 'caffe';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data gagal dihapus');
            document.location.href = 'caffe';
            </script>
        ";
    }
}
// AKHIR HAPUS CAFFE

// AWAL EDIT CAFFE
function edit_caffe($data, $id) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $menu = htmlspecialchars($data['menu']);
    $buka = htmlspecialchars($data['buka']);
    $tlp = htmlspecialchars($data['tlp']);
    $harga = htmlspecialchars($data['harga']);
    $lokasi = htmlspecialchars($data['lokasi']);
    $seo = htmlspecialchars($data['seo']);
    $instagram = htmlspecialchars($data['instagram']);
    
    $queryFoto = "SELECT foto FROM minuman WHERE uuid = '$id'";
    $resultFoto = mysqli_query($conn, $queryFoto);
    $dataFoto = mysqli_fetch_assoc($resultFoto);

    if ($dataFoto) {
        $existing_foto = $dataFoto['foto'];
    } else {

        return 0;
    }

    $foto = !empty($_FILES['foto']['name']) ? uplodaFoto() : $existing_foto;

    $query = "UPDATE minuman SET 
                foto = '$foto',
                nama = '$nama',
                deskripsi = '$deskripsi',
                menu = '$menu',
                buka = '$buka',
                tlp = '$tlp',
                harga = '$harga',
                lokasi = '$lokasi',
                data_name = '$seo',
                instagram = '$instagram'
              WHERE uuid = '$id'";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
// AKHIR EDIT CAFFE

// AWAL HAPUS STREETFOOD
if (isset($_POST["hapus_streetfood"])) {
    $uuid = $_POST["uuid"];
    $sql = "DELETE FROM streetfood WHERE uuid = '$uuid'";

    if (mysqli_query($conn, $sql)) {
        echo "
            <script>
            alert('Data berhasil dihapus');
            document.location.href = 'street-food';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data gagal dihapus');
            document.location.href = 'street-food';
            </script>
        ";
    }
}
// AKHIR HAPUS STREETFOOD

// AWAL EDIT STREETFOOD
function edit_streetfood($data, $id) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $menu = htmlspecialchars($data['menu']);
    $buka = htmlspecialchars($data['buka']);
    $tlp = htmlspecialchars($data['tlp']);
    $harga = htmlspecialchars($data['harga']);
    $lokasi = htmlspecialchars($data['lokasi']);
    $seo = htmlspecialchars($data['seo']);
    $instagram = htmlspecialchars($data['instagram']);
    
    $queryFoto = "SELECT foto FROM streetfood WHERE uuid = '$id'";
    $resultFoto = mysqli_query($conn, $queryFoto);
    $dataFoto = mysqli_fetch_assoc($resultFoto);

    if ($dataFoto) {
        $existing_foto = $dataFoto['foto'];
    } else {

        return 0;
    }

    $foto = !empty($_FILES['foto']['name']) ? uplodaFoto() : $existing_foto;

    $query = "UPDATE streetfood SET 
                foto = '$foto',
                nama = '$nama',
                deskripsi = '$deskripsi',
                menu = '$menu',
                buka = '$buka',
                tlp = '$tlp',
                harga = '$harga',
                lokasi = '$lokasi',
                data_name = '$seo',
                instagram = '$instagram'
              WHERE uuid = '$id'";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
// AKHIR EDIT STREETFOOD
?>