<?php
session_start();

if ($_SESSION['user_type'] != 'administrator') {
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


            <!-- =================data kamar========================== -->
            <div class="details">
                <div class="recentOrders middle">
                    <div class="cardHeader">
                        <h2>Data ROOM (Kamar)</h2>
                        <a href="javascript:history.back()"><button class="btn btn1">Back</button></a>
                        <!-- <from method="GET" action="data_kamar.php">
                        <div class="search">
                            <label>
                                <input type="text" placeholder="Search here" name="cari" value="<?php if (isset($_GET['cari'])) {
                                    echo $_GET['cari'];
                                } ?>" >
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>
                        </from> -->
                        <form action="data_kamar.php" method="get">
                            <label>Cari :</label>
                            <input type="text" name="cari">
                            <input type="submit" value="Cari">
                        </form>
                    </div>

                    <?php
                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                    }
                    ?>

                    <table class="card" border="1">
                        <tr>
                            <td>No.</td>
                            <td>No Kamar</td>
                            <td>Tipe Kamar</td>
                            <td>Aksi</td>
                        </tr>
                        <?php
                        // koneksi ke database
                        include '../koneksi.php';
                        // query mendapatkan data kamar
                        if (isset($_GET['cari'])) { 
                            $pencarian = $_GET['cari'];
                            $query = "SELECT * FROM kamar WHERE no_kamar LIKE '%" . $cari . "%' or tipe_kamar_id LIKE '%" . $cari . "%' ";
                        } else {
                            $query = "SELECT * FROM kamar ";
                        }
                        $exec = mysqli_query($koneksi, $query);
                        // algoritma perulangan
                        $no = 1;
                        while ($kamar = mysqli_fetch_assoc ($exec)) {
                            ?>
                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $kamar['no_kamar'] ?>
                                </td>
                                <td>
                                    <?= $kamar['tipe_kamar_id'] ?>
                                </td>
                                <td>
                                    <a href="edit_kamar.php?id=<?= $kamar['no_kamar'] ?>"><button>Edit</button></a>
                                    <a
                                        href="delete_kamar.php?no_kamar=<?= $kamar['no_kamar'] ?>"><button>Delete</button></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div>
        <!-- =========== Scripts =========  -->
        <script src="../assets/JS/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>