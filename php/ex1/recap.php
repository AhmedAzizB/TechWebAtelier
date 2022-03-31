<?php //gérer l'upload de fichiers
function random_1($car) {
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++) {
    $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
    }
    $target_dir = "uploads/";
    $imageFileType = strtolower(pathinfo($_FILES["CIN"]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . random_1(20).".".$imageFileType;
    move_uploaded_file($_FILES["CIN"]["tmp_name"], $target_file);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ahmed Aziz Boussaid">

    <!-- Title Page-->
    <title>Restaurant</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
  <body>
    <table border="5px">
      <tr>
        <th>Family Name</th>
        <th>Name</th>
        <th>Adresse</th>
        <th>Sandwitch Type</th>
        <th>Supplement</th>
        <th>Unit price</th>
        <th>Quantity</th>
        <th>Total Price</th>
      </tr>
      <tr>
        <td><?php 
        echo strip_tags( $_POST["nom"]);?></td>
        <td><?php 
        echo strip_tags( $_POST["prénom"]);?></td>
        <td><?php 
        echo strip_tags( $_POST["adresse"]);?></td>
        <td>
        <?php
        echo htmlspecialchars($_POST["type_sandwitch"]) ;?>
        </td>
        <td>
        <?php 
        foreach($_POST['supplement']as $a){
          echo strip_tags($a)." ";
        };
        ?>
        </td>
        <td>4dt</td>
        <td><?php 
        echo strip_tags($_POST["nb_sandwitchs"]);?></td>
        <td><?php 
        if($_POST["nb_sandwitchs"]<11)
        echo $_POST["nb_sandwitchs"]*4 ."dt";
        else {
          echo $_POST["nb_sandwitchs"]*3.6 ."dt";
        }?>
        </td>
      </tr>
    </table>
  </body>
</html>