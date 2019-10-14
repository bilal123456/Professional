

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';
include('Admin/Database/Connection.php');


if(isset($_POST['walletaddress']))
{
	$walletaddress = $_POST['walletaddress'];
	$status = $_POST['status'];
	$customerid = $_POST['customerid'];
	 $insert = "insert into wallet (wallet,status,customerid) values('".$walletaddress."','".$status."','".$customerid."')";
	$run = mysqli_query($link,$insert);
	echo "Your wallet" . $walletaddress . "as created successfully! you will receive a email an active then";

	$sql = "select * from customer where id='".$customerid."'";
	$runs = mysqli_query($link,$sql);
	if(mysqli_num_rows($runs)>0)
	{
		while($row = mysqli_fetch_assoc($runs))
		{
			$email = $row['email'];
		}
	}

	$mail = new PHPMailer(true);

    
     $subject = 'Activate';
     $body    = "Please Activate the wallet is &nbsp;&nbsp;&nbsp;<a href='http://www.uscryptostok.com/wallet.php?wallet=".$walletaddress."'>$walletaddress</a>";
     
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     $phpMailer = new PHPMailer(true);
$phpMailer->isSMTP();
$phpMailer->Host = "smtp.zoho.com";
$phpMailer->SMTPAuth = true;
$phpMailer->Username = "bilalraza203@gmail.com";
$phpMailer->Password = "king5872123123";
$phpMailer->SMTPSecure = "sls";
$phpMailer->Port = 587;
$phpMailer->isHTML(true);
$phpMailer->CharSet = "UTF-8";
$phpMailer->setFrom("info@uscryptostok.com", "Us Crypto Stock");
$phpMailer->addAddress($email,'Us Crypto Official');
$phpMailer->Subject = $subject;
$phpMailer->Body = $body;
$phpMailer->send();
}
else if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$delete = "delete from wallet where id='".$id."'";
	$run = mysqli_query($link,$delete);
	echo "Delete Successfully";
}
else
{


	$customerid = $_POST['customerid'];
	$select = "select * from wallet where customerid='".$customerid."'";
	$run = mysqli_query($link,$select);
	if(mysqli_num_rows($run)>0)
	{
			while($row = mysqli_fetch_assoc($run))
			{
				$status = $row['status'];
				?>
				<tr data-status="in" class="even" style="background-color: #20c997;color: white;">
                           
                             <td><?php echo $row['wallet']?></td>
                              <td><?php if($status == 0)
                              	{echo  "need Comfirmation";}
                              	else
                              	{
                              		echo "Available";
                              } ?></td>
                             <td><button class="btn btn-success" data-id="<?php echo $row['id'] ?>" id="delete">Delete</button></td>
                              

                  </tr>
                  <?php
			}
	}

}


?>
