<?php 
    
    include "lib/connect.php";

    if ($select_query->num_rows>0){ 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700|Lato:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <title>Blood for Life</title>
</head>

<body>
    <!--  Start From here  -->
    
    <!--    header start  -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                <div class="collapse navbar-collapse custom_nav" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="why.php">Facts About BLood</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="beadonor.php">Be a Donor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="request.php">Request For Blood</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seedonors.php">See All Donors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="showrequest.php">All Requested Bloods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find.php">Find Bloods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--    header ends  -->
    
        <!--    banner part starts   -->
    <div class="col-md-12 banner">
<!--
    <span id="info1">See All Donors</span>
	<div id="info" class="col-md-12">
-->
           
            <!--=====================
          Content
======================-->
     <!--  hospital start-->
<section id="hospital"   style="background-image: url(images/background.png);
    background-position: center;
    background-size: cover; 
    background-repeat: no-repeat;">
    <div class="container" style="margin-bottom: 40px;">
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="hospial_content text-center" style="margin-top: 100px;">
                <h1 style="font-size: 30pt;
font-weight: bold;">All Available Donors</h1>
         
                </div>
            </div>
            
        </div>
        
        <div class="row">
                   
              <div class="col-md-12 col-lg-12">      

                 <div class="row" style="margin: 40px 0px;">
                    
             
                    <?php while($data=$select_query->fetch_assoc()){ ?>
                    <div class="col-md-3 col-lg-3">
                    <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span><?php echo $data['blood_group']; ?></span><span class="card_img"> <img src="images/card_logo1.png" class="img-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="images/person.jpg">
                    <div class="card-block">
                    
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;"><?php echo $data['full_name']; ?></h4>
                       
                        <div class="card-text text-center">
                      <?php echo $data['email']; ?>
                        </div>  
                          <div class="card-text text-center">
                      <?php echo $data['phone']; ?>
                        </div>
                         <div class="card-text text-center">
                  <?php echo $data['address']; ?>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       
                       <span>|</span>
                       <span class="float-right rightone"></span>
                    </div>
                    
                </div>
                    
            </div>
            <?php } ?>
                    <?php } else{  } ?>
         
            </div>
            </div></div>
            
        </div>
    </div>
  
    
</section>
	</div>
      
   
        
        
        <!--    banner part ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
