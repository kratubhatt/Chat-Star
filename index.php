<!DOCTYPE html>
<html>
<style type="text/css">
	/*input[type="submit"] {
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
  
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
  float: right;
}
	input[type="text"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 100%;
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

}*/
	*{
		
		margin: 0px;
		padding: 0px;
	}
	body{
		background-image: linear-gradient(lightblue,white);
	}
	#main{
		border: 1px  black;
		width: 500px;
		height: 500px;
		margin: 24px auto;
	}
	#message_area{
		padding: 0% 1%;
		width: 98%;
		background-image: linear-gradient(pink,white);
		height: 435px;
	}
	h4{
		padding: 0% 1%;
		background-color: #ffffcc;
		float: left;
		font-family: 'Roboto',sans-serif;
		letter-spacing: 1px;
	}
	a{
		float: right;
		padding: 2px 4px;
	}
</style>
<head>
	<title></title>
	<h2 align="center" style="
  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;">Chat-Star</h2>
  <hr class="l1" style="border:3px dotted white; border-radius: 5px;
  ">
</head>
<body>

<?php

 session_start();
	if (isset($_SESSION['username'])) {
	 	
	  
	echo '<h4>Welcome</h4> '.$_SESSION['username'];
	echo '<a href="logout.php" style="background-color: #f44336; color: white; display: inline-block; text-align: center; ">Log Out</a>';
	}else{
		header("location:login.php");
	}
?>
 <hr class="l2" style="border:3px dotted white; border-radius: 5px;
  ">
<div id="main">
	<div id="message_area" style="border-radius: 20px; ">
		<?php
		include("connection.php");
		$q1="SELECT * FROM `message`";
		$r1=mysqli_query($con,$q1);
		while ($row=mysqli_fetch_assoc($r1)) {
			$message=$row['message'];
			$username=$row['username'];
			echo '<h3 style="color:red;">'.$username.'</h3>';
			echo'<p style="font-size: 25px; font-family: Lucida;">   '.$message.'</p>';
			echo'<hr>';
		}
		
		if (isset($_POST['submit'])) {
			$message=$_POST['message'];
			$q='INSERT INTO `message`(`id`,`message`,`username`)
			VALUES("","'.$message.'","'.$_SESSION['username'].'")
			';
			if(mysqli_query($con,$q))
				{
					echo '<h4 style="color:red;">'.$_SESSION['username'].'</h4>';
					echo '<p>'.$message.'</p>';
				}
		}
    ?>
	</div>
	
	<form method="post">
		<input style="width: 100%; background-image: linear-gradient(white,#ffcccc); height: 58px; border: 0px; border-bottom: 1px solid black; border-radius: 5px; " type="text" name="message" placeholder="Type Your Message Here...">
		<input style="height: 50px; float: right;  width: 78px; background-image: linear-gradient(white,grey); border: none; border-radius: 20px;" type="submit" name="submit" value="Send">
	
	</form>
</div><br><br><br>
<hr class="l3" style="border:3px dotted pink; width: 100%; border-radius: 5px;
  ">
<center>
<div id="footer">
	<p style="float: center; text-transform: capitalize;
  letter-spacing: 2.5px;
  font-family: 'Roboto', sans-serif;">@2019 Chat-Star.</p>
	
</div>
</center>
</body>
</html>