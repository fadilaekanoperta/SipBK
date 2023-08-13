<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

  <!-- ======= Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
        <li><a href="<?= base_url('/') ?>">Pilihan Beasiswa</a></li>
        <li><a href="<?= base_url('daftar') ?>">Daftar</a></li>
        <li><a href="<?= base_url('hasil') ?>" class="active">Hasil</a></li>
    </ul>
  </nav>
<!-- ======= End Navbar ======= -->

  </div>
</header><!-- End Header -->

    <link href="assets/css/form.css" rel="stylesheet">

    <section class="hasil">
    <div class="pcontent page-wrapper">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Hasil Pendaftaran Beasiswa</h2>
                </div>
                <div class="card-body">
                <!-- <div class="container px-5 my-5">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row">
                            <div class="form-floating col-5 mb-3">
                                <input class="form-control" id="masukkanNama" type="text" placeholder="Masukkan Nama" data-sb-validations="required" />
                                <label for="masukkanNama">Masukkan Nama</label>
                                <div class="invalid-feedback" data-sb-feedback="masukkanNama:required">Nama wajib diisi.</div>
                            </div>
                            <div class="form-floating col-5 mb-3">
                                <input class="form-control" id="masukkanEmail" type="email" placeholder="Masukkan Email" data-sb-validations="required,email" />
                                <label for="masukkanEmail">Masukkan Email</label>
                                <div class="invalid-feedback" data-sb-feedback="masukkanEmail:required">Email wajib diisi.</div>
                                <div class="invalid-feedback" data-sb-feedback="masukkanEmail:email">Email tidak sesuai</div>
                            </div>
                            <button class="btn-get-search col-1" id="searchButton" type="submit">Cari</button>
                        </div>
                    </form>
                </div> -->
                </div>
            </div>
        </div>
    </div>
    </section>
    
<?= $this->endSection() ?>