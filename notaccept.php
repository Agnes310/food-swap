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
     /* $pid=$_SESSION["donid"] ;
       /* $PID=$_SESSION['donid'];*/
        mysqli_query($conn,"UPDATE messages SET status = 0 WHERE id = '$id'");
        echo "<script>window.location.href='dnotify.php'</script>";
        echo "Accepted...";
        ?>
