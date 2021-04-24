<?php 
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>    
    <h3>
        <center>Laporan Data Peminjaman Buku</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Tanggal Dikembalikan</th>
                <th scope="col">Total Denda</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($laporan as $l) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $l['nama'] ?></td>
                                <td><?= $l['judul_buku'] ?></td>
                                <td><?= $l['tgl_pinjam'] ?></td>
                                <td><?= $l['tgl_kembali'] ?></td>
                                <td><?= $l['tgl_pengembalian'] ?></td>
                                <td><?= $l['total_denda'] ?></td>
                                <td><?= $l['status'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
    </table>