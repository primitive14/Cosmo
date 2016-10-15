<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head><title><?php if(isset($title)){echo $title;}?></title>
<body>
<h1>Login</h1>

<?php echo form_open('customer/login');?>

<label for = "username"> User Name </label>
<input type = "input" name = "c_id" required/>  <br/>

<label for = "password"> Password </label>
<input type = "password" name = "key" required/>  <br/>

<input type = "submit" name = "login" value = "Login"/>
</form>

</body>

</html>
