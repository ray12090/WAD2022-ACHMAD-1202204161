<?php require '../config/connector.php' ?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- get data from database -->
        <?php
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
                $tanggal = $row ["tanggal_beli"];
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
                        <a href="Add-Rayhan.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'Edit-Rayhan.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Detail Page -->
        <div class="container-fluid">
            </br>
            <h2><?php echo "Edit Details" ?></h2>
            </br>
        </div>

        <!-- Content Page -->
        <div class="container-fluid row">
            <!-- car image -->
            <div class="container-fluid col">
                <img src="../asset/images/<?php echo $foto?>" alt="car_image" width="400" height="400">
            </div>

            <!-- Edit Form -->
            <form action="../config/edit.php" method="post" class="container row col">
                <!-- Nama Mobil -->
                <label class="mb-2"><b>Nama Mobil</b></label></br>
                <input class="mb-2 input-rounded" value="<?php echo $nama_mobil?>" name="nama" type="text" ></br>

                <!-- Pemilik -->
                <label class="mb-2"><b>Nama Pemilik</b></label></br>
                <input class="mb-2 input-rounded" value="<?php echo $pemilik_mobil?>" name="pemilik" type="text" ></br>

                <!-- Merk -->
                <label class="mb-2"><b>Merk</b></label></br>
                <input class="mb-2 input-rounded" value="<?php echo $merk_mobil?>" name="merk" type="text" ></br>

                <!-- Tanggal Beli -->
                <label class="mb-2"><b>Tanggal Beli</b></label></br>
                <input class="mb-2 input-rounded" name="tanggal_beli" type="date" value="<?php echo $tanggal ?>" ></br>

                <!-- Deskripsi -->
                <label class="mb-2"><b>Deskripsi</b></label></br>
                <input class="mb-2 input-rounded" value="<?php echo $deskripsi?>" name="deskripsi" type="text" ></br>

                <!-- Foto -->
                <label class="mb-1"><b>Foto</b></label></br>
                <input class="mb-2 input-rounded" type="file" name="upload_file" class="foto" ></br>

                <!-- Pilihan -->
                <span>
                    <!-- Ya -->
                    <input type="radio" name="status" value="Lunas" <?php echo $status == "Lunas" ? "checked" : ""?>>
                    <label>Lunas</label>

                    <!-- Tidak -->
                    <input type="radio" name="status" value="Belum Lunas" <?php echo $status == "Belum Lunas" ? "checked" : ""?>>
                    <label>Belum Lunas</label>
                </span>

                <!-- Edit -->
                <div class="container submit-container">
                    <input type="submit" class="p-1 btn btn-primary submit-btn" name="edit_car" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>