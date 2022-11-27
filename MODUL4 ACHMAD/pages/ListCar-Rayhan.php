<?php 
    require '../config/connector.php';
?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../index.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? "" : "text-secondary" ?>">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="../pages/Add-Rayhan.php" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'ListCar-Rayhan.php' ? "" : "text-secondary"; ?>">MyCar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- List Car Body -->
        <div class="container mt-4 ml-4">
            <h3>My Show Room</h3>
            <p>List Show Room Rayhan - 1202204161</p>
        </div>

        <!-- open form here -->
        <div class="container row-2">
            <div class="row">
                

        <!-- Looping car in cards model -->
        <?php 
            $list_query = mysqli_query($connection, "SELECT * FROM showroom_rayhan_table ORDER BY id_mobil");

            while($car_list = mysqli_fetch_array($list_query)) {
        ?> 
        <div class="col-4">
            <!-- list of car -->
            <div class="card rounded" style="width: 18rem;">
                <img src="../asset/images/<?php echo $car_list['foto_mobil']?>" class="card-img-top rounded p-2" alt="...">
                <div class="card-body">
                    <!-- car information here -->
                    <h5 class="card-title"><?php echo $car_list['nama_mobil']?></h5>
                    <p class="card-text"><?php echo $car_list['deskripsi']?></p>

                    <div class="container-fluid row">
                        <!-- get more detail -->
                        <form action="./Detail-Rayhan.php" method="post" class="col">
                            <input type="hidden" name="id_mobil_detail" value="<?php echo $car_list['id_mobil']?>">
                            <input type="submit" name="detail_car" value="Detail" class="btn btn-primary rounded-pill">
                        </form>

                        <!-- Input which car want to delete -->
                        <form action="../config//delete.php" method="post" class="col">
                            <input type="hidden" name="id_mobil_hapus" value="<?php echo $car_list['id_mobil']?>">
                            <input type="submit" name="delete_car" value="Delete" class="btn btn-danger rounded-pill">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of list -->
        <?php 
            }
        ?>  
                
            </div>
        </div>

        <div class="mt-4 container ml-4"><?php echo "Jumlah Mobil: " . $jumlah_mobil?></div>
    </body>
</html>