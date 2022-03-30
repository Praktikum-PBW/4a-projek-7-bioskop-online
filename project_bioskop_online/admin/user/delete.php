<?php
if (isset($_GET['kd_user'])) {
    $kd_user = $_GET['kd_user'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE kd_user='$kd_user'");

    if ($query) {
        header("Location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}