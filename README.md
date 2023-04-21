<h1> Programação Orientada a Objeto em PHP</h1>

<h3 style="text-align: center;"> Uma das características mais importantes da linguagem PHP é a Programação Orientada a Objeto(POO), que ajuda a criar código organizado e escalável.</h3>

<p>Neste texto, vamos explorar a POO em PHP de forma divertida e didática. Vamos lá!</p>
<hr>

### Objetivo: 
:pushpin: Aproximar o mundo real do mundo virtual: a ideia é simular o mundo real dentro do computador
:---:

<br>
A programação orientada a objetos surgiu como uma alternativa a programação estruturada. Dessa forma, a POO se concentra em criar objetos que encapsulam dados e comportamentos, o que ajuda a tornar o código mais organizado e fácil de entender, tentando aproximar a forma de manuseio de um programa a forma de manuseio do mundo real. Por isso o nome objeto, que pode representar qualquer coisa tangível do mundo real.

A POO é um paradigma de programação que baseia-se em conceitos de classes e objetos.


## Classes:
:pushpin: O conceito de classe nada mais é do que uma estrutura que define uns tipos de dados, podendo conter variáveis (chamaremos de atributos) e também funções (chamaremos de métodos). Classes manipulam definições e objetos manipulam valores.

Como exemplo, vamos criar uma classe denominada pessoa. Automaticamente somos levados a pensar em algumas características inerentes as pessoas que
conhecemos, chamaremos de propriedades:

Propriedades de pessoa para este exemplo: nome, ano de nascimento...

Métodos, no nosso caso é função que pessoa deva fazer: Mostrar os dados!

```ruby
<?php 

//Atributo Privado
class Pessoa{
    private $nome;
    private $anoNascimento;

    //Método construtor
    function __construct($nome, $anoNascimento)
    {
      $this->nome = $nome;
      $this->anoNascimento = $anoNascimento;   
    }

    //Metodo -> função
    function mostraDadoovo(){
        echo "<p>Nome: $this->nome</p>";
        echo "<p>Ano de Nascimento $this->anoNascimento</p>";
    }

    // Metodos acessores de cada atributo
    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getAnoNascimento(){
        return $this->anoNascimento;
    }

    function setAnoNascimento($anoNascimento){
        $this->anoNascimento = $anoNascimento;
    }
}

```

ATRIBUTOS
Atributos são as características de uma classe, eles vão definir como
uma classe é, no exemplo anterior, são características : ano, modelo, motor,
placa.


MÉTODO
Métodos são os comportamentos da classe. É o que a classe faz. No
exemplo anterior acelerar é um método da classe carro, pois o carro pode
acelerar.



## Objetos:
:pushpin: Um objeto contém exatamente a mesma estrutura e as propriedades de uma classe, no entanto sua estrutura é dinâmica, seus atributos podem mudar de valor durante a execução do programa e podemos declarar diversos objetos oriundos de uma mesma classe.

Para criar uma instância de um objeto da classe, um novo objeto deve ser criado (instanciado) e atribuído a uma variável.


