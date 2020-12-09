<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php session_start();

include('adeyemi.php');
       


$gsoul=array();

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
  
  $email=$_POST['email'];
  $password=$_POST['password'];
   
        // to vaildate email

  if(empty($email)){
    $gsoul['email'] = "<div class='text-danger'>Email address field is required!</div>";
  }else if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $gsoul['email']= "<div class='text-danger'>Invalid email address field </div>";
  }

  // to validate password field

  if (empty($password)) {
    $gsoul['password']="<div class='text-danger'>password field is required!</div>";

  }else if (strlen($password)< 3) {
    $gsoul['password']="<div class='text-danger'>your password is less than mininum number of 6 character!</div>";
  }

  // to check if there is no validate error

  if (count($gsoul)==0) {
    
    // create object of authentication class
    $obj =new Authentication("www.adeyemiadeeso.com", "adeyemi3_adeyemi1", "dantealighieri", "adeyemi3_adeyemi");
    $output=$obj->login($email, $password);
 
  }

} 


?>


<div class="row">
	<div class="col-md-3" >
		<a href="index.php" style="background-color: orange;font-size: 30px" class="text-dark">HOME</a>
	</div>

	<div class="col-md-6 form-group text-dark" >
		<div class="" style="text-align:center;">
			<?php
                if (isset($output)) {
				echo $output;
			}
            	?>
			<h3>Login Form</h3>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="btn-dark">
			<h5 style="text-align: left;">Email Address: </h5>
			<input type="text" name="email" id="email" placeholder="Enter your email address" required class="form-control">

              <?php

      if (isset($gsoul['email'])) {
        echo $gsoul['email'];
      }

      ?>  
			<h5 style="text-align: left">Password: </h5>
            <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>

              <?php

      if (isset($gsoul['password'])) {
        echo $gsoul['password'];
      }

      ?>  
      <br>

            <button type="submit" name="submit" value="send" class="btn btn-outline-warning">Submit</button>
		</form>
	</div>
</div>

	<div class="col-md-3"></div>
</div>

</body>
</html>