<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Transaksi Perpustakaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../sipus2/index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Peminjaman</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-auto me-auto">
                        <i class="fas fa-table me-1"></i>
                        Data Transaksi
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</td>
                            <th>ID Transaksi</th>
                            <th>ID Anggota</th>
                            <th>ID Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Kembali</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC";
                    $q_tampil_transaksi = mysqli_query($db, $sql);

                    $nomor = 1;
                    while ($r_tampil_transaksi = mysqli_fetch_array($q_tampil_transaksi)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $r_tampil_transaksi['idtransaksi']; ?></td>
                        <td><?php echo $r_tampil_transaksi['idanggota']; ?></td>
                        <td><?php echo $r_tampil_transaksi['idbuku']; ?></td>
                        <td><?php echo $r_tampil_transaksi['tglpinjam']; ?></td>
                        <td><?php echo $r_tampil_transaksi['tglkembali']; ?></td>
                        <td>

                            <a class="btn btn-success btn-sm"
                                href="index.php?p=transaksi-edit&idtransaksi=<?php echo $r_tampil_transaksi['idtransaksi']; ?>"
                                class="tombol">Edit</a>
                            <a class="btn btn-danger btn-sm"
                                href="proses/transaksi-hapus.php?idtransaksi=<?php echo $r_tampil_transaksi['idtransaksi']; ?>"
                                class="tombol"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</main>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="proses/transaksi-input-proses.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">ID Transaksi</label>
                        <input type="text" class="form-control" name="idtransaksi" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Anggota</label>
                        <input type="text" class="form-control" name="idanggota" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Buku</label>
                        <input type="text" class="form-control" name="idbuku" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tglpinjam" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tglkembali" required autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="simpan" class="btn btn-primary">Input Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
