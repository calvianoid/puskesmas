<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>DATA SUPPLIER</title>
    <link href="<?php echo base_url();?>assets/images//icon/logo_puskesmas_mini.png" type='image/x-icon' rel='shortcut icon'>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view('template/header_mobile.php'); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('template/menu_sidebar.php');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
        
        <!-- HEADER DESKTOP-->
        <?php $this->load->view('template/header_desktop.php');?>
        <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <a class="au-btn au-btn-icon au-btn--blue" href="<?php echo base_url('supplier/tambah_supplier');?>">
                                        <i class="zmdi zmdi-plus"></i>Tambah Data</a>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="table-responsive">
                     <center>
                            <h1><?php echo $judul; ?></h1>
                            </br>
                            <table border="1" class="table">
                            <thead class="thead-dark">
                            <tr align="center">
                                <th>KODE SUPPLIER</th>
                                <th>NAMA SUPPLIER</th>
                                <th>ALAMAT</th>
                                <th>NO. TELEPON</th>
                                <th><a class='fa fa-cog'></a></th>
                            </tr>
                            </thead>
                            <?php
                            foreach($tabel as $hasil)
                            {
                                echo "<tr align='center'><td>".$hasil->kode_supplier."</td>";
                                echo "<td>".$hasil->nama_supplier."</td>"; 
                                echo "<td>".$hasil->alamat."</td>";  
                                echo "<td>".$hasil->no_telpon."</td>"; 
                                echo "<td><a href='".base_url()."supplier/ubah_supplier/$hasil->kode_supplier'><button class='btn btn-success'><i class='fa fa-magic'></i></button></a>";
                                echo "<a href='".base_url()."supplier/hapus_supplier/$hasil->kode_supplier'><button class='btn btn-danger'><i class='fa fa-eraser'></i></button></a></td></tr>";
                            }
                            ?>
                        </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                <p>Copyright © 2019 Puskesmas Pembantu Kedung Waringin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->