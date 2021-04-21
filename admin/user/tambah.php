<form method="POST" action="prosestambah.php">
    <div class="row g-3">
        <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="uname" placeholder="Username pengguna" required>
        </div>

        <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="upass" placeholder="Password pengguna" required>
        </div>

        <div class="col-md-4">
            <label for="access" class="form-label">Access</label>
            <select class="form-select" name="uaccess" required>
                <option value="" hidden>Pilih hak akses user baru</option>
                <option value="1">Admin</option>
                <option value="2">Karyawan</option>
            </select>
        </div>

        <div class="col-md-4">
            <?php
            $qidk = $connect->query("SELECT * FROM karyawan");
            ?>
            <label for="idkarya" class="form-label">ID Karyawan</label>
            <select name="idkarya" class="form-select" id="">
                <?php
                while ($didk = $qidk->fetch_assoc()) :
                ?>
                    <option value="<?= $didk['id_karyawan']; ?>"><?= $didk['nm_karyawan']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="col-md-4">
            <?php
            $qkp = $connect->query("SELECT * FROM poli");
            ?>
            <label for="kdpol" class="form-label">Poli</label>
            <select name="kdpol" class="form-select" id="">
                <?php
                while ($dkp = $qkp->fetch_assoc()) :
                ?>
                    <option value="<?= $dkp['kd_poli']; ?>"><?= $dkp['nm_poli']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>

    <hr class="my-4">

    <button class="w-100 btn btn-primary btn-lg" type="submit" name="usubmit">Tambah Data Pengguna Baru</button>
</form>