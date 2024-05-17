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
      <title>input gelombang</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../style.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

      <!-- responsive css -->
      <link rel="stylesheet" href="../css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <?php 
session_start();
include "../koneksi.php"
      ?>
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="../images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../images/layout_img/user_img.jpg" alt="#" /></div>
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
                        <a href="../admin.php"  aria-expanded="false" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Data Master</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="../pages/registrasi.php">> <span>Registrasi</span></a></li>
                           <li><a href="input_gelombang.php">> <span>Input Gelombang</span></a></li>

                        </ul>
                     </li>
                     
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Pendaftaran</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="daftar_baru.php">> <span>Daftar Baru</span></a></li>
                           <li><a href="data_siswa.php">> <span>Data Siswa</span></a></li>
                           <li><a href="data_kaos.php">> <span>Data Kaos</span></a></li>
                        </ul>
                     </li>
                     
                    
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Pembayaran</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="transaksi.php">> <span>Transaksi</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Data Pembayaran</span></a>
                           </li>
                          
                        </ul>
                     </li>
                     <li><a href="../cek_login.php"><i class="fa fa-map purple_color2"></i> <span>Logout</span></a></li>
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
                           <a href="#"><img class="img-responsive" src="../images/logo/logo.png" alt="#" /></a>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../images/layout_img/user_img.jpg" alt="#" /><span class="name_user">bagas</span></a>
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

               <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Data Pembayaran </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead style="background-color:yellow;">
                        <tr align="center">
                          <th> No Transaksi </th>
                          <th> Tanggal </th>
                          <th> Nama Siswa </th>
                          <th> Keterangan </th>
                          <th> Action </th>
                          <th> Cetak </th>
                        </tr>
                      </thead>
                      <?php
                      $query = "SELECT * FROM data_bayar ORDER BY no_pendaftaran asc";
                     
                      $result = mysqli_query($koneksi, $query);
                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                      }

                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $edit_modal_id = "editModal" . $row['id'];// ID modal yang unik
                        $id = $row['id']; 
                      ?>
                        <tbody style="background-color: white;">
                          <td style="text-align: center;"><?php echo $row["no_pendaftaran"]; ?></td>
                          <td><?php echo $row["tanggal"]; ?></td>
                          <td><?php echo $row["nama_siswa"]; ?></td>
                          <td align="center"><?php if($row['keterangan'] == 'Lunas') {
                                                                echo '<div class = "badge badge-success" style="width: 70px;"> <b>Lunas</b> </div>';
                                                                }
                                                        ?>
                                                        <?php if($row['keterangan'] == 'Belum Lunas') {
                                                            echo '<div class = "badge badge-danger" style="width: 100px;"> <b>Belum Lunas</b> </div>';
                                                            }
                                                    ?>
                                          </td>
                          <td style="text-align: center;"> <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal" style="font-size: 15px;" data-target="#<?php echo $edit_modal_id; ?>">edit </button></td>
                          <td style="text-align: center;"><button type="button" class="btn btn-primary" onclick="cetak(<?php echo $row['id']; ?>)">Cetak</button></td>
                          <script>
                            function cetak(id) {
                                window.location.href = '../cetak.php?id=' + id;
                                  }
                                    </script>





                          <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form class="needs-validation" action="proses/pelunasan.php" method="post">
                                    <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">No Pendaftaran</label>
                                        <input type="text" class="form-control" style="color: black;" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="lastName">Tanggal</label>

                                        <input type="text" class="form-control" name="tanggal" style="color: black;" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                        <input type="hidden" name="ba" value="<?php echo $row['bayar']; ?>" />
                                        <div class="invalid-feedback">
                                          Valid last name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">Nama Siswa</label>
                                        <input type="text" class="form-control" style="color: black;" name="nama_siswa" id="firstName" placeholder="" value="<?php echo $row['nama_siswa'] ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <div class="col-md-6 mb-3">
                                        <label for="nominal">Sisa Pembayaran</label>
                                        <input type="number" class="form-control sisa-pembayaran" id="nominal_<?php echo $row['id']; ?>" style="color: black;" name="nominal" placeholder="" value="" required="" readonly>
                                        <input type="hidden" class="sisa" data-nom="<?php echo $row['jumlah']; ?>" data-pem="<?php echo $row['bayar']; ?>">
                                        <input type="hidden" name="sisaba" id="sisa" value=<?php echo $row['sisa'];?>">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="bayar">Pembayaran</label>
                                        <input type="text" class="form-control bayar" id="bayar_<?php echo $row['id']; ?>" name="bayar" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="kembalian">Kembalian</label>
                                        <input type="text" class="form-control kembalian" id="kembalian_<?php echo $row['id']; ?>" name="kembalian" placeholder="" value="<?php echo $row['kembalian'] ?>" required="">
                                        <div class="invalid-feedback">
                                          <input type="hidden" name="sisaba" id="sisa" value="<?php echo $row['sisa']; ?>">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="firstName">Keterangan</label>
                                        <input type="text" class="form-control keterangan" id="keterangan_<?php echo $row['id']; ?>" name="keterangan" placeholder="" value="<?php echo $row['keterangan'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <script>
                                        function hitungSisaPembayaran() {
                                          var sisaElements = document.querySelectorAll(".sisa");

                                          sisaElements.forEach(function(item) {
                                            var nom = parseFloat(item.getAttribute("data-nom"));
                                            var pem = parseFloat(item.getAttribute("data-pem"));

                                            var bali = nom - pem;

                                            if (bali < 0) {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = "";
                                            } else {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = bali.toFixed(2);
                                            }
                                          });
                                        }

                                        function hitungKembalian() {
                                          // Ambil elemen-elemen yang diperlukan
                                          var parent = this.closest('.modal-body');
                                          var sisaPembayaranElement = parent.querySelector(".sisa-pembayaran");
                                          var bayarElement = parent.querySelector(".bayar");
                                          var kembalianElement = parent.querySelector(".kembalian");
                                          var keteranganElement = parent.querySelector(".keterangan");

                                          // Periksa apakah elemen-elemen ditemukan
                                          if (!sisaPembayaranElement || !bayarElement || !kembalianElement || !keteranganElement) {
                                            console.error("One or more elements not found");
                                            return;
                                          }

                                          // Ambil nilai dari input
                                          var total_belanja = parseFloat(sisaPembayaranElement.value);
                                          var pembayaran = parseFloat(bayarElement.value);

                                          // Periksa apakah nilai-nilai valid
                                          if (isNaN(total_belanja) || isNaN(pembayaran)) {
                                            console.error("Invalid input values");
                                            return;
                                          }

                                          // Hitung kembalian
                                          var kembalian = pembayaran - total_belanja;

                                          // Update nilai kembalian dan keterangan
                                          if (kembalian < 0) {
                                            kembalianElement.value = '';
                                            keteranganElement.value = 'Belum Lunas';
                                          } else {
                                            kembalianElement.value = kembalian.toFixed(2);
                                            keteranganElement.value = 'Lunas';
                                          }
                                        }




                                        document.addEventListener("DOMContentLoaded", hitungSisaPembayaran);

                                        document.querySelectorAll('.bayar').forEach(item => {
                                          item.addEventListener('input', hitungKembalian);
                                        });

                                        document.querySelectorAll('.form-control').forEach(item => {
                                          item.addEventListener('input', hitungSisaPembayaran);
                                        });
                                      </script>





                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </tbody>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- TUTUP NAVBAR ISI -->


          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Reyz</span>
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
                      </div>
      </div>
      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../js/animate.js"></script>
      <!-- select country -->
      <script src="../js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../js/Chart.min.js"></script>
      <script src="../js/Chart.bundle.min.js"></script>
      <script src="../js/utils.js"></script>
      <script src="../js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../js/custom.js"></script>
      <script src="../js/chart_custom_style1.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>