<?php 
            require './connector.php';

            if(isset($_POST['edit_car'])) {

                //where images are saved 
                $target = "../asset/images/"; 
                $target = $target . basename( $_FILES['upload_file']['name']);

                // sends photo to the server
                if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){

                }

                // edit data
                $nama_mobil = $_POST["nama"];
                $nama_pemilik = $_POST["pemilik"];
                $merk = $_POST["merk"];
                $tanggal_beli = $_POST["tanggal_beli"];
                $deskripsi = $_POST["deskripsi"];
                $status_mobil = $_POST["status"];

                // get all file
                $get_all_data = "SELECT * FROM showroom_rayhan_table ORDER BY id_mobil";
                $get_all_run = mysqli_query($connection, $get_all_data);

                // make global variable for data
                global $foto;

                // membuat array data
                while($row = mysqli_fetch_array($get_all_run)) {
                    $foto = $row["foto_mobil"];
                }

                // delete existing photo
                $photo_path = "../asset/images/".$foto;
                unlink($photo_path . $query_all);

                // query for update
                $query_syntax = "UPDATE showroom_rayhan_table nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi', status_pembayaran='$status_mobil'";
                $edit_query = mysqli_query($connection, $query_syntax);

                // redirect to edit page
                header("Location:/MODUL3%20ACHMAD/pages/Edit-Rayhan.php");
            }
        ?>