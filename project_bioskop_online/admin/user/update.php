<?php
if (isset($_POST['edit'])) {
    $kd_user = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['kd_user']))));
    $username = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['username']))));
    $password = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['password']))));
    $nama_lengkap = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['nama_lengkap']))));
    $tgl_lahir = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['tgl_lahir']))));
    $jns_kelamin = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jns_kelamin']))));
    $email = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['email']))));

    $tgl_lahir = date("y-m-d", strtotime($tgl_lahir));

    if (empty($password)) {
        $query = mysqli_query($koneksi, "UPDATE user SET kd_user= '$kd_user', username = '$username', nama_lengkap='$nama_lengkap', tgl_lahir='$tgl_lahir', jns_kelamin='$jns_kelamin', email='$email' WHERE kd_user='$kd_user'");
    } else {
        $password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE user SET kd_user='$kd_user', username = '$username', password = '$password', nama_lengkap='$nama_lengkap', tgl_lahir='$tgl_lahir', jns_kelamin='$jns_kelamin', email='$email' WHERE kd_user='$kd_user'");
    }


    if ($query) {
        echo "Update Berhasil";
        header("Location: index.php?page=user");
    } else {
        echo "Mohon Maaf Update Gagal Dilakukan";
    }
}