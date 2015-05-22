<?php
include ("load-forms-admin.php");

if (isset($_SESSION['user_logged_in'])) {
	header("Location: ../form-admin.php");
	exit;
}

$error = false;

if ($_SERVER['REQUEST_METHOD']=="POST") {
	if (check_admin_credentials($_POST['username'], $_POST['password'])) {
		$_SESSION['user_logged_in'] = 1;
		
		header("Location: ../form-admin.php");
		exit;

	} else {
		$error = "The provided credentials are not valid. Please try again. ";
	}
} else {
	// Just render the login form
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Enk forms login</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
	<div id="wrapper">
		<div class="login">
			<form action="" method="post" class="">
		        <fieldset >
		        	<h2>Admin Form Login</h2>
		        	<div class="cl">&nbsp;</div>
		        	<br />
		            <div class="frow">
		                <label for="username" >UserName:</label>
		                <input type="text" name="username" id="username" class="field" />   
		            </div>
		            <div class="frow">
		                <label for="password" >Password:</label>
		                <input type="password" name="password" id="password" class="field" />    
		            </div>
		            <input type="submit" name="Submit" class="info-btn" value="Submit" />
		        </fieldset>
		    </form>
		    <?php if ($error): ?>
				<div class="error">
					<p><?php echo $error; ?></p>
				</div>
			<?php endif ?>
		</div>
	</div>
</body>
</html>