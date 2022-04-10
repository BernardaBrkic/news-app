<?php
  include 'connect.php';
  define('UPLPATH', 'Images/');

  if($dbc){
    if(isset($_POST['submit'])){
      $date = date('d.m.Y.');
      $title = $_POST['title'];
      $title1 = ucfirst($title);
      $summary = $_POST['summary'];
      $text = $_POST['text'];
      $image = $_FILES['image']['name'];
      $tempImage = $_FILES['image']['tmp_name'];
      $category = $_POST['category'];

      if(isset($_POST['checkbox'])) {
        $archive = 0;
      } 
      else {
        $archive = 1;
      }

      $target_dir = UPLPATH .$image;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);

      $query = "INSERT INTO archive (date, title, summary, text, image, category, archive) VALUES ('$date', '$title1', '$summary', '$text', '$image', '$category', '$archive')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      header("location: unos.php");
    }
  }
  mysqli_close($dbc);
?>
