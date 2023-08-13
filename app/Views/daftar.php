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
                    
                </div>
                <div class="card-footer">
                    <button class="btn-get-started" type="submit">Daftar</button>
                    <button class="btn-get-reset" type="reset">Batal</button>
                </div>
            </div>
        </div>
    </div>
    </section>
    
<?= $this->endSection() ?>