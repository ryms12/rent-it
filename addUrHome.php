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
$email_id=$_POST["oemail"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$adress=$_POST["address"];
$bname=$_POST["buildingname"];
$rate=$_POST["rate"];
$pincode=$_POST["pincode"];
$date=$_POST["date"];
//$photo=$_FILES['image'];

$fname=$_FILES['image']['name'];
$image = $_FILES['image']['tmp_name'];
$image=file_get_contents($image);
$image=base64_encode($image);
$store="/".$fname;

   $insert_query="INSERT INTO `rent_available` (`owner_email`, `city`, `contact`, `address`, `building_name`, `rate_per_hour`,
     `available_date`, `pincode`, `image`,`image_name`)
   VALUES ('$email_id','$city','$phone','$adress','$bname','$rate','$date','$pincode','$image','$fname')";
   $query_result=mysqli_query($db_con,$insert_query);

   if($query_result){
     header("Location: userLogin.php"); /* Redirect browser */
   exit();
   }
   else{
       echo"Some error in query processing";
       echo("error".mysqli_error($db_con));
   }

}

//$imgContent = addslashes(file_get_contents($image));




mysqli_close($db_con);
?>
