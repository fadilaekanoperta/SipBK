<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2>Selamat Datang <br> <span> di Sistem Pendaftaran Beasiswa</span></h2>
          <p>Berikut adalah informasi pilihan beasiswa beserta syarat pendaftarannya</p>
          <a href="#" class="btn-get-started">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

  <!-- ======= Pilihan Beasiswa Section ======= -->
  <section id="pilihan_beasiswa" class="pilihan_beasiswa">
  <div class="container">
<div class="row">
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">Nama Beasiswa</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-warning">
                            <span class="widget-49-date-day">Tutup</span>
                            <!-- <span class="widget-49-date-month">apr</span> -->
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">Beasiswa selama 1 semester</span>
                            <span class="widget-49-meeting-time">Deadline pengajuan Jumat, 09 April 2023 Pukul 23:59 WIB</span>
                        </div>
                    </div><br>
                    <span class="widget-49-pro-title">Persyaratan:</span>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Expand module is removed</span></li>
                        <li class="widget-49-meeting-item"><span>Data migration is in scope</span></li>
                        <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="<?= base_url('detail_beasiswa') ?>" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">Beasiswa Akademik</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">Buka</span>
                            <!-- <span class="widget-49-date-month">apr</span> -->
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">Beasiswa 2 semester</span>
                            <span class="widget-49-meeting-time">Deadline pengajuan Rabu, 13 April 2023 Pukul 23:59 WIB</span>
                        </div>
                    </div><br>
                    <span class="widget-49-pro-title">Persyaratan:</span>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Scheming module is removed</span></li>
                        <li class="widget-49-meeting-item"><span>App design contract confirmed</span></li>
                        <li class="widget-49-meeting-item"><span>Client request to send invoice</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="<?= base_url('detail_beasiswa') ?>" class="btn btn-sm btn-flash-border-warning">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">Beasiswa Non Akademik</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">Buka</span>
                            <!-- <span class="widget-49-date-month">apr</span> -->
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">Beasiswa sampai lulus</span>
                            <span class="widget-49-meeting-time">Deadline pengajuan Senin, 22 April 2023 Pukul 23:59 WIB</span>
                        </div>
                    </div><br>
                    <span class="widget-49-pro-title">Persyaratan:</span>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Scope is revised and updated</span></li>
                        <li class="widget-49-meeting-item"><span>Time-line has been changed</span></li>
                        <li class="widget-49-meeting-item"><span>Received approval to start wire-frame</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="<?= base_url('detail_beasiswa') ?>" class="btn btn-sm btn-flash-border-success">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  </section>
<!-- End Pilihan Beasiswa Section -->  

  </main><!-- End #main -->

  <div id="preloader">
    <div class="line"></div>
  </div>

<?= $this->endSection() ?>