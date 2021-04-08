<!-- modal -->

<div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Member</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('member') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email Anda">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn-outline-primary">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Login Modal -->

<!-- Daftar Modal -->
<div class="modal fade" tabindex="-1" id="daftarModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Anggota</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('member/daftar') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Lengkap" id="nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Lengkap" id="alamat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="email" placeholder="Alamat Email" id="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password1" placeholder="Password" id="password1">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password2" placeholder="Ulangi Password" id="password2">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Info -->
<div class="modal fade" tabindex="-1" id="modalinfo" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Informasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <span class="alert alert-message alert-success">Waktu Pengambilan Buku 1x24 jam dari Booking</span>
            </div>

            <div class="modal-footer">
                <a href="<?= base_url() ?>" class="btn btn-outline-info">Ok</a>
            </div>
        </div>
    </div>
</div>