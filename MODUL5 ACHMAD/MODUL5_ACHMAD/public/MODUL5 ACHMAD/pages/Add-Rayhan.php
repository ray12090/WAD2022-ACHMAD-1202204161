<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <ul class="navbar-nav me-auto">
                    <!-- Navbar home -->
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="nav-link active">Home</a>
                    </li>
                    <!-- Navbar MyCar -->
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="pages/ListCar-Rayhan.php" style="text-decoration: none;" class="nav-link">MyCar</a>
                    </li>
                </ul>
                <!-- Navbar Add Car -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="pages/Add-Rayhan.php" style="text-decoration: none;" class="nav-link">Add Car</a>
                    </li>
                </ul>
                <!-- Collapsible wrapper -->
                <div class="dropdown" style="margin-right:5%;">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Name
                    </button>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="./Profile-Rayhan.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>

        <!-- Title -->
        <div class="container mt-3 title-add">
            <h4>Tambah Mobil</h4>
            <p class="title-desc">Tambah Mobil Baru Anda Ke List Show Room</p>
        </div>

        <!-- Add New Car Form -->
        <div class="container mt-2">
            <form action="../config/insert.php" method="POST" class="container row" id="form-group" enctype="multipart/form-data">

                <!-- Nama Mobil -->
                <div class="mb-1">
                    <label class="form-label"><b>Nama Mobil</b></label>
                    <div class="col-sm">
                        <input class="form-control" name="nama" type="text" >
                    </div>
                </div>

                <!-- Pemilik -->
                <div class="mb-1">
                    <label class="form-label"><b>Nama Pemilik</b></label>
                    <div class="col-sm">
                        <input class="form-control" name="pemilik" type="text" >
                    </div>
                </div>

                <!-- Merk -->
                <div class="mb-1">
                    <label class="form-label"><b>Merk</b></label>
                    <div class="col-sm">
                        <input class="form-control" name="merk" type="text" >
                    </div>
                </div>

                <!-- Tanggal Beli -->
                <div class="mb-1">
                    <label class="form-label"><b>Tanggal Beli</b></label>
                    <div class="col-sm">
                        <input class="form-control" name="tanggal_beli" type="date" >
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="mb-1">
                    <label class="form-label"><b>Deskripsi</b></label>
                    <div class="col-sm">
                        <textarea class="form-control" name="deskripsi" type="text" ></textarea>
                    </div>
                </div>

                <!-- Foto -->
                <div class="mb-1">
                    <label class="form-label"><b>Foto</b></label>
                    <div class="col-sm">
                        <input class="form-control" type="file" name="upload_file" class="foto" >
                    </div>
                </div>

                <!-- Status Pembayaran -->
                <div class="mb-1">
                    <label class="form-label d-block"><b>Status Pembayaran</b></label>

                    <!-- Lunas -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lunas" name="status" data-sb-validations="required" value="lunas"/>
                        <label class="form-check-label" for="lunas">Lunas</label>
                    </div>

                    <!-- Belum Lunas -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="belumLunas" name="status" data-sb-validations="required" value="belumLunas"/>
                        <label class="form-check-label" for="belumLunas" >Belum Lunas</label>
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
                </div>

                <!-- Submit -->
                <div class="mb-3">
                    <div class="col-sm-12 py-3">
                        <input type="submit" class="btn btn-outline-primary btn-center" name="submit_car" value="Selesai" style="width:100%;">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>