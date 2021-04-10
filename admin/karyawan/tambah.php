<form method="POST" action="prosestambah.php">
    <div class="row g-3">
        <div class="col-12">
            <label for="nmkarya" class="form-label">Nama karyawan</label>
            <input type="text" class="form-control" name="nmkarya" placeholder="Nama karyawan" required>
        </div>

        <div class="col-12">
            <label for="tmptkarya" class="form-label">Tempat lahir karyawan</label>
            <input type="text" class="form-control" name="tmptkarya" placeholder="Tempat lahir karyawan" required>
        </div>

        <div class="col-md-6">
            <label for="jabat" class="form-label">Jabatan</label>
            <select class="form-select" name="jabat" required>
                <option value="" hidden>Pilih jabatan karyawan</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="tglkarya" class="form-label">Tanggal lahir karyawan</label>
            <input type="date" class="form-control" name="tglkarya">
        </div>
    </div>

    <hr class="my-4">

    <button class="w-100 btn btn-primary btn-lg" type="submit" name="ksubmit">Tambah Data Karyawan</button>
</form>