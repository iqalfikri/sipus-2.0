<?php
$idtransaksi = $_GET['idtransaksi'];
$q_tampil_transaksi = mysqli_query($db, "SELECT * FROM tbtransaksi WHERE idtransaksi='$idtransaksi'");
$r_tampil_transaksi = mysqli_fetch_array($q_tampil_transaksi);
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
                        Data Transaksi
                    </div>
                    <div class="card-body">
                        <form action="proses/transaksi-edit-proses.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">ID Transaksi</label>
                                <input type="text" class="form-control" name="idtransaksi"
                                    value="<?php echo $r_tampil_transaksi['idtransaksi']; ?>" readonly="readonly">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Anggota</label>
                                <input type="text" class="form-control" name="idanggota"
                                    value="<?php echo $r_tampil_transaksi['idanggota']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Buku</label>
                                <input type="text" class="form-control" name="idbuku"
                                    value="<?php echo $r_tampil_transaksi['idbuku']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tglpinjam"
                                    value="<?php echo $r_tampil_transaksi['tglpinjam']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control" name="tglkembali"
                                    value="<?php echo $r_tampil_transaksi['tglkembali']; ?>">
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-4 offset-md-8">
                            <a href="../sipus2/index.php?p=transaksi" class="btn btn-dark">Close</a>
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
