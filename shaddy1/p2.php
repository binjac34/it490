<?php
?>


<body background="t.jpg">

<?php

$con=mysqli_connect("localhost","root","sour78bin","pass") or die("cannot connect");

$major=$_POST['major'];


$sql=("select * from college where major='$major'") or die (mysqli_error());

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);




echo "list of college offering $major";




if($count >0){
$sql="select * from college where major ='$major'";
$result=mysqli_query($con, $sql);
while ($rows=mysqli_fetch_array($result)):


$school=$rows['school'];
$fees=$rows ['fees'];

$rating=$rows['rating'];






echo "<br><br>college name: $school<br>
fees :$fees<br>
rating  $rating<br><br>";
endwhile;
}
else
{echo "<br><br>0 results";
}
?>
