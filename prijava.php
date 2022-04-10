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
    <main>
        <div class="wrapper">
            <div class="login">
                <i class="fas fa-user-alt"></i>
                <h1>PRIJAVA</h1>
                <form name="registration" method="POST">
                    <label for="username">Korisničko ime: <br>
                        <input type="text" name="username" id="username" placeholder="Korisničko ime">
                        <span id="porukaUsername" class="bojaPoruke"></span>
                    </label><br><br>
                    <label for="password">Lozinka: <br>
                        <input type="password" name="password" id="password" placeholder="Lozinka korisnika">
                        <span id="porukaPassword" class="bojaPoruke"></span>
                    </label><br><br>
                    <input type="submit" name="submit" id="submit" value="PRIJAVI SE">
                </form>
            </div>
        </div>
        <div class="info">
                <?php
                    include 'connect.php';
                    define('UPLPATH', 'Images/');

                    if (($dbc) && isset($_POST['submit'])) {
                        $prijavaImeKorisnika = $_POST['username'];
                        $prijavaLozinkaKorisnika = $_POST['password'];
                        $sql = "SELECT ime, prezime, korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
                        $stmt = mysqli_stmt_init($dbc);

                        if (mysqli_stmt_prepare($stmt, $sql)) {
                            mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                        }
                        mysqli_stmt_bind_result($stmt, $imeKorisnika, $prezimeKorisnika, $usernameKorisnika, $lozinkaKorisnika, $razinaKorisnika);
                        mysqli_stmt_fetch($stmt);

                        if (password_verify($_POST['password'], $lozinkaKorisnika) && mysqli_stmt_num_rows($stmt) > 0) {
                            echo "<p>Prijava je uspješna!</p>";
                            echo "<p>Prijavljeni ste pod korisničkim imenom $usernameKorisnika.</p>";

                            if($razinaKorisnika == 1) {
                                $admin = true;
                            }
                            else {
                                $admin = false;
                            }

                            $_SESSION['$username'] = $imeKorisnika;
                            $_SESSION['$level'] = $razinaKorisnika;
                        } else {
                            echo "<br><p>Unijeli ste pogrešno korisničko ime ili lozinku.</p>";
                        }
                    }
                ?>
            </div>
    </main>
    <footer style="margin-top: 300px">
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

            var poljePassword = document.getElementById("password");
            var password = document.getElementById("password").value;
            if (password.length == 0) {
                slanjeForme = false;
                poljePassword.style.border="1px dashed red";
                document.getElementById("porukaPassword").innerHTML="<br>Unesite lozinku!<br>";
            } else {
                poljePassword.style.border="1px solid green";
                document.getElementById("porukaPassword").innerHTML="";
            }

            if (slanjeForme != true) {
                event.preventDefault();
            }
        };
    </script>

</body>
</html>
