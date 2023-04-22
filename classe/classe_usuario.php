<?php
//Usuario.php
class Usuario{
    private $nome;
    private $login;
    private $senha;
    private $confirmaSenha;

    function __construct($nome,$login){
        $this->nome  = $nome;
        $this->login = $login;
    }    
    function verificar(){
        if($this->nome == ""){
            echo "O atributo nome esta vazio !<br> ";
        }
        if($this->login == ""){
            echo "O atributo login esta vazio !<br> ";
        }
        if($this->senha == ""){
            echo "O atributo senha esta vazio !<br> ";
        }
        if($this->confirmaSenha == ""){
            echo "O atributo confirmaSenha esta vazio !<br> ";
        }
        if($this->confirmaSenha != $this->senha){
            echo "A senha e o confirma  senha não estão iguais!<br>";
        }
    }


    //Metodos acessores
    /**
     * Get the value of confirmaSenha
     */ 
    public function getConfirmaSenha()
    {
        return $this->confirmaSenha;
    }

    /**
     * Set the value of confirmaSenha
     *
     * @return  self
     */ 
    public function setConfirmaSenha($confirmaSenha)
    {
        $this->confirmaSenha = $confirmaSenha;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
