<?php
    class Thezaurus{
        public $slownik=array();

        public function getSynonyms($slowo){
            if (array_key_exists($slowo,$this->slownik)){
                $synonimy=$this->slownik[$slowo];
                $wynik=array(
                    "word"=>$slowo,
                    "synonyms"=>$synonimy
                );
                print_r (json_encode($wynik));
                return (json_encode($wynik));
            }else{
                $wynik=array(
                    "word"=>$slowo,
                    "synonyms"=>array()
                );
                print_r (json_encode($wynik));
                return (json_encode($wynik));
            }
            
        }
    }
    $thezaurus= new Thezaurus;
    $thezaurus->slownik=
        array(
            "market" => array("trade"),
            "small" => array("little", "compact")
        );