

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Tambah Jenis Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('jenis_barang/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label>Jenis Barang </label>
                                        <input type="text" name="jenis_barang" class="form-control" required>
                                        <?php echo form_error('jenis_barang', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</></button>&nbsp &nbsp
                                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>