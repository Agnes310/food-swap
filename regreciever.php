<?php              
$servername = "localhost";
$username = "root";
$password = "";
$db       ="food swap";
    $conn=new mysqli($servername,$username,$password,$db);
    if ($conn->connect_error){
    	die("connection failed:" .$conn->connect_error);
    }
    $orgname=$_POST["rname"];
	$orgaddress=$_POST["raddress"];
	$place=$_POST["rstreet"];
	$pin=$_POST["pincode"];
    $uname=$_POST["email"];
	$phno=$_POST["rmobile"];
	$vname=$_POST["vname"];
	$vmobile=$_POST["vmobile"];
	$password1=$_POST["rpassword"];
	$password2=$_POST["rcpassword"];
	if ($password1==$password2) {
	
		$result=mysqli_query($conn,"INSERT INTO reciever_sign(orgname,orgaddress,street,pincode,mobile,vname,vmobile,username) values('$orgname','$orgaddress','$place','$pin','$phno','$vname','$vmobile','$uname')");
         $result1=mysqli_query($conn,"INSERT INTO login(username,password,type,uid,name) values('$uname','$password2','reciever',LAST_INSERT_ID(),'$orgname')");
		echo"Successfully registered";

 
header('location:/swap food/log.html');
}
    else
    echo "incorrect password";
?>
