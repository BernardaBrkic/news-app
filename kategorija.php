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
            <section>
                    <?php
                        if(isset($_GET['category'])){
                            include 'connect.php';
                            define('UPLPATH', 'Images/');
                
                            $category = $_GET['category'];
                            $query = "SELECT * FROM archive WHERE category = '{$category}'";
                            $result = mysqli_query($dbc, $query);

                            echo "
                                <article>
                                    <h4>$category</h4>
                                </article>";
                                
                            while($row = mysqli_fetch_array($result)){
                                echo "
                                    <article id='overflow'>
                                        <img src=\"" .UPLPATH.$row['image']. "\">
                                        <h1><a href='clanak.php?id=" .$row['ID']."'>" .$row['title']. "</a></h1>
                                        <p>" .$row['summary']. "</p>
                                    </article>";
                            }
                        }
                    ?>
            </section>
        </div>
    </main>
    

    <footer>
        <div class="wrapper">
            <p>?? RP DIGITAL GMBH | ALLE RECHTE VORBEHALTEN</p>
            <p>Content Management by InterRed</p>
            <p>Bernarda Brki?? | bbrkic@tvz.hr | 2021.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>