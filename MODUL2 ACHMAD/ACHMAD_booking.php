<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Booking Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- NavBar -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
            <div class="mx-auto d-flex">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <!-- NavBar "Home" -->
                            <a class="nav-link" href="ACHMAD_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- NavBar "Booking" -->
                            <a class="nav-link" href="ACHMAD_booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="content">
        <h2 style="text-align:center; padding:50px">Rent your car now!</h2>
            <div class="row booking-layout">
                <!-- Setting car pictures -->
                <div class="col mx-auto">
                    <img src="<?php 
                        // Change pictures from home booking
                        echo (isset($_POST["inputMobil"]) && $_POST["inputMobil"] == 'Ertiga') ? "https://d2fgf7u961ce77.cloudfront.net/assets/static/img/variant/Burgundy-Red1.png" : "";
                        echo (isset($_POST["inputMobil"]) && $_POST["inputMobil"] == 'Brio') ? "https://asset.honda-indonesia.com/variants/images/Vos4HUL6XFLHnM2dhTzGbzdNHpvNTnBNBKhZwxc0.png" : "";
                        echo (isset($_POST["inputMobil"]) && $_POST["inputMobil"] == 'Jazz') ? "https://news.olx.co.id/wp-content/uploads/2021/10/30ff6591-29c8-40be-a561-f0aaf22b194d.png" : "";
                    ?>"                    
                    alt="" width="640" height="360" class="<?php echo !isset($_POST["inputMobil"]) ? "d-none" : ""?>">
                </div>
                <!-- Form -->
                <form action="" method="post" class="row col booking-form">
                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input readonly="true" type="text" class="form-control" name="inputNama" id="inputNama" value="ACHMAD_1202204161">
                        </div>
                    </div>
                    <!-- Date input -->
                    <div class="mb-3">
                        <label class="col-sm-3 col-form-label">Book Date</label>
                        <div class="col-sm-10">
                            <input required type="date" class="form-control" name="inputDate" value="<?php echo (isset($_POST["inputDate"])) ? date('Y-m-d', strtotime($_POST["inputDate"])) : ""?>">
                        </div>
                    </div>
                    <!-- Time input -->
                    <div class="mb-3">
                        <label class="col-sm-3 col-form-label">Start Time</label>
                        <div class="col-sm-10">
                            <input required type="time" class="form-control" name="inputWaktu" value="<?php echo (isset($_POST["inputWaktu"])) ? $_POST["inputWaktu"] : ""?>">
                        </div>
                    </div>
                    <!-- Duration input -->
                    <div class="mb-3">
                        <label class="col-sm-3 col-form-label">Duration</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="inputDuration" value="<?php echo (isset($_POST["inputDuration"])) ? $_POST["inputDuration"] : ""?>">
                        </div>
                    </div>
                    <!-- Car type input -->
                    <div class="mb-3">
                        <label class="col-sm-10 col-form-label">Car Type</label>
                        <div class="col-sm-10">
                            <select name="inputMobil" id="inputMobil" class="form-select" onchange="this.form.submit()">
                                <!-- Disabled option "Select car type -->
                                <option selected disabled>Select Car Type</option>
                                <!-- Ertiga -->
                                <option value="Ertiga" <?php echo (isset($_POST["inputMobil"]) && $_POST["inputMobil"] == "Ertiga") ? "selected" : ""?>>Ertiga</option>
                                <!-- Brio -->
                                <option value="Brio" <?php echo (isset($_POST["inputMobil"]) && $_POST["inputMobil"] == "Brio") ? "selected" : ""?>>Brio</option>
                                <!-- Jazz -->
                                <option value="Jazz" <?php echo (isset($_POST["inputMobil"]) && $_POST["inputMobil"] == "Jazz") ? "selected" : ""?>>Jazz</option>
                            </select>
                        </div>
                    </div>
                    <!-- Phone number input -->
                    <div class="mb-3">
                        <label class="col-sm-10 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="inputHP" value="<?php echo (isset($_POST["inputHP"])) ? $_POST["inputHP"] : ""?>">
                        </div>
                    </div>
                    <!-- Service(s) input -->
                    <div class="mb-3">
                        <label class="col-sm-10 col-form-label">Add Service(s)</label>
                        <!-- Check "Health protocol" -->
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-check-input" name="check[]" value="Health Protocol">
                            <label class="form-check-label">Health protocol / Rp 25.000</label>
                        </div>
                        <!-- Check "Driver" -->
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-check-input" name="check[]" value="Driver">
                            <label class="form-check-label">Driver / Rp 100.000</label>
                        </div>
                        <!-- Check "Filled fuel" -->
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-check-input" name="check[]" value="Fuel Filled">
                            <label class="form-check-label">Filled fuel / Rp 250.000</label>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="mb-3">
                        <div class="col-sm-12 py-3">
                            <button type="submit" formaction="ACHMAD_mybooking.php" class="btn btn-outline-primary btn-center" style="width:50%;  margin: 0; top: 75%; left: 75%; -ms-transform: translate(-10%, -10%); transform: translate(30%, 25%);">Book</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">Dibuat oleh Achmad_1202204161</p></footer>
    </section>
</body>
</html>