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

        
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <!-- <h1 class="text-center login-title"><font color="white">Login</font></h1> -->
            <div class="account-wall">

                <form class="form-signin" action="login.php">
                <center><h1> <font color="#19A3FF">Login </font></h1><Center>
                <center><img src="planitlogosidewaysblack.png" height = "70%" width = "70%"></center>
                <input type="text" class="form-control" placeholder="Username" name = "username" id = "username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name = "password" id = "password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <a href="registration.php" class="text-center new-account">Create an account </a>
                </form> 
            </div>
            
        </div>
    </div>
</div>
	<?php
	$username = "ba9022d6acbebc";
	$password = "cbb3d49f";
	$hostname = "br-cdbr-azure-south-a.cloudapp.net"; 
	
		if(array_key_exists("username", $_REQUEST)){
			$usernamePerson = $_REQUEST["username"];
			$passwordPerson = $_REQUEST["password"];
			$data = validate($usernamePerson, $passwordPerson);
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
		function validate($usernamePerson, $passwordPerson){
			if($usernamePerson == "colin"){
				if($passwordPerson == "asdfjkl;"){
					header("Location: userprofile.html");
					return True;
				}
			}
			return False;
		}
	// function validate($usernamePerson, $passwordPerson){
	// 	if($usernamePerson == 'abhilaash'){
	// 		if($passwordPerson == 'asdfjkl;'){
	// 			header("Location: userprofile.html")
	// 		}
	// 	}
	// }
	?>
</html>
