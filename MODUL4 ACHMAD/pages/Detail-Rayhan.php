<?php require '../config/connector.php' ?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- get data from database -->
        <?php
            // get id 
            $id_detail = $_POST["id_mobil_detail"];

            $get_all_data = "SELECT * FROM showroom_rayhan_table ORDER BY id_mobil";
            $get_all_run = mysqli_query($connection, $get_all_data);

            // make gloabl variable for data
            global $nama_mobil;
            global $pemilik_mobil;
            global $merk_mobil;
            global $deskripsi;

            // membuat array data
            while($row = mysqli_fetch_array($get_all_run)) {
                $nama_mobil = $row["nama_mobil"];
                $pemilik_mobil = $row["pemilik_mobil"];
                $merk_mobil = $row["merk_mobil"];
                $tanggal = $row["tanggal_beli"];
                $deskripsi = $row["deskripsi"];
                $foto = $row["foto_mobil"];
                $status = $row["status_pembayaran"];
            }
        ?>

        <!-- Navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? "" : "text-secondary" ?>">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../pages/ListCar-Rayhan.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'Detail-Rayhan.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Detail Page -->
        <div class="container-fluid">
            </br>
            <h2><?php echo "Car Details" ?></h2>
            </br>
        </div>

        <!-- Content Page -->
        <div class="container-fluid row">
            <!-- car image -->
            <div class="container-fluid col">
                <img src="../asset/images/<?php echo $foto?>" alt="car_image" width="400" height="400">
            </div>

            <!-- Edit Form -->
            <form action="../pages/Edit-Rayhan.php" method="post" class="row col booking-form">

                <!-- post id_mobil -->
                <input type="hidden" name="id_mobil_edit" value="<?php echo $row['id_mobil_edit']?>">

                <!-- Nama Mobil -->
                <div class="mb-1">
                    <label class="form-label"><b>Nama Mobil</b></label></br>
                    <div class="col-sm">
                        <input class="form-control" value="<?php echo $nama_mobil?>" name="nama" type="text" disabled></br>
                    </div>
                </div>

                <!-- Pemilik -->
                <div class="mb-1">
                    <label class="form-label-3"><b>Nama Pemilik</b></label></br>
                    <div class="col-sm">
                        <input class="form-control" value="<?php echo $pemilik_mobil?>" name="pemilik" type="text" disabled></br>
                    </div>
                </div>

                <!-- Merk -->
                <div class="mb-1">
                    <label class="form-label-3"><b>Merk</b></label></br>
                    <div class="col-sm">
                        <input class="form-control" value="<?php echo $merk_mobil?>" name="merk" type="text" disabled></br>
                    </div>
                </div>

                <!-- Tanggal Beli -->
                <div class="mb-1">
                    <label class="form-label-3"><b>Tanggal Beli</b></label></br>
                    <div class="col-sm">
                        <input class="form-control" name="tanggal_beli" value="<?php echo $tanggal?>" type="date" disabled></br>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="mb-1">
                    <label class="form-label-3"><b>Deskripsi</b></label></br>
                    <div class="col-sm">
                        <input class="form-control" value="<?php echo $deskripsi?>" name="deskripsi" type="text" disabled></br>
                    </div>
                </div>

                <!-- Foto -->
                <div class="mb-1">
                    <label class="form-label-3"><b>Foto</b></label></br>
                    <div class="col-sm">
                        <input class="form-control" type="file" name="upload" value="<?php echo $foto?>" class="foto" disabled></br>
                    </div>
                </div>

                <!-- Pilihan -->
                <div class="mb-1">
                    <label class="form-label d-block"><b>Status Pembayaran</b></label>

                    <!-- Ya -->
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="status" value="Lunas" <?php echo $status == "Lunas" ? "checked" : ""?> disabled>
                        <label class="form-check-label">Lunas</label>
                    </div>
                    
                    <!-- Tidak -->
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="status" value="Belum Lunas" <?php echo $status == "Belum Lunas" ? "checked" : ""?> disabled>
                        <label class="form-check-label">Belum Lunas</label>
                    </div>
                </div>

                <!-- Edit -->
                <div class="mb-1">
                    <div class="col-sm-12 py-3">
                        <input type="submit" class="btn btn-outline-primary btn-center" name="edit_car" value="Edit" style="width:100%;">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>