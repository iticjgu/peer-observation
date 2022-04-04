<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
    include "../config/config.php";
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/icon_jgu.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Daftar Mahasiswa
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="http://jgu.ac.id">
          JAKARTA GLOBAL UNIVERSITY </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/jg_university"  data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/jakartaglobaluniversity"  data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/jg_university"  data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('../assets/img/jgu.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 ml-auto mr-auto">
          <div class="card card-login" style="height: 550px;">
            <form action='action_daftar.php' method='POST'>
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Daftar Mahasiswa</h4>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="NPM" name='npm'>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nama" name='nama_mhs'>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <select name="jurusan" class="form-control">
                      <option value="Information Systems">Bachelor in Information Systems</option>
                      <option value="Industrial Engineering">Bachelor in Industrial Engineering</option>
                      <option value="Informatics Engineering">Bachelor in Informatics Engineering</option>
                      <option value="Mechanical Engineering">Bachelor in Mechanical Engineering</option>
                      <option value="Civil Engineering">Bachelor in Civil Engineering</option>
                      <option value="Electrical Engineering">Bachelor in Electrical Engineering</option>
                      <option value="Masters in Electrical Engineering">Masters in Electrical Engineering</option>
                      <option value="Management">Bachelor in Management</option>
                      <option value="Digital Business">Bachelor in Digital Business</option>
                      <option value="Accounting">Bachelor in Accounting</option>
                      <option value="Pharmacy">Bachelor in Pharmacy</option>
                  </select>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Alamat" name='alamat'>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="User Name" name='username_mhs'>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password..." name='password_mhs'>
                </div>
                <div class="text-center">
                  <div class="text-center">
                    <a href=index.php?page=login>Masuk</a>
                  </div>
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-info btn-wd btn-md">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="copyright">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>,
          <a href="https://www.instagram.com/m_zhafran24" target="_blank">M_Zhafran24</a>  
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>