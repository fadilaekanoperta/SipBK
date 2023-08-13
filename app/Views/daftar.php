<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

  <!-- ======= Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
        <li><a href="<?= base_url('/') ?>">Pilihan Beasiswa</a></li>
        <li><a href="<?= base_url('daftar') ?>" class="active">Daftar</a></li>
        <li><a href="<?= base_url('hasil') ?>">Hasil</a></li>
    </ul>
  </nav>
<!-- ======= End Navbar ======= -->

  </div>
</header><!-- End Header -->

    <link href="assets/css/form.css" rel="stylesheet">
    
    <section class="daftar">
    <div class="pcontent page-wrapper">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Daftar Beasiswa</h2>
                </div>
                <div class="card-body">
                <div class="container px-5 my-5">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="masukkanNama" type="text" placeholder="Masukkan Nama" data-sb-validations="required" />
                            <label for="masukkanNama">Masukkan Nama</label>
                            <div class="invalid-feedback" data-sb-feedback="masukkanNama:required">Nama wajib diisi.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="masukkanEmail" type="email" placeholder="Masukkan Email" data-sb-validations="required,email" />
                            <label for="masukkanEmail">Masukkan Email</label>
                            <div class="invalid-feedback" data-sb-feedback="masukkanEmail:required">Email wajib diisi.</div>
                            <div class="invalid-feedback" data-sb-feedback="masukkanEmail:email">Email tidak sesuai</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nomorHp" type="number" placeholder="Nomor HP" data-sb-validations="required" />
                            <label for="nomorHp">Nomor HP</label>
                            <div class="invalid-feedback" data-sb-feedback="nomorHp:required">Nomor HP wajib diisi.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="semesterSaatIni" aria-label="Semester saat ini">
                                <option selected disabled>Pilih semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                            <label for="semesterSaatIni">Semester saat ini</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="ipkTerakhir" type="text" placeholder="IPK Terakhir" data-sb-validations="required" value="Otomatis dari sistem" disabled/>
                            <label for="ipkTerakhir">IPK Terakhir</label>
                            <div class="invalid-feedback" data-sb-feedback="ipkTerakhir:required">IPK Terakhir wajib diisi.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="pilihanBeasiswa" aria-label="Pilihan Beasiswa">
                                <option selected disabled>Pilih beasiswa</option>
                                <option value="Beasiswa 1">Beasiswa 1</option>
                                <option value="Beasiswa Akademik A">Beasiswa Akademik A</option>
                                <option value="Beasiswa Non Akademik B">Beasiswa Non Akademik B</option>
                            </select>
                            <label for="pilihanBeasiswa">Pilihan Beasiswa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="uploadBerkasPersyaratan" type="file" placeholder="Upload Berkas Persyaratan" data-sb-validations="required" />
                            <label for="uploadBerkasPersyaratan">Upload Berkas Persyaratan</label>
                            <div class="invalid-feedback" data-sb-feedback="uploadBerkasPersyaratan:required">Upload Berkas Persyaratan wajib diisi.</div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Data berhasil disimpan!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error!</div>
                        </div>
                        <button class="btn-get-started" id="submitButton" type="submit">Daftar</button>
                        <button class="btn-get-reset" id="batalButton" type="reset">Batal</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    
<?= $this->endSection() ?>