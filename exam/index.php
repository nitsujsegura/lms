<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Y School</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="logo.png">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body class="body-login">
    <div class="black-fill"><br /> <br />
    	<div class="d-flex justify-content-center align-items-center flex-column">
    	<form class="login" 
    	      method="post"
    	      action="req/login.php">

    		<div class="text-center">
    			<img src="logo.png"
    			     width="100">
    		</div>
			<?php
			
		?>
    		<h3>LOGIN</h3>
    		<?php if (isset($_GET['error'])) { ?>
    		<div class="alert alert-danger" role="alert">
			  <?=$_GET['error']?>
			</div>
			<?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Username</label>
		    <input type="text" 
		           class="form-control"
		           name="uname">
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Login As</label>
		    <select class="form-control"
		            name="role">
          <option value="1">Kindergarten</option>
		    	<option value="2">Grade 1</option>
		    	<option value="3">Grade 2</option>
		    	<option value="4">Grade 3</option>
          <option value="5">Grade 4</option>
		    	<option value="6">Grade 5</option>
		    	<option value="7">Grade 6</option>
		    </select>
		  </div>

		  <button type="submit"  formaction="req/login.php" class="btn btn-primary">Login</button>
<div>
	<br>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
    Admin
</button>
<div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Sign in As Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <!-- Name input -->
					<div class="form-outline mb-4">
		    <label class="form-label">Username</label>
		    <input type="text" 
		           class="form-control"
		           name="name">

                    <!-- password input -->
                    <div class="form-outline mb-4">
					<label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="passd">

                    <!-- Submit button -->
                    <button type="submit" formaction="req/admin.php" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div></div>
</script>	
	
			
        	Copyright &copy; 2022 Y School. All rights reserved.
        </div>

    	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
	
</body>
</html>