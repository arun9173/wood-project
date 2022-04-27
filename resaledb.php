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
// $file=$_POST['file'];
  $file = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_loc = $_FILES['file']['tmp_name'];
  $file_store = "resume/".$file;

  move_uploaded_file($file_tem_loc, $file_store);

$sql="insert into resale(name,phone,email,pname,address,aboutp,file) values('$name','$phone','$email','$pname','$address','$aboutp','$file')";

$res=mysqli_query($conn,$sql);
if($res)
{
  header("refresh: 5; url=resale.php");
  echo "<p align=center>Booking Succeesfull!!</p> ";
  echo "<p align=center>Redirecting to a payment page</p>";
}
else
{ 
  header("refresh: 5; url=resale.php");
echo " Booking Unsccessfull!! Must be a server issue";
echo "<p align=center>Redirecting to a previous page</p>";

}
  }
}
?>