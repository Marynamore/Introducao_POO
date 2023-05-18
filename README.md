<h1> Programação Orientada a Objeto com PHP</h1>
<hr>
<p> Uma das características mais importantes da linguagem PHP é a Programação Orientada a Objeto(POO), que ajuda a criar código organizado e escalável.</p>

Observação: Neste artigo irei utilizar a linguagem PHP como exemplo, mas a essência é a mesma em outras linguagens, só mudando um a sintaxe.
<hr>

### Objetivo: 
:dart: Aproximar o mundo real do mundo virtual: a ideia é simular o mundo real dentro do computador
:---:

## Definiçao: 
> A programação orientada a objetos surgiu como uma <strong> alternativa a programação estruturada</strong>. Dessa forma, a POO se concentra em criar objetos que encapsulam dados e comportamentos, o que ajuda a tornar o código mais organizado e fácil de entender, tentando aproximar a forma de manuseio de um programa a forma de manuseio do mundo real. Por isso o nome objeto, que pode representar qualquer coisa tangível do mundo real.
<br>

:large_blue_diamond:A POO é um paradigma de programação que baseia-se em conceitos de classes e objetos.

![Objeto_POOO](https://user-images.githubusercontent.com/86386469/233682930-0994c6f8-314c-48f3-9558-f59466273698.jpg)
![classe_POO](https://user-images.githubusercontent.com/86386469/233682943-3454b669-be6b-46c2-877a-aaf45238b2ab.jpg)


<br>

## Classes:
:pushpin: O conceito de classe nada mais é do que uma estrutura que define uns tipos de dados, podendo conter variáveis (chamaremos de atributos) e também funções (chamaremos de métodos). Classes manipulam definições e objetos manipulam valores.

```php
<?php
//Atributo Privado
class Lampada{
    public $cor;
    public $ligada;

    //Método construtor
    public function __construct($cor){
        $this->cor=$cor;
        $this->ligada=false;
        echo "<div style='color:".$this->cor."'>";
        echo "Uma lampada foi criada !</div><br>";
    }

    //Metodo => função
    function Ligar(){
        if($this->ligada){
            echo "A lampada ja esta ligada";
        }else{
            echo "<div style='width:100%;
               height:100%;background-color:".$this->cor."'></div>";
            $this->ligada= true;
        }
    }

    // Metodos acessores de cada atributo
    function getCor(){
        return $this->cor;
    }//pegamos os atributos privados e mostramos

    function getLigada(){
        return $this->ligada;
    }
    function setCor($cor){
        $this->cor = $cor;
    }//setamos os atributos privados
    
    function setLigar($ligada){
        $this->ligada = $ligada;
    }

    //Método desconstrutor
    public function __destruct(){
        echo "<br>Lampada ".$this->cor." destruida !<br> ";
    }
}
?>
```
ATRIBUTO | METODO | CONSTRUTORES
:---: | :---: | :---: 
Atributos são as características de uma classe, eles vão definir como uma classe é, no exemplo anterior, são características como: cor, ligada | Métodos são os comportamentos da classe, no nosso caso é função que pessoa deva fazer: ligar | Métodos construtores são métodos especiais que são acionados no momento de criação da classe. Quando utilizamos o new para criar a classe.

:paperclip: Temos um novo conceito apresentado aqui. Trata-se da ***pseudo-variável*** $this, que serve basicamente para diferenciar as propriedades do objeto de variáveis locais. Lembre-se, $this referencia o objeto ATUAL e acessa suas propriedades.
:---:

## Objetos:
:pushpin: Um objeto contém exatamente a mesma estrutura e as propriedades de uma classe, no entanto sua estrutura é dinâmica, seus atributos podem mudar de valor durante a execução do programa e podemos declarar diversos objetos oriundos de uma mesma classe.

Para criar uma instância de um objeto da classe, um novo objeto deve ser criado (instanciado) e atribuído a uma variável.

```php
<?php 
/**
 * include      => inclui mesmo com erros
 * require      => interrompe se tiver erros
 * include_once => inclui uma vez
 * require_once => inclui uma vez
*/
require_once "../classe/classe_lampada.php";

//Atribuindo valores aos atributos que criamos
$luz = new Lampada("purple");//instanciar - construtor chamado
$luz2= new Lampada("Pink");

//executando o método
$luz->Ligar();
$luz2->Ligar();
?>
```
Saiba mais sobre os pilares da POO em PHP: https://github.com/Marynamore/Pilares-de-POO_Heranca
