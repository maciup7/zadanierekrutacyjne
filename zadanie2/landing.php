<?php
    session_start();
    require_once 'działanie.php';
    $TextInput1->zczytanie();
    $NumericInput1->zczytanie();
    $TextInput1->add($TextInput1->tekst);
    $NumericInput1->add($NumericInput1->tekst);
    header ('Location: zadanie2.php');