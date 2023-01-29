<?php
session_start();

if ($_SESSION['user_type'] != 'tamu') {
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
                    <a href="tamu.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Pesanan</span>
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

                <div class="search">
                    <label>
                        SELAMAT DATANG DI HALAMAN TAMU
                    </label>
                </div>

                <div class="user">
                    <img src="#" alt="">
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Orders</h2>
                        <a href="../pdf.php" class="btn" target="_blank" rel="noopener noreferrer">Print Out</a>
                    </div>
                    <table border="solid 1px">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>ID Pemesanan</td>
                            <td>No Kamar</td>
                            <td>ID User</td>
                            <td>Tanggal CheckIn</td>
                            <td>Tanggal CheckOut</td>
                            <td>Harga</td>
                        </tr>
                    </thead>
                        <?php
                        include '../koneksi.php';
                        $query = "SELECT * FROM pemesanan";
                        $exec = mysqli_query($koneksi, $query);
                        $no = 1;
                        while ($pesan = mysqli_fetch_assoc($exec)) {
                            ?>
                    
                        <tbody>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pesan['id_pemesanan']?></td>
                                <td><?= $pesan['no_kamar']?></td>
                                <td><?= $pesan['user_id']?></td>
                                <td><?= $pesan['tanggal_checkin']?></td>
                                <td><?= $pesan['tanggal_checkout']?></td>
                                <td><?= $pesan['harga']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>



                <!-- =========== Scripts =========  -->
                <script src="../assets/JS/main.js"></script>

                <!-- ====== ionicons ======= -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>