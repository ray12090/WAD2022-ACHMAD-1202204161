<?php require './config/connector.php' ?>

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
                        <a href="index.php" style="text-decoration: none;" class="nav-link active">Home</a>
                    </li>
                </ul>
                <!-- Navbar Add Car -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pt-2 pb-2 text-xl">
                        <a href="pages/Login-Rayhan.php" style="text-decoration: none;" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>

        
        <?php require './pages/Home-Rayhan.php'?>
    </body>
</html>