<?php
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Edit Anggota Perpustakaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../sipus2/index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Anggota</li>
        </ol>
        <div class="row">
            <div class="col-xl-7">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Anggota
                    </div>
                    <div class="card-body">
                        <form action="proses/anggota-edit-proses.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">ID Anggota</label>
                                <input type="text" class="form-control" name="id_anggota"
                                    value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $r_tampil_anggota['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin">
                                    <option value="Pria"
                                        <?php echo ($r_tampil_anggota['jeniskelamin'] == 'Pria') ? 'selected' : ''; ?>>
                                        Pria</option>
                                    <option value="Wanita"
                                        <?php echo ($r_tampil_anggota['jeniskelamin'] == 'Wanita') ? 'selected' : ''; ?>>
                                        Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control"
                                    name="alamat"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-4 offset-md-8">
                            <a href="../sipus2/index.php?p=anggota" class="btn btn-dark">Close</a>
                            <button type="submit" name="simpan" class="btn btn-success">Edit Data</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <img src="../sipus2/assets/img/edit.png" width="458" height="100%">
            </div>
        </div>

    </div>
</main>
