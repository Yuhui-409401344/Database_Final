<?php
$item = "";
$link = mysqli_connect("localhost", "root", "12345678", "dbms_flower");
$sql = "select * from class";
$rs = mysqli_query($link, $sql);
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
    <div style="display: flex; flex-direction: row-reverse">
        <div class="card shadow mb-4" style="width: 80%; margin: 20px; border-right: 4px solid #600000">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold" style="color: #600000;">請在此查詢</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <form action="查詢一check.php" method="post">
                        <table>
                            <tr>
                                <td style="width: 100%"><input name="item1" value="<?php echo $item1; ?>" class="form-control" type="text" placeholder="請以SQL語碼輸入欲查詢的項目："></td>
                                <td style="width: 100%"><input style="background-color: #007bff; color: white" class="form-control" type="submit" value="送出"></td>
                            </tr>
                        </table>
                    </form>
                    <hr style="margin-top: 30px; margin-bottom: 30px">
                    <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>花材種類</th>
                                <th>花材數量</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($record = mysqli_fetch_row($rs2)) {
                                echo "
                                <tr>
                                <td>", $record[0], "</td>
                                <td>", $record[1], "</td>
                                </tr>";
                            };
                            ?>
                        </tbody>
                    </table>
                </div>
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
                    <img style="width: 100%;" src="./247324377_2671138586525791_2255539375638453235_n.jpg" alt="">
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