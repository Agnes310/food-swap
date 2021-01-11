<html>
<?php include 'dnotifyview.php'; ?>
<head>
<title>donornotifications</title>
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
        height: 1000px
        border-radius: 20px;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 50px 50px;
        color: #000;
        top: 60%;
        left: 50%;
        background-color: #00bfff;
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
    label{
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
        font-size: 24;
        font-color:#fff;
    }
    input[type=submit]{
        width: 100%;
        box-sizing: border-box;
        padding:10px 0;
        margin-top:30px;
        outline: none;
        border:none;
        background: #000000;
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
.visited{
 	background-color: #000000;
 	color: white;
 	padding: 14px 35px 10px 25px;
 	color:#ffffff; 
 	text-align: center;
 	display: inline-block;
    border:solid 2px ;
    border-radius:50px;
    padding: 10px 80px;
 }
 .textarea{
    font-size: 30px;
    font-weight: bold;
 }
</style>
</head>
<body>
    <div class="side-navbar">
      <a href="donorhome.html">Donate</a>
      <a href="dreuest.php">View Requested Items</a>
    
      <a href="dnotify.php">View Notifications</a>
  
      <a href="logout.php">Log out</a>
    </div>
    <div class="content-area">
    <div class="wrapper">
    <div class="banner">
    <div class="wrap">
           <h2>Notifications </h2>
   
          <?php if($unread_count>0){
						while($row_message=mysqli_fetch_assoc($res_message)){?>
						
				<label>Message</label><br>
				<textarea rows="6" cols="50" name="message" ><?php echo $row_message['message']?></textarea><br><br>			
                     
                     
                <div style="text-align: center;">
                <div style="font-size: 24px;">
<div style="font-color:#ffffff;">
               <div class="visited">
                <?php echo "<a href='notifyaccept.php?id=". $row_message['id'] ."' title='View Record'  data-toggle='tooltip' >
               Accept</a>"?>
                </div>
            </div>
        </div>
    </div>
                 <?php } } ?>

    
    </div>

   
    </div>
    </div>
    </div>
<script type="text/javascript">
	function changeText(submitid){
		var submit=document.getElementById(submitid);
		submit.value='Accepted';
		return false;
	};
</script>
</body>
</html>