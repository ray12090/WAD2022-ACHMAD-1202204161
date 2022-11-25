<?php 
    require 'connector.php';

    if(isset($_POST["submit_car"])) {
        // entered data
        $nama_mobil = $_POST["nama"];
        $nama_pemilik = $_POST["pemilik"];
        $merk = $_POST["merk"];
        $tanggal_beli = $_POST["tanggal_beli"];
        $deskripsi = $_POST["deskripsi"];
        $status_mobil = $_POST["status"];

        // dir path
        $dir = "../asset/images/";

        // get filename to upload
        $filename = $_FILES["upload_file"]["name"];

        // move file
        move_uploaded_file($_FILES["upload_file"]["tmp_name"], $dir.$filename);

        // get latest id_mobil
        $id_mobil_sekarang = $jumlah_mobil+1;

        // do query
        $query = mysqli_query($connection, "INSERT INTO `showroom_rayhan_table` (id_mobil,nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto_mobil,status_pembayaran) VALUES('$id_mobil_sekarang','$nama_mobil','$nama_pemilik','$merk','$tanggal_beli','$deskripsi','$filename','$status_mobil')");

        // redirect to add pages
        header("Location:/MODUL3%20ACHMAD/pages/ListCar-Rayhan.php");
    }
?>