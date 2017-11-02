<!DOCTYPE php>
<?php
$user='root';
$pass='';
$db='testdb';

$db_con=mysqli_connect('localhost',$user,$pass,$db) or die("Unable to connect".mysql_error());

$submit=$_POST["sub"];
if(isset($submit))
{
//$fname=$_GET["fname"];
//$lname=$_GET["lname"];
$email_id=$_POST["userid"];
$passwd=$_POST["passwd"];
//$confirmpasswd=$_GET["confirmpass"];


$login_query="SELECT * FROM `user_login` WHERE email='$email_id'";


$query_result=mysqli_query($db_con,$login_query);

if($query_result){
    $row=mysqli_fetch_assoc($query_result);
    if($row["password"]==$passwd)
    { $username=$row['firstName'];
       header("Location:userLogin.php");
       }
   else{
    echo "Enter password correctly";
    }

}
else{
    echo"Some error in query processing";
}
}

mysqli_close($db_con);
?>
