#!/usr/bin/php
<?php
	require_once('path.inc');
	require_once('get_host_info.inc');
	require_once('rabbitMQLib.inc');
	function doLogin($username,$password)
	{
	$con=mysqli_connect ("localhost","root","sour78bin","pass");  
	    // check password
	$sql="select * from loginTable where username = '$username' AND password = sha1('$password')";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if ($count == 1){echo"welcome $username";}
	elseif ($count == 0) {echo"wrong password";}
	else {echo"welcome";}
	    //return false if not valid
	}
	function requestProcessor($request)
	{
	  echo "received request".PHP_EOL;
	  var_dump($request);
	 // if(!isset($request['type']))
	  //{
	   // return "ERROR: unsupported message type";
	 // }
	  //switch ($request['type'])
	  //{
	    //case "login":
	      doLogin($request['username'],$request['password']);
	    //case "validate_session":
	     // return doValidate($request['sessionId']);
	  //}
	  return array("returnCode" => '0', 'message'=>"Server received request and processed. welcome ", "username" => $request['username']);
	}
	$server = new rabbitMQServer("testRabbitMQ.ini","testServer");
	$server->process_requests('requestProcessor');
	exit();
?>






























