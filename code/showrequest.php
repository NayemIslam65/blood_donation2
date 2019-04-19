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
    
    $select_sql="SELECT * FROM request";
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
    
        <!--    banner part starts   -->
    <div class="col-md-12 banner">
    <span id="info1">See All Donors</span>
	<div id="info" class="col-md-12">
           
            <!--=====================
          Content
======================-->
        <section id="content">
            <div class="table table-dark">
                <table border="1" width=100%;>
                    <tr>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Location</th>
<!--                        <th>Phone Number</th>-->
<!--                        <th>Action</th>-->
                    </tr>
                    <?php   if($select_query->num_rows>0){         ?>
                    <?php while($data=$select_query->fetch_assoc()){ ?>
                    <tr>
                        <th>
                            <?php echo $data['name'] ?>
                        </th>
                        <th>
                            <?php echo $data['bloodgroup'] ?>
                        </th>
                        <th>
                            <?php echo $data['mail'] ?>
                        </th>
                        <th>
                            <?php echo $data['phone_num'] ?>
                        </th>
                        <th>
                            <?php echo $data['location'] ?>
                        </th>
<!--
                        <th>
                         
                        </th>
-->
<!--
                        <td>
                            <a href="lib/edit.php?id=<?php  echo $data['id']; ?>">Edit</a>
                            <a href="lib/delete.php?id=<?php echo $data['id'];  ?>">Delete</a>
                        </td>
-->
                    </tr>

                    <?php } ?>
                    <?php } else{  ?>
                    <tr>
                        <td colspan="6">No Records Found!</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
	</div>
      
       </div>
        
        
        <!--    banner part ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
