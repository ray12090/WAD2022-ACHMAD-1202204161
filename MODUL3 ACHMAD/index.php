<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? "" : "text-secondary" ?>">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="pages/Add-Rayhan.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'ListCar-Rayhan.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php require './pages/Home-Rayhan.php'?>
    </body>
</html>