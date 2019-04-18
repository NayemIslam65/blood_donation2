<?php 
    
    include "lib/connection.php";
    $result="";
 //insert query
    if(isset($_POST['add_data'])){
        $full_name= $_POST['full_name'];
        $blood_group= $_POST['blood_group'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        $conn_pass=$_POST['conn_pass'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];
        
        
        
//        if($pass==$conn_pass){
        $insert_sql = "INSERT INTO donor (full_name,blood_group,email,pass,phone,address) values ('$full_name', '$blood_group', '$email','$pass',$phone,'$address')";
        
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

