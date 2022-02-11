<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>iSkin Recommendation System</title>
		<style>
            body {
                margin: 0;
                padding: 0;
                background: url(5.jpg);
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
                width: 320px;
                height: 420px;
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
	if(!isset($_SESSION)) {
		session_start();
	}
	
	if(isset($_POST['submit'])) {
		$user_email = $_POST['email'];
		$user_password = $_POST['password'];

		$sql = "SELECT * FROM ADMIN WHERE ADMIN_EMAIL = '$user_email'";
        
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0) {
			foreach($result as $row) {
				$db_password = $row['ADMIN_PASSWORD'];
			}
			
			if(strcmp($user_password, $db_password) == 0) {
				echo "<script>
						alert(\"Try Another Password !\");
						window.location=\"password.php\";
					  </script>";
			}
            else {
				$sql = "UPDATE ADMIN SET ADMIN_PASSWORD = '$user_password' WHERE ADMIN_EMAIL = '$user_email'";
				$result = mysqli_query($conn, $sql);
			
		}
        ?>
                    <script>
                            swal.fire({
                                icon: 'success',
                                title: 'Password Successfully Changed',
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
			<h1>Change Password</h1>
			<form method="post">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@gmail.com" required>
				<p>New Password</p>
				<input type="password" name="password" id="myPassword" placeholder="Enter New Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Minimum eight characters, at least one uppercase letter, one number and one special character" required>
				<input type="checkbox" onclick="showPassword()">Show password
				<input type="submit" name="submit" value="Submit">
				<a href="login.php">Back to login</a><br>
			</form>
		</div>
		<script>
			function showPassword() {
				var x = document.getElementById("myPassword");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>
	</body>
</html>

