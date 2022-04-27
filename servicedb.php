<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wood";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	if(isset($_POST['submit']))
	{

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pname=$_POST['pname'];
$address=$_POST['address'];
$aboutp=$_POST['aboutp'];

$sql="insert into service(name,phone,email,pname,address,aboutp) values('$name','$phone','$email','$pname','$address','$aboutp')";

$res=mysqli_query($conn,$sql);
if($res)
{
  header("refresh: 5; url=service.php");
  echo "<p align=center>Booking Succeesfull!!</p> ";
  echo "<p align=center>Redirecting to a payment page</p>";
}
else
{ 
  header("refresh: 5; url=service.php");
echo " Booking Unsccessfull!! Must be a server issue";
echo "<p align=center>Redirecting to a previous page</p>";

}
  }
}
?>