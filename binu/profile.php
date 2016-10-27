<?php

$con=mysqli_connect("localhost","root","sour78bin","pass")  or die ("cannot connect");








$firstname=$_POST ['name'];

$lastname=$_POST ['lastname'];

$address =$_POST['address'];
$sat=$_POST['sat'];
$major=$_POST['major'];

$email=$_POST['email'];


mysqli_query($con, "select * from login where email='$email'");

$sql="update login SET firstname='$firstname', lastname='$lastname', address='$address', sat='$sat', major='$major', major='$major' where email='$email'";
if (mysqli_query ($con,$sql))
{echo"records added successfully";

header("location:imp.html");
}
else{
echo"error adding data";
}

?>
