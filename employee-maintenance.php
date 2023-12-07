<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Maintenace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav_bar.css">
    <link rel="stylesheet" href="css/employee-maintenance.css">
    <script src="js/nav-bar.js" defer></script>

</head>
<body class="container-fluid">
    <div class="container-fluid row gap-0">
        <!-- Navigation Bar -->
        <div class="left_panel sticky-top container text-center pt-3">
            <img class="mt-3" src="images/company-logo.png" alt="C597 Corporation Logo">
            <p class="company_name mt-2 mb-0">C597 Corporation</p>
            <p class="system_name">Employee Attendance System</p>

            <!-- Links / buttons -->
            <nav class="nav flex-column nav-pills mt-4 p-2 gap-2">
                <a class="nav_button nav-link" href="login-report.php">Log in Report</a>
                <a class="nav_button nav-link" href="employee-maintenance.php">Employee Maintenance</a>
                <a class="nav_button nav-link" href="daily-report.php">Daily Report</a>
                <a class="nav_button nav-link" href="monthly-report.php">Monthly Report</a>
                <span class="log_out_button mb-3"><a class="nav_button nav-link" href="employee-login.php">Log out</a></span>
            </nav>
        </div>
        <!-- Main contents -->
        <div class="right_panel container p-5">
            <!-- Name must be according to id inputted by admin -->
            <p class="title_2">Welcome <span class="admin_name" id="admin_name">ADMIN123</span>!</p>
            <div class="container mt-4 row gap-3">
                <div class="col col-12 p-0">
                    <div class="row m-0 gap-3">  
                        <div class="grey_container col col-12-sm p-0 mx-0 text-center justify-content-evenly">
                            <div class="col col-12 card p-3">
                                <form class="d-flex" role="search">
                                    <button type="button" class="register_button btn me-3 btn-outline-primary">Register Employee</button>
                                    <input class="form-control me-3" type="search" placeholder="Enter employee name or id" aria-label="Search">
                                    <button class="search_button btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                    <div class="white_container row mt-3 p-4 mx-0 text-center justify-content-evenly">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Emp ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contract</th>
                                <th scope="col">Options</th>
                              </tr>
                            </thead>
                            <tbody class="">
                              <tr>
                                <th scope="row">01</th>
                                <td>Mark Otto</td>
                                <td>0912345678</td>
                                <td>markotto@gmail.com</td>
                                <td>Zone 10 Legazpi City</td>
                                <td>Full Time</td>
                                <td>
                                    <div class="btn_container me-0">
                                        <button type="button" class="btn btn-outline-dark">Edit</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">02</th>
                                <td>Mark Otto</td>
                                <td>0912345678</td>
                                <td>markotto@gmail.com</td>
                                <td>Zone 10 Legazpi City</td>
                                <td>Full Time</td>
                                <td>
                                    <div class="btn_container me-0">
                                        <button type="button" class="btn btn-outline-dark">Edit</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">03</th>
                                <td>Mark Otto</td>
                                <td>0912345678</td>
                                <td>markotto@gmail.com</td>
                                <td>Zone 10 Legazpi City, Albay</td>
                                <td>Full Time</td>
                                <td>
                                    <div class="btn_container me-0">
                                        <button type="button" class="btn btn-outline-dark">Edit</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                              </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
