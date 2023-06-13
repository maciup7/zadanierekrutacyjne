<!DOCTYPE html>
<?php

    class Wyliczenie{
        public $liczba;

        public function podajliczbe($x){
            $this->liczba= $x;
        }

        public function make($xx){
            for ($i = 1; $i <= 3; $i++) {
                switch ($i){
                    case 1:
                        $x=$xx*3;
                        echo $x;
                        break;
                    case 2:
                        $x=$x+1;
                        echo $x;
                        break;
                    case 3:
                        $x=$x/2;
                        echo $x;
                        break;
                }
            }
            
        }

    }


?>
<html>
<head>
</head>
<body>
    <a href="../index.php"> Home</a>
    <?php
        $xx=3;
        $Wyliczenie1= new Wyliczenie;
        $Wyliczenie1->make($xx);

    ?>
</body>
</html>