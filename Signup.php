<!DOCTYPE html>
<html>
<head>
  <title>CRYPTO STOCK</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body, html {
  height: 100%;
  margin: 0;
  padding: 0px;
  font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}


.bg {
  /* The image used */
  background: url("images/register.png");


  /* Full height */
  height: auto; 




  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size:cover;
}

.form-input{
    border: 1px solid #ccc;
    border-radius: 30px;
    display: block;
    font-size: 13px;
    height: 38px;
    padding: 0 10px 0 20px;
    -webkit-transition: border-color .4s;
    transition: border-color .4s;
    width: 100%;
}
</style>
</head>
<body>


<div class="bg">
<?php 

if(isset($_GET['ref']))
{
  $rafferal = $_GET['ref'];
}
else
{
  $rafferal = "";
}
?>
  
  
  <div class="container">
    
  <div class="row h-100 justify-content-center align-items-center">
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-7">
        <div class="card card-signin my-0">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
    <form method="post"  enctype="multipart/form-data">
      <input type="hidden" name="rafferalref" id="rafferalref" value="<?php echo $rafferal ?>">
              <div class="form-label-group">
                
                <input type="text" name="username" id="username" class="form-control form-input" placeholder="Username" required autofocus>
                <span id="usernamevalue"></span>
              </div>
          
              <br>
              <div class="form-label-group">
                 
                <input type="text" name="firstname" id="firstname" class="form-control form-input" placeholder="First Name" required autofocus>
               
              </div> <br>
              <div class="form-label-group">
                 
                <input type="text" name="lastname" id="lastname" class="form-control form-input" placeholder="Last Name" required autofocus>
               
              </div> <br>
              <div class="form-label-group">
                
                <input type="email" name="email" id="email" class="form-control form-input" placeholder="Email address" required autofocus>
               
              </div> <br>
              <div class="form-label-group">
                
                <input name="rafferal" type="text" id="rafferal" class="form-control form-input" placeholder="Rafferal"  autofocus value="<?php  echo $rafferal; ?>">
               
              </div> <br>
              <div class="form-label-group">
                
                <input name="password" type="text" id="password" class="form-control form-input" placeholder="Password" required autofocus>
               
              </div> <br>
            <div class="form-label-group">
                <input name="cpassword" type="password" id="cpassword" class="form-control form-input" placeholder="Comfirm Password" required>
                
              </div> <br>

                 
                <input name="bitcoin" type="hidden" id="inputEmail" class="form-control form-input" placeholder="Bitcoin address" value="s" required autofocus>
               
            
              
                <input name="img" type="hidden" value="s" id="inputEmail" class="form-control" placeholder="Bitcoin address" required="required" autofocus>
           

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">I confirm that i have read, understand and agree of the <a href="PrivacyPolicy.html">privacy poilcy</a></label>
              </div>
              <button name="customerlogin" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="customerlogin" style="background-color: #bacb2f;
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
    z-index: 9999!important;">Sign up</button>
              
           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>

       </div>
     
  
 
</div>



</body>
</html>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  <script type="text/javascript">
    $('#customerlogin').click(function(e){
e.preventDefault();
    var username = $('#username').val();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
     var email = $('#email').val(); 
     var rafferal = $('#rafferal').val();
     var password = $('#password').val(); 
     var cpassword = $('#cpassword').val();
     var bitcoin = 's';
     var img = 'sss';
     $.ajax({
      url:"customerlogin.php",
      method:"post",
      data:{
        username:username,
        firstname:firstname,
        lastname:lastname,
        email:email,
        password:password,
        cpassword:cpassword,
        rafferal:rafferal,
        bitcoin:bitcoin,
        img:img},
      success:function(data)
      {
        
        var d = data;
       // alert(data);
        if(parseInt(d) === 1)
        {
          alert("yes");
          $('#usernamevalue').hide();
         $('#myModal').modal('show');
        }
        if(parseInt(d) === 0)
        {
          $('#usernamevalue').html("the username is taken");
          $('#usernamevalue').css('color','red');
        }
        
        
        
      }
     })



      
    })
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" style="position: relative;top: 170px;left: 170px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <h3 style="color: #bacb2f;">Account Successfully Created</h3>
          <p>To activate your account click the link sent in your email</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="background-color:#bacb2f; " data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>