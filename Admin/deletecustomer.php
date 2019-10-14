
<?php include('Database/Connection.php');
		if(isset($_GET['id']))
        {
        $id = $_GET['id'];

        $delte = "delete from customer where id='".$id."'";
        $run = mysqli_query($link,$delte);
        if($run)
        {
        	header("Location:dashboard.php");
        }
    	}