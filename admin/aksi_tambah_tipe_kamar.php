<?php
include '../koneksi.php';
mysqli_query($koneksi, "INSERT INTO tipe_kamar SET 
tipe_kamar_id = '$_POST[tipe_kamar_id]',
fasilitas = '$_POST[fasilitas]',
harga = '$_POST[harga]'") or die(mysqli_error($koneksi));

echo "<script>alert
('Anda telah berhasil menambahkan data Tipe Kamar baru')</script>";
echo '<script>window.location="data_tipe_kamar.php"</script>';

if (mysqli_num_rows($exec) > 1) {
    // data sudah ada, tidak perlu menambahkan lagi
} else {
    // data belum ada, lakukan query INSERT atau UPDATE
}

?>