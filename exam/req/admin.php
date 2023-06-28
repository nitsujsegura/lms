<?php 

session_start();

if (isset($_POST['name']) &&
    isset($_POST['passd'])) {

	include "../dbConnection.php";
	
	$uname = $_POST['name'];
	$pass = $_POST['passd'];

	if (empty($uname)) {
		$em  = "Username is required";
		header("Location: ../Studentlogin.php?error=$em");
		exit;
	}else if (empty($pass)) {
		$em  = "Password is required";
		header("Location: ../Studentlogin.php?error=$em");
		exit;
	}else {	
        	$sql = "SELECT * FROM admin1
        	        WHERE username = ? ";
	    
        $stmt = $conn->prepare($sql);
				$stmt->execute([$uname]);

        if 	($stmt->rowCount() == 1) {
			$user = $stmt->fetch();
        	$username = $user['username'];
        	$password = $user['password'];	
        	
            if ($username === $uname) {
            	if (password_verify($pass, $password)) {
								$_SESSION['name'] = $user; 
						{
                        $id = $user['admin_id'];
                        $_SESSION['admin_id'] = $id;
                        header("Location: ../dash.php");
                        exit;
                    }
				
				
            	}else {
		        	$em  = "Incorrect Username or Password ";
				    header("Location: ../Studentlogin4.php?error=$em");
				    exit;
		        }
            }else {
	        	$em  = "Incorrect Username or Password ";
			    header("Location: ../Studentlogin.php?error=$em");
			    exit;
	        }
        }else {
        	$em  = "Incorrect Username or Password ";
		    header("Location: ../Studentlogin.php?error=$em");
		    exit;
        }
	

	}
}
	

else{
	header("Location: ../Studentlogin.php");
	exit;
}