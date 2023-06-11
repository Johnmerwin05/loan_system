<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  
  <style type="text/css">

.pass input {
   margin-bottom: 5%
}

.custom-select{
  /* wrapper style */
  position: relative;
  display:block;
  max-width: 400px;
  min-width: 180px;
  margin:0 auto;
}

  select {
    border: 2px solid #740e74;
    outline:none;
    background: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
    margin:0;
    display:block;
    width: 100%;
    cursor: pointer; 
    padding: 12px 55px 15px 15px;
    font-size: 14px;
  }


</style>
</head>
<body>

<div class="center">
      <h1>Admin | Login</h1>
     <form action="login.php" method="post">
     	<?php 
     	
     	
     	if (isset($_GET['error'])) { ?>
     	     
     	
     	
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 
		 <div class="txt_field">  
          <input type="text" name="uname" >
          <span></span>
          <label>Username</label>
        </div>

		 <div class="txt_field">
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>

      
        <div class="button"><input type="submit" value="Login"></div>
        

        <div class="signup_link"> <!-- Dont have an account?<a href="signup.php">Signup</a> -->
        </div>



     </form>
</body>
</html>