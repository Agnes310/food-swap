<?php 
 $servername = "localhost";
            $username = "root";
            $password = "";
            $db       ="food swap";
            $conn=new mysqli($servername,$username,$password,$db);
            if ($conn->connect_error){
    	     die("connection failed:" .$conn->connect_error);
            }
     $id = $_GET['id'];
      
       /* $PID=$_SESSION['donid'];*/
       $final= mysqli_query($conn,"SELECT name,housename,street,pincode,mobile from donor_sign where donor_id=$id");
       
                          
  ?>