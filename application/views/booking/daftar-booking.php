<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-stripped hover" id="table-datatable">
                            <tr>
                                <th>No. </th>
                                <th>Id Booking</th>
                                <th>Tanggal Booking</th>
                                <th>Id User</th>
                                <th>Aksi</th>
                                <th>Denda</th>
                                <th>Lama Pinjam</th>
                            </tr>
                            <?php $no = 1;
                                foreach ($pinjam as $p) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><a href="<?= base_url('pinjam/bookingDetail/'. $p['id_booking']) ?>" class="btn btn-link"><?= $p['id_booking'] ?> </a></td>
                                        <td><?= $p['tgl_booking'] ?></td>
                                        <td><?= $p['id_user'] ?></td>
                                        <form action="<?= base_url('pinjam/pinjamAct/' .$p['id_booking']) ?>" method="POST">
                                            <td nowrap>
                                                <button type="submit" class="btn btn-sm btn-outline-info"><i class="fas fa-fw fa-cart-plus"></i> Pinjam</button>
                                            </td>
                                            <td>
                                                <input type="text" class="form-check-user rounded-sm" name="denda" id="denda" value="5000">
                                                <?= form_error() ?>
                                            </td>
                                            <td>
                                                <input type="text" class="form-check-user rounded-sm" name="lama" id="lama" value="3">
                                                <?= form_error() ?>
                                            </td>
                                        </form>
                                    </tr>
                            <?php  $no++; } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><a href="<?= base_url('pinjam/daftarBooking') ?>" class="btn btn-link"><i class="fas fa-fw fa-refresh">&nbsp;Refresh</i></a></td>
            </tr>
        </table>
    </center>
</div>
</div>