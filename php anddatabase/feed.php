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
<title>feedback page</title>
</head>
<body>
<?php
/*if(isset($_POST['submit']))
{
	$id=$_POST['Name'];
	
	$pass=$_POST['Email'];
    $pass1=$_POST['Message'];
	$m=$_POST['mail'];
    $m1=$_POST['type'];*/
if(!empty($_POST['Name']) and !empty($_POST['Email']) and !empty($_POST['Message']))
{
  $id = $_POST['Name'];
  $pass = $_POST['Email'];
    $pass1=$_POST['Message'];
	

	
	
    
		$sql="INSERT INTO feedback (Name,Message,Email)".
		      "VALUES('$id','$pass1','$pass')";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("Query failed!".mysqli_error($conn));
		}
		else
		{
			echo "<big>FEEDBACK SUBMITTED SUCESSFULLY!</big>";
		}
	
}
else 
{
	echo "Form not submitted properly!";
}
?>
</body>
</html>

