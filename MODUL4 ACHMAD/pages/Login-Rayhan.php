<?php 
session_start();

//atur db ke database
require_once("..\config\connector.php");
//atur variabel
$err        = "";
$username   = "";
$ingataku   = "";

if(isset($_COOKIE['cookie_username'])){
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from user where email = '$cookie_username'";
    $q1   = mysqli_query($db,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if($r1['password'] == $cookie_password){
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if(isset($_SESSION['session_username'])){
    header("location:AfterLogin-Rayhan.php");
    exit();
}

if(isset($_POST['Login-Rayhan'])){
    $username   = $_POST['email'];
    $password   = $_POST['password'];
    $ingataku   = $_POST['ingataku'];

    if($username == '' or $password == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "select * from user where email = '$username'";
        $q1   = mysqli_query($db,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['username'] == ''){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        }elseif($r1['password'] != md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = md5($password);

            if($ingataku == 1){
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:AfterLogin-Rayhan.php");
        }
    }
}
?>

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
                <!-- Login Form -->
                <form id="loginform" class="form-horizontal" action="" method="post" role="form">
                    <!-- Login Title -->
                    <h1 style="text-align:center; padding:20px">Login</h1>
                    <!-- Email Input -->
                    <div class="mb-0">
                        <label class="form-label">Email</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"></br>
                        </div>
                    </div>
                    <!-- Password Input -->
                    <div class="mb-0">
                        <label class="form-label">Password</label></br>
                        <div class="col-sm">
                            <input class="form-control" type="password" name="password"></br>
                        </div>
                    </div>
                    <!-- Remember Me -->
                    
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" name="ingataku" value="1" <?php if($ingataku == '1') echo "checked"?>>Remember Me</label>
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