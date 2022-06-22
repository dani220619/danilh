<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><?= $title ?></div>
                    </div>
                    <form class="simpanan" method="post" action="<?= base_url('admin/update_biodata'); ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <input hidden type="number" class="form-control" id="user_id" name="user_id" placeholder="Masukan id" value="<?= $biodata['id_user'] ?>">

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="pos_lamar">POSISI YANG DI LAMAR</label>
                                        <input type="text" class="form-control" id="pos_lamar" name="pos_lamar" placeholder="Masukan Posisi Yang Di Lamar" value="<?= $biodata['pos_lamar'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="full_name">NAMA LENGKAP</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Masukan Nama Lengkap" value="<?= $biodata['full_name'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="no_ktp">NO KTP</label>
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukan No Ktp" value="<?= $biodata['no_ktp'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="tempat_tgl_lahir">TEMPAT TANGGAL LAHIR</label>
                                        <input type="text" class="form-control" id="tempat_tgl_lahir" name="tempat_tgl_lahir" placeholder="Masukan Tempat Tanggal Lahir" value="<?= $biodata['tempat_tgl_lahir'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>JENIS KELAMIN</label>
                                        <div class="col-md-12 col-lg-12 kosong">
                                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= $biodata['jenis_kelamin'] ?>">
                                                <option value="<?= $biodata['jenis_kelamin'] ?>" selected="selected"></option>
                                                <?php
                                                foreach ($jen_kel as $is) { ?>
                                                    <option <?= ($is == $biodata['jenis_kelamin'] ? 'selected=""' : '') ?> value="<?= $is; ?>"><?= $is; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>AGAMA</label>
                                        <div class="col-md-12 col-lg-12 kosong">
                                            <select class="form-control" name="agama" id="agama" value="<?= $biodata['agama'] ?>">
                                                <option value="<?= $biodata['agama'] ?>" selected="selected"></option>
                                                <?php
                                                foreach ($agama as $is) { ?>
                                                    <option <?= ($is == $biodata['agama'] ? 'selected=""' : '') ?> value="<?= $is; ?>"><?= $is; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="gol_darah">GOLONGAN DARAH</label>
                                        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masukan Golongan Darah" value="<?= $biodata['gol_darah'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="status">STATUS</label>
                                        <input type="text" class="form-control" id="status" name="status" placeholder="Masukan Status" value="<?= $biodata['status'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="alamat_ktp">ALAMAT KTP</label>
                                        <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Masukan Alamat Ktp" value="<?= $biodata['alamat_ktp'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="alamat_tinggal">ALAMAT TINGGAL</label>
                                        <input type="text" class="form-control" id="alamat_tinggal" name="alamat_tinggal" placeholder="Masukan Alamat Tinggal" value="<?= $biodata['alamat_tinggal'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">EMAIL</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= $biodata['email'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="no_tlp">NO TELEPON</label>
                                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukan No Telepon" value="<?= $biodata['no_tlp'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="org_terdekat">ORANG TERDEKAT YANG BISA DI HUBUNGI</label>
                                        <input type="text" class="form-control" id="org_terdekat" name="org_terdekat" placeholder="Masukan Orang Terdekat Yang Bisa Di Hubungi" value="<?= $biodata['org_terdekat'] ?>">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="pen_terahir">PENDIDIKAN TERAHIR :</label>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3">
                                                <label for="">JENJANG PENDIDIKAN TERAHIR</label>
                                                <input type="text" class="form-control" id="jen_pen_terahir" name="jen_pen_terahir" placeholder="Masukan Jenjang Pendidikan Terahir" value="<?= $biodata['jen_pen_terahir'] ?>">
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <label for="">NAMA INSTUSI AKADEMIK</label>
                                                <input type="text" class="form-control" id="nama_instusi" name="nama_instusi" placeholder="Masukan Nama Instunsi Akademik" value="<?= $biodata['nama_instusi'] ?>">
                                            </div>

                                            <div class="col-md-2 col-lg-2">
                                                <label for="">JURUSAN</label>
                                                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" value="<?= $biodata['jurusan'] ?>">
                                            </div>
                                            <div class="col-md-2 col-lg-2">
                                                <label for="">TAHUN LULUS</label>
                                                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="Masukan Tahun Lulus" value="<?= $biodata['tahun_lulus'] ?>">
                                            </div>

                                            <div class="col-md-2 col-lg-2">
                                                <label for="">IPK</label>
                                                <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Masukan Ipk" value="<?= $biodata['ipk'] ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <fieldset class="question">
                                            <label for="coupon_question">Tambah Pendidikan Terahir?</label>
                                            <input id="coupon_question" type="checkbox" name="coupon_question" value="1" />
                                            <span class="item-text">Ya</span>
                                        </fieldset>
                                        <fieldset class="answer">
                                            <div class="row" class="add_2">
                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">JENJANG PENDIDIKAN TERAHIR</label>
                                                    <input type="text" class="form-control" id="jen_pen_terahir1" name="jen_pen_terahir1" placeholder="Masukan Jenjang Pendidikan Terahir" value="<?= $biodata['jen_pen_terahir1'] ?>">
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">NAMA INSTUSI AKADEMIK</label>
                                                    <input type="text" class="form-control" id="nama_instusi1" name="nama_instusi1" placeholder="Masukan Nama Instunsi Akademik" value="<?= $biodata['nama_instusi1'] ?>">
                                                </div>

                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">JURUSAN</label>
                                                    <input type="text" class="form-control" id="jurusan1" name="jurusan1" placeholder="Masukan Jurusan" value="<?= $biodata['jurusan1'] ?>">
                                                </div>
                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">TAHUN LULUS</label>
                                                    <input type="text" class="form-control" id="tahun_lulus1" name="tahun_lulus1" placeholder="Masukan Tahun Lulus" value="<?= $biodata['tahun_lulus1'] ?>">
                                                </div>

                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">IPK</label>
                                                    <input type="text" class="form-control" id="ipk1" name="ipk1" placeholder="Masukan Ipk" value="<?= $biodata['ipk1'] ?>">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="pen_terahir">RIWAYAT PELATIHAN :</label>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3">
                                                <label for="">NAMA KHURSUS/SEMINAR</label>
                                                <input type="text" class="form-control" id="nama_kursus" name="nama_kursus" placeholder="Masukan Nama Kursus" value="<?= $biodata['nama_kursus'] ?>">
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <label for="">SERTIFIKAT (ADA/TIDAK)</label>
                                                <input type="text" class="form-control" id="sertifikat" name="sertifikat" placeholder="Masukan Sertifikat" value="<?= $biodata['sertifikat'] ?>">
                                            </div>

                                            <div class="col-md-2 col-lg-2">
                                                <label for="">TAHUN</label>
                                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun" value="<?= $biodata['tahun'] ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <fieldset class="question1">
                                            <label for="coupon_question">Tambah Riwayat Pelatihan?</label>
                                            <input id="coupon_question1" type="checkbox" name="coupon_question1" value="1" />
                                            <span class="item-text">Ya</span>
                                        </fieldset>
                                        <fieldset class="answer1">
                                            <div class="row" class="add_2">
                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">NAMA KHURSUS/SEMINAR</label>
                                                    <input type="text" class="form-control" id="nama_kursus" name="nama_kursus1" placeholder="Masukan Nama Kursus" value="<?= $biodata['nama_kursus1'] ?>">
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">SERTIFIKAT (ADA/TIDAK)</label>
                                                    <input type="text" class="form-control" id="sertifikat" name="sertifikat1" placeholder="Masukan Sertifikat" value="<?= $biodata['sertifikat1'] ?>">
                                                </div>

                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">TAHUN</label>
                                                    <input type="text" class="form-control" id="tahun" name="tahun1" placeholder="Masukan tahun" value="<?= $biodata['tahun1'] ?>">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="pen_terahir">RIWAYAT PEKERJAAN :</label>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3">
                                                <label for="">NAMA PERUSAHAAN</label>
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Masukan Nama Perusahaan" value="<?= $biodata['nama_perusahaan'] ?>">
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <label for="">POSISI TERAHIR</label>
                                                <input type="text" class="form-control" id="posisi_terahir" name="posisi_terahir" placeholder="Masukan Posisi Terahir" value="<?= $biodata['posisi_terahir'] ?>">
                                            </div>

                                            <div class="col-md-2 col-lg-2">
                                                <label for="">PENDAPATAN TERAHIR</label>
                                                <input type="text" class="form-control" id="pendapatan_terahir" name="pendapatan_terahir" placeholder="Masukan Pendapata Terahir" value="<?= $biodata['pendapatan_terahir'] ?>">
                                            </div>
                                            <div class="col-md-2 col-lg-2">
                                                <label for="">TAHUN</label>
                                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun" value="<?= $biodata['tahun'] ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <fieldset class="question">
                                            <label for="coupon_question2">Tambah Riwayat Pekerjaan?</label>
                                            <input id="coupon_question2" type="checkbox" name="coupon_question" value="1" />
                                            <span class="item-text">Ya</span>
                                        </fieldset>
                                        <fieldset class="answer2">
                                            <div class="row" class="add_2">
                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">NAMA PERUSAHAAN</label>
                                                    <input type="text" class="form-control" id="nama_perusahaan1" name="nama_perusahaan1" placeholder="Masukan Nama Perusahaan" value="<?= $biodata['nama_perusahaan1'] ?>">
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">POSISI TERAHIR</label>
                                                    <input type="text" class="form-control" id="posisi_terahir1" name="posisi_terahir1" placeholder="Masukan Posisi Terahir" value="<?= $biodata['posisi_terahir1'] ?>">
                                                </div>

                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">PENDAPATAN TERAHIR</label>
                                                    <input type="text" class="form-control" id="pendapatan_terahir1" name="pendapatan_terahir1" placeholder="Masukan Pendapata Terahir" value="<?= $biodata['pendapatan_terahir1'] ?>">
                                                </div>
                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">TAHUN</label>
                                                    <input type="text" class="form-control" id="tahun1" name="tahun1" placeholder="Masukan Tahun" value="<?= $biodata['tahun1'] ?>">
                                                </div>
                                            </div>
                                            <fieldset class="question">
                                                <label for="coupon_question3">Tambah Riwayat Pekerjaan?</label>
                                                <input id="coupon_question3" type="checkbox" name="coupon_question" value="1" />
                                                <span class="item-text">Ya</span>
                                            </fieldset>
                                        </fieldset>

                                        <fieldset class="answer3">
                                            <div class="row" class="add_2">
                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">NAMA PERUSAHAAN</label>
                                                    <input type="text" class="form-control" id="nama_perusahaan2" name="nama_perusahaan2" placeholder="Masukan Nama Perusahaan" value="<?= $biodata['nama_perusahaan2'] ?>">
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <label for="">POSISI TERAHIR</label>
                                                    <input type="text" class="form-control" id="posisi_terahir2" name="posisi_terahir2" placeholder="Masukan Posisi Terahir" value="<?= $biodata['posisi_terahir2'] ?>">
                                                </div>

                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">PENDAPATAN TERAHIR</label>
                                                    <input type="text" class="form-control" id="pendapatan_terahir2" name="pendapatan_terahir2" placeholder="Masukan Pendapata Terahir" value="<?= $biodata['pendapatan_terahir2'] ?>">
                                                </div>
                                                <div class="col-md-2 col-lg-2">
                                                    <label for="">TAHUN</label>
                                                    <input type="text" class="form-control" id="tahun2" name="tahun2" placeholder="Masukan Tahun" value="<?= $biodata['tahun2'] ?>">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="email">BERSEDIA DI TEMPATKAN DI SELURUH KANTOR PERUSAHAAN: Ya/TIDAK</label>
                                        <input type="text" class="form-control" id="ber_ditempatkan" name="ber_ditempatkan" placeholder="Masukan Bersedia di tempatkan di seluruh kantor perusahaan" value="<?= $biodata['ber_ditempatkan'] ?>">
                                        <small id="ber_ditempatkanHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">SKILL</label>
                                        <input type="text" class="form-control" id="skill" name="skill" placeholder="Masukan skill" value="<?= $biodata['skill'] ?>">
                                        <small id="skillHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">PENGHASILAN YANG DI HARAPKAN</label>
                                        <input type="text" class="form-control" id="peng_harapan" name="peng_harapan" placeholder="Masukan Penghasila yang di harapkan /Bulan" value="<?= $biodata['peng_harapan'] ?>">
                                        <small id="peng_harapanHelp2" class="form-text text-muted"></small>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card-action">

                            <?php if ($this->session->userdata['id_level'] == 1) { ?>
                                <button class="btn btn-success">Submit</button>
                                <a href="<?= base_url('admin/pegawai') ?>" class="btn btn-danger">Cancel</a>

                            <?php } else { ?>
                                <button class="btn btn-success">Submit</button>
                                <a href="<?= base_url('admin/biodata') ?>" class="btn btn-danger">Cancel</a>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".answer").hide();
    $(function() {
        $("#coupon_question").on("click", function() {
            $(".answer").toggle(this.checked);
        });
    });
    $(".answer1").hide();
    $(function() {
        $("#coupon_question1").on("click", function() {
            $(".answer1").toggle(this.checked);
        });
    });
    $(".answer2").hide();
    $(function() {
        $("#coupon_question2").on("click", function() {
            $(".answer2").toggle(this.checked);
        });
    });
    $(".answer3").hide();
    $(function() {
        $("#coupon_question3").on("click", function() {
            $(".answer3").toggle(this.checked);
        });
    });
</script>