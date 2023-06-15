<?php
    session_start();
    include 'działanie.php';
    $TextInput1->zczytanie();
    $TextInput1->add($TextInput1->input);
    $_SESSION['flaga2']=0;
    header ('Location: zadanie2.php');