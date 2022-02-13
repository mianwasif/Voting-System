
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Voting System</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign Up to start your session</p>

    	<form action="reg.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="cnic" placeholder="CNIC" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
              <div class="form-group has-feedback">
        		<input type="text" class="form-control" name="firstname" placeholder="FirstName" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
              <div class="form-group has-feedback">
        		<input type="text" class="form-control" name="lastname" placeholder="LastName" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-12">
          			<button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Sign Up</button>
					</div>
                    
                    
      		</div>
    	</form>
		<br>
		<div class="text-center">Already Have an Account?<a href="index.php" >Login Here</a></div>
		
   	
  	</div>
  	
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>