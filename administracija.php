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
    <main class="administration">
        <div class="wrapper">
            <?php
                if(isset($_SESSION['$level']) && $_SESSION['$level'] == 1){
                    include('connect.php');
                    define('UPLPATH', 'Images/');
    
                    $query = "SELECT * FROM archive";
                    $result = mysqli_query($dbc, $query);
    
                    while($row = mysqli_fetch_array($result)) {
                    echo '<form enctype="multipart/form-data" action="" method="POST" name="admin">
                        <label for="naslov">Naslov vjesti:</label><br>
                        <input type="text" name="naslov" class="form-field-textual" value="'.$row['title'].'"><br><br>
    
                        <label for="sazetak">Sažetak članka (do 50 znakova):</label><br>
                        <textarea name="sazetak" id="" cols="30" rows="10" class="formfield-textual">'.$row['summary'].'</textarea><br><br>
    
                        <label for="tekst">Sadržaj vijesti:</label><br>
                        <textarea name="tekst" id="" cols="30" rows="10" class="formfield-textual">'.$row['text'].'</textarea><br><br>
    
                        <label for="image">Slika:</label><br>
                        <input type="file" class="input-text" id="image" value="'.$row['image'].'" name="image"/> <br><img src="' . UPLPATH.$row['image']. '" width=100px><br><br>
    
                        <label for="kategorija">Kategorija vijesti:</label><br>
                        <select name="kategorija" id="" class="form-field-textual" value="'.$row['category'].'">
                            <option value="Politika">politika</option>
                            <option value="Sport">sport</option>
                        </select><br><br>
    
                        <label>Spremiti u arhivu:<br><br>
                        <input type="checkbox" name="arhiva" id="arhiva"/>
                        Arhiviraj?<br>';
    
                    echo '</label>
                        <input type="hidden" name="id" class="form-field-textual" value="'.$row['ID'].'"><br>
                        <button type="reset" value="Poništi">Poništi</button>
                        <button type="submit" name="update" value="Prihvati">Izmjeni</button>
                        <button type="submit" name="delete" value="Izbriši">Izbriši</button>
                        </form><br><br><br>';
                    }
    
                    if(isset($_POST['delete'])){
                        $id = $_POST['id'];
                        $query = "DELETE FROM archive WHERE ID=$id ";
                        $result = mysqli_query($dbc, $query);
                    }
    
                    if(isset($_POST['update'])){
                        $image = $_FILES['image']['name'];
                        $tempImage = $_FILES['image']['tmp_name'];
                        $title = $_POST['naslov'];
                        $summary = $_POST['sazetak'];
                        $text = $_POST['tekst'];
                        $category = $_POST['kategorija'];
                        if(isset($_POST['arhiva'])){
                            $archive = 0;
                        } else {
                            $archive = 1;
                        }
    
                        $id = $_POST['id'];
                        if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/img/'. $_FILES["image"]['name'])){
                            $query = "UPDATE archive SET title='$title', summary='$summary', text='$text', image='$image', category='$category', archive='$archive' WHERE id=$id";
                            $result = mysqli_query($dbc, $query);
                        } else {
                            $query = "UPDATE archive SET title='$title', summary='$summary', text='$text', category='$category', archive='$archive' WHERE id=$id";
                            $result = mysqli_query($dbc, $query);
                        }
                    }
                    mysqli_close($dbc);
                } else{
                    echo "
                        <div class='feedback'>
                            <i class='fas fa-frown-open'></i>
                            <h1>NISTE ADMINISTRATOR!</h1>
                            <p style='padding: 50px 0; text-align: center;'>Vaša razina dozvole nije dovoljna za izmjenjivanje sadržaja u administraciji. Kako biste mogli uređivati vijesti, morate dobiti razinu dozvole administratora.</p>
                        </div>";
                }
            ?>
        </div>
    </main>

    <footer style="margin-top: 250px">
        <div class="wrapper">
            <p>© RP DIGITAL GMBH | ALLE RECHTE VORBEHALTEN</p>
            <p>Content Management by InterRed</p>
            <p>Bernarda Brkić | bbrkic@tvz.hr | 2021.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>