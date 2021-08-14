<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Anggota Perpustakaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../sipus2/index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Anggota</li>
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
                            <th>ID Anggota</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
                    $q_tampil_anggota = mysqli_query($db, $sql);

                    $nomor = 1;
                    while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
                        <td><?php echo $r_tampil_anggota['nama']; ?></td>
                        <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
                        <td><?php echo $r_tampil_anggota['alamat']; ?></td>
                        <td>

                            <a class="btn btn-success btn-sm"
                                href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota']; ?>"
                                class="tombol">Edit</a>
                            <a class="btn btn-danger btn-sm"
                                href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>"
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="proses/anggota-input-proses.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">ID Anggota</label>
                        <input type="text" class="form-control" name="id_anggota" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" required></textarea>
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
