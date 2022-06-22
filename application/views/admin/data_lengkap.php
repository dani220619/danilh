<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="card-title"><?= $title ?></div>
                            <a href="<?= base_url('admin/pegawai') ?>" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-minus"></i>
                                Kembali

                            </a>
                        </div>
                    </div>
                    <form class="simpanan" method="post" action="<?= base_url('admin/update_biodata'); ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <input hidden type="number" class="form-control" id="user_id" name="user_id" placeholder="Masukan id" value="<?= $biodata['user_id'] ?>">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="pos_lamar">POSISI YANG DI LAMAR</label>
                                        <input type="text" class="form-control" id="pos_lamar" name="pos_lamar" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['pos_lamar'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="full_name">NAMA LENGKAP</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['full_name'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="no_ktp">NO KTP</label>
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['no_ktp'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="tempat_tgl_lahir">TEMPAT TANGGAL LAHIR</label>
                                        <input type="text" class="form-control" id="tempat_tgl_lahir" name="tempat_tgl_lahir" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['tempat_tgl_lahir'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="gol_darah">JENIS KELAMIN</label>
                                        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['jenis_kelamin'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="gol_darah">AGAMA</label>
                                        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['agama'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="gol_darah">GOLONGAN DARAH</label>
                                        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['gol_darah'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="status">STATUS</label>
                                        <input type="text" class="form-control" id="status" name="status" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['status'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="alamat_ktp">ALAMAT KTP</label>
                                        <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['alamat_ktp'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="alamat_tinggal">ALAMAT TINGGAL</label>
                                        <input type="text" class="form-control" id="alamat_tinggal" name="alamat_tinggal" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['alamat_tinggal'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">EMAIL</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['email'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="no_tlp">NO TELEPON</label>
                                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['no_tlp'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="org_terdekat">ORANG TERDEKAT YANG BISA DI HUBUNGI</label>
                                        <input type="text" class="form-control" id="org_terdekat" name="org_terdekat" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['org_terdekat'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="pen_terahir">PENDIDIKAN TERAHIR</label>
                                        <input type="text" class="form-control" id="pen_terahir" name="pen_terahir" placeholder="Masih Kosong, Belum Melengkapi Data" value="<?= $biodata['pen_terahir'] ?>" readonly>
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>