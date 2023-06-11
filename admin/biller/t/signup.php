<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<style>
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
<body>
<div class="center">
<h1>SIGN UP</h1>
     <form action="signup-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="txt_field">
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name"><br>
          <?php }?>
          <span></span>
          <label>Full Name</label>
        </div>

        <div class="txt_field">
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname"><br>
          <?php }?> 
          <span></span>
          <label>User Name</label>
        </div>

        <div class="form-group">
        <select class="form-control" name="level" required>
        <option selected="true" disabled="disabled">Choose User level</option>   
        <option value="Loan Officer">Loan Officer</option>
        <option value="Biller">Biller</option>
        <option value="Manager">Manager</option>
        </select>
        </div>

        <div class="txt_field">
     	<input type="password" 
                 name="password"><br>
          <span></span>
          <label>Password</label>
          </div>

          <div class="txt_field">
          <input type="password" 
                 name="re_password"><br>

          <span></span>
          <label>Confirm Password</label>
          </div>


        <input type="submit" value="Sign Up">
        <div class="signup_link"><a href="index.php"></a>
        </div>
     </form>
</body>
</html>