<?php

include('../koneksi.php');

$no = $_GET['fasilitas_hotel'];

mysqli_query($koneksi, "DELETE FROM fasilitas_hotel WHERE fasilitas_hotel='$no'");

header('location: data_fasilitas.php');
?>