<?php 
session_start();

if (isset($_POST['uname']) &&
    isset($_POST['pass']) &&
    isset($_POST['role'])) {

	include "../DbConnection.php";
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];

	if (empty($uname)) {
		$em  = "Username is required";
		header("Location: ../login.php?error=$em");
		exit;
	}else if (empty($pass)) {
		$em  = "Password is required";
		header("Location: ../login.php?error=$em");
		exit;
	}else if (empty($role)) {
		$em  = "An error Occurred";
		header("Location: ../login.php?error=$em");
		exit;
	}else {
        
        if($role == '1'){
        	$sql = "SELECT * FROM kindergarten
        	        WHERE username = ?";
        	$role = "kindergarten";
        }else if($role == '2'){
        	$sql = "SELECT * FROM grade_1 
        	        WHERE username = ?";
        	$role = "grade_1";

        }else if($role == '3'){
                $sql = "SELECT * FROM grade_2
                        WHERE username = ?";
                $role = "grade_2";
        }else if($role == '4'){
                    $sql = "SELECT * FROM grade_3
                            WHERE username = ?";
                    $role = "grade_3";
                }
        else if($role == '5'){
                    $sql = "SELECT * FROM grade_4 
                            WHERE username = ?";
                    $role = "grade_4";
                
        }else if($role == '6'){
                    $sql = "SELECT * FROM grade_5 
                            WHERE username = ?";
                    $role = "grade_5";
                  
        }else {
        	$sql = "SELECT * FROM grade_6
        	        WHERE username = ?";
        	$role = "grade_6";
        }
		

        $stmt = $conn->prepare($sql);
         $stmt->execute ([$uname]);

        if ($stmt->rowCount() == 1) {
        	$user = $stmt->fetch();
        	$username = $user['username'];  
        	$password = $user['password'];
        
			if ($username === $uname) {
			if (password_verify($pass, $password)) {
				$_SESSION['role'] = $role;
				if ($role == 'grade_1') {
					$id = $user['grade1_id'];
					$_SESSION['grade1_id'] = $id;
					header("Location: ../account.php");
					exit;
				
				}else {
		        	$em  = "Incorrect Username or Password3";
				    header("Location: ../index.php?error=$em");
				    exit;
		        }
            }else {
	        	$em  = "Incorrect Username or Password2";
			    header("Location:  ../index.php?error=$em");
			    exit;
	        }
        }else {
        	$em  = "Incorrect Username or Password1";
		    header("Location: ../index.php?error=$em");
		    exit;
        }
	}	else {
        	$em  = "Incorrect Username or Password1.5	";
		    header("Location: ../index.php?error=$em");
		    exit;
	}

	}
}