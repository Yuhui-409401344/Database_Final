<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../Fu_Jen_Catholic_University_Seal.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">
    <div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav style="background-color: #2F0000;" class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                        <div class="sidebar-brand-icon rotate-n-15">
                        </div>
                        <div id="sideBar" class="sidebar-brand-text mx-3" style="color: white;
                        font-size: 1.2rem;
                        font-weight: 800;
                        text-align: center;
                        text-transform: uppercase;
                        display: block;
                        letter-spacing: 0.05rem;">乾燥花資料庫查詢
                            </sup></div>
                    </a>
                    <style>
                        a:hover {
                            text-decoration: none
                        }

                        ;
                    </style>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="查詢一.php" id="userDropdown" role="button" target="pic">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">查詢一
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="查詢二.php" id="userDropdown" role="button" target="pic">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">查詢二
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="查詢三.php" id="userDropdown" role="button" target="pic">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">查詢三
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="查詢四.php" id="userDropdown" role="button" target="pic">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">查詢四
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="查詢五.php" id="userDropdown" role="button" target="pic">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">查詢五
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="查詢.php" id="userDropdown" role="button" target="pic">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">查詢
                            </a>
                        </li> -->
                        <style>
                            #userDropdown {
                                background-color: #2F0000;
                                border: 0px;
                                outline: 0;
                                color: white;
                                box-shadow: none;
                                transition: all .4s linear;
                            }

                            #userDropdown:hover {
                                color: #ffffff;
                                background-color: #ffffff31;
                                transition: color 0.05s ease-in-out, background-color 0.3s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                            }

                            #userDropdown:active {
                                background-color: #212529;
                                color: white;
                            }
                        </style>
                </nav>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>