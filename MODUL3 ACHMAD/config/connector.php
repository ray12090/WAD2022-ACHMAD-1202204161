<?php 
    $server = "localhost";
    $user = "root";
    $passwd = "1202204161";
    $database = "modul3";
    
    // connect to db
    $connection = new mysqli($server, $user, $passwd, $database);


    $get_all_table_row = mysqli_query($connection, "SELECT * FROM showroom_rayhan_table");
    $jumlah_mobil = mysqli_num_rows($get_all_table_row);  

?>