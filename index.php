<?php 
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","kpcoba"); 


if(!isset($_SESSION['admin']))
{
    echo"<script>alert('Anda harus login');</script>";
    echo"<script>location='login.php'</script>";
    exit();
}



 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>API Telegram</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">API Telegram</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Tanggal : xx xx xxxx &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li> <a href="index.php"><i class="fa fa-home fa-3x"></i> Home</a></li>
                    <li> <a href="index.php?halaman=coba"><i class="fa fa-send fa-3x"></i> Kirim Pesan</a></li>
                    <li> <a href="index.php?halaman=pelanggan"><i class="fa fa-user fa-3x"></i> Pelanggan</a></li>
                    <li> <a href="index.php?halaman=histori"><i class="fa fa-clock-o fa-3x"></i> Histori</a></li>
                    <li> <a href="index.php?halaman=logout"><i class="fa fa-power-off fa-3x"></i> Logout</a></li>
                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <?php 
              if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="coba")
                    {
                        include 'coba.php';
                    }
                    else if($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                     else if($_GET['halaman']=="histori")
                    {
                        include 'histori.php';
                    }
                    else if($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                } 
              else
                {
                    include 'home.php';
                }?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
