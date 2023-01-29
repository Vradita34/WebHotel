<?php
    session_start();

    if ($_SESSION['user_type'] != 'administrator'){
        header('location:../404.php');
    }
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
                <a href="data_kamar.php"><button class="button-57" role="button"><span class="text">Data</span><span>Lihat Data </span></button></a>
                    <div class="cardHeader">
                        <h2>Buat data ROOM (Kamar)</h2>
                    </div>
            <form action="aksiTambahKamar.php" method="post">
                        <div class="card-body input-field-border-bottom">
                            <label for="number">No Kamar</label>
                            <input type="number" class="from-control" id="floatingInput" name="no_kamar" placeholder="insert your kamar" required>
                            <label for="number">Tipe Kamar</label>
                            <input type="number" class="from-control" id="floatingInput" name="tipe_kamar_id" placeholder="insert your type kamar" required>
                            <div class="button"><br>
                                <button class="button-49" role="button">Submit</button>
                            </div>
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