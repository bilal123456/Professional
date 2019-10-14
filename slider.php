<!DOCTYPE html>
<html>
<?php session_start();
include('Admin/Database/Connection.php');
$email = $_SESSION['email'];
$id = $_SESSION['id'];

 ?>
<head>
    <title></title>

   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>



        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Crypto Stock</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto w-100 justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
     
      <li class="nav-item">
        <a href="home.php" class="nav-link" >Dashboard</a>
      </li>
    </ul>
   
  </div>
</nav>



<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    
                                         <img class="d-block w-100" src="images/1.png" alt="First slide" height="495">
                                   
                                   
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                                <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/2.png" alt="First slide" height="495">

                                </div>
                              </div>

                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/3.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/4.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/5.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/6.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/7.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/8.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/9.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/10.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/11.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/12.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/13.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/14.png" alt="First slide" height="495">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                <img class="d-block w-100" src="images/15.png" alt="First slide" height="495">

                                </div>
                              </div>

                            
</div>
</div>
        </div>
      </div>
    </div>




<div class="page_main_heading">
                <h1 class="heading">Our Mission</h1>
            </div>


            <section class="section_white_bg our_mission_section">
                <div class="container">
                    <div class="text_row">
                        <h2 class="heading" style="tex">MISSION,VISION &amp; VALUES</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <h3 class="title">Quality &amp; No Investment</h3>
                            <p class="desc">Our mission is to improve the quality of life for our people, customers and society.Unlimited earning opportunity with no investment risk.</p>
                        </li>
                        <li>
                            <h3 class="title">Financial &amp; Personal Care</h3>
                            <p class="desc">We will be one strong team united by our mission and values in our relentless pursuit to be regional partner of choice in financial freedom &amp; personal care solutions.</p>
                        </li>
                        <li>
                            <h3 class="title">Secure &amp; Professional Growth</h3>
                            <p class="desc">Secured your financial and family future.Personal and professional growth and development.Be recognized for your achievements.</p>
                        </li>
                    </ul>
                </div>
            </section>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
<script type="text/javascript">

   
</script>
<style type="text/css">
    .navbar
    {
        border-bottom: linear-gradient(to right, #1f88b5, #34c4d2);
        border-width: 2px solid linear-gradient(to right, #1f88b5, #34c4d2);

    }
    .page_main_heading {
       background-image: linear-gradient(to right, #1f88b5, #34c4d2);
       font-weight: bold;
       color: white;
       text-transform: uppercase;
       text-align: center;
       margin: 0px;
       font-size: 40px;
    }
    .text_row .heading {
    display: inline-block;
    position: relative;
    font-size: 30px;
    color: #474747;
    padding-bottom: 20px;
    margin: 0;}
    .text_row {
    margin-bottom: 60px;
    text-align: center;
}
.text_row .heading::after {
    content: '';
    display: inline-block;
    width: 100px;
    height: 4px;
    background-color: #34c4d2;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 10px;
}

@media (max-width: 1024px)
.our_mission_section ul li {
    flex: 0 0 48%;
    margin-bottom: 25px;
}

.our_mission_section ul li {
    background: linear-gradient(to right, #1f88b5, #34c4d2 90%) no-repeat center;
    background-size: 0% 0%;
    flex: 0 0 32%;
    background-color: #fff;
    padding: 30px 20px 10px;
    font-size: 18px;
    line-height: 1.75;
    width: 100%;
    box-shadow: 0 0 5px lightgrey;
    border-radius: 10px;
    text-align: center;
    margin: 10px;
    transition: all .3s;
}

.our_mission_section ul li::hover {
    background: linear-gradient(to right, #1f88b5, #34c4d2 90%) no-repeat center;
    background-size: 0% 0%;
    flex: 0 0 32%;
    color:white;
    background-color: #fff;
    padding: 30px 20px 10px;
    font-size: 18px;
    line-height: 1.75;
    width: 100%;
    box-shadow: 0 0 5px lightgrey;
    border-radius: 10px;
    text-align: center;
    transition: all .3s;
}

   
  
</style>
<script type="text/javascript">
    $('#blogCarousel').carousel({
        interval: 5000
    });
</script>
</body>
</html>