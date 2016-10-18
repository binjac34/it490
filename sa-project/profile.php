<?php

$con=mysqli_connect("localhost","root","sour78bin","pass")  or die ("cannot connect");



$firstname=$_POST ['name'];

$lastname=$_POST ['lastname'];

$address =$_POST['address'];
$sat=$_POST['sat'];
$major=$_POST['major'];

$email=$_POST['email'];

$sql="select * from login where email='$email'";


$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);




if ($count == 1){



$sql="INSERT INTO login(firstname,lastname,address,sat,major) VALUES( '$firstname' ,'$lastname', '$address', '$sat','$major')where email='$email'";
if (mysqli_query ($con,$sql))
{echo"records added successfully";

}
else{
echo"error adding data";
}

?>
