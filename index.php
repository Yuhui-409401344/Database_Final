<?php
$link = mysqli_connect("localhost", "root", "12345678", "dbms_flower");
$sql = "select * from class";
$rs = mysqli_query($link, $sql);

$sql2 = "select * from material";
$rs2 = mysqli_query($link, $sql2);

$sql3 = "select * from members";
$rs3 = mysqli_query($link, $sql3);

$sql4 = "select * from teacher";
$rs4 = mysqli_query($link, $sql4);

$sql5 = "select * from work";
$rs5 = mysqli_query($link, $sql5);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>乾燥花資料庫查詢</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body style="padding-bottom: 50px;">
    <?php include "navigation.php" ?>
    <div style="display: flex; flex-direction: row">
        <div class="card shadow mb-4" style="width: 80%; margin: 20px; border-right: 4px solid #600000">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold" style="color: #600000;">資料表總覽</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>課程名稱</th>
                                <th>課程價錢</th>
                                <th>課程時長</th>
                                <th>課程人數</th>
                                <th>課程內容</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($record = mysqli_fetch_row($rs)) {
                                echo "
                                <tr>
                                <td>", $record[1], "</td>
                                <td>", $record[2], "</td>
                                <td>", $record[3], "</td>
                                <td>", $record[4], "</td>
                                <td>", $record[5], "</td>
                                </tr>";
                            };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table-responsive">
                <table style="margin: 20px; width: 94%" class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>花材名稱</th>
                            <th>花材種類</th>
                            <th>花材顏色</th>
                            <th>花季</th>
                            <th>花語</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($record = mysqli_fetch_row($rs2)) {
                            echo "
                                <tr>
                                <td>", $record[1], "</td>
                                <td>", $record[2], "</td>
                                <td>", $record[3], "</td>
                                <td>", $record[4], "</td>
                                <td>", $record[5], "</td>
                                </tr>";
                        };
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table style="margin: 20px; width: 94%" class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>學員姓名</th>
                            <th>學員電話</th>
                            <th>學員地址</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($record = mysqli_fetch_row($rs3)) {
                            echo "
                                <tr>
                                <td>", $record[1], "</td>
                                <td>", $record[2], "</td>
                                <td>", $record[3], "</td>
                                </tr>";
                        };
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table style="margin: 20px; width: 94%" class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>教師姓名</th>
                            <th>教師電話</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($record = mysqli_fetch_row($rs4)) {
                            echo "
                                <tr>
                                <td>", $record[1], "</td>
                                <td>", $record[1], "</td>
                                </tr>";
                        };
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table style="margin: 20px; width: 94%" class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>作品名稱</th>
                            <th>作品用途</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($record = mysqli_fetch_row($rs5)) {
                            echo "
                                <tr>
                                <td>", $record[1], "</td>
                                <td>", $record[2], "</td>
                                </tr>";
                        };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="width:30%;">
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./269604865_2711040422535607_4785251989334149695_n.jpg" alt="">

                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./266568489_2708472166125766_5009965264900576762_n.jpg" alt="">
                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./247324377_2671138586525791_2255539375638453235_n.jpg" alt="">
                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./260752368_2697433563896293_7345747695916773296_n.jpg" alt="">
                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./263464305_2701173183522331_3676068894120253026_n.jpg" alt="">
                </center>
            </form>
        </div>
        <div style="width: 50%;">
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <video style="width: 100%;" class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="./2021年度聖誕節宣傳片｜陽光灑落 Shining.mp4" type="video/mp4" />
                    </video>
                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./269279024_2711745239131792_5924823409769512562_n.jpg" alt="">
                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./261331545_2697433410562975_2025700313352901521_n.jpg" alt="">
                </center>
            </form>
            <form class="form-horizontal" style=" background-color:white;
                            margin: 20px;
                            padding: 20px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
                <center>
                    <img style="width: 100%;" src="./254965933_2683295071976809_2484425957426873567_n.jpg" alt="">
                </center>
            </form>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="js/demo/datatables-demo.js"></script>

</body>
<footer>
    <?php include "footer.php" ?>
    <style>
        footer {
            height: 40px;
            box-sizing: border-box;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</footer>

</html>