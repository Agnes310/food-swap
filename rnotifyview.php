<?php 
 $servername = "localhost";         
$username = "root";
$password = "";
$db       ="food swap";
    $conn=new mysqli($servername,$username,$password,$db);
    if ($conn->connect_error){
        die("connection failed:" .$conn->connect_error);
    }
session_start();
$msg="";
$uid=$_SESSION['donid'];
$res_message=mysqli_query($conn,"select id,to_id,message,nodate from messages where status=1 and to_id='$uid'");
           $unread_count=mysqli_num_rows($res_message);
           if($unread_count==0){
           	echo "You have no new notifications";
           }
?>