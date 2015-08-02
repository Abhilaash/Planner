<!DOCTYPE html>
<html>
	<head>
		 <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
	</head>

<div class="container"> 
<p></p>
<p></p>
</div>
<div class="container">
    <div class="row">
    	<center><img src="planitlogosideways.png"></center>
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <!-- <h1 class="text-center login-title"><font color="white">Login</font></h1> -->
            <div class="account-wall">

                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
    
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
	<?php
		if(array_key_exists("username", $_REQUEST)){
			$username = $_REQUEST["username"];
			$password = md5($_REQUEST["password"]);
			$data = validate($username, $password);
		}

	// 	function validate($username, $password){
	// 	$db = new Database();
	// 	$db->exec("CREATE TABLE IF NOT EXISTS recipes (username TEXT PRIMARY KEY, password TEXT, email TEXT, name TEXT)");
	// 	$ret = $db->query("SELECT username, password FROM recipes");
	// 	while($elements = $ret->fetchArray(SQLITE3_ASSOC)){
	// 		if($username == $elements['username']){
	// 			if($password == $elements['password']){
	// 				header("Location:homepage.html");
	// 			}
	// 		}
	// 	}
	// 	echo("Incorrect username or password");
	// }

	function validate($username, $password){
		// $db = new Database();
		// $db->exec("CREATE TABLE IF NOT EXISTS recipes (username TEXT PRIMARY KEY, password TEXT, email TEXT, name TEXT)");
		// $ret = $db->query("SELECT username, password FROM recipes");
		// while($elements = $ret->fetchArray(SQLITE3_ASSOC)){
		// 	if($username == $elements['username']){
		// 		if($password == $elements['password']){
		// 			header("Location:homepage.html");
		// 		}
		// 	}
		// }
		// echo("Incorrect username or password");
		if($username == 'abhilaash'){
			if($password == 'asdfjkl;'){
				header("Location: ")
			}
		}
	}
	// 	$host = "br-cdbr-azure-south-a.cloudapp.net";
	//     $user = "ba9022d6acbebc";
	//     $pwd = "cbb3d49f";
	//     $db = "LoginInfo";
			
	// 	// Create connection
	// 	$conn = new mysqli($servername, $username, $password);
		
	// 	// Check connection
	// 	if ($conn->connect_error) {
	// 	    die("Connection failed: " . $conn->connect_error);
	// 	} 
	// 	echo "Connected successfully";
	// 	class Database extends SQLite3 {
	// 		function __construct() {
	// 			$this->open('names.db', SQLITE3_OPEN_READWRITE);
	// 		}
	// 	}
	// 	if(array_key_exists("username", $_REQUEST)){
	// 		$username = $_REQUEST["username"];
	// 		$password = md5($_REQUEST["password"]);
	// 		$data = validate($username, $password);
	// 	}
	// function validate($username, $password){
	// 	$db = new Database();
	// 	$db->exec("CREATE TABLE IF NOT EXISTS recipes (username TEXT PRIMARY KEY, password TEXT, email TEXT, name TEXT)");
	// 	$ret = $db->query("SELECT username, password FROM recipes");
	// 	while($elements = $ret->fetchArray(SQLITE3_ASSOC)){
	// 		if($username == $elements['username']){
	// 			if($password == $elements['password']){
	// 				header("Location:homepage.html");
	// 			}
	// 		}
	// 	}
	// 	echo("Incorrect username or password");
	// }
	?>
</html>
