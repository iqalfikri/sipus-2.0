<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Buku</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../sipus2/index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Buku</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-auto me-auto">
                        <i class="fas fa-table me-1"></i>
                        Data Anggota
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
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * FROM tbbuku ORDER BY idbuku DESC";
                    $q_tampil_buku = mysqli_query($db, $sql);

                    $nomor = 1;
                    while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $r_tampil_buku['idbuku']; ?></td>
                        <td><?php echo $r_tampil_buku['judulbuku']; ?></td>
                        <td><?php echo $r_tampil_buku['kategori']; ?></td>
                        <td><?php echo $r_tampil_buku['pengarang']; ?></td>
                        <td><?php echo $r_tampil_buku['penerbit']; ?></td>
                        <td><?php echo $r_tampil_buku['status']; ?></td>
                        <td>

                            <a class="btn btn-success btn-sm"
                                href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku']; ?>"
                                class="tombol">Edit</a>
                            <a class="btn btn-danger btn-sm"
                                href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol"
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="proses/buku-input-proses.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">ID Buku</label>
                        <input type="text" class="form-control" name="id_buku" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Dipinjam">Dipinjam</option>
                        </select>
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
