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
       $final= mysqli_query($conn,"SELECT orgname,orgaddress,street,mobile from reciever_sign where rid=$id");
       
                          
  ?>