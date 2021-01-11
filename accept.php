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
      $pid=$_SESSION['donid'] ;
       /* $PID=$_SESSION['donid'];*/
        mysqli_query($conn,"UPDATE request SET status = 'Accepted',donor_id='$pid' WHERE request_id = '$id'");
       
          header('location:/swap food/dnotify.php');                
  ?>