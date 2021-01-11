
<html>
<head>
<title>dsignup</title>
<style>
	body{
		background:url(assets/img/slide/slide-0.jpg);
		background-size: cover;
		font-family: Arial;

	}
	.wrap{
		width: 500px;
		height: 750px
		border-radius: 20px;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 50px 50px;
		color: #fff;
		top: 60%;
		left: 50%;
		background-color: rgba(255,255,255,0.5);
	}

	
	h2{
		text-align: center;

	}
	input[type=text],input[type=password],input[type=Email]{
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


	.wrap p{
     margin:0;
     padding:0;
     font-weight:bold;
     font-size: 18px;
     font-color:pink;
 }
</style>
<script type="text/javascript" >
	function CheckPassword() { 
            
            var str = 
                document.getElementById("password").value; 
            if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                    /[^a-zA-Z\d]/g) && str.length >= 8) 
                return true; 
            else 
               alert("wrong password");
  
        } 
    function matchPassword() {  
  var pw1 = document.getElementById("password").value;  
  var pw2 = document.getElementById("cpassword").value;  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } 
} 

    
</script>
</head>
<body>
<div class="wrap">
   <h2>SIGN UP HERE</h2>
   <form method="POST" action="regdonor.php">
   	    <p>Name</p>
        <input type ="text" placeholder="Name.." name="dname" required>
        <p>House name</p>
        <input type ="text" placeholder="Address.." name="dhname" required>
        <p>Street</p>
        <input type ="text" placeholder="Street.." name="dstreet" required>
        <p>Pincode</p>
        <input type ="text" placeholder="Pincode.."  name="pin" pattern="([1-9]{1}[0-9]{5}|[1-9]{1}[0-9]{3}\\s[0-9]{3})" required>
        <p>Email ID</p>
        <input type ="Email" placeholder="Email ID.."  name="email"required>
        <p>Mobile Number</p>
        <input type ="text" placeholder="Mobile Number.."  name="dmob"required>
        <p>Password</p>
        <input type ="text" placeholder="Password.." name="password"  onblur="CheckPassword()">
        <p>Confirm password</p>
        <input type ="text" placeholder="Confirm Password.."  name="cpassword" onblur="matchPassword()" required>
        <input type ="submit"  value="Sign Up">
    </form>
</div>
</body>
</html>        
