<!DOCTYPE html>
<html>
<?php session_start();
include('Admin/Database/Connection.php');
if($email = $_SESSION['email'])
{
  $id = $_SESSION['id'];
//  $username = $_SESSION['username'];
}
else
{
  header("Location:Login.html");
}


?>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Us Crypto Stock</title>
        <link rel="icon" href="/static/assets/img/favicon.d1b45b458ef6.png" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.d59729439a20.css">
        <link rel="stylesheet" type="text/css" href="css/export.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-extend.0f113029eba9.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.7d46203b9170.css">
        <link rel="stylesheet" type="text/css" href="css/ionicons.40fa6b0f442e.css">
        <link rel="stylesheet" type="text/css" href="css/cryptocoins.566b3ccd0c95.css">
        <link rel="stylesheet" type="text/css" href="css/simple-line-icons.1edcd7ccb77b.css">
        <link rel="stylesheet" type="text/css" href="css/master_style.3bd2ed6f9dd9.css">
        <link rel="stylesheet" type="text/css" href="css/general.371ce09cb303.css">
        <link rel="stylesheet" type="text/css" href="css/_all-skins.663f7ae35658.css">
        <link rel="stylesheet" type="text/css" href="css/select2.min.4765adee4f66.css">
        <link rel="stylesheet" type="text/css" href="css/website.9576659c0ec6.css">
      <script type="text/javascript" src="css/sweetalert2@8.js"></script>
      <script type="text/javascript" src="css/api.js"></script>
      <link rel="stylesheet" type="text/css" href="css/jquery.loading.ca1694f83fd1.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./dist/sidebar-menu.css">
       
<style>
.custom-overlay {
  background-color: #adadad;
  opacity: 0.7;
  display: none;
}
.loading-spinner-container {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.lds-ring {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 51px;
  height: 51px;
  margin: 6px;
  border: 6px solid #fff;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #fff transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


</style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-126999378-1']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_setDomainName', 'fxtradingcorp.com']); _gaq.push(['_setAllowHash', false]); _gaq.push(['_trackPageLoadTime']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    </head>


<body class="hold-transition skin-green">
        
        

        <div class="wrapper page-dashboard">

            

        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- logo for regular state and mobile devices -->
            
                   
            
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" style="background-color: #9eba46;">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="col-5">

                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="search-box">
                            <a class="nav-link hidden-sm-down" href="javascript:void(0)">
                            <i class="mdi mdi-magnify"></i>
                            </a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>

       

        
        <aside class="main-sidebar" style="background-color: #1A2226 !important;">
            <!-- sidebar -->
            <section class="sidebar" >
                <!-- Sidebar user panel -->
                <div class="user-panel" style="height: 180px;">
                    <div class="ulogo">
                        <a href="/">
                            <!-- logo for regular state and mobile devices -->
                            <img src="img/Untitled (5).png" style="position: relative;top: -30px;">
                           
                        </a>
                    </div>
                </div>
 
    <ul class="sidebar-menu" style="background-color:#1A2226 !important;">

      <li>
        <a href="home.php">
          <i class="fa fa-dashboard sidebar-header"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="cryptopackage.html">
          <i class="fa fa-files-o"></i>
          <span>Package</span>
           <i class="fa fa-angle-left pull-right"></i>
        </a>
       
      </li>
      <li>
        <a href="rafferal.php">
          <i class="fa fa-th"></i> <span>Network</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      <li>
        <a href="history.php">
          <i class="fa fa-pie-chart"></i>
          <span>Wallet</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
       
        <ul class="sidebar-submenu">
           <li><a href="wallet.php"></i>Add Wallet </a></li>
           <li><a href="withdraw.php"></i>Withdraw </a></li>
           <li><a href="history.php"></i>Withdraw Report</a></li>
         
          
        </ul>
      </li>
    
      <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>Support</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
           <li><a href="contactus.php"></i>Add ticket</a></li>
          <li><a href="tickets.php"></i>Your Tickets</a></li>
          
        </ul>
      </li>

       <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>Materials</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
           <li><a href="ShowImages.php"></i>Image</a></li>
          <li><a href="ShowVedio.php"></i>Vedio</a></li>
          
        </ul>
      </li>


      <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>Setting</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
           <li><a href="changepassword.php"></i>Change Password</a></li>
          <li><a href="changeprofile.php"></i>Profile Setting</a></li>
          
        </ul>
      </li>


      <li>
        <a href="logout.php">
          <i class="fa fa-pie-chart"></i>
          <span>Logout</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
       
      </li>
        
    </ul>
  </section>
        </aside>
        

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                            <!-- RENOVATION -->
                            


                            <!-- ALERTS -->
                            
                            <div class="alert alert-info  alert-with-icon" data-notify="container" style="height: 90px;">
                                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="X">
                                  
                                </button>
                                 <?php 
                                   
                                    $sql = "select * from notification where status='0'";
                                    $run = mysqli_query($link,$sql);
                                    if(mysqli_num_rows($run)>0)
                                    {


                                    while($row = mysqli_fetch_assoc($run))
                                    {
                                        $title = $row['title'];
                                        $text = $row['text'];
                                    }
                                }
                                else
                                {
$title = "";
$text = "No Notification";
                                    
                                }
                                ?>
                                <span data-notify="message"><b><?php  echo $title;?> </b>.
                                   
                                    <?php echo $text; ?>
                                </span>
                            </div>
                            
                            <div class="alert alert-danger  alert-with-icon" data-notify="container">
                                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="X">
                                  
                                </button>
                                <span data-notify="message"><b>Next day withdrawal release - </b>10/20, October 20.</span>
                            </div>
                            

                    <div class="row">
                        <div class="col-12">
                            <div class="box box-inverse box-dark">
                                <div class="box-body tickers-block" style="text-align: center;">
                                    <h4>United State  clock</h4>
                                    <span id="clock">
                                            <?php 
                                            $amNY = new DateTime('America/New_York');

echo date("l jS \of F Y h:i:s A");


                                            ?>


                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="">
                                  



<div class="row">
                        <div class="col-12">
                            <div class="box box-inverse box-dark">
                                <div class="box-body tickers-block">
                                    <div class="tickercontainer" style="height: auto; overflow: hidden;"><div class="mask"><ul id="webticker-1" style="position: relative; overflow: hidden; float: left; font: bold 10px Verdana; list-style-type: none; margin: 0px; padding: 0px; width: 24522px; transition-timing-function: linear; transition-duration: 2.67812s; left: -133.906px;">
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">



                                   <li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">



<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">




<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">



<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">



<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">



<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">



<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">


<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">


<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

<li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img  src="images/BTC.svg" width="32" height="32"> Bitcoin cash
                                            <span class="text-green1"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/BTC.svg" width="32" height="32"> Bitcoin 
                                            <span class="text-green2"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i><img src="images/ETH.svg" width="32" height="32"> ETHREM
                                            <span class="text-green3"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/LTC.svg" width="32" height="32"> Litecoin
                                            <span class="text-green4"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> <img src="images/XRP.svg" width="32" height="32"> Ripple
                                            <span class="text-green5"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class=""></i> </i><img src="images/ETH.svg" width="32" height="32">Ethrem Classic
                                            <span class="text-green6"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">

                                           
                                          
                                          
                                           
                                </div>
                            </div>
                        </div>
                    </div>


                                    
                                  

        <!-- <li id="b">ENJ/USD
            <ul>
                <ol id="h"></ol>
            </ul>
        </li>
        <li id="b">ETT/USD
            <ul>
                <ol id="i"></ol>
            </ul>
        </li> -->
        <!-- <li id="b">KIN/USD
            <ul>
                <ol id="j"></ol>
            </ul>
        </li> -->
        <!-- <li id="b">MTL/USD
            <ul>
                <ol id="k"></ol>
            </ul>
        </li>
        <li id="b">MTX/USD
            <ul>
                <ol id="l"></ol>
            </ul>
        </li> -->
<!--        <li id="b">NULS/USD
            <ul>
                <ol id="m"></ol>
            </ul>
        </li>
        <li id="b">OAX/USD
            <ul>
                <ol id="n"></ol>
            </ul>
        </li> -->
<!--        <li id="b">SALT/USD
            <ul>
                <ol id="o"></ol>
            </ul>
        </li>
        <li id="b">SBC/USD
            <ul>
                <ol id="p"></ol>
            </ul>
        </li>
        <li id="b">ETH/USD
            <ul>
                <ol id="q"></ol>
            </ul>
        </li>
        <li id="b">BTC/USD
            <ul>
                <ol id="r"></ol>
            </ul>
        </li>
        <li id="b">XRP/USD
            <ul>
                <ol id="s"></ol>
            </ul>
        </li>
        <li id="b">LTC/USD
            <ul>
                <ol id="t"></ol>
            </ul>
        </li>
        <li id="b">DASH
            <ul>
                <ol id="u"></ol>
            </ul>
        </li> -->
</ul>

<style type="text/css">
    .marquee  li 
    {
        display: block;float: left;
    }
    .marquee li .textcolor
    {
        background-color:blue;
    }
    .marquee  li ul ol
    {
        position: relative;
        left: -40px;
        top: -10px;
        color: green;
        overflow: hidden;
        white-space: nowrap;
        animation: marquee 15s linear infinite;
    }

    .marquee  {

  overflow: hidden;

}

    
</style>
                                



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                    <div class="row" style="position: relative;left: 50px;">
                        <div class="col-lg-4 col-md-6">
                            <div class="box pull-up" id="boxBalance">
                                <div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>

<?php  
 $collectpackage = "select * from customer c
inner join customer_deposit d on
c.id = d.customerid
 where c.id='".$id."'
 order by d.id DESC LIMIT 1";
$runpackage = mysqli_query($link,$collectpackage);
if(mysqli_num_rows($runpackage)>0)
{
    while($row = mysqli_fetch_assoc($runpackage))
    {
        $package = $row['package'];
        $amount = $row['amount'];

    }

}
else
{
  $package = "";
  $amount = "0";
}


?>

                                            <h3 class="no-margin text-bold" style="color: #03a9f3"><?php echo $package; ?> Package</h3>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>
                                            <p class="no-margin font-weight-600 dollar-value" style="position: relative;top: 30px;left: 20px;">
                                          

    <span style="position: relative;left: 20px;">U$ <strong id="spanBalance" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $amount ?></strong></span>
 

<?php 
 $selectroidata = "SELECT * FROM `dailyroi` where customerid='".$id."' order by id DESC LIMIT 1";
$runselectroidata = mysqli_query($link,$selectroidata);
if(mysqli_num_rows($runselectroidata)>0)
{
  while($row = mysqli_fetch_assoc($runselectroidata))
  {
    $startdate = $row['start_date'];
    $currentdate = $row['current_date'];
    $dailyroiadd = $row['dailyroiadd'];
    $startday = $row['startday'];
    $addroi = $row['addroi'];
    $endday = $row['endday'];
    $currentnewdate = date("Y/m/d");

    $start_date = strtotime($startdate); 
 $end_date = strtotime($currentdate); 
 $showdatedifference =  ($end_date - $start_date)/60/60/24; 
    if($showdatedifference >= 0)
    {
      

      $getagainlogin = "select * from dailyroi where customerid='".$id."' and `current_date`='".$currentnewdate."'";
      $rungetagainlogin = mysqli_query($link,$getagainlogin);
      if(mysqli_num_rows($rungetagainlogin) > 0)
      {
        break;
      }
      else
      {
        $start_date = strtotime($startdate);
      $endnewdate = strtotime($currentnewdate);
      $showdatedifference =  ($endnewdate - $start_date)/60/60/24;


       $newdailyroidadd =   $showdatedifference * $dailyroiadd;
       $updatestartdae =  $showdatedifference;
  $insertsss = "insert into dailyroi(start_date,`current_date`,addroi,startday,endday,dailyroiadd,`status`,customerid) values('".$startdate."','".$currentnewdate."','".$newdailyroidadd."','".$updatestartdae."','".$endday."','".$dailyroiadd."','1','".$id."')";


$run  = mysqli_query($link,$insertsss);



// echo "<script>alert($newdailyroidadd)</script>";
//         echo "<script>alert($updatestartdae)</script>";
//         echo "<script>alert($insertsss)</script>";

    }

  }



  }
}
else
{
  $dailyroiadd = "0";
}



?>
  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs1" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-4 col-md-6" id="nextpage">
                            <div class="box pull-up" id="boxBalance">
                                <a href=""><div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h4 class="no-margin text-bold" style="color: #03a9f3;"><a href="DailyRoiHistory.php" style="color: #03a9f3;">Daily Roi Income</a></h4>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>

                                            <p class="no-margin font-weight-600 dollar-value" style="position: relative;top: 30px;left: 20px;">
                                                 <span style="position: relative;left: 20px;">U$ <strong id="spanTotalBalance"><?php echo $dailyroiadd; ?></strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </div></a>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs1" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-4 col-md-6">
                            <div class="box pull-up" id="boxTotalBalance">
                                <div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h3 class="no-margin text-bold" style="color: #03a9f3;">Available Balance</h3>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>
                                            <?php 
                                          $selectroidatanew = "SELECT * FROM `dailyroi` where customerid='".$id."' order by id DESC LIMIT 1";
$runselectroidatanew = mysqli_query($link,$selectroidatanew);
if(mysqli_num_rows($runselectroidatanew)>0)
{


while($rowselectroidatanew = mysqli_fetch_assoc($runselectroidatanew))
{
  $dailyroinewupdate = $rowselectroidatanew['addroi'];

  }

  }
  else
  {
    $dailyroinewupdate = "0";
  }
?>
                                            <p class="no-margin font-weight-600 dollar-value" style="position: relative;top: 30px;left: 20px;">
                                                <span style="position: relative;left: 20px;">U$ <strong id="spanTotalBalance" ><?php echo $dailyroinewupdate;  ?></strong></span>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs2" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                            <?php 
include('Admin/Database/Connection.php');

                            $directrafferal = "select * from customer c inner join rafferal r on c.username = r.rafferalunderusername where c.id='".$id."' limit 1";


                            $rundirectrafferal = mysqli_query($link,$directrafferal);
                            if(mysqli_num_rows($rundirectrafferal)>0)
                            {
                              while($row = mysqli_fetch_assoc($rundirectrafferal))
                              {


                                $commission = $row['totalcommission'];


                             

                            ?>
  <div class="row" style="position: relative;left: 380px;">
<div class="col-lg-12" id="nextpage1">
                            <div class="box pull-up" id="boxBalance">
                                <a href=""><div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h4 class="no-margin text-bold" style="color: #03a9f3;"><a href="Dailyrafferalhistory.php" style="color: #03a9f3;">Direct Rafferal</a></h4>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>

                                            <p class="no-margin font-weight-600 dollar-value" style="position: relative;top: 30px;left: 20px;">
                                                 <span style="position: relative;left: 20px;">U$ <strong id="spanTotalBalance"><?php echo $commission; ?></strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </div></a>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs1" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

<?php 
   } 
 }else
   {
   $commission = 0;
    ?>
  <div class="row" style="position: relative;left: 380px;">
  <div class="col-lg-12" id="nextpage1">
                            <div class="box pull-up" id="boxBalance">
                                <a href=""><div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h4 class="no-margin text-bold" style="color: #03a9f3;"><a href="#" style="color: #03a9f3;">Direct Rafferal</a></h4>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>

                                            <p class="no-margin font-weight-600 dollar-value" style="position: relative;top: 30px;left: 20px;">
                                                 <span style="position: relative;left: 20px;">U$ <strong id="spanTotalBalance">0</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </div></a>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs1" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>



    <?php


   }
                            

?>

<?php 

$sql = "SELECT * FROM `customer` c inner join customer_deposit e on e.customerid = c.id where c.id='".$id."' limit 1";
$runsql = mysqli_query($link,$sql);
if(mysqli_num_rows($runsql)>0)
{
  while($row = mysqli_fetch_assoc($runsql))
  {
    ?>





                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <!-- Profile Image -->
                            <div class="box bg-inverse bg-dark bg-hexagons-white" id="boxResume">
                                <div class="box-body box-profile">
                                    <h3 class="profile-username text-center"><span id="spanResumeUsername"><?php echo $row['username']; ?></span></h3>
                                    <h3 class="profile-username text-center" id="itemCarrerImg"></h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="profile-user-info">
                                                <p>
                                                    <i class="fa fa-paper-plane pr-15"></i>
                                                    <strong>Plan:<?php echo $row['package']; ?></strong> <span id="spanPlanStr"></span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-calendar pr-15"></i>
                                                    <strong>Status: <?php if($row['status'] == '0'){echo "pending";} else {echo "Active";} ?> </strong> <span id="spanResumoStatus"></span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-tree pr-15"></i>
                                                    <strong>Binary qualified:</strong>
                                                    <span id="spanResumoBinaryQualify">NO</span>
                                                </p>
                                               
                                                <p>
                                                    <i class="fa fa-anchor pr-15"></i>
                                                    <strong>

                                                      <?php $link = "http://www.uscryptostok.com/Signup.php?ref=".$row['username']."";

                                                      ?>
                                                      <a href="rafferal.php"> Invite link:</a><br>

                                                    

                                                     
                                                     

                                                   </strong>
                                                    </p><div class="clearfix"></div>
                                                    <div id="itemInviteLink">
                                                    <h3>You need an activated plan for invite users.</h3>
                                                    </div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                            </div>
                        <?php
  }
}



?>
                        </div>
                        <div class="col-lg-9">
                            <!-- TEAMS -->
                         
                         
   <div class="col-md-12">
                                <div class="box">
                                  <div class="box-header">
                                    <h4 class="box-title">Tutorials and Materials</h4>
                                    <div class="box-controls pull-right">
                                      <a class="btn btn-sm btn-info" href="ShowVedio.php">Click here</a>
                                    </div>
                                  </div>

                                  <div class="box-body">
                                    <p>See our videos explaining step by step the  <b style="color: green; font-size: 20px;">Us Crypto Stock</b>.</p>
                                    <p>Take your doubts along with our videos that will be posted on this page so that you can enjoy all the benefits of the best investment company in the world.</p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <div id="overlayMapping">
            </div>
        </div>

        
          
<div class="modal fade modal-general" id="modal-general" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modalDetailTitle">System rules - Notes</h4>
      </div>
      <div class="modal-body" id="bodyDetailsModal">
        <img src="/static/assets/img/release_system_notes_en_us.b4f3d71d1b98.jpg" class="img-responsive document">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        

        

<div class="modal fade modal-general" id="modal-close-general" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modalDetailTitle">Press release</h4>
      </div>
      <div class="modal-body" id="bodyDetailsModal">
        <img width="250" src="/static/assets/img/logo-small.3ea85e78279e.png" class="img-responsive document">
        <p>
            It was a pleasure to have you on our platform.<br><br>
            Your cycle with the FX Trading Corporation comes to an end, receiving until this date, the importance of the maximum percentage of gain or the full recovery of your investment.
            We appreciate the partnership over these months.<br><br>
            Confident that we comply with our obligations, we are available to resolve any question through the support channel.
        </p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Fechar</button>
          <button type="button" onclick="setHideModal()" class="btn btn-default pull-right" data-dismiss="modal" style="margin-right:10px;">I Don't want see more this information</button>
      </div>
    </div>
  </div>
</div>


        

<div class="modal fade modal-general" id="modal-close-general" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modalDetailTitle">Press release</h4>
      </div>
      <div class="modal-body" id="bodyDetailsModal">
        <img width="250" src="/static/assets/img/logo-small.3ea85e78279e.png" class="img-responsive document">
        <p>
            It was a pleasure to have you on our platform.<br><br>
            Your cycle with the FX Trading Corporation comes to an end, receiving until this date, the importance of the maximum percentage of gain or the full recovery of your investment.
            We appreciate the partnership over these months.<br><br>
            Confident that we comply with our obligations, we are available to resolve any question through the support channel.
        </p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Fechar</button>
          <button type="button" onclick="setHideModal()" class="btn btn-default pull-right" data-dismiss="modal" style="margin-right:10px;">I Don't want see more this information</button>
      </div>
    </div>
  </div>
</div>




       <!--   Core JS Files   -->
       <script src="/static/assets/vendor_components/jquery/dist/jquery.min.473957cfb255.js" type="text/javascript"></script>
       







    
    <link rel="stylesheet" type="text/css" href="/static/session_security/style.8908ffb3a65a.css"></body>
<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>



  <script src="./dist/sidebar-menu.js"></script>
  <script>
   // $.sidebarMenu($('.sidebar-menu'))
  </script>
<script type="text/javascript">
    

    $(document).ready(function(){


    $(function(){

        $.ajax({
            type:'GET',
            url:"http://api.coinlayer.com/api/live?access_key=7b7bf4d01cc6e25eb34b61859858992f",
            dataType:'json',
            success:function(data)
            {
             // alert(data);
              console.log(data);
                
              //  var ABC = data['rates'].BTC

              //  var ACP = data["rates"].BTCA
                // var ACT = data["rates"].ETH
                // var AIB = data["rates"].LTC
                // var AST = data["rates"].RIYA
                // var BAR = data["rates"].XLM


                // var BTCA = data["rates"].BTCA
                // var ENJ = data["rates"].ENJ
                // var ETT = data["rates"].ETT
                // var KIN = data["rates"].KIN
                // var MTL = data["rates"].MTL


                // var MTX = data["rates"].MTX
                // var NULS = data["rates"].NULS
                // var OAX = data["rates"].OAX
                // var SALT = data["rates"].SALT
                // var SBC = data["rates"].SBC





                // var ETH = data["rates"].ETH
                // var BTC = data["rates"].BTC
                // var acp = data["rates"].XRP
                // var LTC = data["rates"].LTC
                // var DASH = data["rates"].DASH
            

                
                $('.text-green1').html(ABC);$('#.text-green2').html(ACP);
                $('#.text-green3').html(ACT);
                $('#.text-green4').html(AIB);$('#.text-green15').html(AST);
                $('#.text-green6').html(ETH);

              // //  $('#f').append(BAR);
              //   $('#g').html(BTCA);
                // $('#h').append(ENJ);
                // $('#i').append(ETT);
                // $('#j').append(KIN);
                // // $('#k').append(MTL);
                // $('#l').append(MTX);
                // $('#m').append(NULS);$('#n').append(OAX);
                // $('#o').append(SALT);
                // $('#p').append(SBC);$('#q').append(ETH);
                // $('#r').append(BTC);
                // $('#s').append(acp);$('#t').append(LTC);
                // $('#u').append(DASH);
                
               //  $('#add').val(ABC);
               //  $('#add1').val(ACP);
               //  $('#add2').val(ACT);
               //  $('#add3').val(AIB);
               //  $('#add4').val(BTCA);


               // var id =  $('#add').val();
               // alert(id);
                
                // $('#getdata').text(ETH + "       " + BTC + "  "  + acp + "  " + LTC + "  " + DASH );

                // console.log(acp);console.log(btc);
            }
        })
    })

    $('.mask').marquee({
  direction: 'left',
  speed:20,
});

      $('#nextpage').click(function(e)
    {

window.location.href = "DailyRoiHistory.php";
    });

          $('#nextpage1').click(function(e)
    {

window.location.href = "Dailyrafferalhistory.php?rafferalcommission=<?php echo $commission;?>";

    });
  

  });



</script>
<style type="text/css">
  .text-green1{
   color:#9eba46;
  }
  .text-green2
  {
   color:#9eba46;
  }
  .text-green3
  {
       color:#9eba46;
  }
  .text-green4
  {
       color:#9eba46;
  }
  .text-green5
  {
       color:#9eba46;
  }
  .text-green6
  {
       color:#9eba46;
  }
 
 
</style>
 <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>

</body>
</html>