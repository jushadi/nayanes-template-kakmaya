<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nayanes, Library, Federated Search, SLiMS Search Proxy">
    <meta name="author" content="Jushadi Arman Saz, SLiMS, SLiMS Developer Community">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="robots" content="noindex, follow">
    <link rel="shortcut icon" href="lib/nayanes_warna_70.png">
    <link rel="stylesheet" href="templates/kakmaya-blue/css/style.css">
    <link href="templates/kakmaya-blue/css/select2.min.css" rel="stylesheet" />
    <script src="lib/jquery.js"></script>
  </head>
  <body>
    <header class="ucs-header">
      <div class="ucs-slider">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbarTogglerMain" aria-controls="navbarTogglerMain" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerMain">
              <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item "><a class="nav-link" href="index.php?p=about">Tentang</a></li>


              </ul>
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">Bergabung</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">Bantuan</a>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="ucs-brand">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-7">
              <h1 class="navbar-title">
                <a href="index.php">Nayanes: The SLiMS Search Proxy</a>
              </h1>
              <div class="navbar-tagline">SLiMS Developer Community</div>
            </div>
            <div class="clearfix"></div>
            <div class="col-4 col-md-2">
              <img width="42" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSIyNTZweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiB3aWR0aD0iMjU2cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+LnN0MHtmaWxsOm5vbmU7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjQ7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO308L3N0eWxlPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yMjguNjQ5LDE3NC42MDZjMjcuMTEzLTU0LjU3LDMuNDg5LTEyMC41OTUtNDguNjA3LTE0NC4wMTNDMTI5LjE3OCw3LjcyOCw2OC40OTcsMzIuNTIyLDQ0LjM4OCw4MS44ODQgIGMtMjQuNDQxLDUwLjA0Mi01LjUxMSwxMTMuNzI5LDQ0LjIxNCwxMzkuMzg2Yzc3Ljk1NiwzOS42NDMsMTMwLjcyNy0yNy4zOTMsMTMxLjUyNS0zMS4xNTIiLz48cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTQyLjI4NSwxMzQuMzk2YzQuNTQtMy44OTIsMTEuNzQ1LTguMjg2LDExLjMxMy0xMC42NjVjLTAuNDMyLTIuMzc4LTQuOTA0LTcuMTk4LTEzLjA0Mi03LjcxMiAgYy0wLjk2MS0wLjA2MS0xNS41MjMtMC42OTEtMjIuMTk4LDkuOTQ1Yy01LjQzOCw4LjY2NS0zLjAzMSwxOC41NzMsMi4zNzgsMjUuMzY2YzYuNTg5LDguMjc0LDE5LjI2OSwxMC40NiwyOS40MDMsNC44OTggIGMxOC43MDEtMTMuMDgsOC4yNTMtMjYuNTg5LDkuNDQyLTI5LjYxNWM5LjI5Ni0xNC43MDIsMzcuMzI4LTExLjI0MiwzOS40OS0xMi43NTZjMi4xNjItMS41MTMsMy44OTItMTYuMTA3LDIuMzc4LTE4LjgwOSAgcy0yOS41OTEtMjQuMDcxLTY2LjA4Mi0yMi43MDFDMTA0LjY1MSw3My41LDgxLjIxLDkwLjgzMiw3OC45MzksOTMuOTY3Yy0yLjI3LDMuMTM1LTMuODkyLDIwLjc1NS0xLjczLDIyLjA1MiAgczI5LjI5NSwxLjQwNSwzMS4zNDktMC4yMTZjMi4wNTQtMS42MjEtMi43MDItMTYuOTcyLTAuODY1LTIwLjEwN2MxLjgzOC0zLjEzNSwxNS44OTgtNi43MzYsMjkuMTg3LTcuMTM1ICBjMTUuMzc3LTAuNDYyLDMxLjQ1Nyw0LjMyNCwzMy4wNzksNi45MThjMS42MjIsMi41OTQtMS43MywxNC4wNTMtMS4wODEsMTYuNDMxYzAuNjQ5LDIuMzc4LDIwLjgyNiwzMi4zMjIsMjAuMTc4LDQ2LjQ4MyAgYy0wLjY0OSwxNC4xNjEtNS43MywxOS41NjYtNy41NjcsMjAuMzIzYy0xLjgzNywwLjc1Ny04NS43NTYsMS4xODktODcuOTE4LTAuNDMyYy0yLjE2Mi0xLjYyMi01LjE4OS0xMy41MTMtNC43NTctMjMuMTMzICBzNy4yNTMtMjQuNTczLDEwLjk1Mi0zMS41NjUiLz48L3N2Zz4=" alt="Hotline">
              <p>Hotline</p>
              <strong>
                <a href="tel:+62215707870">+6285255454489</a>
              </strong>
            </div>
            <div class="col-4 col-md-3">
              <img width="42" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSIyNTZweCIgaWQ9IkxheWVyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiB3aWR0aD0iMjU2cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+LnN0MHtmaWxsOm5vbmU7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjQ7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO308L3N0eWxlPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05MC4xMjIsMTExLjMzNmM0LjgxNCwxMC42OTgsNDAuNDc1LDQxLjkwMSw0My44NjMsNDIuMDhzNTguNjYyLTQ5LjM5LDU3LjA1Ny01Mi43NzggIFM3OS4yNDYsOTYuMTgsNzYuMjE0LDk5LjU2OGMtMy4wMzEsMy4zODgtMS45NjIsNzguMDk3LDAuNzEzLDgwLjIzN3MxMTEuMDgzLDIuMzE4LDExMy40MDEtMS40MjYgIGMyLjMxOC0zLjc0NCw0LjgxNC01Ny40MTQsMS43ODMtNjAuNjIzIi8+PHBhdGggY2xhc3M9InN0MCIgZD0iTTEwOC4yNjgsMjM3LjM1MmM1OS4wMzYsMTUuMDg5LDExOC42NTMtMjEuODMyLDEzMC42NDgtNzcuNjc2YzExLjcxMS01NC41MjQtMjUuMjM2LTEwOC42NzEtNzguNTUxLTEyMS45MTIgIEMxMDYuMzE1LDI0LjM0LDQ4LjAwMiw1Ni4xODMsMzMuMzIxLDExMC4xNzZjLTIyLjQ0Nyw4NC41MjcsNTQuMTUxLDEyMi4wOTcsNTcuOTk0LDEyMi4wOSIvPjwvc3ZnPg==" alt="Email">
              <p>Email</p>
              <strong>
                <a href="mailto:kakmaya-blue@kemdikbud.go.id">icthadi@gmail.com</a>
              </strong>
            </div>
          </div>
        </div>
      </div>
      <div class="ucs-nav" id="nav">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon navbar-toggler-icon-alt"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                   <li class="nav-item "><a class="nav-link" href="index.php">Beranda</a></li>
                   <li class="nav-item "><a class="nav-link" href="index.php?p=about">Tentang</a></li>
                   <li class="nav-item "><a class="nav-link text-nowrap" href="#">Bergabung</a></li>

              </ul>
                        <form id="nav" class="form-inline my-2 my-lg-0">
                            <input type="hidden" name="p" value="search" />
                            <input name="keywords" class="form-control mr-sm-2" type="search" placeholder="mis: agama" aria-label="Search" value="<?php echo isset($_GET['keywords'])?trim($_GET['keywords']):'' ?>">
                            <select name="node" id="locations" class="form-control mr-sm-2 nayanes-select">
                                      <option value="ALL"><?php echo __('All nodes'); ?></option>
      <?php foreach($sysconf['node'] as $idx => $node) {
        echo '<option value="'.$idx.'">'.$node['desc'].'</option>';
       } ?>
       </select>
                            <button type="submit" class="btn ucs-btn-success my-2 my-sm-0"><?php echo __('Search now'); ?></button>
                            
                        </form>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="ucs-page ucs-jumbotron">
        <div class="container">
          <div class="row justify-content-center">
              <!--
            <div class="col-12">
              <h3 class="text-center font-weight-bold">Seluruh Koleksi</h3>
              <p class="lead text-center">Saat ini <strong>236.922</strong> koleksi yang telah dikumpukan melalui <strong>Schils</strong>. </p>
            </div>
            -->
            <div class="clearfix"></div>
            <div class="col-12 col-lg-9">
                <form id="utama" class="ucs-form-search d-none d-md-block mt-4">
                    <div class="input-group">
                        <input type="hidden" name="p" value="search" />
                        <input name="keywords" class="form-control border-0" type="text" placeholder="mis: agama" aria-label="Search" value="<?php echo isset($_GET['keywords'])?trim($_GET['keywords']):'' ?>">
                        <span class="input-group-addon border-0 bg-white">
                            <select name="node" class="form-control border-0 nayanes-select" >
      <option value="ALL"><?php echo __('All nodes'); ?></option>
      <?php foreach($sysconf['node'] as $idx => $node) {
        echo '<option value="'.$idx.'">'.$node['desc'].'</option>';
       } ?>
    </select>
                        </span>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                Cari</button>
                        </span>
                    </div>
                </form>
              <form id="utama-mobile" class="d-block d-md-none">
                <input type="hidden" name="p" value="search" />
                <input type="text" name="keywords" class="form-control form-control-lg border-0 mb-2" placeholder="mis: agama" aria-label="Search" value="<?php echo isset($_GET['keywords'])?trim($_GET['keywords']):'' ?>">
                            <select name="node" class="form-control border-0 nayanes-select" >
      <option value="ALL"><?php echo __('All nodes'); ?></option>
      <?php foreach($sysconf['node'] as $idx => $node) {
        echo '<option value="'.$idx.'">'.$node['desc'].'</option>';
       } ?>
    </select>
                <div class="mt-3 text-center">                        
                            <button type="submit" class="btn btn-primary btn-lg">Pencarian Sederhana</button>
                        
            </div>
            </form>
          </div>
          <div class="clearfix"></div>
          <div class="col-12">
            <div class="mt-3 text-center">
              <a class="btn btn-primary btn-sm" id="toggleAdvanceSearch" href="#" data-toggle="modal" data-target="#modalAdvanceSearch">Pencarian Spesifik</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="ucs-page ucs-page-alt flex-row d-md-flex">
        <div class="container">
            <?php echo $main_content; ?>
        </div>    
     
    </main>
    <footer class="ucs-footer">
      <div class="container">
        <div class="row ucs-footer-body">
          <div class="col-12 col-md-4">
            <img src="templates/kakmaya-blue/img/logo.png" width="64" alt="">
            <p class="pt-4">
              <strong>Nayanes: The SLiMS Search Proxy</strong>
            </p>
            <address class="text-sm"> Gedung A Lantai 1 
            <br> Jl. Kebersamaan 18-2, BTP – Makassar 
            <br> Indonesia, 905225 
            <br>
              <br> Telp. +6285255454489
              <br> Email: icthadi@gmail.com
            </address>
          </div>
          <div class="col-12 col-md-5">
            <br>
            <strong>Link Terkait</strong>
            <br>
            <br>
            <ul>
              <li>
                <a href="https://www.kemdikbud.go.id/" target="_blank">Kementerian Pendidikan dan Kebudayaan</a>
              </li>
              <li>
                <a href="http://perpustakaan.kemdikbud.go.id/laman" target="_blank">Perpustakaan Kementerian Pendidikan dan Kebudayaan</a>
              </li>
              <li>
                <a href="https://psbsekolah.kemdikbud.go.id" target="_blank">PSB Sekolah</a>
              </li>
              <li>
                <a href="http://slims.web.id/" target="_blank">SLiMS Library Management System</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-3">
            <br>
            <strong>Temukan Kami Disini</strong>
            <br>
            <br>
            <a href="">
              <img src="templates/kakmaya-blue/img/facebook.png" alt="">
            </a>
            <a href="">
              <img src="templates/kakmaya-blue/img/twitter.png" alt="">
            </a>
            <a href="">
              <img src="templates/kakmaya-blue/img/instagram.png" alt="">
            </a>
            <a href="">
              <img src="templates/kakmaya-blue/img/youtube.png" alt="">
            </a>
            <br>
            <br>
            <a href="http://onesearch.id" target="_blank">
              <img src="templates/kakmaya-blue/img/logo-ios.png" width="200" alt="">
            </a>
            <br>
            <br>
            <p></p>
          </div>
        </div>
        <div class="ucs-copyright">
          <div class="row">
            <div class="col-12 col-md-6">
              <p>Nayanes: The SLiMS Search Proxy &copy; 2023 Petunjuk untuk Keutamaan</p>
            </div>
            <div class="col-12 col-md-6">
              <p class="text-right d-none d-md-block">SLiMS Developers Community</p>
              <p class="d-block d-md-none">Jushadi Arman Saz</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal fade bd-example-modal-lg ucs-modal" id="modalAdvanceSearch" tabindex="-1" role="dialog" aria-labelledby="modalAdvanceSearchLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content border-0">
          <div class="ucs-modal-sidebar"></div>
          <form id="adv-search-form" action="index.php" method="get">
            <div class="modal-header mt-4 border-0">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <h4 class="lead font-weight-bold">Nayanes: <?php echo __('Advanced search'); ?></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
    <input type="hidden" name="advsearch" value="1" />
    <input type="hidden" name="p" value="search" />                
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="title">Judul</label>
                      <input type="text" name="title" id="title" class="form-control" aria-describedby="Judul">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subyek</label>
                      <input type="text" name="subject" id="subject" class="form-control" aria-describedby="Subyek">
                    </div>

                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="author">Pengarang</label>
                      <input type="text" name="author" id="author" class="form-control" aria-describedby="Pengarang">
                    </div>
                    <div class="form-group">
                      <label for="isbn">ISBN/ISSN</label>
                      <input type="text" name="isbn" class="form-control" id="isbn" aria-describedby="ISBN/ISSN">
                    </div>

                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="location">Lokasi</label>
					<select id="location" name="node" class="full-width nayanes-select" style="width: 100%">
                     <option value="ALL"><?php echo __('All nodes'); ?></option>
                        <?php foreach($sysconf['node'] as $idx => $node) {
                            echo '<option value="'.$idx.'">'.$node['desc'].'</option>';
                        } ?>
					</select>
                    </div>
                </div>    
                </div>
              </div>
            </div>
            <div class="modal-footer border-0 mb-4">
              <div class="container-fluid">
                <div class="row">
                  <div class="col text-right">

                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" name="search" value="<?php echo __('Search'); ?>">Cari</button>
                   
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="templates/kakmaya-blue/js/popper.min.js"></script>
    <script src="templates/kakmaya-blue/js/bootstrap.min.js"></script>
    <script src="templates/kakmaya-blue/js/select2.min.js"></script>
    <script src="templates/kakmaya-blue/js/custome.js"></script>
    <Script>
        // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function() {
            $('.nayanes-select').select2();
            });    
    </Script>
  </body>
</html>