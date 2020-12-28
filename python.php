<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
        }

        body {
            background-image: url(./img/GambarBackground.png);
            background-repeat: repeat-y;
            font-family: "Lato", sans-serif;
        }

        .navbar {
            margin: 0px;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.568);
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar a {
            margin-right: 50px;
            float: right;
            display: block;
            color: #ffffff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            color: #FFC000
        }

        .navbar {
            float: right;
            margin-right: 20px;
        }

        .tittle {
            margin-top: 100px;
            margin-bottom: 20px;
            text-align: center;
        }

        .konten {
            box-sizing: border-box;
           
        }


        .tab {
            border: 1px solid #ccc;
            background-color:  #ffffffec;
            height: 500px;
            width: 100%;
            overflow-y: scroll;
        }


        .tab button {
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
            font-size: 17px;
        }


        .tab button:hover {
            background-color: #ffbf0094;
        }


        .tab button.active {
            background-color: #FFC000;
        }


        .tabcontent {
            background-color: #ffffffec;
            padding: 0px 12px;
            border: 1px solid #ccc;
            border-left: none;
            width: 720px;
            height: 500px;
        }
        
        iframe {
        	margin-top: 30px;
        	margin-left: 100px
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }



    </style>
</head>

<body>
    <div class="navbar">
        <a href="Dashboard.php">
            <h2>Kembali</h2>
        </a>
    </div>

    <div class="tittle">
        <h1>Python for Data Science</h1>
        <h2>Mentor   : Faqihza (Kelas Terbuka)</h2>
    </div>

    <div class="konten">
        <table border="1px" celpadding="0px">
            <tr>
                <td style="width: 360px;">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Conten1')" id="defaultOpen">Introduction</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten2')">Installasi Python dan VSCode</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten3')">Cara Kerja Program & Bytecode</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten4')">Conten4</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten5')">Conten5</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten2')">Conten6</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten3')">Conten7</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten4')">Conten8</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten5')">Conten9</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten2')">Conten10</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten3')">Conten11</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten4')">Conten12</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten5')">Conten13</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten2')">Conten14</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten3')">Conten15</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten4')">Conten16</button>
                        <button class="tablinks" onclick="openCity(event, 'Conten5')">Conten17</button>
                    </div>
                </td>
                <td style="width: 720px;">
                    <div id="Conten1" class="tabcontent">
                        <iframe width="480px" height="270px" src="https://www.youtube.com/embed/iA8lLwmtKQM?list=PLZS-MHyEIRo59lUBwU-XHH7Ymmb04ffOY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr style="margin-top: 20px;">
                        <h1 style="font-size: 30px; margin: 10px 0px;">Episode 01 - Introduction</h1>
                        <p style="font-size: 15px;">Pada episode kali ini, kita akan mempelajari pengenalan dari bahasa pemrograman python,
                        serta konsep compiler dan interpreter yang mana sangat penting untuk mempelajari proses eksekusi suatu bahasa
                        pemrograman. Pastikan anda mengikuti video dengan baik.</p>
                    </div>
            
                    
            
                    <div id="Conten2" class="tabcontent">
                        <iframe width="480px" height="270px" src="https://www.youtube.com/embed/OSmaWPSgvTQ?list=PLZS-MHyEIRo59lUBwU-XHH7Ymmb04ffOY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr style="margin-top: 20px;">
                        <h1 style="font-size: 30px; margin: 10px 0px;">Episode 02 - Installasi Python & VSCode</h1>
                        <p style="font-size: 15px;">Pada episode kali ini, kita akan mempelajari Bagaimana cara menginstall Python dan text editor
                        khususnya Visual Studio Code agar kita bisa menggunakan Python pada device komputer kita. Pastikan anda mengikuti video dengan baik.</p>
                    </div>
            
                    <div id="Conten3" class="tabcontent">
                        <iframe width="480px" height="270px" src="https://www.youtube.com/embed/-auWrbiaoGc?list=PLZS-MHyEIRo59lUBwU-XHH7Ymmb04ffOY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr style="margin-top: 20px;">
                        <h1 style="font-size: 30px; margin: 10px 0px;">Episode 03 - Cara Kerja Program & Bytecode</h1>
                        <p style="font-size: 15px;">Pada episode kali ini, kita akan mempelajari cara kerja dari program beserta bytecode untuk
                        lebih memahami bagaimana program dieksekusi oleh komputer. Pastikan anda mengikuti video dengan baik.</p>
                    </div>
            
                    <div id="Conten3" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten4" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten5" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten6" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten7" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten8" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten9" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten10" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten11" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten12" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten13" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten14" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten15" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten16" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
            
                    <div id="Conten17" class="tabcontent">
                        <h1>Content</h1>
                        <p>Konten belum rilis</p>
                    </div>
                </td>
            </tr>
        </table>

       
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
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