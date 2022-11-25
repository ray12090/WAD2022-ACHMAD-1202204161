<?php require 'config/connector.php' ?>

<head>
    <link rel="stylesheet" href="asset/style/index.css" />
</head>

<body>
    <!-- Home Content -->
    <div class="container-fluid row" id="home">
        <!-- Left Body -->
        <div class="col">
            <h1 class="welcome">Selamat Datang Di Show Room Rayhan</h1>
            <p class="lacus">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>

            <!-- MyCar -->
            <a href="<?php echo $jumlah_mobil == 0 ? "pages/Add-Rayhan.php" : "pages/ListCar-Rayhan.php"?>" class="mt-4 p-2 border rounded btn btn-primary text-white Mycar">MyCar</a>

            <!-- EAD Logo Container -->
            <div class="logo ead-container">
                <!-- Logo Image -->
                <img src="asset/images/EAD_Logo.png" class="ead-logo" alt="EADLogo">

                <!-- Nama -->
                <p class="nama">Rayhan_1202204161</p>
            </div>
        </div>

        <!-- Right Body -->
        <div class="col HomeCar">
            <img src="asset/images/HomeCar.png" alt="HomeCar" width="510" height="400">
        </div>
    </div>
</body>