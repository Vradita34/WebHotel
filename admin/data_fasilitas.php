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
        
        
        <!-- =================data kamar========================== -->
            <div class="details" >
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data FASILITAS</h2>
                        <a href="javascript:history.back()"><button class="btn btn1">Back</button></a>
                        <div class="search">
                            <label>
                                <input type="text" placeholder="Search here">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>
                    </div>
                    
                    <table class="card" border="1">
                <tr class="card-header">
                  <td>No.</td>
                  <td>Fasilitas Hotel</td>
                  <td>Fasilitas Umum</td>
                  <td>Fasilitas Terdekat</td>
                  <td>Aksi</td>
                </tr>
                <?php
                  // koneksi ke database
                  include '../koneksi.php';
                  // query mendapatkan data kamar
                  $query = "SELECT * FROM fasilitas_hotel";
                  $exec = mysqli_query($koneksi, $query);
                  // algoritma perulangan
                $no = 1;
                  while ($data = mysqli_fetch_assoc($exec)) {
                  ?>
                  <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['fasilitas_hotel']?></td>
                  <td><?=  $data['fasilitas_umum']?></td>
                  <td><?=  $data['fasilitas_terdekat']?></td>
                  <td >
                    <a href=""><button>Edit</button></a>
                    <a href="delete_fasilitas.php?no=<?= $data['fasilitas_hotel'] ?>"><button>Delete</button></a>
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