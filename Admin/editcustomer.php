<?php include('Database/Connection.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Crypto Stock</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color: #225269;">
            <div class="sidebar-header" style="background-color: #275B70;">
                <h3>Crypto Stock</h3>
            </div>

             <ul class="list-unstyled components" style="color: white;">
                
               
                <li class="active" class="arrow-down">
                    <a href="home.html">Dashboard</a>
                </li>
                 <li>
                    <a href="profile.html">Profile</a>
                </li>
                
                <li>
                    <a href="rafferal.html/rafferalid=username">My direct refral</a>
                </li>
                <li>
                    <a href="wallet.html">Wallet
</a>
                </li>
                  <li>
                    <a href="packages.html">Packges
</a>
                </li>
                <li>
                    <a href="support.html">Support
</a>
                </li>
               
            </ul>
           
        </nav>
        <?php 
        if(isset($_GET['id']))
        {
        $id = $_GET['id'];
        $sql = "select * from customer where id='".$id."'";
        $run = mysqli_query($link,$sql);
        if(mysqli_num_rows($run) >0)
        {
        	while($row = mysqli_fetch_assoc($run))
        	{
        		$firstname = $row['firstname'];
        		$lastname = $row['lastname'];
        		
        		
        		$password = $row['Password'];
        		
        	}
        }
    }
        ?>

        <!-- Page Content  -->
        <div id="content" style="background: #4C2EA2; color: black;">

        			<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Update Customer</h5>
    <form method="post">
              
              <div class="form-label-group">
                 <label for="inputEmail">First Name</label>
                <input type="text" name="firstname" id="inputEmail" class="form-control form-input" placeholder="First Name" value="<?php echo $firstname ?>" required autofocus>
               
              </div>
              <div class="form-label-group">
                 <label for="inputEmail">Last Name</label>
                <input type="text" name="lastname" value="<?php echo $lastname ?>" id="inputEmail" class="form-control form-input" placeholder="Last Name" required autofocus>
               
              </div>
            
              <div class="form-label-group">
                 <label for="inputEmail">Password</label>
                <input name="password" value="<?php echo $password ?>" type="text" id="inputEmail" class="form-control form-input" placeholder="Password" required autofocus>
               
              </div>
              <br>
              <div>
              	<button name="update" class="btn btn-success">Update</button>
              </div>
              <?php 
              		if(isset($_POST['update']))
              		{
              			$firstname = $_POST['firstname'];
              			$lastname = $_POST['lastname'];
              			$password = $_POST['password'];

              			$updatequery = "update customer set firstname='".$firstname."',lastname='".$lastname."',Password='".$password."' where id='".$id."'";
              			$run = mysqli_query($link,$updatequery);
              			if($run)
              			{
              				header("Location:dashboard.php");
              			}
              		}

              ?>

</form>
</div>
</div>
</div>
</div>


        	</div>


        	 <style type="text/css">
        /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
    </style>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>