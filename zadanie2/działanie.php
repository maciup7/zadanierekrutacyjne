<?php
    session_start();

    if (!isset($_SESSION['tekst'])){$_SESSION['tekst']='';}

    class TextInput{
        public $input='';

        public function zczytanie(){
            $this->input=filter_input(INPUT_POST,'tekst');
        }

        public function add($text){
            $_SESSION['tekst']=$_SESSION['tekst'].$text;
        }

        public function getValue(){
            if (isset($_SESSION['tekst'])){echo $_SESSION['tekst'];};
        }
    }

    class NumericInput extends TextInput{
        public function zczytanie(){
            $this->input=filter_input(INPUT_POST,'numer');
        }

        public function add($text){
            $_SESSION['tekst']=$_SESSION['tekst'].$text;
        }
    }

    if(!isset($TextInput1->input)){$TextInput1= new TextInput;};
    if(!isset($NumericInput1->input)){$NumericInput1= new NumericInput;};
?>