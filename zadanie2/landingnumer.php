<?php
    session_start();
    include 'działanie.php';
    $NumericInput1->zczytanie();
    $NumericInput1->add($NumericInput1->input);
    header ('Location: zadanie2.php');