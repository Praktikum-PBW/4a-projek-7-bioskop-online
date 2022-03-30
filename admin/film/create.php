<div class="row">
    <div class="col-md-12">
        <h4>Tambah Film</h4>
        <form action="index.php?page=film_store" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="kd_film" class="form-label">Kode Film</label>
                <input type="text" name="kd_film" id="kd_film" class="form-control" placeholder="Masukan Kode Film">
            </div>
            <div class="mb-2">
                <label for="judul" class="form-label">Judul Film</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Film">
            </div>
            <div class="mb-2">
                <label for="poster" class="form-label">Poster Film</label><br>
                <input type="file" name="poster" id="poster" class="form-control">
            </div>
            <div class="mb-2">
                <label for="genre" class="form-label">Genre Film</label>
                <input type="text" name="genre" id="genre" class="form-control" placeholder="Masukan Genre Film">
            </div>
            <div class="mb-2">
                <label for="durasi" class="form-label">Durasi Film</label>
                <input type="text" name="durasi" id="durasi" class="form-control" placeholder="Masukan durasi Film">
            </div>
            <div class="mb-2">
                <label for="usia" class="form-label">Rating Usia</label>
                <input type="text" name="usia" id="usia" class="form-control" placeholder="Masukan Rating Usia Film">
            </div>
            <div class="mb-2">
                <label for="sinopsis" class="form-label">Sinopsis Film</label>
                <textarea name="sinopsis" id="sinopsis" class="form-control"
                    placeholder="Masukan Sinopsis Film"></textarea>
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>