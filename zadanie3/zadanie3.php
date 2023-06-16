<!DOCTYPE html>
<?php
    require_once 'ranking.php';
?>
<html>
<head>
</head>
<body>
<?php
    $tabela=array(
        // 1=imie 2=ilosc meczy 3= wynik
        array('Jan','0','0'),
        array('Maks','0','0'),
        array('Monika','0','0'));
    $table = new RankingTable($tabela);
    var_dump($table);
    $table->recordResult('Jan',2,3);
    $table->recordResult('Maks',3,3);
    $table->recordResult('Monika',5,3);
    echo "<br/><br/>";var_dump($table);
?>
</body>
</html>