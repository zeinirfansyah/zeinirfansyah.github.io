<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/vid.css">

</head>
<body>
    
<div class="wrapper">
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="dashboard.php">Zen Academy</a>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="dashboard.php" class="menu">Courses</a></li>
                    <li><a href="daily_tips.php" class="menu">Daily Tips</a></li>
                    <li><a href="resources.php" class="menu">Resources</a></li>
                    <li><a href="index.php" class="btn-keluar">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-vid">
        <div class="video-links-container" id="myDIV">
            <div class="tab">
                <a class="video-links" onclick="openCity(event, 'Conten1')" id="defaultOpen">3D Logo Design</a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Abstract Wallpaper Design</a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Info Graphic Design</a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Conten4</a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Conten5</a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Conten6</a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Conten7</a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Conten8</a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Conten9</a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Conten10</a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Conten11</a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Conten12</a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Conten13</a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Conten14</a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Conten15</a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Conten16</a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Conten17</a>
            </div>
            <a href="images/video-8.mp4" class="video-links">08. click here to play the video</a>
        </div>
    
        <div class="video-container">
            <div id="Conten1" class="tabcontent">
                <h1>Episode 01 - 3D Logo Design</h1>
    
                <iframe width="916" height="515" src="https://www.youtube.com/embed/BxF0t46oHUg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            
        </div>
    
    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("video-links");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>