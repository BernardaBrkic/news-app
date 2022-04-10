<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>RP Online</title>
</head>
<body>
    <header id="overflow">
        <div class="wrapper" id="overflow">
            <a href="index.php"><img src="Images/logo.png" alt="logo" title="Logo"></a>
            <div onclick="dropdown()" id="icon" class="icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="drop" class="clear">
                <a href="index.php">Home</a>
                <a href="kategorija.php?category=sport" id="sport">Sport</a>
                <a href="kategorija.php?category=politika" id="politik">Politik</a>
                <?php
                    if(isset($_SESSION['$username'])) {
                        echo "<a href='administracija.php'>ADMINISTRACIJA</a>";
                        echo "<a href='unos.php'>UNOS</a>";
                        echo "<a href='odjava.php'>ODJAVA</a>";
                    } else {
                        echo "<a href='registracija.php'>REGISTRACIJA</a>";
                        echo "<a href='prijava.php'>PRIJAVA</a>";
                    }
                ?>
            </nav>
        </div>
    </header>

    <div class="wrapper">
        <div class="news" style='margin-top: 50px;'>
            <i class="fas fa-user-edit"></i>
            <h1>UNOS VIJESTI</h1>
            <form method="POST" action="skripta.php" name="news" enctype="multipart/form-data">
                <label for="title">Unesite naslov vijesti: <br>
                    <input type="text" id="title" name="title" placeholder="Naslov vijesti">
                    <br><br><span id="porukaTitle" class="bojaPoruke"></span>
                </label><br>
                <label for="summary">Unesite kratki sažetak vijesti: <br>
                    <textarea name="summary" id="summary" cols="30" rows="10" placeholder="Sažetak vijesti"></textarea>
                    <br><br><span id="porukaSummary" class="bojaSummary"></span>
                </label><br>
                <label for="text">Unesite tekst vijesti: <br>
                    <textarea name="text" id="text" cols="30" rows="10" placeholder="Tekst vijesti"></textarea>
                    <br><br><span id="porukaText" class="bojaText"></span>
                </label><br>
                <label for="category">Odaberite kategoriju vijesti <br>
                    <select name="category" id="category">
                        <option value="odabir" disabled selected>Kategorije vijesti</option>
                        <option value="sport">Sport</option>
                        <option value="politika">Politika</option>
                    </select>
                    <br><br><span id="porukaCategory" class="bojaCategory"></span>
                </label><br>
                <label for="image">Odaberite sliku sa svog računala<br>
                    <input type="file" name="image" id="image" value="">
                    <br><br><span id="porukaImage" class="bojaImage"></span>
                </label> <br>
                <label for="checkbox">
                    <input type="checkbox" id="checkbox" name="checkbox">Želim da moja objava bude prikazana na web stranici
                </label><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>

    <footer>
        <div class="wrapper">
            <p>© RP DIGITAL GMBH | ALLE RECHTE VORBEHALTEN</p>
            <p>Content Management by InterRed</p>
            <p>Bernarda Brkić | bbrkic@tvz.hr | 2021.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
    <script>
        document.getElementById("submit").onclick = function(event) {
            var slanjeForme = true;
        
            var poljeTitle = document.getElementById("title");
            var title = document.getElementById("title").value;
            if (title.length < 5 || title.length > 30) {
                slanjeForme = false;
                poljeTitle.style.border="1px dashed red";
                document.getElementById("porukaTitle").innerHTML="Naslov vijesti mora imati između 5 i 30 znakova!<br>";
            } else {
                poljeTitle.style.border="1px solid green";
                document.getElementById("porukaTitle").innerHTML="";
            }
        
            var poljeSummary = document.getElementById("summary");
            var summary = document.getElementById("summary").value;
            if (summary.length < 10 || summary.length > 100) {
                slanjeForme = false;
                poljeSummary.style.border="1px dashed red";
                document.getElementById("porukaSummary").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
            } else {
                poljeSummary.style.border="1px solid green";
                document.getElementById("porukaSummary").innerHTML="";
            }

            var poljeText = document.getElementById("text");
            var text = document.getElementById("text").value;
            if (text.length == 0) {
                slanjeForme = false;
                poljeText.style.border="1px dashed red";
                document.getElementById("porukaText").innerHTML="Sadržaj mora biti unesen!<br>";
            } else {
                poljeText.style.border="1px solid green";
                document.getElementById("porukaText").innerHTML="";
            }

            var poljeImage = document.getElementById("image");
            var image = document.getElementById("image").value;
            if (image.length == 0) {
                slanjeForme = false;
                poljeImage.style.border="1px dashed red";
                document.getElementById("porukaImage").innerHTML="Slika mora biti unesena!<br>";
            } else {
                poljeImage.style.border="1px solid green";
                document.getElementById("porukaImage").innerHTML="";
            }

            var poljeCategory = document.getElementById("category");
            if(document.getElementById("category").selectedIndex == 0) {
                slanjeForme = false;
                poljeCategory.style.border="1px dashed red";
                document.getElementById("porukaCategory").innerHTML="Kategorija mora biti odabrana!<br>";
            } else {
                poljeCategory.style.border="1px solid green";
                document.getElementById("porukCategory").innerHTML="";
            }
        
            if (slanjeForme != true) {
                event.preventDefault();
            }   
        };
    </script>
</body>
</html>
