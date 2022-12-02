<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <!--
    <?php //if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') {$_SESSION['register'] = ''; ?>
    <div class="alert alert-warning n-0 p-2 alert dismissible" role = "alert"> Email sudah pernah terdaftar
        <button type = "button" class = "btn-close p-3" data-bs-dismiss = "alert" aria-label = "Close"></button>
    </div>
    <?php //} ?>
    -->
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
        <!-- Register Page Container -->
        <div class="row">
            <div class="col">
                <img src="../asset/images/Car.png" alt="" class="w-100 h-100">
            </div>
            <div class="col ms-5 me-5">
                <!-- Register Form -->
                <form action="../config/register.php" method="POST">
                    <!-- Login Title -->
                    <h1 style="text-align:center; padding:20px">Register</h1>
                    <!-- Email Input -->
                    <div class="mb-0">
                        <label class="form-label">Email</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="email"></br>
                        </div>
                    </div>
                    <!-- Name Input -->
                    <div class="mb-0">
                        <label class="form-label">Nama</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="nama"></br>
                        </div>
                    </div>
                    <!-- Phone Number Input -->
                    <div class="mb-0">
                        <label class="form-label">No. HP</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="no_hp"></br>
                        </div>
                    </div>
                    <!-- Password Input -->
                    <div class="mb-0">
                        <label class="form-label">Password</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="password" name="password"></br>
                        </div>
                    </div>
                    <!-- Confirm Password Input -->
                    <div class="mb-0">
                        <label class="form-label">Confirm Password</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="password" onkeyup='check();'></br>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="mb-0">
                        <div class="col-sm-12 py-2">
                            <input type="submit" class="btn btn-outline-primary btn-center" name="register" value="Register" style="width:100%;">
                        </div>
                    </div>
                    <!-- Create Account -->
                    <label>
                        Anda sudah punya akun?
                        <a href="./Login-Rayhan.php">Login</a>
                    </label>
                </form>
            </div>
        </div>
    </body>
</html>