<?php
	$this->load->helper('url'); 
	$this->load->library('session');
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login</title>
  <link rel="stylesheet" href=<?php echo base_url()."style/23-dark-login-form/23-dark-login-form/css/style.css"?>>
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form method="post" action=<?php echo base_url()."index.php/Login/Login/process"?> class="login">
    <p>
      <label for="login">UserName:</label>
      <input type="text" name="username" id="login" value="sv_phamvanthanh">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>
	
	<p class="error" style="color: #E0001E">
		<?php echo $this->session->flashdata('Error')?> 
	</p>
  </form>

  
</body>
</html>