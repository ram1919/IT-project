<html>
<head>
<title>A</title>
<body>
<center>
<?php include('connect.php');
	
	session_start();

	if(isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
	
	$sql = "select password from login where name = '$username'";
	$result = mysqli_query($conn, $sql) or die ("Error");
	
	$row = mysqli_fetch_assoc($result);
	
	
	
	if($row['password']==$password)
	{
		$_SESSION['ses'] = $username;
		header('Location:votelist.php');
	}
	else
	{
		header('Location:index.php');
	}

	mysqli_close($conn);

?>
</center>
</body>
</html>
