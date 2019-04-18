<?php 
    
    include "lib/connection.php";
    $result="";
 //insert query
    if(isset($_POST['add_data'])){
        $rfull_name= $_POST['rname'];
        $rblood_group= $_POST['rblood_group'];
        $remail= $_POST['remail'];
        $rphone= $_POST['rphone'];
        $raddress= $_POST['raddress'];
        
        
        
//        if($pass==$conn_pass){
        $insert_sql = "INSERT INTO request (name,bloodgroup,mail,phone_num,location) values ('$rfull_name', '$rblood_group', '$remail',$rphone,'$raddress')";
        
        if($conn->query($insert_sql)){
            $result = "Successfully Submitted!";
        }
        else{
            die($conn->error);
        }
//        }
//
//       else{
//            $result= "Password did not match! Try again";       }
    }

       //select query
    
    $select_sql="SELECT * FROM donor";
    $select_query=$conn->query($select_sql);

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

    <!--    form starts   -->
    <div class="container-contact100">

        <div class="wrap-contact100">
            <form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact100-form validate-form" method="post">
                <span class="contact100-form-title bedonortitle">
                    Be a Donor & Save others Life
                </span>

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="rname" placeholder="Name" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your Blood Group">
                    <input class="input100" type="text" name="rblood_group" placeholder="Blood Group" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
                    <input class="input100" type="text" name="remail" placeholder="E-mail" required>
                    <span class="focus-input100"></span>
                </div>
                
          
                <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
                    <input class="input100" type="number" name="rphone" placeholder="Phone" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your Address">
                    <textarea class="input100" name="raddress" placeholder="Location" required></textarea>
                    <span class="focus-input100"></span>
                </div>

<!--
                <div class="bedonorradio">
                   <label for="">Did you ever donate blood before?</label>
                    <input type="radio" name="demo" value="one" id="radio-one" class="form-radio"><label for="radio-one">Yes</label>
                    <input type="radio" name="demo" value="one" id="radio-one" class="form-radio"><label for="radio-one">No</label>


                </div>
-->

                <div class="container-contact100-form-btn">
                    <button name="add_data" value="Send" class="contact100-form-btn">
                        <span>
                            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                            Send
                        </span>
                    </button>
</div>  
                 <div class="result" style="text-align:center">
            <?php echo $result; ?> 
                </div>
            </form>
        </div>
    </div>
    
            

    <!--    form ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
