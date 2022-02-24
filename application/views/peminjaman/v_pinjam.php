<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Peminjaman Alat</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>pinjam_alat/pinjam" class="btn btn-success btn-md">Pinjam Alat</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4">
                                            <table id="datatable" class="table table-bordered" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Alat</th>
                                                        <th>Peminjam</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Selesai</th>
                                                        <th>Jumlah</th>
                                                        <th>Kegiatan</th>
                                                        <th>Lokasi</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_pinjam as $dp) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $dp->namaalat ?></td>
                                                            <td><?php echo $dp->peminjam ?></td>
                                                            <td><?php echo tanggal_indonesia($dp->tglpinjam) ?></td>
                                                            <td><?php echo tanggal_indonesia($dp->tglselesai) ?></td>
                                                            <td><?php echo $dp->qty ?></td>
                                                            <td><?php echo $dp->kegiatan ?></td>
                                                            <td><?php echo $dp->lokasi ?></td>
                                                            <?php if ($dp->status == '1') { ?>
                                                                <?php if ($this->session->userdata('logged_in') == true) { ?>
                                                                    <td>
                                                                        <a id="dipinjamkan1" class="btn btn-outline-warning btn-md" href="<?php echo site_url('pinjam_alat/dipinjamkan/' . $dp->id_pinjam) ?>">Verifikasi</a>
                                                                    </td>
                                                                <?php } else if ($this->session->userdata('logged_in') == false) { ?>
                                                                    <td>
                                                                        <button class="btn btn-outline-warning btn-md" disabled>Menunggu Verifikasi</button>
                                                                    </td>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <?php if ($this->session->userdata('logged_in') == true) { ?>
                                                                    <td height="40px">
                                                                        <button type="button" class="btn btn-outline-success" disabled>Dipinjam</button>
                                                                        <hr style="width:60%;text-align:left;margin-left:0">
                                                                        <a type="button" class="btn btn-outline-info btn-md" href="<?php echo base_url('pinjam_alat/selesai/' . $dp->id_pinjam) . '/' . $dp->idalat ?>">Selesai</a>
                                                                    </td>
                                                                <?php } else if ($this->session->userdata('logged_in') == false) { ?>
                                                                    <td height="40px">
                                                                        <button type="button" class="btn btn-outline-success" disabled>Dipinjam</button>
                                                                    </td>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>