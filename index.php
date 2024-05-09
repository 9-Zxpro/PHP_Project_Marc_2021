<?php
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MARC</title>
  </head>
  <body>
  
   
	<div class="col-sm-4 container">
	<h1 class="text-center"> Login Page</h1>
		<div class="card mt-5">
				  <div class="card-body">
						<form action="logcode.php" method="post">
								<div class="mb-3">
									<h6 class="text-center text-danger">
									
										<?php
										if(isset($_REQUEST['msg']))
										{
											echo $_REQUEST['msg'];
										}
										?>
									
									</h6>
								
								<label for="role">Select Role</label>
									<select class="form-select" name="role" id="role" required>
										<option disabled selected value="">---Select Your Role---</option>
										<option value="1">Admin</option>
										<option value="2">Employee</option>
									</select>
								</div>
								  <div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
									<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
								  </div>
								  <div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
								  </div>
								  <div class="mb-3 form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								  </div>
								  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
				  </div>
		</div>
	</div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>