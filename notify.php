
<?php 
 $servername = "localhost";         
$username = "root";
$password = "";
$db       ="food swap";
    $conn=new mysqli($servername,$username,$password,$db);
    if ($conn->connect_error){
        die("connection failed:" .$conn->connect_error);
    }
$msg="";
/*$uid=$_SESSION['donid'];*/
    
    
if(isset($_POST['submit'])){
    $to_id=mysqli_real_escape_string($conn,$_POST['to_id']);
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    $date=mysqli_real_escape_string($conn,$_POST['date']);
    mysqli_query($conn,"insert into messages(from_id,to_id,message,status,nodate) values('admin','$to_id','$message',1,'$date')");
    $msg="Message send";
}

/*$res_message=mysqli_query($conn,"select login.name,messages.message from messages,login where messages.status=0 and messages.to_id='$uid' and user.id=messages.from_id");
$unread_count=mysqli_num_rows($res_message);*/

$sql_user="select uid,name from login order by name asc";
$res_user=mysqli_query($conn,$sql_user);
?>