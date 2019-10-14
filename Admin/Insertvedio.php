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
            <div class="container">
                <div class="row">
                    <form method="post" enctype="multipart/form-data">


                    <input type="file" name="file">
                    <input type="file" name="image">
                    <input type="submit" name="addvedio" value="Upload">


            </form>
                </div>
            </div>
            
<?php 
include('Database/Connection.php');
if(isset($_POST['addvedio']))
{
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $imagename = $_FILES['image']['name'];
    $tmpimage = $_FILES['image']['tmp_name'];
    

    $insert = "insert into vedio(name,imagename) values('".$name."','".$imagename."')";
    $run = mysqli_query($link,$insert);
    if($run)
    {
        move_uploaded_file($tmp, "Vedio/" . $name);
        move_uploaded_file($tmpimage,"Vedio/images".$imagename);
       // header("Location:showvedio.php");
    }
}


?>
        </div>