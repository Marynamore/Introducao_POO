<?php

    class NotasAluno{
        public $matricula;
        public $nome;
        public $notaProva1;
        public $notaProva2;
        public $trabalho;
        public $resultadoFinal;

        public function media($notaProva1,$notaProva2,$trabalho){
            $this->notaProva1=$notaProva1;
            $this->notaProva2=$notaProva2;
            $this->trabalho=$trabalho;

            $resultadoFinal=($this->notaProva1*2.5+$this->notaProva2*2.5+ $this->trabalho*2)/7;
            return $resultadoFinal;
        }

        public function resultado($resultadoFinal){
            if($resultadoFinal>5){
                echo 'Você foi aprovado!';
            }else{
                echo 'Você foi reprovado!';
            }
            return $resultadoFinal;
        }
    }

$result = new NotasAluno();
// print_r($result);

$result->matricula=123456;
$result->nome="AlunoETC";

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
                <td>"; echo round ($result->media(10,8,5),2); echo"</td>
            </tr>
            <tr>
                <td>Resultado Final: </td>
                <td>"; echo $result->resultado($resultadoFinal);"</td>
            </tr>
        </table>";

