<?php
if (isset($_POST['tambah'])) {
    $kd_film = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['kd_film']))));
    $judul = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['judul']))));
    $genre = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['genre']))));
    $durasi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['durasi']))));
    $usia = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['usia']))));
    $sinopsis = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['sinopsis']))));

    //poster
    $extensi_diperbolehkan = array('png', 'jpg');
    $poster = $_FILES['poster']['name'];
    $x = explode(separator: '.', string: $poster);
    $ekstensi = strtolower(string: end(array: $x));
    $ukuran = $_FILES['poster']['size'];
    $file_tmp = $_FILES['poster']['tmp_name'];

    if (in_array(needle: $ekstensi, haystack: $extensi_diperbolehkan) == true) {
        if ($ukuran < 10044070) {
            move_uploaded_file(from: $file_tmp, to: '../assets/img/' . $poster);
            $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO film(kd_film, judul, poster, genre, durasi, rating_usia, sinopsis) VALUES ('$kd_film', '$judul','$poster','$genre','$durasi','$usia','$sinopsis')");

            if ($query) {
                header(header: "location: index.php?page=film");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi tidak sesuai";
    }
}