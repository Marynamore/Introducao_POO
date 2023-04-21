<?php
//Lampada.php
class Lampada{
    public $cor;
    public $ligada;
    public function __construct($cor){
        $this->cor=$cor;
        $this->ligada=false;
        echo "<div style='color:".$this->cor."'>";
        echo "Uma lampada foi criada !</div><br>";
    }
    function Ligar(){
        if($this->ligada){
            echo "A lampada ja esta ligada";
        }else{
            echo "<div style='width:100%;
               height:100%;background-color:".$this->cor."'></div>";
            $this->ligada= true;
        }
    }
    public function __destruct()
    {
        echo "<br>Lampada ".$this->cor." destruida !<br> ";
    }
}
    

