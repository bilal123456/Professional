
<html>
<?php session_start();
include('Admin/Database/Connection.php');
if($email = $_SESSION['email'])
{
  $id = $_SESSION['id'];
}
else
{
  header("Location:login.html");
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
        
  <input type="hidden" name="customerid" value="<?php echo $id; ?>" id="customerid">      

          
<?php
 $availablebalance = "SELECT * FROM `dailyroi` where customerid='".$id."' order by id DESC LIMIT 1
";
$run = mysqli_query($link,$availablebalance);
if(mysqli_num_rows($run)>0)
{
  while($row = mysqli_fetch_assoc($run))
  {
    $addroi = $row['addroi'];
  }
}
else
{
  $addroi = 0;
}

 ?>



           <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Withdrawal
                    </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">
                            <i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Withdrawal</li>
                    </ol>
                </section>
                <div class="content">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-6">
                                                      
                                <div class="box box-solid bg-dark">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <span id="nowithdraw"></span>
                                        <h4 class="card-title">BALANCE AVAILABLE &nbsp;:  &nbsp;$ <?php

                                        if(isset($_GET['rafferalcommission']))
                                        {
                                          $g = $_GET['rafferalcommission'];
                                          echo $g;
                                          echo "<input type='hidden' id='rafferalcommission' value='".$g."'";
                                        }
                                        else
                                        {
                                          echo $addroi;
                                        }


                                          ?>
                                          <input type="hidden" id="availablebalancestore" value="<?php echo $addroi; ?>">
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                            <p></p><h4>Payment Discount: <spam class="badge badge-default">6%</spam></h4><p></p>
                                            <span id="succussmeage"></span>
                                            </div>
                                            <?php 
                                            $lastwithdrawal = "SELECT * FROM `customer_withdraw` where customerid='".$id."' order by id DESC LIMIT 1";
                                            $run = mysqli_query($link,$lastwithdrawal);
                                            if(mysqli_num_rows($run)>0)
                                            {
                                              if($row = mysqli_fetch_assoc($run))
                                              {
                                                $todaylastwithdrawal = $row['todaydate'];
                                                $timelastwithdrawal = $row['time'];
                                           ?>
                                            <div class="col-lg-6 col-sm-12">
                                                <p></p><h4>Last Withdrawal: <spam class="badge badge-default"><?php echo $todaylastwithdrawal; ?>, <?php echo $timelastwithdrawal; ?></spam></h4><p></p>
                                            </div>
                                            <?php 


                                          }
                                        }

                                     


                                            ?>
                                        </div>


<div class="alert alert-danger alert-dismissable alert-link" id="alert">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
    
       <span id="success_message"></span>
    
</div>
                                         <div class="form-label-group">
                 <label for="inputEmail">Bitcoin Address</label>
                <input name="baddress" type="text" id="bitcoin" class="form-control form-input" placeholder="Bitcoin Address" required autofocus>
               
              </div>
<label for="inputPassword">Amount</label>
              <div class="form-label-group">
                <input type="text" name="Amount" required id="amount" class="form-control form-input" >
                
              </div>


              <label for="inputPassword">Total</label>
              <div class="form-label-group">
                <input type="text" name="Withdo" id="witdraw" class="form-control form-input" >
                
              </div>

<input type="hidden" name="statu" value="0">

                                        
                                      
                                       <br>
                                          
                                            <button type="withdraw" name="Withdrawbtn" id="btn-confirm"   class="btn btn-block btn-success btn-lg">WITHDRAWAL</button>
                                       
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            
                            <div class="col-6" >                            
                                <div class="alert alert-danger  alert-with-icon" data-notify="container" style="background-color: #ef5350;">
                                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                       
                                    </button>
                                    <span data-notify="message"><b>WITHDRAWAL INFORMATION</b>
                                        <p>1- Withdrawal payments are processed Monday through Friday.</p>
                                        <p>2- After making the request its withdrawal will begin to be processed after 24h.</p>
                                        <p>3- Payments may take 1-3 business days to complete.</p>
                                        <p>4- After confirming payment by email it may take 24 hours for the blockchain to register the transaction.</p>
                                        <p>5- For the withdrawals made on Fridays, payments will be processed on the Monday.</p>
                                       
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>




<div class="alert" role="alert" id="result"></div>
 </form>



  <script src="/static/assets/vendor_components/jquery/dist/jquery.min.473957cfb255.js" type="text/javascript"></script>
       







    
    <link rel="stylesheet" type="text/css" href="/static/session_security/style.8908ffb3a65a.css"></body>
<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>



  <script src="./dist/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>
</html>
   
           


           
        </div>
    </div>

   

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="/static/assets/vendor_components/jquery/dist/jquery.min.473957cfb255.js" type="text/javascript"></script>
       






 <input type="hidden" value="<?php echo  date("Y/m/d"); ?>" id="date">
  <input type="hidden" value="<?php echo  date("l"); ?>" id="today">

    
    <link rel="stylesheet" type="text/css" href="/static/session_security/style.8908ffb3a65a.css"></body>
<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>



  <script src="./dist/sidebar-menu.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

$('#alert').hide();

          $('#btn-confirm').click(function(){
            var customerid = $('#customerid').val();
            var bitcoin = $('#bitcoin').val();
            var amount = $('#amount').val();

            var witdraw = $('#witdraw').val();
            var status = 0;
            var todaydate = $('#date').val();
            var today = $('#today').val();
            $.ajax({
              url:"withdrawrequest.php",
              method:"post",
              data:{customerid:customerid,bitcoin:bitcoin,witdraw:witdraw,status:status,todaydate:todaydate,today:today,amount:amount},
              success:function(data)
              {
               // alert(data);
                $('#alert').show();
               // console.log(data);
               // alert(data);
                $('#success_message').html(data);
                $('#success_message').css('color','white');
              }
            });


            




          });


           $('#btn-confirm').click(function(){
            var customerid = $('#customerid').val();
            var bitcoin = $('#bitcoin').val();
            var amount = $('#amount').val();

            var witdraw = $('#witdraw').val();
            var status = 0;
            var todaydate = $('#date').val();
            var today = $('#today').val();
            var rafferalammount = $('#rafferalcommission').val();
            $.ajax({
              url:"withdrawrequest.php",
              method:"post",
              data:{rafferalammount:rafferalammount,customerid:customerid,bitcoin:bitcoin,witdraw:witdraw,status:status,todaydate:todaydate,today:today,amount:amount},
              success:function(data)
              {
               // alert(data);
                $('#alert').show();
               // console.log(data);
               // alert(data);
                $('#success_message').html(data);
                $('#success_message').css('color','white');
              }
            })




          });


          });



         // $('#nowithdraw').hide();
          

            $(document).on('keyup','#amount',function(){
               var id =  $(this).val();

                var total = id * 6/100;
                 var show  = id - total;
               //alert(total);
               $('#witdraw').val(show);


                
               });
               

              

//             });
//         });
    </script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  
  <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>
</body>

</html>