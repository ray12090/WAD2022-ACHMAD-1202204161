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
                    </li?>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Login Page Container -->
        <div class="row">
            <div class="col">
                <img src="../asset/images/Car.png" alt="" class="w-100 h-100">
            </div>
            <div class="col ms-5 me-5">
                <!-- Register Form -->
                <form action="" method="POST">
                    <!-- Login Title -->
                    <h1 style="text-align:center; padding:20px">Login</h1>
                    <!-- Email Input -->
                    <div class="mb-0">
                        <label class="form-label">Email</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="email"></br>
                        </div>
                    </div>
                    <!-- Password Input -->
                    <div class="mb-0">
                        <label class="form-label">Password</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="password"></br>
                        </div>
                    </div>
                    <!-- Remember Me -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <!-- Submit Button -->
                    <div class="mb-1">
                        <div class="col-sm-12 py-3">
                            <input type="submit" class="btn btn-outline-primary btn-center" value="Login" style="width:100%;">
                        </div>
                    </div>
                    <!-- Create Account -->
                    <label>
                        Anda belum punya akun?
                        <a href="./Register-Rayhan.php">Daftar</a>
                    </label>
                </form>
            </div>
        </div>
    </body>
</html>