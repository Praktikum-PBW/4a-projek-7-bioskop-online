<?php
if (isset($_GET['kd_film'])) {
    $kd_film = $_GET['kd_film'];

    $query = mysqli_query(mysql: $koneksi, query: "SELECT * FROM film WHERE kd_film='$kd_film'");
    $data = mysqli_fetch_array(result: $query);

    if (mysqli_num_rows(result: $query) == 1) {
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Film</h4>
        <form action="index.php?page=film_update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="kd_film" value="<?= $kd_film ?>">
            <div class="mb-2">
                <label for="kd_film" class="form-label">Kode Film</label>
                <input type="text" name="kd_film" id="kd_film" class="form-control" placeholder="Masukan Kode Film"
                    value="<?= $data['kd_film'] ?>">
            </div>
            <div class="mb-2">
                <label for="judul" class="form-label">Judul Film</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Film"
                    value="<?= $data['judul'] ?>">
            </div>
            <div class="mb-2">
                <label for="poster" class="form-label">Poster Film</label><br>
                <img src="../assets/img/<?= $data['poster'] ?>" width="100px" alt="">
                <input type="file" name="poster" id="poster" class="form-control">
            </div>
            <div class="mb-2">
                <label for="genre" class="form-label">Genre Film</label>
                <input type="text" name="genre" id="genre" class="form-control" placeholder="Masukan Genre Film"
                    value="<?= $data['genre'] ?>">
            </div>
            <div class="mb-2">
                <label for="durasi" class="form-label">Durasi Film</label>
                <input type="text" name="durasi" id="durasi" class="form-control" placeholder="Masukan durasi Film"
                    value="<?= $data['durasi'] ?>">
            </div>
            <div class="mb-2">
                <label for="usia" class="form-label">Rating Usia</label>
                <input type="text" name="usia" id="usia" class="form-control" placeholder="Masukan Rating Usia Film"
                    value="<?= $data['rating_usia'] ?>">
            </div>
            <div class="mb-2">
                <label for="sinopsis" class="form-label">Sinopsis Film</label>
                <textarea name="sinopsis" id="sinopsis" class="form-control"
                    placeholder="Masukan Sinopsis Film"><?php echo $data['sinopsis'] ?></textarea>
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    } else {
        header(header: "Location: index.php?page=film");
    }
} else {
    header(header: "Location: index.php?page=film");
}
?>