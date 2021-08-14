<?php
$id_buku = $_GET['id'];
$q_tampil_buku = mysqli_query($db, "SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
$r_tampil_buku = mysqli_fetch_array($q_tampil_buku);
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Edit Buku Perpustakaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../sipus2/index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Buku</li>
        </ol>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Buku
                    </div>
                    <div class="card-body">
                        <form action="proses/buku-edit-proses.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">ID Buku</label>
                                <input type="text" class="form-control" name="id_buku"
                                    value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" name="judul"
                                    value="<?php echo $r_tampil_buku['judulbuku']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori"
                                    value="<?php echo $r_tampil_buku['kategori']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pengarang</label>
                                <input type="text" class="form-control" name="pengarang"
                                    value="<?php echo $r_tampil_buku['pengarang']; ?>">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit"
                                value="<?php echo $r_tampil_buku['penerbit']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="Tersedia"
                                    <?php echo ($r_tampil_buku['status'] == 'Tersedia') ? 'selected' : ''; ?>>Tersedia
                                </option>
                                <option value="Dipinjam"
                                    <?php echo ($r_tampil_buku['status'] == 'Dipinjam') ? 'selected' : ''; ?>>Dipinjam
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-4 offset-md-8">
                            <a href="../sipus2/index.php?p=buku" class="btn btn-dark">Close</a>
                            <button type="submit" name="simpan" class="btn btn-success">Edit Data</button>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
