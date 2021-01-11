<?php              
$servername = "localhost";
$username = "root";
$password = "";
$db       ="food swap";
    $conn=new mysqli($servername,$username,$password,$db);
    if ($conn->connect_error){
    	die("connection failed:" .$conn->connect_error);
    }
    $name=$_POST["dname"];
	$hname=$_POST["dhname"];
	$place=$_POST["dstreet"];
	$pin=$_POST["pin"];
    $uname=$_POST["email"];
	$phno=$_POST["dmob"];
	$password1=$_POST["password"];
	$password2=$_POST["cpassword"];
	if ($password1==$password2) {
	
		$result=mysqli_query($conn,"INSERT INTO donor_sign(name,housename,street,pincode,mobile,username) values('$name','$hname','$place','$pin','$phno','$uname')");
         $result1=mysqli_query($conn,"INSERT INTO login(username,password,type,uid,name) values('$uname','$password2','donor',LAST_INSERT_ID(),'$name')");
		echo"Successfully registered";

 
header('location:/swap food/log.html');
}
    else
    echo "incorrect password";
?>
