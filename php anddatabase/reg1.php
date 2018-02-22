<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="mydb";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if (mysqli_connect_errno())
{
	die("Connection Failed!" . mysqli_connect_errno());
}
?>

<html>
<head>
<title>Signup Page</title>
</head>
<body>
<?php
		
if(!empty($_POST['name']) and !empty($_POST['psw']) and !empty($_POST['repsw']) and !empty($_POST['mail'])  and !empty($_POST['type']))
{
  $id = $_POST['name'];
  $pass = $_POST['psw'];
    $pass1=$_POST['repsw'];
	$m=$_POST['mail'];
    $m1=$_POST['type'];

	
	 if ($pass!=$pass1)
		{
			echo("Oops! passwords do not match");
		}
    else
	{
		$sql="INSERT INTO registration (name,psw,mail,type)".
		      "VALUES('$id','$pass','$m','$m1')";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("Query failed!".mysqli_error($conn));
		}
		else
		{
			header('Location: /than/index.html');
		}
	}
}
else 
{
	echo "Form not submitted properly!";
}
?>
</body>
</html>

