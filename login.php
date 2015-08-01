<!DOCTYPE html>
<html>
    <head>
        <title> Recipe Finder </title>
        <link rel="shortcut icon" href="image.ico">
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="Buttons3.js"></script>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<h1>Please Log In To Continue!
	<body>
	<form method="POST" action="login.php"><br>
	Username:<br>
	<input type="text" name="username" id="username"><br><br>
	Password:<br>
	<input type="password" name="password" id="username"><br>
	&nbsp;&nbsp;<button type="submit" id = "login" accesskey = "l" >Log In</button>&nbsp;&nbsp;
	</form>
	</body>
	<?php
		class Database extends SQLite3 {
			function __construct() {
				$this->open('fruits.db', SQLITE3_OPEN_READWRITE);
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
	