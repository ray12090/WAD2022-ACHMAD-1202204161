    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Booking Details</title>
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
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <!-- NavBar "Booking" -->
                                <a class="nav-link" href="booking.php">Booking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section id="content">
            <!-- Texts -->
            <h2 style="text-align:center; margin-top:50px">Thank you ACHMAD_1202204161 for Reserving</h2>
            <p style="text-align:center">Please double check your reservation details</p>
            <table class="table">
                <thead>
                    <!-- Table headers -->
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </thead>
                <tbody>
                    <!-- Table body -->
                    <tr class="bg-light">
                        <!-- Randomized Booking Number -->
                        <th>
                            <?php echo rand(000000, 999999); ?>
                        </th>
                        <!-- Display name -->
                        <td>
                            <?php echo "ACHMAD_1202204161"?>
                        </td>
                        <!-- Display check in date and time -->
                        <td>
                            <?php echo (isset($_POST["inputDate"]) && $_POST["inputDate"] != "") ? date("Y-m-d H:i:s", strtotime($_POST["inputDate"] . " " . $_POST["inputWaktu"])) : ""?>
                        </td>
                        <!-- Display check out date and time-->
                        <td>
                            <?php 
                                // Converting inputDuration
                                $inputDurationDays = "+ " . $_POST["inputDuration"] . " days";
                                // Merging inputDate with inputDurations
                                $checkOutDate = date("Y-m-d", strtotime($_POST["inputDate"] . $inputDurationDays))
                                // Display check out date 
                                echo (isset($_POST["inputDuration"]) && $_POST["inputDuration"] != "") ? date('Y-m-d H:i:s', strtotime($checkOutDate . " " . $_POST["inputWaktu"])) : "";
                            ?>
                        </td>
                        <!-- Display selected car types -->
                        <td>
                            <?php
                                // Display selected inputMobil
                                echo isset($_POST["inputMobil"]) ? $_POST["inputMobil"] : "";
                                // Determine Car price 
                                $Duration = $_POST["inputDuration"];
                                $Ertiga = ((isset($_POST["inputMobil"]) && $_POST["inputMobil"] == "Ertiga")  ? 300000 : 0) * $Duration;
                                $Brio = ((isset($_POST["inputMobil"]) && $_POST["inputMobil"] == "Brio")  ? 300000 : 0) * $Duration;
                                $Jazz = ((isset($_POST["inputMobil"]) && $_POST["inputMobil"] == "Jazz")  ? 300000 : 0) * $Duration;
                            ?>
                        </td>
                        <!-- Display phone number -->
                        <td>
                            <?php echo (isset($_POST["inputHP"])) ? $_POST["inputHP"] : ""?>
                        </td>
                        <!-- Services -->
                        <td>
                            <ul>
                                <?php 
                                    // Services variables
                                    global $Health;
                                    global $Driver;
                                    global $Fuel;
                                    // Set services price
                                    if(isset($_POST["check"])) {
                                        foreach($_POST["check"] as $services) {
                                            echo "<li>" . $services . "</li>";
                                            if($services == "Health Protocol") {
                                                $Health = 25000;
                                            }if($services == "Driver") {
                                                $Driver = 100000;
                                            }if($services == "Fuel Filled") {
                                                $Fuel = 250000;
                                            }
                                        }
                                    }
                                ?>    
                            </ul>
                        </td>
                        <!-- Summary price -->
                        <td>
                            <?php 
                                // Total price
                                $summary = $Health + $Driver + $Fuel + $Ertiga + $Brio + $Jazz;
                                // Display price
                                echo "Rp " . number_format($summary,0,'','.');
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">Dibuat oleh Achmad_1202204161</p></footer>
        </section>
    </body>
    </html>