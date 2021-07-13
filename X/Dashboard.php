<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
@import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html {
    font-size: 10px;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
}
a {
    text-decoration: none;
    color: #7698cf;
    font-size: 20px
}
p {
    color: white;
    font-size: 1.4rem;
    margin-top: 5px;
    line-height: 2.5rem;
    font-weight: 300;
    letter-spacing: .05rem;
}

.sidenav {
  height: 100%;
  width: 25%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #f1f1f1;
  overflow-x: hidden;
  padding-top: 30px;
  margin-top: 58px;
}

.sidenav h1 {
  margin-top: 20px;
  font-size: 30px;
}

.sidenav a {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 20px;
}

.sidenav a:hover {
  background-color: #B4846C;
}

iframe {
  margin-left: 25%; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.navbar {
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.568);
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  color: #B4846C
}

.navright {
  float: right;
}

.profil{
  text-align: center;
  margin: 0px;
  padding-bottom: 50px;
  }

.profil img {
  border-radius: 50%;
  width: 200px;
  height: 200px;
}

</style>
</head>
<body>
<div class="navbar">
  <a href="Dashboard.php"><h2>Zen Education</h2></a>
  <div class="navright">
    <a href="index.php"><h2>LOGOUT</h2></a>
  </div>
</div>

<div class="sidenav">
    <div class="profil">
      <img src="img/avatar.png" alt="">
      <h1>Welcome to Zen Ed!</h1>
    </div>
    <hr>
    <a href="DashboardMain.php" target="frameMain" id="defaultOpen">Dashboard</a>
    <hr>
    <a href="Contact.php" target="frameMain">Contact</a>
    <hr>
    <a href="About.php" target="frameMain">About</a>
    <hr>
</div>
<iframe src="" name="frameMain" frameborder="0" style="position: fixed; height: 100%; width: 75%; border: none; margin-top: 60px;"></iframe>

<script>
document.getElementById("defaultOpen").click();
</script>

</body>
</html> 
