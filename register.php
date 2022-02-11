<html>
	<head>
          <!-- Favicons -->
        <link href="assets/img/logo1.png" rel="icon">
        <link href="assets/img/logo1.png" rel="logo1">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>iSkin Recommendation System</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                background:url(5.jpg);
                background-size: cover;
                background-position: center;
                font-family: sans-serif;
            }
            h1 {
                margin: 0;
                padding: 0 0 20px;
                text-align: center;
                font-size: 22px;
                color:#696969;
            }
            img.logo {
                position: absolute;
                max-width: 80%;
                top: 50px;
            }
            img.logo:empty {
                top: 15%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -moz-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                -o-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);	
            }
            .avatar {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                position: absolute;
                top: -50px;
                left: calc(50% - 50px);
            }
            .loginbox {
                width: 400px;
                height: 530px;
                background: #000;
                background-color:rgb(192, 192, 192,1.0);
                color: #000;
                top: 40%;
                left: 50%;
                position: absolute;
                transform: translate(-50%,-50%);
                box-sizing: border-box;
                border-radius: 20px;
                padding: 70px 30px;
                margin-top: 70px;
            }
            .loginbox p {
                margin: 0;
                padding: 0;
                font-weight: bold;
            }
            .loginbox input {
                width: 100%;
                margin-bottom: 20px;
            }
            .loginbox input[type="text"], input[type="password"] {
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #FFFFFF;
                font-size: 16px;
            }
            .loginbox input[type="submit"] {
                border: none;
                outline: none;
                height: 40px;
                background: #D3D3D3;
                color: #fff;
                font-size: 18px;
                border-radius: 20px;
            }
            .loginbox input[type="submit"]:hover {
                cursor: pointer;
                background: #A9A9A9;
                color: #000;
            }
            .loginbox input[type="checkbox"] {
                width: 20px;
                margin-left: -2px;
            }
            .loginbox a {
                text-decoration: none;
                font-size: 12px;
                line-height: 20px;
                color: #708090;
            }
            .loginbox a:hover {
                color: #000;
            }
            @media screen and (orientation: portrait) {
              img.logo { max-width: 90%; }
            }

            @media screen and (orientation: landscape) {
              img.logo { max-height: 90%; }
            }
        </style>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <?php

            include("config.php");
            session_start();

            if(isset($_POST["register"])) {

				$users_name= $_POST["Name"];
                $users_username = $_POST["username"];
                $users_email = $_POST["email"];
                $users_password = $_POST["password"];

                $query1= "SELECT * from users WHERE users_email = '$users_email'";
                $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));
                 
                if(mysqli_num_rows($result1) !== 1) {
                    $query2 = "INSERT INTO USERS (USERS_USERNAME, USERS_NAME, USERS_EMAIL, USERS_PASSWORD) VALUES('$users_username', '$users_name', '$users_email', '$users_password')";
                    mysqli_query($conn, $query2) or die (mysqli_error($conn));
		?>
                <script>
                swal.fire({
                    icon: 'success',
                    title: 'Successfully Registered',
                }).then(function() {
                    window.location.href = 'login.php'
                });
                </script>
		<?php
       
                }
                else {
		?>
					<script>
						Swal.fire({
                        	icon: 'error',
                        	title: 'User Already Exist',
                        	text: 'Please use another email!',
						})
                	</script>

		<?php	}
             }
        ?>

        <div class="loginbox">
			<img src="icon.jpg" class="avatar" alt="avatar">
			<h1>Create Account</h1>
			<form method="post">
				<p>Name</p>
				<input type="text" name="Name" placeholder="Enter Name" required>
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" required>
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@gmail.com" required>
				<p>Password</p>
				<input type="password" name="password" id="myPassword" placeholder="Enter Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Minimum eight characters, at least one uppercase letter, one number and one special character" required>
				<input type="checkbox" onclick="showPassword()">Show password
				<input type="submit" name="register" value="Register">
			</form>
        </div>

        <script>
            function showPassword() {
                var x = document.getElementById("myPassword");
                if (x.type === "password") {
                    x.type = "text";
                } 
                else {
                    x.type = "password";
                }
            }
        </script>    
	</body>
</html>

