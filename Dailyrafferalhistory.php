<!DOCTYPE html>
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


  <link rel="stylesheet" href="./dist/sidebar-menu.css">
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

    <body>
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
                            <img src="img/Untitled (5).png">
                           
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
        


<?php 
if(isset($_GET['rafferalcommission']))
{
  $rafferalcommission = $_GET['rafferalcommission'];
}


?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>

                       Daily Rafferal History

                       
                    </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <button class="btn btn-success"><a href="withdraw.php?rafferalcommission=<?php echo $rafferalcommission; ?>" style="color: white;">Withdraw</a></button>


                  
                </section>


                <div class="content">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="box box-solid bg-black">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-10 col-sm-12">
                                                        <div class="well pull-right">
                                                             
                                                            <form action="" method="get" class="form form-inline">
                                                                
                         

                                                            </form>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                


<div class="table-container table-responsive">
    
    
        <table class="table">
            
            
                <thead>
                    <tr>
                    
                        <th class="orderable">
                            
                                <a href="?sort=description">Description</a>
                            
                        </th>
                    
                        <th class="orderable desc">
                            
                                <a href="?sort=date">Date</a>
                            
                        </th>
                    
                        <th class="orderable">
                            
                                <a href="?sort=amount">Amount</a>
                            
                        </th>
                          <th class="orderable">
                            
                                <a href="?sort=amount">Name</a>
                            
                        </th>
                       
                    
                    </tr>
                </thead>
            
            
            
                <tbody>
                 <?php 
                    $limit = 30;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    if($page == 0) {
                    echo $page =1;
                  }
                    $start = ($page - 1) * $limit;

                      $sql = "SELECT * FROM `rafferal` r inner join customer c on c.username = r.rafferalunderusername where c.id='".$id."' limit $start,$limit";
                      $run = mysqli_query($link,$sql);
                      if(mysqli_num_rows($run)>0)
                      {
                        while($row = mysqli_fetch_assoc($run))
                        {



                          ?>
                      

                    
                    <tr data-status="in" class="even" style="background-color: #20c997;color: white;">
                        
                            <td>Rafferal Income</td>
                        
                            <td><?php echo $row['todaydate'] ?></td>
                        
                            <td><?php echo $row['commission'] ?></td>
                              <td><?php echo $row['firstname'] . " " . $row['lastname'] ?></td>
                             
                        
                    </tr>
                    
             
                          <?php
                        }
                      }
                      else
                      {
                        echo "<tr><td colspan='3' style='text-align: center;'>no record</td></tr>";
                      }
                   ?> 
                
                </tbody>
            
            
            
            
        </table>
    
    

    
    
    
        <nav aria-label="Table navigation">
            <ul class="pagination">
            
              <?php

                      $result = "SELECT count(c.id) as c FROM `rafferal` r inner join customer c on c.username = r.rafferalunderusername where c.id='".$id."'";
                      $runresult = mysqli_query($link,$result);
                      if(mysqli_num_rows($runresult)>0)
                      {
                        while($row1 = mysqli_fetch_assoc($runresult))
                        {
                          $total = $row1['c'];
                          $pages = ceil($total/$limit);
                         if($pages < 0)
                         {
                          $pages = 1;
                         }
                          $previous = $page - 1;
                        if($previous == -1)
                        {
                         // $page = isset($_GET['page']) ? $_GET['page'] : 1;
                         // echo $page + 1;
                         // $previous = $page + 1;
                        //$page = $previous + 2;

                         
                        }
                         $next = $page +1;
                       ?>
                 <?php for($i=1;$i<$pages;$i++) {?>

                              <li><a id="try" href="DailyRoiHistory.php?page=<?php if($page>0){ echo $i;} ?>"><?php echo $i; ?></a></li>
                                <?php } ?>

                              
                    
                        <li class="active">
                            
                                <a href="DailyRoiHistory.php?page=<?php echo $next; ?>">
                                    Next
                                </a>
                            
                        </li>
                  
            
            </ul>
        </nav>
        
    
    
</div>


                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
               
  
<?php
 }
                      }

                    ?>
                </section>

              
</body>
</html>