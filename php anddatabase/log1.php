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
<title>viewer login</title>
</head>
<body>
<?php
/*if(isset($_POST['submit']))
    if(isset($_POST['submit']) && !empty($_POST['submit']))
{
	$id=$_POST['name'];
	$pass=$_POST['psw'];*/
if(!empty($_POST['name']) and !empty($_POST['psw']))
{
  $id = $_POST['name'];
  $pass = $_POST['psw'];

	
	/*if (empty($id)||empty($pass))
	{
		echo "Cannot leave any field blank!";
	}*/ 
	   
        $sql = "SELECT * FROM registration where name = '$id' AND psw = '$pass'" ;
		$res=mysqli_query($conn,$sql);
		
		if(!$res)
		{
			die("Query failed!".mysqli_error($conn));
		}
		else if(mysqli_num_rows($res)==1)
		{
            echo "you have login sucessfully we are redirecting you to our home page";
			header("location: /index1.html");
            
		}
		else
		{
			echo "WRONG INFORMATION 2 !!";
		}
	
}
else
{
	echo "WRONG INFORMATION1";
}
?>
</body>
</html>