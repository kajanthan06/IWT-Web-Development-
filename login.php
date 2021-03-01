
<?php
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="useraccounts";

	$username=$_POST['uname'];
	$password=$_POST['pws'];

	$conn= mysqli_connect($host,$user,$pass,$db);
		$query="SELECT  * from users where register_Username = '$username' and  register_Psw ='$password'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) == 1)
			{
					session_start();
					$_SESSION['useraccounts']='true';
					header('location:category.html');

					if($_SERVER["REQUEST_METHOD"] == "POST")
					{
						$username = $_POST["uname"];

						$_SESSION['logged_user'] = $username;
						header("Location:category.php");
					}


			}
			else {echo '<script> alert("Invalid username or password") </script>';}
}
?>

<!DOCTYPE html>
<head>
	<title>Log In</title>
	<link rel = "stylesheet" type = "text/css" href = "styles/login.css">


	<!-- for Icons-Online link -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<!-- social media icon link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body bgcolor = "grey">
	<!--header-->
	<header class="mainhead" >
			<div class= "head">
				<a href="Project/sarangan/Cover_Page/index.html"> <img class="logo" src="images/logo(1).png" align="left"></a>
				<p> PIXELS GALLERY</p>
			</div>





	</header>

	<!--navigation bar-->
	<div class="topnav">
	  <a class="active" href="login.php"><i class="fa fa-home"></i>Home</a>
	  <a href="login.html"><i class="fa fa-globe"></i>  About Us</a>

	  <a href="login.html"><i class="fa fa-phone"></i>  Contact Us</a>
	  <a href="login.html"><i class="fa fa-camera"></i> Photographer</a>
	  <input id="searching" type="text" placeholder="Search..">
	</div>
	<br>
	<br>

	<!--login codes-->

	<div class = "loginbox">
		<img class = "image" src = "images/profile.png" alt = "profile" >
		<h1>Log In</h1>
			<form name = "login" onsubmit = "return validation()" method = "POST" >
				<p>User Name</p>
				<input type="text"  name="uname" id="user" placeholder="Enter User Name">
				<p>Password</p>
				<input type="Password" name ="pws" id="pass" placeholder="Enter Password"  >
			<a href="category.php">	<input type="submit" name="btn" value="Log In"> </a>
				Don't have an account? <a href = "signup.html" >Sign Up</a>
			</form>
	</div>


	<!--form method="POST">
		<div class = "img">
			<div class="logbox">
				<h1> Login </h1>

					<div class="textbox">
						<p> Username</P>
						<input type="text" placeholder = "Enter Username" name="uname" id="user" required>

					</div>

					<div class="textbox">
						<p> Password</P>
						<input type ="password" placeholder ="Eneter Password" name ="pws" id="pass" required>
					</div>

					<a href="home.php">
							<input class="btn" type ="submit"  value="Login" onclick="loginForm()">
					</a>
					<p class = "message"> Not registered? <a href="register.html">Create an account </a> </P>
			</div>

		</div>
	</form-->




	<!--footer-->
	    <footer class="foot">
	      	<p>@group3.1_07  |  Privacy policy  |  Terms and Conditions  |  Terms of use  </p>
	      	<div class="row">
	            <a  href="www.facebook.com"><i class="fa fa-facebook"></i></a>
	            <a  href="www.google.com"><i class="fa fa-google"></i></a>
	            <a  href="www.twitter.com"><i class="fa fa-twitter"></i></a>
	    		    <a  href="www.twitter.com"><i class="fa fa-instagram"></i></a>

	    	  </div>
	    </footer>
<!--script part-->
<script type="text/javascript">
function validation()
{
  var uname = document.login.uname.value;
  var pwd = document.login.pwd.value;

  //check empty field
  if ( uname == "" || pwd == "")
  {
    alert("Both fields should not be blank");
    return;
  }
	//check size of Password
	if ( pwd.length < 6 || pwd.length > 20)
	{
		alert("Password must be 6 to 20 characters");
		return;
	}
	//SIZE OF NAME VALIDATION
	if ( uname.length < 2 || uname.length > 20 )
	{
		alert("Your name should be between 2 to 20 characters");
		return;
	}

}
</script>

</body>
</html>
