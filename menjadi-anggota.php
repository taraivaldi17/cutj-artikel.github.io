<?php include('navbar.php'); ?>

<!-- Anggota Start -->
<section class="anggota py-5" id="anggota">
    <div class="container-lg py-4">

        <!-- Title -->
        <div class="row pt-4 justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center text-uppercase">
                    <h2 class="fw-bold mb-5">Permohonan Menjadi Anggota</h2>
                </div>
            </div>
        </div>
        <!-- End Title -->

        <!-- Download Doc dan Alert -->
        <div class="row">
            <!-- Download Syarat Menjadi Anggota -->
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger me-md-2 px-3 mb-3" type="button"><i
                            class="fas fa-download me-2"></i>Syarat menjadi anggota.pdf
                    </button>
                </div>
            </div>
            <!-- End Download -->

            <!-- Alert -->
            <div class="col-md-12">

                <!-- Alert Sukses -->
                <div class="alert alert-success alert-dismissible fade show d-none ok-alert" role="alert">
                    <i class="fas fa-check-circle"></i>
                    <strong>Terima Kasih!</strong> Biodata anda sudah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <!-- Alert Gagal -->
                <div class="alert alert-danger alert-dismissible fade show d-none ops-alert" role="alert">
                    <i class="fas fa-check-circle"></i>
                    <strong>Opss!</strong> Biodata anda gagal terkirim.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            </div>
            <!-- End Alert -->
        </div>
        <!-- End Download Doc dan Alert -->

        <!-- Form -->
        <div class="row">
            <h4 class="text-center text-muted mb-2">Biodata Anggota</h4>

            <div class="col-md-12">
                <div class="contact-form">

                    <form name="cutj-artikel-member-form">

                        <!-- Nama Lengkap & nama panggilan -->
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <label for="nama_lengkap" class="col-form-label">Nama Lengkap :</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label for="nama_panggilan" class="col-form-label">Nama Panggilan :</label>
                                <input type="text" id="nama_panggilan" name="nama_panggilan" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>
                        </div>

                        <!-- Tempat lahir dan Tanggal Lahir -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label for="tempat_lahir" class="col-form-label">Tempat Lahir :</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <label for="tgl_lahir" class="col-form-label">Tanggal Lahir :</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>
                        </div>

                        <!-- Nomor NIK -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <label for="nik" class="col-form-label">Nomor NIK :</label>
                                <input type="number" id="nik" name="nik" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="row">
                            <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin :</label>

                            <div class="col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                                    <label class="form-check-label" for="laki-laki">
                                        Laki-Laki
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Nama Ibu Kandung -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <label for="ibu_kandung" class="col-form-label">Nama Ibu Kandung :</label>
                                <input type="text" id="ibu_kandung" name="ibu_kandung" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>
                        </div>

                        <!-- Suku / Etnis -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <label for="suku" class="col-form-label">Suku / Etnis :</label>
                                <input type="text" id="suku" name="suku" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>
                        </div>

                        <!-- Alamat Tempat Tinggal -->
                        <div class="row">
                            <label class="col-form-label">Alamat Tempat Tinggal :</label>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <input type="text" id="jalan" name="jalan" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    placeholder="Jalan" required>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <input type="number" id="no" name="no" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    placeholder="No" required>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <input type="text" id="rt_rw" name="rt_rw" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    placeholder="RT / RW" required>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <input type="text" id="desa_kec" name="desa_kec" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    placeholder="Desa / Kecamatan" required>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <input type="text" id="kabupaten" name="kabupaten" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    placeholder="Kabupaten" required>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <input type="text" id="provinsi" name="provinsi" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    placeholder="Provinsi" required>
                            </div>
                        </div>

                        <!-- Nomor HP -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <label for="no_hp" class="col-form-label">Nomor Handphone :</label>
                                <input type="number" id="no_hp" name="no_hp" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                            </div>
                        </div>

                        <!-- Status Perhikahan -->
                        <div class="row">
                            <label for="status_pernikahan" class="col-form-label">Status Pernikahan :</label>

                            <div class="col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_pernikahan" id="menikah" value="Menikah">
                                    <label class="form-check-label" for="menikah">
                                        Menikah
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_pernikahan" id="belum_menikah" value="Belum menikah"
                                        checked>
                                    <label class="form-check-label" for="belum_menikah">
                                        Belum / Tidak Menikah
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_pernikahan" id="duda_janda" value="Duda atau Janda">
                                    <label class="form-check-label" for="duda_janda">
                                        Duda / Janda
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pekerjaan -->
                        <div class="row">
                            <label for="pekerjaan" class="col-form-label">Pekerjaan :</label>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="asn" value="ASN">
                                    <label class="form-check-label" for="asn">
                                        ASN
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="tni-polri" value="TNI atau Polri">
                                    <label class="form-check-label" for="tni-polri">
                                        TNI / Polri
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="wiraswasta" value="Wiraswasta">
                                    <label class="form-check-label" for="wiraswasta">
                                        Wiraswasta
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="pedagang" value="Pedagang">
                                    <label class="form-check-label" for="pedagang">
                                        Pedagang
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="nelayan" value="Nelayan">
                                    <label class="form-check-label" for="nelayan">
                                        Nelayan
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="petani" value="Petani">
                                    <label class="form-check-label" for="petani">
                                        Petani
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="rohaniawan" value="Rohaniawan">
                                    <label class="form-check-label" for="rohaniawan">
                                        Rohaniawan
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pekerjaan" id="honorer" value="Honorer">
                                    <label class="form-check-label" for="honorer">
                                        Honorer
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Agama -->
                        <div class="row">
                            <label for="agama" class="col-form-label">Agama :</label>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agama" id="katolik" value="Katolik">
                                    <label class="form-check-label" for="katolik">
                                        Katolik
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agama" id="kristen" value="Kristen">
                                    <label class="form-check-label" for="kristen">
                                        Kristen
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agama" id="islam" value="Islam">
                                    <label class="form-check-label" for="islam">
                                        Islam
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agama" id="hindu" value="Hindu">
                                    <label class="form-check-label" for="hindu">
                                        Hindu
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agama" id="budha" value="Budha">
                                    <label class="form-check-label" for="budha">
                                        Budha
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agama" id="konghucu" value="Konghucu">
                                    <label class="form-check-label" for="konghucu">
                                        Konghucu
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pendidikan terakhir -->
                        <div class="row">
                            <label for="pendidikan" class="col-form-label">Pendidikan Terakhir :</label>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pendidikan"
                                        id="tidak-sekolah" value="Tidak Sekolah">
                                    <label class="form-check-label" for="tidak-sekolah">
                                        Tidak Sekolah
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pendidikan" id="sd" value="SD">
                                    <label class="form-check-label" for="sd">
                                        SD
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pendidikan" id="smp" value="SMP">
                                    <label class="form-check-label" for="smp">
                                        SMP
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pendidikan" id="sma" value="SMA">
                                    <label class="form-check-label" for="sma">
                                        SMA
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pendidikan" id="s1" value="S1">
                                    <label class="form-check-label" for="s1">
                                        S1
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pendidikan" id="s2" value="S2">
                                    <label class="form-check-label" for="s2">
                                        S2
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <button type="submit" class="btn btn-danger px-3 btn-biodata">Input Biodata</button>

                                <!-- Tombol Loading -->
                                <button type="button" class="btn btn-danger px-3 btn-loading d-none" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading.
                                </button>
                                
                                <button type="reset" class="btn btn-secondary px-3">Reset</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
        <!-- End Form -->

    </div>
</section>
<!-- Anggota End -->

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxP3sijoZjsHTnHU1KosS9nRTLuqFCJaz5XzCAk7qUjiBxOZgLX-Fzt7I0iHkhGWrMX/exec';
  const form = document.forms['cutj-artikel-member-form'];
  
  const btnBiodata = document.querySelector('.btn-biodata');
  const btnLoading = document.querySelector('.btn-loading');
  const okAlert = document.querySelector('.ok-alert');
  const opsAlert = document.querySelector('.ops-alert');

  form.addEventListener('submit', e => {
    e.preventDefault();

    btnLoading.classList.toggle('d-none');
    btnBiodata.classList.toggle('d-none');

    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            btnLoading.classList.toggle('d-none');
            btnBiodata.classList.toggle('d-none');

            okAlert.classList.toggle('d-none');
            form.reset();

            console.log('Success!', response);
        })
        .catch(error => {
            btnLoading.classList.toggle('d-none');
            btnBiodata.classList.toggle('d-none');
            opsAlert.classList.toggle('d-none');
            console.error('Error!', error.message);
        })
  })
</script>

<?php include('footer.php'); ?>