<?php
if (isset($_GET['kd_user'])) {
    $kd_user = $_GET['kd_user'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE kd_user='$kd_user'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit User</h4>
        <form action="index.php?page=user_update" method="POST">
            <div class="mb-2">
                <label for="kd_user" class="form-label">Kode User</label>
                <input type="text" name="kd_user" id="kd_user" class="form-control" placeholder="Masukan Kode User"
                    value="<?= $data['kd_user'] ?>">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukan username"
                    value="<?= $data['username'] ?>">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Password</label>
                <input type="Password" name="password" id="password" class="form-control" placeholder="Masukan Password"
                    value="<?= $data['password'] ?>">
            </div>
            <div class="mb-2">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                    value="<?= $data['nama_lengkap'] ?>">
            </div>
            <div class="mb-2">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                    placeholder="Masukan Tanggal Lahir user" value="<?= $data['tgl_lahir'] ?>">
            </div>
            <div class="mb-2">
                <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jns_kelamin" id="jns_kelamin" class="form-select">
                    <option value="Laki-Laki" <?php if ($data['jns_kelamin'] == "Laki-Laki") echo "selected" ?>>Laki -
                        Laki</option>
                    <option value="Perempuan" <?php if ($data['jns_kelamin'] == "Perempuan") echo "selected" ?>>
                        Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan email user"
                    value="<?= $data['email'] ?>">
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    } else {
        header("Location:index.php?page=user");
    }
} else {
    header("Location:index.php?page=user");
}
?>