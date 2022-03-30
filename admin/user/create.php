<div class="row">
    <div class="col-md-12">
        <h4>Tambah User</h4>
        <form action="index.php?page=user_store" method="POST">
            <div class="mb-2">
                <label for="kd_user" class="form-label">Kode User</label>
                <input type="text" name="kd_user" id="kd_user" class="form-control" placeholder="Masukan Kode User">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukan username">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Password</label>
                <input type="Password" name="password" id="password" class="form-control"
                    placeholder="Masukan Password">
            </div>
            <div class="mb-2">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
            </div>
            <div class="mb-2">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                    placeholder="Masukan Tanggal Lahir user">
            </div>
            <div class="mb-2">
                <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jns_kelamin" id="jns_kelamin" class="form-select">
                    <option value="Laki-Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan email user">
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>