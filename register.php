<!DOCTYPE html>
<html>
	<body>
	<?php
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $email =    $_POST['email'];
		$credential = $firstname . "," . $lastname . ", " . $email;
		
		$exist = 0;
		foreach(file('users.txt') as $line){
			list($userFromFile, $passwordFromFile) = explode(",",$line);
			if($userFromFile == $email ){
				$exist = 1;
				break;
			}
		}
		
		if($exist == 1){
			echo "This email is already being used <br/><br/>Please enter another one please. <a href='register.html'>register.html</a>";
		}
		else{
			$file = fopen("users.txt","a");
			
			fwrite($file,$credential."\n");
			
			fclose($file);
			echo "Thanks for signing up for the newsletter <br/><br/> Click here to go back to home page <a href='http://titan.csit.rmit.edu.au/~s3657271/EB2/index.php'>Home Page</a>";
		}
	?>
	</body>
</html>