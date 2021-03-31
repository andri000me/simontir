<!doctype html>
<html lang="en">
  <head>
  	<title>Si Montir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../images/logosimontir.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
            <a href="../index.php">Beranda</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="databaru.php">Data Baru</a>
                </li>
                <li>
                    <a href="#">Perbaharui Data</a>
                </li>
                <li>
                    <a href="#">Cetak Laporan</a>
                </li>
              </ul>
	          </li>
            <li>
              <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Master</a>
              <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="datarekening.php">Data Sub Kegiatan</a>
                </li>
                <li>
                    <a href="#">Dummy</a>
                </li>
                <li>
                    <a href="#">Dummy</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="#">Tambah User</a>
                </li>
                <li>
                    <a href="#">Edit/Delete User</a>
                </li>
                <li>
                    <a href="#">Pengaturan Aplikasi</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Panduan Pengguna</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website created <i class="icon-heart" aria-hidden="true"></i> by <a href="https://gesangmultimedia.co.id" target="_blank">Gesang Multimedia</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Data Baru</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-row m-b-55">
                                <div class="name">Name</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="first_name">
                                                <label class="label--desc">first name</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="last_name">
                                                <label class="label--desc">last name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Company</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="company">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Phone</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-3">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="area_code">
                                                <label class="label--desc">Area Code</label>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="phone">
                                                <label class="label--desc">Phone Number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Subject</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="subject">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>Subject 1</option>
                                                <option>Subject 2</option>
                                                <option>Subject 3</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row p-t-20">
                                <label class="label label--block">Are you an existing customer?</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">Yes
                                        <input type="radio" checked="checked" name="exist">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="exist">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
	</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>
  </body>
</html>