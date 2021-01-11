<html>
<head>
<title>donorhome</title>
<style>
body{
     font-family:poppins;
}
.wrapper{
     height: 900px;
     width:1300px;
     margin:0 auto;
}
.banner{
     height:100%;
     width:100%;
     overflow:hidden;
     background-color: #ffffff;
     -webkit-background-size:cover;
     background-size:cover;
     background-position:center center;
}
.side-navbar{
     height:100%;
     width:248px;
     position:fixed;
     z-index:1;
     top:0;
     left:0;
     background-color:#4000ff;
     overflow-x:hidden;
     padding-top:20px;
}

.side-navbar a{
     padding:50px 10px 10px 50px;
     text-decoration:none;
     font-size:18px;
     display:block;
     text-transform:uppercase;
     color:#fff;
}
.side-navbar a:hover{
     color:#000000;
}
.content-area{
      margin-left:230px;
      padding:0 10px;
}
.wrap{
        width: 500px;
        height: 750px
        border-radius: 20px;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 50px 50px;
        color: #000;
        top: 60%;
        left: 50%;
        background-color: rgba(255,255,255,0.5);
    }

    
    h2{
        text-align: center;

    }
    input[type=text],input[type=password]{
        width: 100%;
        box-sizing: border-box;
        padding: 12px 5px;
        background: rgba(0,0,0,0.10);
        outline: none;
        border:none;
        border-bottom: 1px solid #fff;
        color:#fff;
        border-radius: 5px;
        margin: 5px
        font-weight: bold;
        
        font-color:#fff;
    }
    input[type=submit]{
        width: 100%;
        box-sizing: border-box;
        padding:10px 0;
        margin-top:30px;
        outline: none;
        border:none;
        background: #60adde;
        opacity:0.7;
        border-radius: 20px;
        font-size: 20px;
        color: #fff;

    }
    .wrap p{
     margin:0;
     padding:0;
     font-weight:bold;
     font-size: 18px;
     font-color:pink;
 }
 .requested-area,
 .notification-area{
    height: 100vh;
 }
  table{

    width: 600px;

    box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);

}

table, td, th{

    padding: 20px;

    border: 1px solid lightgray;

    border-collapse: collapse;

    text-align: center;

    cursor: pointer;

}

td{

    font-size: 18px;

}

th{

    background-color: blue;

    color: white;

}

tr:nth-child(odd){

    background-color: lightblue;

}

tr:nth-child(odd):hover{

    background-color: dodgerblue;

    color: white;

    transform: scale(1.5);

    transition: transform 300ms ease-in;

}

tr:nth-child(even){

    background-color: #ededed;

}

tr:nth-child(even):hover{

    background-color: lightgray;

    transform: scale(1.5);

    transition: transform 300ms ease-in;


}
.center{
    margin-left: auto;
    margin-right: auto;
}

</style>
</head>
<body>
    <form method="POST" action='accept.php'>
    <div class="side-navbar">
      <a href="donorhome.html">Donate</a>
      <a href="dreuest.php">View Requested Items</a>
      <a href="dnotify.php">View Notifications</a>
      <a href="logout.php">Log out</a>
    </div>
   <div class="content-area">
    <div class="wrapper">
    <div class="banner">
    <!--<div class="wrap">-->
           <h2>View requested items </h2>
            <h2>Requested Food</h2>
        <table  class="center">
            <form method="POST" action="accept.php">
            <tr>
                <th>food</th>
                <th>Quantity</th>
                <th>Expirydate</th>
                <th>Accept</th>
                
            </tr>
        <?php 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db       ="food swap";
            $conn=new mysqli($servername,$username,$password,$db);
            if ($conn->connect_error){
             die("connection failed:" .$conn->connect_error);
            }
            $sql="SELECT food.foodname,request.foodquantity,request.expirydate,request.request_id,request.status from food,request where food.food_id=request.food_id AND request.status='nil'";
            $result=$conn->query($sql);
            if ($result->num_rows > 0){
             while($row=$result-> fetch_assoc()){
             echo "<tr>";
             echo "<td>".$row["foodname"]."</td>";
             echo "<td>".$row["foodquantity"]."</td>";
             echo "<td>".$row["expirydate"]."</td>";
             echo "<td>";
             echo "<a href='accept.php?id=". $row['request_id'] ."' title='View Record' data-toggle='tooltip'>Accept</a>";
             echo "</td>";
             echo "</tr>";
             
       
             
         }
          echo "</table>";
        }
        else
        {
            echo"0 result";
        }
        ?> 
        </form> 
        </table>
    
    </div>

   
    </div>
    </div>
    </div>

</form>      
</body>
</html>