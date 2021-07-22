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
                <a href="Dashboard.php">Zen Academy</a>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="emptyPage2.php" class="menu">Courses</a></li>
                    <li><a href="emptyPage2.php" class="menu">Daily Tips</a></li>
                    <li><a href="emptyPage2.php" class="menu">Resources</a></li>
                    <li><a href="Dashboard.php" class="btn-keluar">Kembali</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-vid">
        <div class="video-links-container" id="myDIV">
            <div class="tab">
                <a class="video-links" onclick="openCity(event, 'Conten1')" id="defaultOpen">Eps 1 - Fungsi Matematika</a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 2 - Fungsi Text</a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 3 - Fungsi Logika</a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 4 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 5 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 6 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 7 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 8 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 9 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 10 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 11 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 12 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 13 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 14 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 15 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 16 - </a>
                <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 17 - </a>
            </div>
            
        </div>
    
        <div class="video-container">
            <div id="Conten1" class="tabcontent">
                <h1>Episode 1</h1>
    
                <iframe width="704" height="396" src="https://www.youtube.com/embed/U3bEqjnISt0?list=PLp2oozUtCqIs1F87JIAln0Wk9JUTnkWsL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div id="Conten2" class="tabcontent">
                <h1>Episode 2</h1>
    
                <iframe width="704" height="396" src="https://www.youtube.com/embed/6U0J-D-l2U0?list=PLp2oozUtCqIs1F87JIAln0Wk9JUTnkWsL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div id="Conten3" class="tabcontent">
                <h1>Episode 3</h1>
    
                <iframe width="704" height="396" src="https://www.youtube.com/embed/elC4r7-ODuM?list=PLp2oozUtCqIs1F87JIAln0Wk9JUTnkWsL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div id="Conten4" class="tabcontent">
                <h1>Episode 4</h1>
    
                
            </div>

            <div id="Conten5" class="tabcontent">
                <h1>Episode 5</h1>
    
                
            </div>

            <div id="Conten6" class="tabcontent">
                <h1>Episode 6</h1>
    
                
            </div>

            <div id="Conten7" class="tabcontent">
                <h1>Episode 7</h1>
    
                
            </div>

            <div id="Conten8" class="tabcontent">
                <h1>Episode 8</h1>
    
                
            </div>

            <div id="Conten9" class="tabcontent">
                <h1>Episode 9</h1>
    
                
            </div>

            <div id="Conten10" class="tabcontent">
                <h1>Episode 10</h1>
    
                
            </div>

            <div id="Conten11" class="tabcontent">
                <h1>Episode 11</h1>
    
                
            </div>

            <div id="Conten12" class="tabcontent">
                <h1>Episode 12</h1>
    
                
            </div>

            <div id="Conten13" class="tabcontent">
                <h1>Episode 13</h1>
    
                
            </div>

            <div id="Conten14" class="tabcontent">
                <h1>Episode 14</h1>
    
                
            </div>

            <div id="Conten15" class="tabcontent">
                <h1>Episode 15</h1>
    
                
            </div>

            <div id="Conten16" class="tabcontent">
                <h1>Episode 16</h1>
    
                
            </div>

            <div id="Conten17" class="tabcontent">
                <h1>Episode 17</h1>
    
                
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