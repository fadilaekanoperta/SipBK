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
                    
                </div>
            </div>
        </div>
    </div>
    </section>
    
<?= $this->endSection() ?>