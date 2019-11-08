<?php
	include_once('connection_db.php'); 
	
	// if user click Login button
	if(isset($_POST['btnLogin'])){
	
		// get username and password
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// set time for session timeout
		$currentTime = time() + 25200;
		$expired = 3600;
		
		// create array variable to handle error
		$error = array();
		
		// check whether $username is empty or not
		if(empty($username)){
			$error['username'] = "*Username should be filled.";
		}
		
		// check whether $password is empty or not
		if(empty($password)){
			$error['password'] = "*Password should be filled.";
		}
		
		
$u=$_POST["username"];
$p=$_POST["password"];

$sql = "SELECT  pass,name FROM users where usern='".$u."'";
$result = $conn->query($sql);
$sp="";
$name="";

		// create array variable to handle error
		$error = array();
		
		// check whether $username is empty or not
		if(empty($u)){
			$error['username'] = "*Email should be filled.";
		}
		
		// check whether $password is empty or not
		if(empty($p)){
			$error['password'] = "*Password should be filled.";
		}
		

if ($result->num_rows>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sp=$row["pass"];
        $name=$row["name"];
    }
    if($p===$sp)
    {
        $_SESSION["suser"]=$u;
        $_SESSION["name"]=$name;
        echo"<script>window.location.href = 'dashboard.php';</script>";
    }
    else
    {   $error['failed'] = "*Password should be filled.";
        //echo"<script>window.alert('Wrong Password!');</script>";
    }
}
else {
    //echo "<script>window.alert('No such user')</script>";
    	$error['failed'] = "<span class='label label-danger'>Invalid Username or Password!</span>";
}
$conn->close();
	}
	?>
	
	<script>
	setTimeout(fade_in, 3000);
	 function fade_in() {
     $("#error").fadeIn().delay(1200).fadeOut();
}
	</script>
	
<div id="login_content" class="col-md-11 login">
  	<div class="col-md-4 col-md-offset-4">
	      <div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">
				  <center><h3>Login Administrator</h3></center>
				  <center>( WAIO Corporations )</center>
			  </div>
			  <div class="panel-body">

				<div class="fadeIn first">
                 <img src="WAIO.png" id="icon" width="100" height="100" alt="User Icon" />
             </div>
				    <form method="post">
				            <label>Username :</label>
				            <input type="text" name="username" class="form-control"  placeholder="Enter Email" required>
							
							<br>
				            <label>Password :</label>
				            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
							
							<br>
							<button type="submit" name="btnLogin" class="btn btn-primary pull-right">Login</button><br>		
				    </form>
				 <div id="error">
				<font color="red"><center><?php echo isset($error['failed']) ? $error['failed'] : '';?></center></font>
				</div>
				     <a class="underlineHover" href="reg.php">New user?</a></br>
				     
				<a href="forget-password.php"><p class="pull-right">Forgot Password?</p></a>
			  </div>
			</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<?php include_once('connection_db.php');?>