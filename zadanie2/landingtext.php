<?php
    session_start();
    include 'działanie.php';
    $TextInput1->zczytanie();
    $TextInput1->add($TextInput1->input);
    header ('Location: zadanie2.php');