<?php
$email_address = $_POST['email_address'];
$password = $_POST['password'];

 //echo $email_address."<br>";
 //echo $password;

 $result = validate_credential($email_address, $password);

if($result){

	// <!-- <br><h1 style="text-align: center;">LOGIN SUCCESSFULL</h1> -->
	 load_template('index'); 

}
else{
?>
<!-- <h1>Password is wrong<h1> -->
<main class="form-signin" >
	<form method="post" action="index.php">
		<img class="form-signin" src="https://labs.selfmade.ninja/assets/brand/logo-text.svg" alt="logo" width="180" height="100">
		<h1 class="h3 mb fw-normal">Please Sign in</h1>
	  
	  <div class="form-floating">
	  	<input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.gmail.com">
	    	<label  for="floatingInput" class="form-label" placeholder="exmp:klinton@gmail.com">Email address</label>
	    	<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div><br>
	  </div>
	  <div class="form-floating">
	  	<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
	    	<label for="floatingPassword" class="form-label">Password</label><br>
	  </div>
	  
	  <button type="submit" class="w-100 btn-lg btn-primary hvr-grow-rotate">Sign in</button>
	</form>
</main>
<style>
	/* .form-signin{
		text-align: center;
	}	 */
</style>
<?php 
}
?>