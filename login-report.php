<?php
    include "update.php";
    $sql = "SELECT atlog.emp_id, employee.full_name, atlog.am_in, atlog.am_out, atlog.pm_in, atlog.pm_out, atlog.am_late, atlog.pm_late, atlog.am_underTIME, atlog.pm_underTIME, atlog.night_differential
    FROM atlog
    JOIN employee ON atlog.emp_id = employee.emp_id
    WHERE atlog.atlog_DATE = CURDATE();";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Reports</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/nav-bar.css">
    <link rel="stylesheet" href="css/login-report.css">
    <script src="js/nav-bar.js" defer></script>
    <script src="js/date-time.js" defer></script>
</head>
<body class="container-fluid">
    <div class="container-fluid row gap-0">
        <?php 
            include('nav-bar.php');
        ?> 
        <!-- Main contents -->
        <div class="right_panel container p-5">
            <!-- Name must be according to id inputted by admin -->
            <p class="title_1">Welcome <span class="admin_name" id="admin_name">ADMIN123</span>!</p>
            <div class="container mt-4 row gap-3">
                <div class="col col-12 p-0">
                    <div class="row m-0 gap-3">
                        <!-- Date today -->
                        <div class="date_container card px-4 py-2 col col-4 justify-content-center">
                            <p class="date_subtitle m-0 p-0">Today is <span class="day_title" id="day_today"></span></p>
                            <span class="date_title"><p class="mb-0 p-0" id="full_date"></p></span>
                        </div>
                        <!-- Real-time clock -->
                        <div class="clock_container grey_container col col-4 m-0 p-0 ms-auto">
                            <div class="clock_elements">
                                <span id="hour"></span>
                                <span id="point">:</span>
                                <span id="minute"></span>
                                <span id="point">:</span>
                                <span id="second"></span>
                                <span id="am_pm"></span>
                            </div>
                        </div>
                        <!-- Table legend -->
                        <div class="white_container col col-2 m-0 py-3 px-4">
                            <p class="title_2 text-center">Table legend</p>
                            <div class="legend_red"><i class="bi bi-square-fill"></i><span class="mx-1">Late</span></div>
                            <div class="legend_blue"><i class="bi bi-square-fill"></i><span class="mx-1">Undertime</span></div>
                        </div>
                    </div>

                    <div class="white_container row mt-3 p-4 mx-0 text-center justify-content-evenly">
                        <table class="table">
                            <thead>
                              <tr>
                              <th scope="col">Emp ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">AM In</th>
                                <th scope="col">AM Out</th>
                                <th scope="col">PM In</th>
                                <th scope="col">PM Out</th>
                                <th scope="col">Overtime</th>
                                <th scope="col">Night Differential</th>
                              </tr>
                            </thead>
                            <tbody class="table_body">
                            <?php
                                include "connection.php";

                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row["emp_id"] . "</td>";
                                        echo "<td>" . $row["full_name"]  . "</td>";
                                        echo "<td>" . $row["am_in"] . "</td>";
                                        echo "<td>" . $row["am_out"] . "</td>";
                                        echo "<td>" . $row["pm_in"] . "</td>";
                                        echo "<td>" . $row["pm_out"] . "</td>";
                                        echo "<td>" . $row["night_differential"] . "</td>";
                                        echo "<td>" . $row["night_differential"] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody></table>";
                                }
                                else {
                                    echo "</tbody></table>";
                                    echo "No Employees Found";
                                }
                                $conn->close();
                            ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>