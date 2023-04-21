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
class Pessoa{
    private $nome;
    private $anoNascimento;
    
//Método construtor
    function __construct($nome, $anoNascimento)
    {
      $this->nome = $nome;
      $this->anoNascimento = $anoNascimento;   
    }
    
//Metodo => função
    function mostrarDadoNovo(){
        echo "<p>Nome: $this->nome</p>";
        echo "<p>Ano de Nascimento $this->anoNascimento</p>";
    }
   
// Metodos acessores de cada atributo
    function getNome(){
        return $this->nome;
    }//pegamos os atributos privados e mostramos

    function getAnoNascimento(){
        return $this->anoNascimento;
    }

    function setNome($nome){
        $this->nome = $nome;
    }//setamos os atributos privados


    function setAnoNascimento($anoNascimento){
        $this->anoNascimento = $anoNascimento;
    }
}
?>
```
ATRIBUTO | METODO | CONSTRUTORES
:---: | :---: | :---:
Atributos são as características de uma classe, eles vão definir como uma classe é, no exemplo anterior, são características como: nome, ano | Métodos são os comportamentos da classe, no nosso caso é função que pessoa deva fazer: Mostrar dados novos | Métodos construtores são métodos especiais que são acionados no momento de criação da classe. Quando utilizamos o new para criar a classe.

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

    //incluindo apenas uma vez a classe que criamos anteriormente e a herança
    require_once './classe/classe_pessoa.php';
    require_once './aluno_heranca.php';

    //Atribuindo valores aos atributos que criamos
    $p = new Pessoa("Luna",1999);
    $aluno = new Aluno("Jully",2006,7.0);

    //executando o método
    $p->mostrarDadoNovo();
    $aluno->mostrarDadoNovo();

    $aluno->mostrarDadosNovos();
?>
```

