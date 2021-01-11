<html>
<head>
<title>donorhome</title>
<style>
body{
     font-family:poppins;
}
.wrapper{
     height: 800px;
     width:1300px;
     margin:0 auto;
}
.banner{
     height:100%;
     width:100%;
     overflow:hidden;
     background-color: #fff;
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
     background-color:#000000;
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
.side-navbar a:active{
    color: #FF0000;
}
.side-navbar a:hover{
     color:darkorchid;
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
        top: 50%;
        left: 50%;
        background-color: rgba(255,255,255,0.5);
    }

    
    h2{
        text-align: center;
        font-color:blue;

    }
    input[type=text],input[type=password]
    {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 10px;
        background: rgba(0,0,0,0.10);
        outline: none;
        border:none;
        border-bottom: 1px solid #fff;
        color:#fff;
        border-radius: 5px;
        margin: 8px
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
     padding:5px;
     font-weight:bold;
     font-size: 18px;
     font-color:pink;
 }
 .requested-area,
 .notification-area{
    height: 100vh;
 }
 .dropdown{
    width:20rem;
 }
 .dropdown-select{
    padding: 0.8rem;
    border-radius: 4px;
    background-color: rgba(0,0,0,0.10);
    width: 40%;
    height: 30%;
    align-items: center;
    justify-content: space-between;
    font-size: 1.6rem;
    cursor:pointer;
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

    transform: scale(1.0);

    transition: transform 300ms ease-in;

}

tr:nth-child(even){

    background-color: #ededed;

}

tr:nth-child(even):hover{

    background-color: lightgray;

    transform: scale(1.0);

    transition: transform 200ms ease-in;


}
.center{
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>
<body>
    <div class="side-navbar">
       
      <a href="dlist.php">Donors</a>
      <a href="rlist.php">Recievers</a>
      <a href="donationlist.php">Donations</a>
      <a href="reuestlist.php">Requests</a>
      <a href="notifyadmin.php">Notifications</a>
      <a href="indexxxxx.html">Log out</a>
    </div>
    <div class="content-area">
    <div class="wrapper">
    <div class="banner">
    
      
           <h2>ADMIN CONTROL PANEL </h2>
       
       <h3>donation items</h3>
    
   <table  class="center">
            <tr>
                <th>Donor</th>
                
                <th>food</th>
                 <th>Category</th>
                <th>Quantity</th>
                <th>Donation Date</th>
                <th>Expiry date</th>
                <th>Status</th>
                <th>Reciever id</th>
                <th>Message</th>
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
            $sql="SELECT donor_sign.name,food.foodname,food.foodcategory,donation.foodquantity,donation.donationdate,donation.expirydate,donation.status,donation.rid 
            FROM donation JOIN donor_sign ON donor_sign.donor_id=donation.donor_id

            JOIN food ON donation.food_id=food.food_id";

                  
           $result=$conn->query($sql);
           if ($result->num_rows > 0){
             while($row=$result-> fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
           
            echo "<td>".$row["foodname"]."</td>";
            echo "<td>".$row["foodcategory"]."</td>";
            echo "<td>".$row["foodquantity"]."</td>";
            echo "<td>".$row["donationdate"]."</td>";
            echo "<td>".$row["expirydate"]."</td>";
            echo "<td>".$row["status"]."</td>";
            echo "<td>".$row["rid"]."</td>";
            echo "<td>";
            echo "<a href='adminnotify.php?id=". $row['rid'] ."' title='View Record' data-toggle='tooltip'>message</a>";
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
        </table>
   
    </div>
    </div>
    </div>

      
</body>
</html>