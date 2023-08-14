<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

  <!-- ======= Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
        <li><a href="<?= base_url('/') ?>" class="active">Pilihan Beasiswa</a></li>
        <li><a href="<?= base_url('daftar') ?>">Daftar</a></li>
        <li><a href="<?= base_url('hasil') ?>">Hasil</a></li>
    </ul>
  </nav>
<!-- ======= End Navbar ======= -->

  </div>
</header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">
    <!-- ======= About Section ======= -->
    <section id="about" class="about pcontent">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?php base_url() ?>/assets/img/beasiswa.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2><?= $beasiswa->nama_beasiswa ?></h2>
            <p class="fst-italic py-3">
            <?= $beasiswa->jangka_beasiswa ?> <br> <?= $beasiswa->deadline ?>
            </p>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Persyaratan 1</strong></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Persyaratan 2</strong></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Persyaratan 3</strong></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Persyaratan 4</strong></li>
              </ul>
            <p class="py-3">
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
            <p class="m-0">
              Recusandae est praesentium consequatur eos voluptatem. Vitae dolores aliquam itaque odio nihil. Neque ut neque ut quae voluptas. Maxime corporis aut ut ipsum consequatur. Repudiandae sunt sequi minus qui et. Doloribus molestiae officiis.
              Soluta eligendi fugiat omnis enim. Numquam alias sint possimus eveniet ad. Ratione in earum eum magni totam.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <?= $this->endSection() ?>