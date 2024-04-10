<?php
if(isset($_POST["senden"])){
    if(is_numeric($_POST["zahl"])&&is_numeric($_POST["zahl2"])){
        if($_POST["senden"]=="*"){
        $ausErg = "=".$_POST["zahl"]*$_POST["zahl2"];
        } else if($_POST["senden"]=="+"){
        $ausErg = "=".$_POST["zahl"]+$_POST["zahl2"];
        } else if($_POST["senden"]=="-"){
        $ausErg = "=".$_POST["zahl"]-$_POST["zahl2"];
        } else if($_POST["senden"]=="/"&&$_POST["zahl2"]!=0){
        $ausErg = "=".$_POST["zahl"]/$_POST["zahl2"];
        }else $ausErg = "Teilen durch 0 nicht möglich.";
    } else $ausErg = "Rechnen geht nur mit Zahlen!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taschenrechner</title>
</head>
<body>
    <form action="taschenrechner.php" method="POST">
    <input type="text" name="zahl" value="<?php if(isset($_POST["zahl"])) echo $_POST["zahl"]; ?>">
    <input type="text" name="zahl2" value="<?php if(isset($_POST["zahl2"])) echo $_POST["zahl2"]; ?>">
    <input type="submit" name="senden" value="*">
    <input type="submit" name="senden" value="+">
    <input type="submit" name="senden" value="-">
    <input type="submit" name="senden" value="/">
    </form>
    <?php if(isset($ausErg)) echo $ausErg; ?>
</body>
</html>