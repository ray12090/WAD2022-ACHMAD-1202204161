<?php 
    require '../config/connector.php';
?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
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
                        <a href="pages/ListCar-Rayhan.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'ListCar-Rayhan.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- car body -->
        <div class="container-fluid">
            <h3>My Show Room</h3>
            <p>List Show Room Rayhan - 1202200304</p>
        </div>

        <!-- open form -->
        <div class="container-fluid row">

        <!-- loop -->
        <?php 
            $list_query = mysqli_query($connection, "SELECT * FROM showroom_Rayhan_table ORDER BY id_mobil");

            while($car_list = mysqli_fetch_array($list_query)) {
        ?> 

        <!-- car list -->
        <div class="card" class="col" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <!-- car info -->
                <h5 class="card-title"><?php echo $car_list['nama_mobil']?></h5>
                <p class="card-text"><?php echo $car_list['deskripsi']?></p>

                <div class="container-fluid row">
                    <!-- get more detail -->
                    <form action="./Detail-Rayhan.php" class="col">
                        <input type="hidden" name="id_mobil_detail" value="<?php echo $car_list['id_mobil']?>">
                        <input type="submit" name="detail_car" value="Detail" class="btn btn-primary">
                    </form>

                    <!-- Input which car want to delete -->
                    <form action="../config//delete.php" class="col">
                        <input type="hidden" name="id_mobil_hapus" value="<?php echo $car_list['id_mobil']?>">
                        <input type="submit" name="delete_car" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>

        <!-- end of list -->
        <?php 
            }
        ?>

        </div>
    </body>
</html>