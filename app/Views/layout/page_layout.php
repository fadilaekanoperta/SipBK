<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pendaftaran Beasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php base_url() ?>/assets/css/main.css" rel="stylesheet">
  
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center  me-auto me-lg-0">
        <h1>SipBK</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
    <?= $this->renderSection('content') ?>

  <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>SiBK</span></strong>. All Rights Reserved
        </div>
        </div>
    </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php base_url() ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    new DataTable('#example');
  </script>

  <!-- Template Main JS File -->
  <script src="<?php base_url() ?>/assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- digunakan untuk mengecek ipk dengan nama dan email -->
<script>
    $(document).ready(function() {
        $('#masukkanNama, #masukkanEmail').on('input', function() {
            
            var nama = $('#masukkanNama').val();
            var email = $('#masukkanEmail').val();
            // var semester = $('#email').val();
            // console.log('Nama:', nama); // Log nilai nama ke konsol
            // console.log('Email:', email);

            var url = "/ipk_mahasiswa/"+nama+"/"+email;
            var base_url = window.location.origin;
            url = base_url + url;

            // Menggunakan AJAX untuk mengambil nilai IPK dari controller
            $.ajax({
                url: url, // Ganti dengan URL controller yang sesuai
                method: 'GET',
                // data: { nama: nama, email: email },
                success: function(response) {
                    // console.log('Response:', response);
                    $('#ipkTerakhir').val(response.ipk);
                    $('#id_ipk').val(response.id_ipk);


                    // Mengambil nilai IPK dan menonaktifkan tombol jika IPK kurang dari 3
                    var ipk_mahasiswa = parseFloat(response.ipk);
                    var submitButton = $('#submitButton'); // Ganti dengan ID tombol yang sesuai
                    var beasiswaSelect = $('#pilihanBeasiswa'); // Ganti dengan ID select yang sesuai
                    var file_berkas = $('#uploadBerkasPersyaratan'); // Ganti dengan ID input yang sesuai


                    if (ipk_mahasiswa < 3) {
                        submitButton.prop('disabled', true);
                        file_berkas.prop('disabled', true);
                        beasiswaSelect.prop('disabled', true);
                    } else {
                        submitButton.prop('disabled', false);
                        file_berkas.prop('disabled', false);
                        beasiswaSelect.prop('disabled', false);
                    }

                }
            });
        });
    });
</script>

</body>

</html>