<?php
    $error = "NO ERROR";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ntando Shop</title>

    <link rel="icon" href="assets/images/shop_icon.png" type="image/x-icon">

    <!--CSS--><!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--BoxiIconS CSS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--my CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/formStyle.css">
    <link rel="stylesheet" type="text/css" href="css/aboutContactStyle.css">

</head>
<body>
    <div class="container formContainer">

        
    <h1 class="formHeader">
        <img class="imageLogo" src="assets/images/shop_icon.png" alt="">
    </h1>
    <h1 class="formHeader">
        LOGIN
    </h1>

    <form method="post" action="login.php">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <div class="forgotPass">
            <p><a href="passwordReset.php">Forgot Password?</a></p>
        </div>
        <br>
        
        <input type="submit" value="Login">
        <a href="admin.php">admin</a>
        <a href="employee.php">employee</a>
        
    </form>

        
		
		
		<div class="error">
        	<p class="errorM"><?php echo $error; ?></p>
    	</div>
	</div>
</body>
</html>