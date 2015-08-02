<html>
	<head>
		 <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
	</head>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        	<img src="planit logo1.png" height = "400" width = "350">
        	<div class = "spacing">

        	</div>
            <!-- <h1 class="text-center login-title"><font color="white">Login</font></h1> -->
            <div class="account-wall">

                <form class="form-signin">
                <!-- <label><font color="white">Username:</font></label> -->
                <input type="username" class="form-control" placeholder="Username" required>
                <!-- <label><font color="white">Password:</font></label> -->
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
    
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
	<?php
		$host = "us-cdbr-azure-northcentral-a.cleardb.com";
	    $user = "bb627113325a2e";
	    $pwd = "0dc79705";
	    $db = "value of Database";
			
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
		class Database extends SQLite3 {
			function __construct() {
				$this->open('names.db', SQLITE3_OPEN_READWRITE);
			}
		}
		if(array_key_exists("username", $_REQUEST)){
			$username = $_REQUEST["username"];
			$password = md5($_REQUEST["password"]);
			$data = validate($username, $password);
		}
	function validate($username, $password){
		$db = new Database();
		$db->exec("CREATE TABLE IF NOT EXISTS recipes (username TEXT PRIMARY KEY, password TEXT, email TEXT, name TEXT)");
		$ret = $db->query("SELECT username, password FROM recipes");
		while($elements = $ret->fetchArray(SQLITE3_ASSOC)){
			if($username == $elements['username']){
				if($password == $elements['password']){
					header("Location:homepage.html");
				}
			}
		}
		echo("Incorrect username or password");
	}

	?>
</html>
	