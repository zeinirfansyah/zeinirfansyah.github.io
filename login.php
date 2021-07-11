<!DOCTYPE html>
<html>
<head>
	<title>Login Zed Ed</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">

	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script>
		<?php
            $usernameErr = "";
            $username = "";
            $password = "";
            $passwordErr = "";
            $Error = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["username"])) {
                    $usernameErr = " Username harus diisi cuy!";
                }
                else {
                    $username = test_input($_POST["username"]);
                    if (!preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
                        $usernameErr = " Terjadi kesalahan saat input username";
                     }
                }

                if (empty($_POST["password"])) {
                    $passwordErr = " Password harus diisi cuy!";
                }
                else {
                    $password = test_input($_POST["password"]);
                    if (!preg_match ("/^[a-zA-Z0-9]+$/", $password)) {
                        $passwordErr = " Terjadi kesalahan saat input password";
                     }
                     else {
                        if ($username == "zeinirfansyah" && $password == "Zein123") {
                            header("Location: Dashboard.php");
                        }
                        else {
                            $Error = " Kode aksesnya gak cocok nih, coba minta akses sama owner";
                        }
                     }
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);

                return $data;
            }
        ?>
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav>
        <div class="wrapper">
            <div class="logo">
                <a href="index.php">Zen Academy</a>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="index.php" class="btn-back">Kembali</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<img class="GambarBackground" src="img/GambarBackground.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.png">
		</div>
		<div class="login">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="form">
				<img src="img/avatar.png">
				<h2 class="title">Selamat Datang</h2>
           		<div class="div-input username_input">
				   <span class="error"> <?php echo $usernameErr; ?></span>
           		   <div class="div">
						<input type="text" class="input" placeholder="Kode Akses" id="username" name="username" value="<?php echo $username; ?>"> 
					</div>
					<div class="garisbawah"></div>   
           		</div>  
				<div class="div-input pasword_input">
					<span class="error"> <?php echo $passwordErr; ?></span>
           		   <div class="div">
           		    	<input type="password" class="input" placeholder="Password" id="password" name="password" value="<?php echo $password; ?>">
					</div>
					<div class="garisbawah"></div>
            	</div>
            	<a href="http://instagram.com/zeinirfansyah">Minta kode akses (via DM IG)</a>
				<input class="btn-login" id="submit" type="submit" name="submit" value="LOGIN">
				<span class="error"> <?php echo $Error; ?></span>
            </form>
        </div>
    </div>
</body>
</html>