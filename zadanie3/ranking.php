<?php
    function recordResult(){

    }

    class RankingTable{
        public $gracz=array();
        public $ranking=array();
        
        public function __construct($gracz){
            $this->gracz=$gracz;
        }

        public function recordResult($imie,$iloscmeczy,$wynik){
            $i=0;
            $j=0;
            foreach ($this->gracz as $value){
                $j=0;
                foreach ($value as $val){
                    if ($val==$imie){
                        $this->gracz[$i][$j+1]=$iloscmeczy;
                        $this->gracz[$i][$j+2]=$this->gracz[$i][$j+2]+$wynik;
                    }
                    $j++;
                }
                $i++;
            }
        }

        public function ranking(){
            $this->ranking=$this->gracz;

            print_r (array_column($this->ranking,2,0));

            function fun1($a, $b) { 
                return $b[2]-$a[2]; 
            }
            function fun2($a, $b) { 
                return $a[1]-$b[1]; 
            }
            
            usort($this->ranking, 'fun1');
            usort($this->ranking, 'fun2');
            
        }

        public function playerRank($ranking){
            echo $this->ranking[$ranking-1][0];
        }
    }
?>