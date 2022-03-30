<?php
if (isset($_GET['kd_film'])) {
    $kd_film = $_GET['kd_film'];

    $query = mysqli_query($koneksi, "DELETE FROM film WHERE kd_film='$kd_film'");

    if ($query) {
        header("Location: index.php?page=film");
    } else {
        echo "Gagal";
    }
}