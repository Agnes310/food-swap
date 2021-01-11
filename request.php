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
    $fdname=$_POST["fdname"];
	$fdcategory=$_POST["category"];
	$fdtype=$_POST["type"];
	$fdquantity=$_POST["quantity"];
    $fdrdate=$_POST["rdate"];
	$fdedate=$_POST["edate"];
	
	$result=mysqli_query($conn,"INSERT INTO food(foodname,foodcategory,foodtype) values('$fdname','$fdcategory','$fdtype')");
    $result1=mysqli_query($conn,"INSERT INTO request(rid,food_id,foodquantity,requestdate,expirydate,status,donor_id) values(" .$_SESSION['donid'] .",LAST_INSERT_ID(),
    	'$fdquantity','$fdrdate','$fdedate','nil',0)");
     echo "<script>window.location.href='recieverhome.html'</script>";
        
?>		