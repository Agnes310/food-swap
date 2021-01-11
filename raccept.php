<?php
ob_start();             
session_start(); 
 $servername = "localhost";
            $username = "root";
            $password = "";
            $db       ="food swap";
            $conn=new mysqli($servername,$username,$password,$db);
            if ($conn->connect_error){
    	     die("connection failed:" .$conn->connect_error);
            }
     $id = $_GET['id'];
      $pid=$_SESSION["donid"] ;
       /* $PID=$_SESSION['donid'];*/
        mysqli_query($conn,"UPDATE donation SET status = 'Accepted',rid='$pid' WHERE donation_id = '$id'");
       
       echo "<script>window.location.href='viewdonation.php'</script>";              
  ?>