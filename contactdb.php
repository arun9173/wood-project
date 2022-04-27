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
//$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];

$message=$_POST['message'];

$sql="insert into contact(name,email,subject,textarea) values('$name','$email','$subject','$message')";

$res=mysqli_query($conn,$sql);
if($res)
{
  header("refresh: 5; url=Contact.php");
  echo "<p align=center>Booking Succeesfull!!</p> ";
  echo "<p align=center>Redirecting to a payment page</p>";
}
else
{ 
  header("refresh: 5; url=Contact.php");
echo " Booking Unsccessfull!! Must be a server issue";
echo "<p align=center>Redirecting to a previous page</p>";

}
  }
}
?>