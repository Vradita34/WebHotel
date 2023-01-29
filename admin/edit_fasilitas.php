<?php
    session_start();

    if ($_SESSION['user_type'] != 'administrator'){
        header('location:../404.php');
    }
    // $query =  "SELECT * FROM kamar WHERE no_kamar =  '$_GET[id]'";
    // var_dump($query);


    // my Version
include '../koneksi.php';

$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM fasilitas WHERE ='$id'");
$row    = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/button.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Hotel OYE</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="data_tamu.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>


                <li>
                    <a href="../logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="user">
                    <img src="#" alt="">
                </div>
            </div>
            <div class="details">
            <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Edit data FASILITAS </h2>
                    </div>
            <form action="" method="post">
                        <div class="card-body">
                        <input type="number" class="from-control" id="floatingInput" name="" placeholder="" value="<?= $row[''];?>">
                        <input type="number" class="from-control" id="floatingInput" name="" placeholder="" value="<?= $row[''];?>">
                        <button type="submit" >Update</button>
                        <!-- <button type="submit" style="width:100px;background:#B40301; color:white;font-weight:bold;padding:4px;border:2px solid #B40301;">Update</button> -->
                        <button><a href="data_kamar.php">Lihat data</a></button>
                        </div>
                    </form>
            </div>
            </div>

    <!-- =========== Scripts =========  -->
    <script src="../assets/JS/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>