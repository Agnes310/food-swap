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
    $fdname=$_POST["foodname"];
	$fdcategory=$_POST["category"];
	$fdtype=$_POST["type"];
	$fdquantity=$_POST["quantity"];
    $fdddate=$_POST["ddate"];
	$fdedate=$_POST["edate"];
	
	$result=mysqli_query($conn,"INSERT INTO food(foodname,foodcategory,foodtype) values('$fdname','$fdcategory','$fdtype')");
    $result1=mysqli_query($conn,"INSERT INTO donation(donor_id,food_id,foodquantity,donationdate,expirydate,status,rid) values(" .$_SESSION['donid'] .",LAST_INSERT_ID(),
    	'$fdquantity','$fdddate','$fdedate','nil',0)");
     echo "<script>window.location.href='donorhome.html'</script>";
        
?>		