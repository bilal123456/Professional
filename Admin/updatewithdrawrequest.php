<?php include('Database/Connection.php'); 


$sql = "SELECT * FROM `customer_withdraw`
where status='0'";
        $run = mysqli_query($link,$sql);
        if(mysqli_num_rows($run)> 0)
        {
            while($row = mysqli_fetch_assoc($run))
            {
                ?>


       
                <tr>
            <td><?php echo $row['customerid']?></td>
            <td><input type="text" id="status" value="<?php echo $row['status']?>"></td>
            <td><button class="btn btn-success" id="updatewithdraw" data-id="<?php echo $row['customerid']?>" data-status="<?php echo $row['status']?>" data-main="<?php echo $row['id'] ?>">Update</button></td>

                <?php
            }
        }

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$status = $_POST['status'];
	$main = $_POST['main'];


echo	$sql = "update customer_withdraw set status='".$status."' where customerid='".$id."' and id='".$main."'";
$run = mysqli_query($link,$sql);
}


?>