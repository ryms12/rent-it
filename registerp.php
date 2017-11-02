<!DOCTYPE php>
<?php
$user='root';
$pass='';
$db='testdb';

$db_con=mysqli_connect('localhost',$user,$pass,$db) or die("Unable to connect".mysql_error());
//echo"hiii>";
$submit=$_POST["sub"];
if(isset($submit))
{
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email_id=$_POST["email"];
$passwd=$_POST["pass"];
$confirmpasswd=$_POST["cpass"];
$phone=$_POST["phone"];


$insert_query="INSERT INTO `user_login` (`firstName`, `lastName`, `email`, `password`, `phone`) VALUES
('$fname','$lname','$email_id','$passwd','$phone')";


$query_result=mysqli_query($db_con,$insert_query);

if($query_result){
  header("Location: home.html"); /* Redirect browser */
exit();
}
else{
    echo"Some error in query processing";
    echo("error".mysqli_error($db_con));
}
}

mysqli_close($db_con);
?>
