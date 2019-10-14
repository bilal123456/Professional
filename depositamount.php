<!DOCTYPE html>
<html>
<?php session_start();
include('Admin/Database/Connection.php');
$email = $_SESSION['email'];
$id = $_SESSION['id'];


if(isset($_GET['deposit']))
{
    $deposit = $_GET['deposit'];
}
if(isset($_GET['packageid']))
{
    $package  = $_GET['packageid'];
}


 $selectusername = "select * from customer where id='".$id."'";
$run = mysqli_query($link,$selectusername);
while($row=mysqli_fetch_assoc($run))
{
    $fetchusername = $row['username'];
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
	<div class="container" style="position: relative;top: 70px;left: 50px;">
    <div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center" style="color: #ef5350">Deposit</h5>
            <form method="post" class="form-signin" enctype="multipart/form-data">
              <div class="form-label-group">
                 <div class="alert alert-danger alert-dismissable alert-link" id="alert">
    <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
    
       <span id="success_message"></span>
    
</div>
                 <label for="inputEmail">Payment Method</label>
                <input name="method" type="text" readonly="readonly" id="inputEmail" class="form-control form-input" placeholder="method" required autofocus value="BTC">
               
              </div>
              <div class="form-label-group">
                 <label for="inputEmail">Bitcoin Address</label>
                <input name="baddress" type="text" id="inputEmail" class="form-control form-input" style="background-color: white;color: black;" required autofocus>
               
              </div>
<label for="inputPassword">Amount</label>
              <div class="form-label-group">
                <input type="text" name="Amount" id="inputPassword" class="form-control form-input"  required value="<?php echo $deposit; ?>"  style="background-color: white;color: black;" >
                
              </div>
<label for="inputPassword">Receipt</label>
              <div class="form-label-group">
                <input type="file" name="img" id="inputPassword" class="form-control form-input"  style="background-color: white;color: black;"  required>
                
              </div>

             

              <div class="form-label-group">
                
                <input name="statu" type="hidden" id="inputEmail" class="form-control form-input" placeholder="Comfirm password" value="0" required autofocus>
               
              </div>
<br>
               
              <button name="deposit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" style="background-color: #bacb2f;
    border: 1px solid #bacb2f;
    border-radius: 20px;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .5px;
    padding: 10px 30px;
    text-transform: uppercase;
    -webkit-transition: all .4s;
    transition: all .4s;
    z-index: 9999!important;"> Deposit</button>
              <hr class="my-4">
           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
          

<script type="text/javascript">
    $('#alert').hide();
</script>
 

          <?php 
         // ob_start();



          if(isset($_POST['deposit']))
          {
          	
         
            $Amount = $_POST['Amount'];
            $statu = $_POST['statu'];
            $date = date("Y/m/d");
            $address = $_POST['baddress'];
            $image_temp =  $_FILES['img']['tmp_name'];
            $image_type = $_FILES['img']['type'];
            $image_name = $_FILES['img']['name'];

            if($Amount == 10)
            {
            echo  $insertactivationpackage = "insert into activationpackage(amount,customerid,bitcoinaddress,todaydate) values('".$Amount."','".$id."','".$address."','".$date."')";
              $runinsertacttivationpackage = mysqli_query($link,$insertactivationpackage);
               echo "<script type='text/javascript'>
            $(document).ready(function(e){
              $('#alert').show();
               // console.log(data);
            var data = 'Your deposit request has been submitted successfully';
                alert('your deposit request has been submitted successfully');
                $('#success_message').html(data);
                $('#success_message').css('color','white');

              });
            

setInterval(function(){ window.location.href = 'home.php'; }, 3000);</script>";
            }
            else
            {




           
             $upload = move_uploaded_file($_FILES["img"]["tmp_name"],'Customerdepositreceipt/' . $_FILES['img']['name']);




            $imgname = "Customerdepositreceipt/" . $image_name;
              $insert = "insert into customer_deposit(customerid,bitcoinaddress,amount,status,todaydate,image,startdate,day,dailyadd,package) values('".$id."','".$address."','".$Amount."','0','".$date."','".$imgname."','".$date."','0','0','".$package."')";
            $run = mysqli_query($link,$insert);
                if($run)
                {
                  if($Amount >= 200 && $Amount < 650)
            {
                $dailyRoiadd = 0.46;
                $insertroiadd = "INSERT INTO `dailyroi`(`start_date`, `current_date`, `addroi`, `startday`, `endday`, `dailyroiadd`, `status`,`customerid`) VALUES ('".$date."','".$date."','0','0','1200','".$dailyRoiadd."','1','".$id."')";
              $insertroiaddrun = mysqli_query($link,$insertroiadd);
            }
            else  if($Amount >= 650 && $Amount < 1500)
            {
 $dailyRoiadd = 1.73;
$insertroiadd = "INSERT INTO `dailyroi`(`start_date`, `current_date`, `addroi`, `startday`, `endday`, `dailyroiadd`, `status`,`customerid`) VALUES ('".$date."','".$date."','0','0','1200','".$dailyRoiadd."','1','".$id."')";
              $insertroiaddrun =  mysqli_query($link,$insertroiadd);
            }  
             else  if($Amount >= 1500 && $Amount < 2500)
            {
 $dailyRoiadd = 4.5;
  $insertroiadd = "INSERT INTO `dailyroi`(`start_date`, `current_date`, `addroi`, `startday`, `endday`, `dailyroiadd`, `status`,`customerid`) VALUES ('".$date."','".$date."','0','0','1200','".$dailyRoiadd."','1','".$id."')";
               $insertroiaddrun = mysqli_query($link,$insertroiadd);
            }
             else  if($Amount >= 2500 && $Amount < 5000)
            {
                 $dailyRoiadd = 7.5;
                 $insertroiadd = "INSERT INTO `dailyroi`(`start_date`, `current_date`, `addroi`, `startday`, `endday`, `dailyroiadd`, `status`,`customerid`) VALUES ('".$date."','".$date."','0','0','1200','".$dailyRoiadd."','1','".$id."')";
               $insertroiaddrun = mysqli_query($link,$insertroiadd);
               }
               else  if($Amount >= 5000)
            {
               $dailyRoiadd = 16.6;  
              $insertroiadd = "INSERT INTO `dailyroi`(`start_date`, `current_date`, `addroi`, `startday`, `endday`, `dailyroiadd`, `status`,`customerid`) VALUES ('".$date."','".$date."','0','0','1200','".$dailyRoiadd."','1','".$id."')";
               $insertroiaddrun = mysqli_query($link,$insertroiadd);
            }

           $checkrafferal = "SELECT * FROM `rafferal` where newregisterusername='".$fetchusername."' LIMIT 1
";
$runcheckrafferal = mysqli_query($link,$checkrafferal);
if(mysqli_num_rows($runcheckrafferal)>0)
{
    while($row = mysqli_fetch_assoc($runcheckrafferal))
    {
        $getaddrafferalcommission = $row['rafferalunderusername'];
    }
}
          if($Amount >= 200 && $Amount < 650)
            {
                $bonus = 24;

               $selecttotalcommision= "select * from rafferal  where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runtotalcommission = mysqli_query($link,$selecttotalcommision);
                if(mysqli_num_rows($runtotalcommission)>0)
                {
                    while($row = mysqli_fetch_assoc($runtotalcommission))
                    {
                        $commission = $row['totalcommission'];
                        $commission = $commission + $bonus;
                    }
                }
              $update = "update rafferal set commission='".$bonus."',totalcommission='".$commission."' where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runupdate = mysqli_query($link,$update);
                $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
                  $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);

            }else  if($Amount >= 650 && $Amount < 1500)
            {
                $bonus = 85;
                $selecttotalcommision= "select * from rafferal  where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runtotalcommission = mysqli_query($link,$selecttotalcommision);
                if(mysqli_num_rows($runtotalcommission)>0)
                {
                    while($row = mysqli_fetch_assoc($runtotalcommission))
                    {
                        $commission = $row['totalcommission'];
                        $commission = $commission + $bonus;
                    }
                }
              $update = "update rafferal set commission='".$bonus."',totalcommission='".$commission."' where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runupdate = mysqli_query($link,$update);
                $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
                  $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
            }
            
            else  if($Amount >= 1500 && $Amount < 2500)
            {
                $bouns = 375;
                $selecttotalcommision= "select * from rafferal  where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runtotalcommission = mysqli_query($link,$selecttotalcommision);
                if(mysqli_num_rows($runtotalcommission)>0)
                {
                    while($row = mysqli_fetch_assoc($runtotalcommission))
                    {
                        $commission = $row['totalcommission'];
                        $commission = $commission + $bouns;
                    }
                }
              $update = "update rafferal set commission='".$bouns."',totalcommission='".$commission."' where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runupdate = mysqli_query($link,$update);
                $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
                  $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
            }
            else  if($Amount >= 2500 && $Amount < 5000)
            {
                $bouns = 750;
               $selecttotalcommision= "select * from rafferal  where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runtotalcommission = mysqli_query($link,$selecttotalcommision);
                if(mysqli_num_rows($runtotalcommission)>0)
                {
                    while($row = mysqli_fetch_assoc($runtotalcommission))
                    {
                        $commission = $row['totalcommission'];
                        $commission = $commission + $bouns;
                    }
                }
              $update = "update rafferal set commission='".$bonus."',totalcommission='".$commission."' where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runupdate = mysqli_query($link,$update);
                $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
                  $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
            }
            else  if($Amount > 5000)
            {
               $bouns = 1050;
                $selecttotalcommision= "select * from rafferal  where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runtotalcommission = mysqli_query($link,$selecttotalcommision);
                if(mysqli_num_rows($runtotalcommission)>0)
                {

                    while($row = mysqli_fetch_assoc($runtotalcommission))
                    {

                        $commission = $row['totalcommission'];
                        $commission = $commission + $bouns;

                    }
                }

              $update = "update rafferal set commission='".$bouns."',totalcommission='".$commission."' where rafferalunderusername='".$getaddrafferalcommission."' and newregisterusername='".$fetchusername."'";
                $runupdate = mysqli_query($link,$update);

                $selecttotalmorecommission = "select * from rafferal where rafferalunderusername='".$getaddrafferalcommission."'";
                $selecttotalmorecommission = mysqli_query($link,$selecttotalmorecommission);
                $totalcommissioncount = 0;
                if(mysqli_num_rows($selecttotalmorecommission)>0)
                {
                  while($row = mysqli_fetch_assoc($selecttotalmorecommission))
                  {
                      $grandtotalcommission = $row['totalcommission'];
                      $totalcommissioncount =  $totalcommissioncount + $grandtotalcommission;


                  }
                }
                 $updaterecord = "update rafferal set totalcommission='".$totalcommissioncount."' where rafferalunderusername='".$getaddrafferalcommission."'";
                 $runupdaterecord = mysqli_query($link,$updaterecord);
            }
              }
            


          echo "<script type='text/javascript'>
            $(document).ready(function(e){
              $('#alert').show();
               // console.log(data);
            var data = 'Your deposit request has been submitted successfully';
                alert('your deposit request has been submitted successfully');
                $('#success_message').html(data);
                $('#success_message').css('color','white');

              });
            

setInterval(function(){ window.location.href = 'home.php'; }, 3000);</script>";


}
}

          ?>    
           


           
        </div>
    </div>
   

           <script src="/static/assets/vendor_components/jquery/dist/jquery.min.473957cfb255.js" type="text/javascript"></script>
       







    
    <link rel="stylesheet" type="text/css" href="/static/session_security/style.8908ffb3a65a.css"></body>
<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>



  <script src="./dist/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>
  </html>
  </html>
  </