
<!doctype html> 
<html>
<?php include 'notify.php';
include 'msg.php';
 ?>
<head>
<title>donorhome</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <link href="assets/css/select.css" rel="stylesheet">
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
        background-color:   #00bfff;
    }

    
    h2{
        text-align: center;
        font-color:blue;

    }
    input[type=text],input[type=password],input[type=date]
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
        
       width: 100%
        padding:10px 0;
        margin-top:30px;
        outline: none;
        border:none;
        background: #000000;
        opacity:0.7;
        border-radius: 20px;
        font-size: 20px;
        color: #fff;
        text-align: center;
        position:center;

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
 ul {
         display:block;
         background:#45619D;
         list-style:none;
         margin:0;
         padding:12px 10px;
         height:45px;
         }
         ul li {
         float:left;
         font:13px helvetica;
         margin:3px 0;
         }
         ul li a {
         color:#FFF;
         text-decoration:none;
         padding:6px 15px;
         cursor:pointer;
         }
         ul li a:hover {
         background:#425B90;
         text-decoration:none;
         cursor:pointer;
         }
         .text-info {
         color: #000 !important;
         }
         #post .container #post-row #post-column #post-box {
         margin-top: 120px;
        margin-right: 50px;
         max-width: 600px;
         height: 360px;
         border: 1px solid #9C9C9C;
         position: relative;
         top: 50%;
         left: 20%;
         background-color: rgba(255,255,255,0.5);
         }
         #post .container #post-row #post-column #post-box #post-form {
         padding: 20px;
         }
         #post .container #post-row #post-column #post-box #post-form #register-link {
         margin-top: -100px;
         }    
         .container h2{
         margin-bottom:50px;
         }
         #notification_box{
         margin-bottom:10px;
         }
         #notifications_container {
         position:absolute;
         }
         #notifications_button {
         width:22px;
         height:22px;
         line-height:22px;
         border-radius:50%;
         -moz-border-radius:50%; 
         -webkit-border-radius:50%;
         margin:-3px 10px 0 10px;
         cursor:pointer;
         }
         #notifications_counter {
         display:block;
         position:absolute;
         background:#E1141E;
         color:#FFF;
         font-size:12px;
         font-weight:normal;
         padding:1px 3px;
         margin:-8px 0 0 25px;
         border-radius:2px;
         -moz-border-radius:2px; 
         -webkit-border-radius:2px;
         z-index:1;
         }
         #notifications {
         display:none;
         width:430px;
         position:absolute;
         top:30px;
         left:0;
         background:#FFF;
         border:solid 1px rgba(100, 100, 100, .20);
         -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
         z-index: 0;
         }
         #notifications:before {         
         content: '';
         display:block;
         width:0;
         height:0;
         color:transparent;
         border:10px solid #CCC;
         border-color:transparent transparent #FFF;
         margin-top:-20px;
         margin-left:10px;
         }
         h3 {
         display:block;
         color:#333; 
         background:#FFF;
         font-weight:bold;
         font-size:13px;    
         padding:8px;
         margin:0;
         border-bottom:solid 1px rgba(100, 100, 100, .30);
         }
         #notifications_button .notifications_bell{
         background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/yMI3kaj_lht.png);
         background-repeat: no-repeat;
         background-size: auto;
         background-position: 0 -712px;
         height: 24px;
         width: 24px;
         }
         #show_notification p{
         margin-left:10px;
         margin-top:10px;
         }
         .custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

.textarea{
	resize: none;
	width:500px;
	height:300px;
	font-size: 30px;
	font-weight: bold;
	overflow: hidden;
}
</style>
</head>
<body>
    <div class="side-navbar">
       
      <a href="dlist.php">Donors</a>
      <a href="rlist.php">Recievers</a>
      <a href="donationlist.php">Donations</a>
      <a href="reuestlist.php">Requests</a>
      <a href="adminnotify.php">Notifications</a>
      <a href="indexxxxx.html">Log out</a>
    </div>
    <div class="content-area">
    <div class="wrapper">
    <div class="banner">
    
      
           <h2>ADMIN CONTROL PANEL </h2>
       
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <div id="notification_box">
         <ul>
            <li id="notifications_container">
               <div id="notifications_counter"></div>
               <div id="notifications_button">
                  <div class="notifications_bell white"></div>
               </div>
              <!-- <div id="notifications">
                  <h3>Notifications</h3>
                  <div style="height:300px;" id="show_notification">
                    <?php /*if($unread_count>0){
                        while($row_message=mysqli_fetch_assoc($res_message)){?>
                     <p><strong><?php echo $row_message['name']?></strong> message <?php echo $row_message['message']?></p>
                     <?php } }*/ ?>
                  </div>
               </div>-->
            </li>
           <!-- <li id="notifications_container"><a href="logout.php">Logout</a></li>-->
         </ul>
      </div>
     <!-- <div id="post">
         <div class="container">
            <div id="post-row" class="row justify-content-center align-items-center">
               <div id="post-column" class="col-md-6">
                  <div id="post-box" class="col-md-12">-->
                    <div class="wrap">
                     <form id="post-form" class="form" action="" method="post">
                        <h2 class="text-center text-info">Add Notifications</h2>
                        
                           <label for="user" class="text-info">User:</label><br>
                           
                           <select class="custom-select" name="to_id" required>
                              <option value="">Select User</option>
                              <?php while($row_user=mysqli_fetch_assoc($res_user)){?>
                              <option value="<?php echo $row_user['uid']?>"><?php echo $row_user['name']?></option>
                              <?php } ?>
                           </select>
                           <label  class="text-info">Date:</label><br>
                           <input type="date" placeholder="date" name="date">
                           <label for="message" class="text-info">Message:</label><br>
                           
                           <textarea  name="message" rows="6" cols="50" required>
                               
                               <?php while($row=mysqli_fetch_assoc($final)){
                              
                              echo "\n";
                               echo $row['orgname'];
                              
                      
                              echo "\n";
                               echo $row['orgaddress'];
                               echo "\n";
                               echo $row['street'];
                               echo "\n";
                               
                               echo $row['pincode'];
                               echo "\n";
                               echo $row['mobile'];
                               
                           }
                               ?>
                           
                           </textarea><br>
                        
                    
                           <input type="submit" name="submit"  value="Submit">
                           <span style="color:red;"><?php echo $msg?></span>
                        
                     </form>
                 </div>
                <!--  </div>
               </div>
            </div>
         </div>
      </div>-->
   
    </div>
    </div>
    </div>

      
</body>
 <script>
      $(document).ready(function () {
          $('#notifications_button').click(function () {
              jQuery.ajax({
                url:'update_message_status.php',
                success:function(){
                    $('#notifications').fadeToggle('fast', 'linear');
                    $('#notifications_counter').fadeOut('slow');
                }
              })
              return false;
          });
          $(document).click(function () {
              $('#notifications').hide(); 
          });
      });
   </script>
</html>
