<!DOCTYPE html>
<?php
    session_start();
    include 'działanie.php';
?>
<html>
<head>
</head>
<body>
    <form method="post" action="landing.php">
        Podaj tekst:<br/> <input type="text" name="tekst"><br/>
        <input type="submit" value="Dodaj tekst">
    </form>
    <form method="post" action="landing.php">
        Podaj liczbę:<br/> <input type="text" name="numer"><br/>
        <input type="submit" value="Dodaj liczbę">
    </form>
    <?php
    if (!isset($TextInput1->tekst)){$TextInput1= new TextInput;};
    if (!isset($NumericInput1->tekst)){$NumericInput1= new NumericInput;};

    $TextInput1->getValue();
    ?>
</body>
</html>