<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h4>Data Film</h4>
            <a href="index.php?page=film_create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-center">
                    <tr>
                        <th>#</th>
                        <th>Kode Film</th>
                        <th>Judul</th>
                        <th>Poster</th>
                        <th>Genre</th>
                        <th>durasi</th>
                        <th>Rating Usia</th>
                        <th>Sinopsis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM film");
                    $no = 1;
                    foreach ($query as $data) {
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['kd_film'] ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td>
                            <img src="../assets/img/<?= $data['poster'] ?>" width="100px" alt="">
                        </td>
                        <td><?= $data['genre'] ?></td>
                        <td><?= $data['durasi'] ?></td>
                        <td><?= $data['rating_usia'] ?></td>
                        <td><?= $data['sinopsis'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=film_edit&kd_film=<?= $data['kd_film'] ?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="index.php?page=film_delete&kd_film=<?= $data['kd_film'] ?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>