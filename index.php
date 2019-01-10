<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> 
	<!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body style="background-color: #1e1e1e;">
	<form method="post" action="login_process.php">
		<div class="content" align="center">
		    <div class="login-box">
		    	<h3 class="txt"><b>Welcome</b></h3>
		    	<div class="textbox">
		    		<i class="fas fa-user"></i>
		    		<input type="text" name="username" placeholder="Username" required>
		    	</div>

		    	<div class="textbox">
		    		<i class="fas fa-lock"></i>
		    		<input type="password" name="password" placeholder="Password" required>
		    	</div>
		    	<input type="submit" name="login" value="Login" class="btn btn-dark">	
		    </div>
		</div>
	
  <footer class="center pad-2 font-size-1" style="background: rgba(255,255,255,0.5); text-align: center; margin-top: 192px;">Copyright &copy; 2018 e-Perpustakaan.</footer>
</form>
</body>
</html>