<?php

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>BAGAS X VITO </h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>PPDB</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard"  aria-expanded="false" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Data Master</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="pages/registrasi.php">> <span>Registrasi</span></a></li>
                           <li><a href="pages/input_gelombang.php"> <span>Input Gelombang</span></a></li>

                        </ul>
                     </li>
                     
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Pendaftaran</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="pages/daftar_baru.php">> <span>Daftar Baru</span></a></li>
                           <li><a href="pages/data_siswa.php">> <span>Data Siswa</span></a></li>
                           <li><a href="pages/data_kaos.php">> <span>Data Kaos</span></a></li>
                        </ul>
                     </li>
                     
                    
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Pembayaran</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="pages/transaksi.php">> <span>Transaksi</span></a>
                           </li>
                           <li>
                              <a href="pages/data_pembayaran.php">> <span>Data Pembayaran</span></a>
                           </li>
                          
                        </ul>
                     </li>
                     <li><a href="cek_login.php"><i class="fa fa-map purple_color2"></i> <span>Logout</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="#"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">vito admin</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h3>halo vito</h3>
                              <br>
                              <h2>anda sebagai:admin</h2>
</br>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                     <?php
                     include "koneksi.php";
                           $query = "SELECT COUNT(*) AS total_siswa FROM data_siswa";
                           $result = mysqli_query($koneksi, $query);
                           
                           if (!$result) {
                              die("Query error: " . mysqli_error($koneksi));
                           }

                           $row = mysqli_fetch_assoc($result);
                           $total_siswa = $row['total_siswa'];

                           $koneksi->close();
                           ?>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $row['total_siswa'];?></p>
                                    <p class="head_couter">jumlah pendaftar</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">5</p>
                                    <p class="head_couter">jumlah jurusan</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php 
     include 'koneksi.php';
    $query_tanggal = "SELECT tanggal FROM data_bayar ORDER BY tanggal DESC LIMIT 1";
    $result_tanggal = mysqli_query($koneksi, $query_tanggal);

    if(!$result_tanggal){
        die("Query error: " . mysqli_error($koneksi));
    }
    $row_tanggal = mysqli_fetch_assoc($result_tanggal);
    $tanggal = $row_tanggal['tanggal'];
    $query ="SELECT SUM(bayar - kembalian)AS total_income FROM data_bayar WHERE tanggal ='$tanggal'";
    $result = mysqli_query($koneksi,$query);

    if(!$result){
        die("Query error: " . mysqli_error($koneksi));
    }
    $row=mysqli_fetch_assoc($result);
    $total_income=$row['total_income'];
    ?> 
 
                           <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">Rp. <?php echo number_format($total_income, 0,',', '.'); ?> </p>
                                    <p class="head_couter">income harian</p>
                                 </div>
                              </div>
                           </div>
                     </div>
                           <footer class="footer">
                        <?php
                        include 'koneksi.php';
                           $query = "SELECT SUM(bayar - kembalian) AS total_pengurangan FROM data_bayar";
                           $result = mysqli_query($koneksi, $query);
                           
                           if (!$result) {
                              die("Query error: " . mysqli_error($koneksi));
                           }

                           $row = mysqli_fetch_assoc($result);
                           $total_pengurangan = $row['total_pengurangan'];
                           $koneksi->close();
                           
                           ?>
                        
                           <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="d-block text-center text-sm-left d-sm-inline-block" style="font-size:
                               20px;">RP.<?php echo $row['total_pengurangan'];?></span>
                        </div>
                        </footer>
                        

                       <div class="container-fluid pt-4 px-4">
                        <div class="bg-green rounded-top p-4">
                         
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>