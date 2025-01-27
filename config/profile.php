<?php

require 'functions.php';

?>


<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Profile MA AL Hidayah</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <script src="https://kit.fontawesome.com/794940d583.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <style type="text/css">
          .justify-kanan {
               text-align: justify;
               margin-right: 75px;
          }

          .justify-kiri {
               text-align: justify;
               margin-left: 75px;
          }
     </style>
</head>

<body class="bg-light">

     <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #1C315E;">
          <div class="container">
               <a class="navbar-brand text-white fw-bold" href="../index.php"><img src="../app/img/navbar.png" width="200"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                         <li class="nav-item fw-semibold" style="margin-right: 30px;">
                              <a class="nav-link fs-6 text-white" aria-current="page" href="../index.php">Home</a>
                         </li>
                         <li class="nav-item fw-semibold" style="margin-right: 30px;">
                              <a class="nav-link fs-6 text-white" href="profile.php">Profile</a>
                         </li>
                         <li class="nav-item fw-semibold" style="margin-right: 30px;">
                              <a class="nav-link fs-6 text-white" href="chart.php">Statistik Study</a>
                         </li>
                         <li class="nav-item " style="margin-right: 20px;">
                              <a class="btn bg-white fs-6 fw-semibold text-primary" style="border-radius: 50px; width: 100px;" href="login.php">Login</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>

     <section class="mb-5">
          <div class="container shadow" style="align-items: center; background-color: white;">
               <h1 class="text-center mt-3 pt-5"><b>PROFILE SMA TAHFIDZ AL-HIDAYAH TULUNGAGUNG</b></h1>
               <hr width="75%" style="margin-left: auto; margin-right: auto;">
               <section class="bg-white pt-3 pb-5">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-aos="fade-up" data-aos-duration="1500">
                         <div class="carousel-inner">
                              <div class="carousel-item active">
                                   <img src="../app/img/profil.png" class="d-block w-100" alt="...">
                              </div>
                         </div>
                    </div>
                    <div class="container">
                         <div class="row text-center pt-4" data-aos="fade-down" data-aos-duration="1500">
                              <h3>VISI DAN MISI SMA TAHFIDZ AL-HIDAYAH </h3>
                         </div>
                         <div class="row align-items-center justify-content-center pt-3 pb-5">
                              <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                   <h3>Visi</h3>
                              </div>
                              <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                   <p class="justify-kanan" style="font-style: italic;">“Terbentuknya peserta didik sebagai pengemban Al-Quran, 
                                   berakhlakul karimah, cerdas dalam IPTEK dan mahir dalam berbahasa.”</p>
                              </div>
                              <div class="row align-items-center justify-content-center pt-3 pb-5">
                                   <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                        <ul class="justify-kiri" style="font-style: italic;">
                                             <li>Membiasakan peserta didik menghafal dan mengamalkan al-Quran dalam kehidupan sehari hari</li>
                                             <li>Membiasakan peserta didik berperilaku terpuji sesuai dengan akhlak Rasulallah Muhammad SAW.</li>
                                             <li>Menumbuhkembangkan lingkungan yang kondusif bagi peserta didik agar terbentuk menjadi insan yang cerdas dan shaleh.</li>
                                             <li>Membiasakan peserta didik menggunakan Bahasa Arab dan Bahasa Inggris sebagai Bahasa sehari-hari.</li>
                                             <li>Mengembangkan potensi peserta didik dalam menggunakan ilmu pengetahuan dan teknologi untuk kemaslahatan umat.</li>
                                        </ul>
                                   </div>
                                   <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                        <h3>Misi</h3>
                                   </div>
                              </div>

                              <!-- Prodi Teknik Elektro -->
                              <div class="container">
                                   <hr width="75%" style="margin-left: auto; margin-right: auto;">
                                   <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                                        <h3>Jurusan di MA Tahfidz Al Hidayah</h3>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/ipa.jpeg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Jurusan Ilmu Pengetahuan alam (IPA)</b>
                                             berfokus pada Matematika, Fisika, Kimia, dan Biologi, serta hafalan Al-Qur'an. 
                                             Kurikulum ini mengintegrasikan sains dan agama untuk membentuk siswa yang unggul 
                                             akademis dan spiritual. Lulusan diharapkan melanjutkan pendidikan tinggi di bidang 
                                             sains dan teknologi dengan karakter berintegritas.</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Jurusan Ilmu Pengetahuan Sosial (IPS)</b>
                                             berfokus pada Sejarah, Geografi, Ekonomi, dan Sosiologi, serta hafalan Al-Qur'an. 
                                             Program ini mengembangkan pemahaman sosial, ekonomi, dan budaya, serta membentuk landasan spiritual 
                                             yang kokoh. Lulusan diharapkan melanjutkan pendidikan tinggi dalam ilmu sosial dan humaniora dengan 
                                             kemampuan analitis, kritis, dan berakhlak mulia.</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/ips.jpeg" width="80%">
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/keagamaan.jpeg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Keagamaan</b>
                                             fokus pada ilmu agama Islam seperti Tafsir, Hadis, Fiqih, Aqidah, dan Sejarah Islam, 
                                             serta hafalan Al-Qur'an. Lulusan diharapkan menjadi ahli agama yang berpengetahuan luas, 
                                             berakhlak mulia, dan siap melanjutkan pendidikan di bidang studi Islam atau menjadi ulama dan pendidik agama.</p>
                                        </div>
                                   </div>
                              </div>
               </section>
          </div>
     </section>

     <footer style="background-color: #2c2f33;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mt-5">
                  <div class="text-center">
                              <img src="../app/img/logo.png" width="30%" alt="" srcset="">
                              <h2 class="mt-3">
                                <a class="text-white" href="https://www.instagram.com/maalhidayah_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a class="text-white" style="margin-left: 8px;" href="https://www.facebook.com/pptq.almannan.39" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                                <a class="text-white" style="margin-left: 8px;" href="https://www.youtube.com/@almannanofficial2948/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                  </div>
                 </div>
               <div class="col-12 col-md-4 mt-5">
                         <h4 class="fw-semibold text-white">Kontak</h4>
                         <hr class="text-white" width="100">
                         <p class="mt-3 text-white">Jl. KH. Hasyim Asy'ari No.Gg. 3, Kauman, Kec. Tulungagung, Kabupaten Tulungagung, Jawa <br> Timur 
                          </p>
                            <p class="text-white">Tel. 081235871258</p>
                            <p class="text-white">Fax. 081235871258</p>
                            <p class="text-white">Email : sekretariat@almanan.sch.id</p>
                    </div>
                    <div class="col-12 col-md-4 mt-5">
                         <h4 class="fw-semibold text-white">Tautan Penting</h4>
                         <hr class="text-white" width="200">
                         <ul class="list-unstyled">
                              <li class="mt-3">
                                   <a href="../config/login.php" class="text-decoration-none text-white">Login</a>
                              </li>
                              <li class="mt-3">
                                   <a href="profile.php" class="text-decoration-none text-white">Profile</a>
                              </li>
                              <li class="mt-3">
                                   <a href="chart.php" class="text-decoration-none text-white">Statistik Study</a>
                              </li>
                              <li class="mt-3">
                                   <a href="https://www.instagram.com/almannanofficial/" target="_blank" class="text-decoration-none text-white">MA Tahfidz Al Hidayah</a>
                              </li>
                         </ul>
                    </div>
            </div>
            <hr class="text-white">
            <p class="text-center text-white pb-2 m-0">&copy; 2022 Tracer Study MA Tahfidz Al Hidayah</p>
        </div>
    </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
          AOS.init();
     </script>
</body>

</html>