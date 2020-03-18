<html>
<title>Student Registration</title>
<center>
	<div class="container">
		<h1>Registration Form</h1>
	<form name="form" method="POST" action="">
		<table>
			<tr>
				<td>
					First Name
				</td>
				<td>
					<input type="text" name="fname" value="" required>
				</td>
			</tr>
			<tr>
				<td>
					Middle Name
				</td>
				<td>
					<input type="text" name="mname" required>
				</td>
			</tr>
			<tr>
				<td>
					Last Name
				</td>
				<td>
					<input type="text" name="lname" required>
				</td>
			</tr>
			<tr>
				<td>
					Mobile No.
				</td>
				<td>
					<input type="number" name="mno" required>
				</td>
			</tr>
			<tr>
				<td>
					Email ID
				</td>
				<td>
					<input type="email" name="mail" required>
				</td>
			</tr>
			<tr>
				<td><br>
					<input type="reset" name="reset" value="Reset">
				<br><br>
					<input type="submit" name="submit" value="Insert">
				</td>
			</tr>
		</table>
	</form>
	</div>
</center>
</html>
<?php
if(isset($_POST['submit']))  
{
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'phplogin');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	
$sql = "INSERT INTO stddata (name, mname, lname, mno, mail)
VALUES('".$_POST["fname"]."','".$_POST["mname"]."','".$_POST["lname"]."','".$_POST["mno"]."','".$_POST["mail"]."')";
if ($con->query($sql) == TRUE) {
    echo "<h1>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
}
?>
<style type="text/css">
input {
  width: 100%;
}
input[type=text]:focus {
  background-color: lightblue;
  border: 3px solid #555;
}
input[type=number]:focus {
  background-color: lightblue;
  border: 3px solid #555;
}
input[type=email]:focus {
  background-color: lightblue;
  border: 3px solid #555;
}
input[type=email],[type=number] ,[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
  background-color: #3CBC8D;
  color: white;
}
body {
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}

.container {
  margin: 200px auto;
  width: 640px;
}

input[type=submit],[type=Reset] {
  padding: 0 70px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}

input[type=submit]:active {
  background: #cde5ef;
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}
input[type=Reset]:active {
  background: #cde5ef;
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}

</style>