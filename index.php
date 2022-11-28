<?php
  session_start();
    include 'template/navbar.php';
    // $_SESSION['status'] = "";
?>
    <div class="content row">
      <div class="welcome col-sm-6 text-center mt-4">
        <p class="fw-semibold mt-5 fs-1 gld">Meminjam Buku Lebih Mudah</p>
        <p class="fw-semibold fs-3 gld">Cari Buku Lebih Praktis dan Efisien</p>
        <p class="fw-semibold fs-2 gld">Banyak Koleksi Buku dan Fitur yang Membantu</p>
        <a href="#sec2"><i class="fa-solid fa-circle-down fa-10x gld"></i></i></a>
      </div>
      <div class="car card colalign-items-center border-light bg-dark">
        <div class="card-body">
          <div id="carouselExampleInterval" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/image/WhatsApp Image 2022-09-21 at 14.04.06 (1).jpeg" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/image/WhatsApp Image 2022-09-21 at 14.04.06.jpeg" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/image/WhatsApp Image 2022-09-21 at 14.04.08.jpeg" class="d-block" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="sec2">
      <div class="border-0 align-self-start car1 card" style="margin-top: 20%; width:40%;  margin-left: 7%">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/image/WhatsApp Image 2022-09-21 at 14.04.08.jpeg" class="rounded-start img1 d-block" alt="...">
          </div>
          <div class="col-md-8" style="padding-top:3%">
            <div class="card-body">
              <div class="card">
                <div class="card-body">  
                  <h5 class="card-title m-auto fs-4">Buku Adalah Jendela Dunia</h5>
                </div>
              </div>
              <p class="card-text mt-4 ms-2 fs-5">Temukan buku buku yang kamu inginkan dan lihat dunia dengan buku buku yang kamu</p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="border-0 align-self-center car1 card" style="margin-top: 5%; width:40%;  margin-left: 28%">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/image/WhatsApp Image 2022-09-21 at 14.04.06.jpeg" class="rounded-start d-block" alt="...">
          </div>
          <div class="col-md-8" style="padding-top:3%">
            <div class="card-body">
              <div class="card">
                <div class="card-body">  
                  <h5 class="card-title m-auto fs-4">Informasi Buku yang Lengkap</h5>
                </div>
              </div>
              <p class="card-text mt-4 ms-2 fs-5">Kamu tidak perlu lagi repot repot datang dan mencari buku yang kamu inginkan. Cukup temukan buku yang dicari dan temukan stocknya</p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="border-0 align-self-end car1 card" style="margin: 5% 0 10% 53%; width:40%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/image/WhatsApp Image 2022-09-21 at 14.04.08.jpeg" class="d-block" alt="...">
          </div>
          <div class="col-md-8" style="padding-top:3%">
            <div class="card-body">
              <div class="card">
                <div class="card-body">  
                  <h5 class="card-title m-auto fs-4">Daftar Dengan Mudah</h5>
                </div>
              </div>
              <p class="card-text mt-4 ms-2 fs-5 ">Jadilah member dengan 10 detik saja. tidak ada kata ribet dan yang pastinya gratis</p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>