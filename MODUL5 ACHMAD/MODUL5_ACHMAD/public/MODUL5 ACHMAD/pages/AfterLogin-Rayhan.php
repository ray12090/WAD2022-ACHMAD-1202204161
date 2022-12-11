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
                        <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Home Content -->
        <div class="container-fluid row" id="home">
            <!-- Left Body -->
            <div class="col">
                <h1 class="welcome">Selamat Datang Di Show Room Rayhan</h1>
                <p class="lacus">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>

                <!-- EAD Logo Container -->
                <div class="logo ead-container">
                    <!-- Logo Image -->
                    <img src="../asset/images/EAD_Logo.png" class="ead-logo" alt="EADLogo">

                    <!-- Nama -->
                    <p class="nama">Rayhan_1202204161</p>
                </div>
            </div>
            <!-- Right Body -->
            <div class="col HomeCar">
                <img src="../asset/images/HomeCar.png" alt="HomeCar" width="510" height="400">
            </div>
        </div>
    </body>
</html>