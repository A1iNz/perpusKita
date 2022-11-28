<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/680ecce84d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js/js.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="assets/css/haldep.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <title>Perustakaan Kita</title>
    </script>
  </head>
  <body id="sec1" class="bg-dark position-relative" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <a id="top" href="#sec1"><i class="position-fixed fa-5x bottom-0 end-0 gld fa-solid fa-circle-up" style="padding:0 2% 2% 0"></i></a>
    <nav class="navbar h-20 navbar-expand-lg shadow" style="background-color: #696969">
      <div class="container-fluid">
        <a class="h1 fs-1 navbar-brand gld ms-5" data-bs-spy="scroll" data-bs-target="#sec1" href="index.php">Perpustakaan Kita</a>
        <i class="fa-thin fa-book-open-cover gld"></i>
        <div class="navbar me-5" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link gld fw-semibold nr" aria-current="page" href="index.php">Home |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link gld fw-semibold nr" href="daftarbuku.php">Daftar Buku |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link gld fw-semibold nr" href="tutor.php">Tutorial |</a>
            </li>
            <?php if(empty($_SESSION['status'])) { ?>
                <li class="nav-item">
                  <a class="nav-link gld fw-semibold nr me-2" href="auth/formlogin.php">log in</a>
                </li>
            <?php }else{ ?>
              <div class="dropstart">
                <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                <a class="btn-danger " href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid gld fa-user fa-2x pt-3"></i></a>

                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="saya.php?category=1">Riwayat Peminjaman</a></li>
                  <li><a class="dropdown-item" href="saya.php?category=2">Riwayat Pengembalian</a></li>
                  <li><a class="dropdown-item" href="saya.php?category=3">Settings</a></li>
                  <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
                  
                </ul>
              </div>
              <form method="POST" action="saya.php">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                <!-- <a href="saya.php"><i class="fa-solid gld fa-user fa-3x"></i></a> -->
              </form>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>