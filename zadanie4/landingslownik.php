<?php
    require_once('slownik.php');
    $slowo=filter_input(INPUT_POST,'slowo');
    $thezaurus->getSynonyms($slowo);

?>