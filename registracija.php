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
        <div class="registration" style="margin-top:50px">
            <i class="fas fa-users"></i>
            <h1>REGISTRACIJA</h1>
            <form enctype="multipart/form-data" action="" method="POST">
                <label for="name">Ime: <br>
                    <input type="text" name="name" id="name" placeholder="Ime korisnika">
                    <span id="porukaIme" class="bojaPoruke"></span>
                </label><br><br>
                <label for="lastname">Prezime: <br>
                    <input type="text" name="lastname" id="lastname" placeholder="Prezime korisnika">
                    <span id="porukaPrezime" class="bojaPoruke"></span>
                </label><br><br>
                <label for="username">Korisničko ime: <br>
                    <input type="text" name="username" id="username" placeholder="Korisničko ime">
                    <span id="porukaUsername" class="bojaPoruke"></span>
                </label><br><br>
                <label for="password">Lozinka: <br>
                    <input type="password" name="password" id="password" placeholder="Lozinka korisnika">
                    <span id="porukaPass" class="bojaPoruke"></span>
                </label><br><br>
                <label for="password2">Ponovljena lozinka: <br>
                    <input type="password" name="password2" id="password2" placeholder="Ponovljena lozinka korisnika">
                    <span id="porukaPassRep" class="bojaPoruke"></span>
                </label><br><br>
                <input type="submit" name="slanje" id="slanje" value="REGISTRIRAJ SE">
            </form>
        </div>
        <div class="info" style="top:1050px">
            <?php
                include 'connect.php';
                if ($dbc) {
                    if (isset($_POST['slanje'])){
                        $ime = $_POST['name'];
                        $prezime = $_POST['lastname'];
                        $username = $_POST['username'];
                        $lozinka = $_POST['password'];
                        $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
                        $razina = 0;
                        $registriranKorisnik = '';               

                        $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
                        $stmt = mysqli_stmt_init($dbc);

                        if (mysqli_stmt_prepare($stmt, $sql)) {
                            mysqli_stmt_bind_param($stmt, 's', $username);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                        }

                        if (mysqli_stmt_num_rows($stmt) > 0) {
                            echo "<p>Korisničko ime već postoji!</p>";
                        } 
                        else {
                            $sql = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) VALUES (?, ?, ?, ?, ?)";
                            $stmt = mysqli_stmt_init($dbc);

                            if (mysqli_stmt_prepare($stmt, $sql)) {
                                mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina);
                                mysqli_stmt_execute($stmt);

                                $registriranKorisnik = true;
                            }   
                        }

                        if ($registriranKorisnik == true) {
                            echo "<p>Registracija je uspješna!</p>";
                        }
                    }
                    mysqli_close($dbc); 
                } 
            ?>
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

    <script type="text/javascript">
        document.getElementById("submit").onclick = function(event) {

        var slanjeForme = true;

        var poljeIme = document.getElementById("name");
        var ime = document.getElementById("name").value;
        if (ime.length == 0) {
            slanjeForme = false;
            poljeIme.style.border="1px dashed red";
            document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
        } else {
            poljeIme.style.border="1px solid green";
            document.getElementById("porukaIme").innerHTML="";
        }

        var poljePrezime = document.getElementById("lastname");
        var prezime = document.getElementById("lastname").value;
        if (prezime.length == 0) {
            slanjeForme = false;
            poljePrezime.style.border="1px dashed red";
            document.getElementById("porukaPrezime").innerHTML="<br>Unesite prezime!<br>";
        } else {
            poljePrezime.style.border="1px solid green";
            document.getElementById("porukaPrezime").innerHTML="";
        }

        var poljeUsername = document.getElementById("username");
        var username = document.getElementById("username").value;
        if (username.length == 0) {
            slanjeForme = false;
            poljeUsername.style.border="1px dashed red";

            document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
        } else {
            poljeUsername.style.border="1px solid green";
            document.getElementById("porukaUsername").innerHTML="";
        }

        var poljePass = document.getElementById("pass");
        var pass = document.getElementById("pass").value;
        var poljePassRep = document.getElementById("passRep");
        var passRep = document.getElementById("passRep").value;
        if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
            slanjeForme = false;
            poljePass.style.border="1px dashed red";
            poljePassRep.style.border="1px dashed red";
            document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
            document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
        } else {
            poljePass.style.border="1px solid green";
            poljePassRep.style.border="1px solid green";
            document.getElementById("porukaPass").innerHTML="";
            document.getElementById("porukaPassRep").innerHTML="";
        }

        if (slanjeForme != true) {
            event.preventDefault();
        }

        };
    </script>
</body>
</html>