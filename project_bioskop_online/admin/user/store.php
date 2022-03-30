<?php
if (isset($_POST['tambah'])) {
    $kd_user = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['kd_user']))));
    $username = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['username']))));
    $password = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['password']))));
    $nama_lengkap = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['nama_lengkap']))));
    $tgl_lahir = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['tgl_lahir']))));
    $jns_kelamin = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jns_kelamin']))));
    $email = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['email']))));

    $password = sha1($password);
    $tgl_lahir = date("y-m-d", strtotime($tgl_lahir));

    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO user VALUES ('$kd_user', '$username','$password','$nama_lengkap','$tgl_lahir','$jns_kelamin','$email')");

    if ($query) {
        header(header: "location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}