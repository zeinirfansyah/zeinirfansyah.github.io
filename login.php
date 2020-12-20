<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <title>Document</title>
    <script>
        <?php
            $usernameErr = "";
            $username = "";
            $password = "";
            $passwordErr = "";
            $Error = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["username"])) {
                    $usernameErr = "* Isi dulu cuy";
                }
                else {
                    $username = test_input($_POST["username"]);
                    if (!preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
                        $usernameErr = "* Coba lagi cuy";
                     }
                }

                if (empty($_POST["password"])) {
                    $passwordErr = "* Isi dulu cuy";
                }
                else {
                    $password = test_input($_POST["password"]);
                    if (!preg_match ("/^[a-zA-Z0-9]+$/", $password)) {
                        $passwordErr = "Coba lagi cuy";
                     }
                     else {
                        if ($username == "zeinirfansyah" && $password == "Zein123") {
                            header("Location: Dashboard.php");
                        }
                        else {
                            $Error = "Kode aksesnya gak cocok nih";
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
</head>

<body>
    <div id="Login">
        <div id="Login-content">
            <div id="judul-Login">
                <h2>Sign in</h2>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="form">
                <label for="username">
                    Kode akses
                </label>
                <input id="username" class="kolom" type="text" name="username" value="<?php echo $username; ?>">
                <div class="garisbawah"></div>
                <span class="error"> <?php echo $usernameErr; ?></span>
                <label for="password">
                    Password
                </label>
                <input id="password" class="kolom" type="password" name="password" value="<?php echo $password; ?>">
                <div class="garisbawah"></div>
                <span class="error"> <?php echo $passwordErr; ?></span>
                <input id="submit" type="submit" name="submit" value="LOGIN" />
                <span class="error"> <?php echo $Error; ?></span>
                <p>Jika belum punya kode akses, silakan minta akses pada owner!</p>
            </form>
        </div>
    </div>
</body>

</html>