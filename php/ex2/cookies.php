<?php 
if(!isset($_COOKIE[$_POST["id"]]))
setcookie($_POST["id"],$_POST["eval"],time()+60*2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE[$_POST["id"]])){
    echo '<script>alert('.'"You have voted and the result is :'.$_COOKIE[$_POST["id"]].'");</script>'; 
}
else{
    echo "Your vote is sumbitted";
}
    ?>
</body>
</html>