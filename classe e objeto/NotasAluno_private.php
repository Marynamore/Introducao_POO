<?php

    class NotasAluno{
        private $matricula;
        private $nome;
        private $prova1;
        private $prova2;
        private $trabalho;
        private $resultadofinal;

        public function setMatricula($mat){
            $this->matricula=$mat;
        }
        public function getMatricula($mat){
            return $this->matricula;
        }   
        
        public function setNome($nom){
            $this->nome=$nom;
        }
        public function getNome($nom){
            return $this->nome;
        }        
    }

        // public function media($prova1,$prova2,$trabalho){
            // $this->prova1=$prova1;
            // $this->prova2=$prova2;
            // $this->trabalho=$trabalho;

            // $resultadofinal=($this->prova1*2.5+$this->prova2*2.5+ $this->trabalho*2)/7;
            // return $resultadofinal;
        // }

    $result=new NotasAluno;
    // print_r($result);
    // var_dump($result);
    $result->matricula=123456;
    $result->nome="Alunoetc";

    round ($result->media(10,8,5),2);

    echo "
        <table border='1px' align=center>
            <tr>
                <td>Nome: </td>
                <td>$result->nome</td>
            </tr>
            <tr>
                <td>Matrícula: </td>
                <td>$result->matricula</td>
            </tr>
            <tr>
                <td>Média: </td>
                <td>"; echo round ($result->media(10,8,5),2); echo "</td>
            </tr>
        </table>";

?>