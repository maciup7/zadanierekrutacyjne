<!DOCTYPE html>
<?php
    session_start();
    include 'działanie.php';
?>
<html>
<head>
</head>
<body>
    <form method="post" action="landingtext.php">
        Podaj tekst:<br/> <input type="text" name="tekst">
        <?php
            if ($_SESSION['flaga1']>1){echo "Można podac tylko litery!";}
        ?><br/>
        <input type="submit" value="Dodaj tekst">
    </form>
    <form method="post" action="landingnumer.php">
        Podaj liczbę:<br/> <input type="text" name="numer">
        <?php
            if ($_SESSION['flaga2']>1){echo "Można podac tylko cyfry!";}
        ?><br/>
        <input type="submit" value="Dodaj liczbę">
    </form>
    <?php
    echo "Bieżąca wartość: <br/>";
    $TextInput1->getValue();
    ?>
</body>
</html>