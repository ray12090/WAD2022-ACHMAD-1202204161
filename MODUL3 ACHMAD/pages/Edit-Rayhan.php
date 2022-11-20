<?php require '../config/connector.php' ?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? "" : "text-secondary" ?>">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="pages/Add-Rayhan.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'Detail-Rayhan.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Detail Page -->
        <div class="container-fluid">
            <h3><?php echo "BMW" ?></h3>
            <p><?php echo "Detail" ?></p>
        </div>

        <!-- Content Page -->
        <div class="container-fluid row">
            <!-- car image -->
            <div class="container-fluid col">
                <img src="asset/images/HomeCar.png" alt="car_image">
            </div>

            <!-- Edit Form -->
            <form action="" method="post" class="container row col">
                <!-- Nama Mobil -->
                <label class="mb-2"><b>Nama Mobil</b></label></br>
                <input class="mb-2 input-rounded" name="nama" type="text" ></br>

                <!-- Pemilik -->
                <label class="mb-2"><b>Nama Pemilik</b></label></br>
                <input class="mb-2 input-rounded" name="pemilik" type="text" ></br>

                <!-- Merk -->
                <label class="mb-2"><b>Merk</b></label></br>
                <input class="mb-2 input-rounded" name="merk" type="text" ></br>

                <!-- Tanggal Beli -->
                <label class="mb-2"><b>Tanggal Beli</b></label></br>
                <input class="mb-2 input-rounded" name="tanggal_beli" type="date" ></br>

                <!-- Deskripsi -->
                <label class="mb-2"><b>Deskripsi</b></label></br>
                <input class="mb-2 input-rounded" name="deskripsi" type="text" ></br>

                <!-- Foto -->
                <label class="mb-1"><b>Foto</b></label></br>
                <input class="mb-2 input-rounded" type="file" name="upload" class="foto" ></br>

                <!-- Pilihan -->
                <span>
                    <!-- Ya -->
                    <input type="radio" name="status" value="Lunas">
                    <label>Lunas</label>

                    <!-- Tidak -->
                    <input type="radio" name="status" value="Belum Lunas">
                    <label>Belum Lunas</label>
                </span>

                <!-- Edit -->
                <div class="container submit-container">
                    <input type="edit_car" class="p-1 btn btn-primary submit-btn" name="edit_car" value="Edit">
                </div>
            </form>
        </div>
    </body>
</html>