<!DOCTYPE html>
<html>
<style type="text/css">
	*{margin: 0px;
		padding: 0px;
	}
	#main{
		
		margin: 20px auto;
	}
	input[type="submit"] {
			  font-size: .9em;
			  color: #fff;
			  background:  #000000;
			  outline: none;
			  border: 1px solid  #ff3333;
			  cursor: pointer;
			  padding: 0.9em;
			  -webkit-appearance: none;
			  width: 100%;
			  margin: 2em 0;
			  letter-spacing: 4px;
			}
			 input[type="submit"] {
    margin: 1.5em 0;
    padding: 0.8em;
    font-size: .85em;
  }
  body {
  	
  background: #ff3333;
 
  /*background: -webkit-linear-gradient(to top, #76b852, #8DC26F);
  background: -moz-linear-gradient(to top, #76b852, #8DC26F);
  background: -o-linear-gradient(to top, #76b852, #8DC26F);
  background: linear-gradient(to top, #76b852, #8DC26F);*/
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}
			input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #ff3333;
}
			input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}
.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;

}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  background: rgba(0, 0, 0, 0.18);
  background-size: cover;

}
#main {
  padding: 3em;
}
#main p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

</style>
<head>
	<title></title>
</head>
<body>
	
		<?php
			session_start();
			require_once("connection.php");
			if (isset($_POST['login'])) {
			  	$username=$_POST['username'];
			  	$password=$_POST['password'];
			  	$q='SELECT * FROM `user` where `username`="'.$username.'" and `password`="'.$password.'"';
			  	$r= mysqli_query($con, $q);
			  	if (mysqli_num_rows($r)>0) {

			  		$_SESSION['username']= $username;
			  		header("location:index.php");
			  	}else{
			  		echo "Your Username & Password donot match!!";
			  	}
			  }  ?>
		<div class="main-agileinfo">
			<div id="main" align="center">
		<p><h2 align="center" style="
  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;">Chat-Star</h2></p>
  
		<p><h3 align="center" style="
  /*font-size: 3em;*/
  text-align: center;
  color: #fff;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;">Log-In</h3></p>
		<form method="post">
			<p>
			<input type="text" name="username" placeholder="User-Name" required></p><br><br>
			<p>
			<input type="password" name="password" placeholder="Password" /></p><br><br>
			<input type="submit" name="login" value="Login"/>
			<a href="Registration.php">New User?</a>
		</form>
		</div>
		</div>
	</div>

</body>
</html>