<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Liga1-Tix
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100 virtual-reality">
  <div>
    <?= $this->include('pages/layouts/navbar') ?>

  </div>
  <!-- Landing Page -->
  <div class="container-fluid d-flex justify-content-around py-4" style="background-image: url('../assets/img/curved-images/bg-color.png') ; background-size: cover;">
    <!-- Left Sidebar, Football Team Profile List -->
    <div class="col-md-3 px-2">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Liga1 Team</h5>
        </div>
        <div class="card-body">
          <div class="list-group">
            <!-- jika data tidak ada : -->

            <?php if (!isset($team)) : ?>

              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">

                  <span class="alert alert-warning">Tidak Ada Team</span>
                </div>
              </a>


            <?php else : ?>
              <!-- jika data  ada : -->
              <?php foreach ($team as $t) : ?>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <img src="/assets/img/team_logo/<?= $t->logo ?>" alt="<?= $t->nama_team ?>" width="30" height="30">
                    <h5 class="mb-1"><?= $t->nama_team ?></h5>
                  </div>
                </a>

                <!-- disisi modal -->

              <?php endforeach; ?>

            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Left Sidebar, Football Team, List with Icon -->
    <!-- Middle Main Content, Banner, Date Live Match List, Date Match History List -->
    <div class="col-md-6 px-2">
      <div class="card">
        <div class="card-header">
          <!-- banner carousel design -->
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url(); ?>/assets/img/banner/Gambar1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url(); ?>/assets/img/banner/Gambar2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url(); ?>/assets/img/banner/Gambar5.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="m-2 text-center">
            <h4 class="title">Selamat Datang di Liga1-Tix</h4>
            <a href="<?= base_url('user/matchlist') ?>" class="btn bg-gradient-primary">Cari Tiket</a>
          </div>
        </div>

        <div class="card-header">
          <h5 class="title text-center">Live Match</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <!-- jika data tidak ada : -->
            <?php if (!isset($live)) : ?>

              <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                <span class="alert alert-warning">Tidak Ada Pertandingan Sedang Berlangsung, Stay tuned!</span>
              </li>
            <?php else : ?>
              <!-- jika data  ada : -->
              <?php foreach ($live as $l) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <img src="<?= base_url('assets/img/team_logo/' . $l->logo_team1) ?>" alt="" width="30px" height="30px">
                  <a href=""><?= $l->nama_team1; ?></a>
                  <span class="badge bg-gradient-info rounded-pill"><?= $l->skor_team1; ?></span>
                  <span class="badge bg-primary rounded-pill">VS</span>
                  <span class="badge bg-gradient-info rounded-pill"><?= $l->skor_team2; ?></span>
                  <a href=""><?= $l->nama_team2; ?></a>
                  <img src="<?= base_url('assets/img/team_logo/' . $l->logo_team2) ?>" alt="" width="30px" height="30px">
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div class="card-header">
          <h5 class="title text-center">Match History</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <!-- jika data tidak ada : -->
            <?php if (!isset($finish)) : ?>
              <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                <span class="alert alert-warning">Tidak Ada Pertandingan, Stay tuned!</span>
              </li>


            <?php else : ?>
              <!-- jika data ada : -->
              <?php foreach ($finish as $f) : ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <img src="<?= base_url('assets/img/team_logo/' . $f->logo_team1) ?>" alt="" width="30px" height="30px">
                  <a href=""><?= $f->nama_team1; ?></a>
                  <span class="badge bg-gradient-info rounded-pill"><?= $f->skor_team1; ?></span>
                  <span class="badge bg-primary rounded-pill">VS</span>
                  <span class="badge bg-gradient-info rounded-pill"><?= $f->skor_team2; ?></span>
                  <a href=""><?= $f->nama_team2; ?></a>
                  <img src="<?= base_url('assets/img/team_logo/' . $f->logo_team2) ?>" alt="" width="30px" height="30px">
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- End of Main Content -->
    <!-- Right Sidebar, Simplified Date Given Upcoming Schedule -->
    <div class="col-md-3 px-2">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Upcoming Schedule</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <!-- jika data tidak ada : -->
            <?php if (!isset($upcoming)) : ?>
              <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                <span class="alert alert-warning">Tidak Ada Pertandingan, Stay tuned!</span>
              </li>

            <?php else : ?>
              <!-- jika data ada : -->
              <?php foreach ($upcoming as $up) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">

                  <img src="<?= base_url('assets/img/team_logo/' . $up->logo_team1) ?>" alt="" width="30px" height="30px">
                  <p style="font-size:12px;"><?= $up->nama_team1; ?></p>
                  <span class="badge bg-primary rounded-pill">VS</span>
                  <p style="font-size:12px;"><?= $up->nama_team2; ?></p>
                  <img src="<?= base_url('assets/img/team_logo/' . $up->logo_team2) ?>" alt="" width="30px" height="30px">


                </li>
                <span class="badge bg-gradient-warning rounded-pill"><?= hari_indo(date('N', strtotime($up->tanggal))) . ', ' . tanggal_indo(date('Y-m-d', strtotime('' . $up->tanggal . ''))) . ', ' . date('H:i', strtotime($up->waktu));  ?></span>
                <hr class="no-border">

              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- End of Right Sidebar -->
  </div>

  <footer class="footer pt-3">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>

            <a href="" class="font-weight-bold" target="">Liga1-Tix</a>

          </div>
        </div>
        <div class="col-lg-6">

        </div>
      </div>
    </div>
  </footer>

  <!-- disini -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

<!-- <script>
  for (let i = 0; i < sessionStorage.length; i++) {
    const key = sessionStorage.key(i);
    const value = sessionStorage.getItem(key);
    console.log(`${key}: ${value}`);
  }
</script> -->



</html>