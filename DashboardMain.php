<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Main</title>
	<style type="text/css">

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
    color: rgb(184, 43, 0);
    font-size: 20px
}

a:hover {
    text-decoration: none;
    color: rgb(184, 43, 0);
    font-size: 19px;
    font-style:medium;
}

p {
    color: black;
    font-size: 1.4rem;
    margin-top: 5px;
    line-height: 2.5rem;
    font-weight: 300;
    letter-spacing: .05rem;
}



.main {
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


#Contains .Contains {
    flex-direction: column;
    text-align: center;
    max-width: 1500px;
    margin: 0 auto;
    padding-top: 20px;
    padding-bottom: 50px
}
#Contains .Contain-x {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 0px;
}
#Contains .Container-item {
    flex-basis: 30%;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    padding: 30px;
    border-radius: 10px;
    background-size: cover;
    margin: 0px 1%;
    position: relative;
    z-index: 1;
    overflow: hidden;
}
#Contains .Container-item::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-image: linear-gradient(60deg, #FFC000 0%, #ffc400 100%);
    opacity: .9;
    z-index: -1;
}
#Contains .Contain-x .icon {
    height: 80px;
    width: 80px;
    margin-bottom: 20px;
}
#Contains .Container-item h2 {
    font-size: 2rem;
    color: black;
    margin-bottom: 10px;
    text-transform: uppercase;
}
#Contains .Container-item p {
    color: black;
    text-align: left;
}

	</style>
</head>
<body>
<div class="main">
  <section id="Contains">
    <div class="Contains container">
      <div class="Contain-x">
        <div class="Container-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Daftar Kelas</h2>
          <a href="kelas.php" target="frame" id="defaultOpenMain">Lihat Kelas</a>
        </div>
        <div class="Container-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Konsultasi</h2>
          <a href="input.php" target="frame">Input Data</a>
        </div>
        <div class="Container-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Riwayat Konsultasi</h2>
          <a href="view.php" target="frame">Lihat Data</a>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <iframe src="" name="frame" frameborder="0" height="400px" width="100%"></iframe>

  <hr>
  <script>
    document.getElementById("defaultOpenMain").click();
  </script>
</div>
</body>
</html>