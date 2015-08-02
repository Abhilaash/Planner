<!DOCTYPE html>
<html>
    <head>
	<title> Registration </title>
		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    
    	<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    	<link rel="stylesheet" href="registration.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="registration.js"></script>
	</head>
	<body>
	
	<div class="container">
    	<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<form class="form-registration">
					<center><h1> <font color="#FF6666">Register Here! </font></h1><Center>
					<img src = "planitlogosidewaysblack.png" height = "70%" width = "70%">
					<input type="text" class="form-control" placeholder="Firstname" id = "firstname" required>
			        <input type="text" class="form-control" placeholder="Lastname" id = "lastname" required>
			        <input type="text" class="form-control" placeholder="Email" id = "email" required>
			        <input type="text" class="form-control" placeholder="Username" id = "username" required>
			        <input type="text" class="form-control" placeholder="Password" id = "password" required>
			        <input type="text" class="form-control" placeholder="Confirm Password" id = "confirmpassword" required>
			        <button class="btn btn-lg btn-danger btn-block" type="submit">Register</button>
			    </form>
			</div>
		</div>
	</div>

	</body>
	<?php
		class Database extends SQLite3 {
			function __construct() {
				$this->open('accountdata.db', SQLITE3_OPEN_READWRITE);
			}
		}
		if(array_key_exists("firstname", $_REQUEST)){
			$firstname = $_REQUEST["firstname"];
			$lastname = $_REQUEST["lastname"];
			$username = $_REQUEST["username"];
			$password = $_REQUEST["password"];
			$email = $_REQUEST["email"];
			if($password == $_REQUEST["confirmpass"]){
				$data = uploadData($firstname." ".$lastname, $username, md5($password), $email);
			}
			else{
				echo("Passwords do not match");
			}
		}
		function uploadData($name, $username, $password, $email) {
			$db = new Database();
			$db->exec("CREATE TABLE IF NOT EXISTS recipes (username TEXT PRIMARY KEY, password TEXT, email TEXT, name TEXT)");
			$stmt = $db->prepare("INSERT INTO recipes VALUES (:us, :ps, :em, :n)");
			$stmt -> bindValue(':us', $username);
			$stmt -> bindValue(':ps', $password);
			$stmt -> bindValue(':em', $email);
			$stmt -> bindValue(':n', $name);
			$stmt -> execute();
		}
	?>
</html>
