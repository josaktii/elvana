<form method="POST" action="prosestambah.php">
    <div class="row g-3">
        <div class="col-12">
            <label for="kdp" class="form-label">Kode Poli</label>
            <input type="number" class="form-control" name="kdp" placeholder="Kode poli" required>
        </div>
        <div class="col-12">
            <label for="nmpoli" class="form-label">Nama Poli</label>
            <input type="text" class="form-control" name="nmpoli" placeholder="Nama poli" required>
        </div>
    </div>

    <hr class="my-4">

    <button class="w-100 btn btn-primary btn-lg" type="submit" name="psubmit">Tambah Data Poli</button>
</form>