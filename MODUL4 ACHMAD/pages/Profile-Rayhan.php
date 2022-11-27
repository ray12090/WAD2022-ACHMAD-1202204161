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
                <ul class="navbar-nav me-2">
                    <!-- Navbar home -->
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="nav-link active">Home</a>
                    </li>
                    <!-- Navbar MyCar -->
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="../pages/ListCar-Rayhan.php" style="text-decoration: none;" class="nav-link">MyCar</a>
                    </li>
                </ul>
                <!-- Navbar Add Car -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="../pages/Add-Rayhan.php" style="text-decoration: none;" class="nav-link">Add Car</a>
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
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Profile Title -->
        <h2 style="text-align:center; padding:20px">Profile</h2>
        <div class="container mt-2">
            <div class="row g-3 align-items-center">
                <div class="row g-3 align-items-center">
                    <!-- Show Email -->
                    <div class="col-2">
                        <label class="col-form-label"><b>E-Mail</b></label>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" name="email" disabled>
                    </div>
                </div>
                <!-- Show Name -->
                <div class="row g-3 align-items-center">
                    <div class="col-2">
                        <label class="form-label"><b>Nama</b></label>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" name="nama">
                    </div>
                </div>
                <!-- Show Phone Number -->
                <div class="row g-3 align-items-center">
                    <div class="col-2">
                        <label class="form-label"><b>No. Handphone</b></label>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" name="no_hp">
                    </div>
                </div>
                <hr style="width:100%; margin-top:3%; border-width:5px; color:black;">
                <!-- Show Password -->
                <div class="row g-3 align-items-center">
                    <div class="col-2">
                        <label class="form-label"><b>Password</b></label>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" name="password">
                    </div>
                </div>
                <!-- Confirm Password -->
                <div class="row g-3 align-items-center">
                    <div class="col-2">
                        <label class="form-label"><b>Confirm Password</b></label>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" name="password">
                    </div>
                </div>
                <!-- Replace Navbar Color -->
                <!-- Update -->
                <div class="ms-6">
                    <div class="col-sm-12 py-3 text-center">
                        <input type="submit" class="btn btn-outline-primary btn-center" name="submit_car" value="Update" style="width:20%;">
                    </div>
                </div>
            </div>
        </div>