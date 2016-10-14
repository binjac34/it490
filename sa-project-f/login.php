

<?php




$db_name="pass";
$tbl_name="login";



$con = mysqli_connect("localhost", "root", "sour78bin", "pass") or die ("cannot connect");





$myusername=$_POST ['user'];
$mypassword=$_POST ['pwd'];







$sql="select * from login where name='$myusername' AND passwd ='$mypassword'";


$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);


if ($count > 1){echo"someone hacked your system";}
elseif ($count == 0) {echo"wrong password";}
else { echo "welcome $myusername ---     please create your profile "

?><br>
<br>
<a href="www.profile.html">click here to create your profile</a>
<?php
}

?>


