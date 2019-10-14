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
                    <a href="dashboard.php">Dashboard</a>
                </li>
                 <li>
                    <a href="request.php">Requests</a>
                </li>
                 <li>
                    <a href="notification.php">Add Notification</a>
                </li>
                 <li>
                    <a href="show.php">Show Notification</a>
                </li>
                  <li>
                    <a href="contact.php">Contact messages</a>
                </li>
                 <li>
                    <a href="insertmaterialimages.php">Insert Material</a>
                </li>
                 <li>
                    <a href="showmaterials.php">show Material</a>
                </li>
                 <li>
                    <a href="Activation.php">Activation Packages</a>
                </li>
                
                
            </ul>
           
        </nav>

        <!-- Page Content  -->
        <div id="content" style="background: #4C2EA2; color: black;">

<nav class="navbar navbar-expand-md   fixed-top" style="background-color: #225269;color: white;">
     <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        </button>
</nav>
           
              <table class="table table-striped" style="position: relative;top: 50px;color: black;background: white;">
    
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>discription</th>
         <th>date</th>
         <th>reply</th>
      </tr>


        <?php  $sql = "select * from contact order by id desc";
        $run = mysqli_query($link,$sql);
        if(mysqli_num_rows($run)> 0)
        {
            $i = 1;
            while($row = mysqli_fetch_assoc($run))
            {
                ?>


       
                <tr>
                   <td> <?php  echo $i++;?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['title']?></td>
           <td><?php echo $row['ticket'] ?></td>
            <td><?php echo $row['todaydate'] ?></td>
            <td><a href="adminreply.php?id=<?php echo $row['id'] ?>">Reply</a></td>
            </tr>


                <?php
            }
        } ?>

    </tbody>

</table>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Rafferals</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="background: white;">
            <tr>
                <th>S.NO</th>
                <th>Date</th>
                <th>Username</th>
            </tr>
            <tbody id="result"></tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="myModaldeposit" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Rafferals</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="background: white;">
            <tr>
                 <th>S.NO</th>
                <th>Date</th>
                <th>Amount</th>
                <th>status</th>
                <th>image</th>
                <th>bitcoinaddress</th>

            </tr>
            <tbody id="resultdeposit"></tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<div id="myModalwithdraw" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Rafferals</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" id="tablewithraw" style="background: white;">
            <tr>
                 <th>S.NO</th>
                <th>Date</th>
                <th>Amount</th>
                <th>status</th>
                
                <th>bitcoinaddress</th>

            </tr>
            <tbody id="resultwithdraw"></tbody>
            <tr>

                <tr><input type="text" id="valuechanges"></tr>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
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

</body>

</html>