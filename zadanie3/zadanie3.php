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
        // 0=imie 1=ilosc meczy 2= wynik
        array('Jan','0','0'),
        array('Maks','0','0'),
        array('Monika','0','0'));
    $table = new RankingTable($tabela);
    $table->recordResult('Jan',2,3);
    $table->recordResult('Monika',5,3);
    $table->recordResult('Maks',3,3);
    $table->ranking();
    $table->playerRank(1);
?>
</body>
</html>