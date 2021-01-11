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
$uname=$_POST["username"];
$pass=$_POST["pass"];
if ($uname=="admin" && $pass=="admin")
{
	header('location:/swap food/adminhome.html');
}
else
{

$res=mysqli_query($conn,"select * from login where username='$uname' and password='$pass'");
if($row=mysqli_fetch_assoc($res))
{
	$utype=$row["type"];
	$did=$row["uid"];
  


	if($utype=="donor")
	{
		header('location:/swap food/donorhome.html');
		$_SESSION["user"]=$uname;
		$_SESSION["donid"]=$did;
	}
	else if($utype=="reciever")
	{
		header('location:/swap food/recieverhome.html');
		$_SESSION["user"]=$uname;
		$_SESSION["donid"]=$did;
	}
	else
	{


		 echo "<script>alert('Username or password is incorrect')</script>";
		echo "<script>window.location.href='log.html'</script>";


	}
}
else
{

		 echo "<script>alert('oops! Username or password is incorrect. Please try again.')</script>";
		echo "<script>window.location.href='log.html'</script>";
}
}



?>
