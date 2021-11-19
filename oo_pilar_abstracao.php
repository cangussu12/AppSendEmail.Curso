<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        /*
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        */

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }
        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos Filhos(s)";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->setNome('Jose');
    $y->setNumFilhos('5');
    echo $y->resumirCadFunc();

    echo '<br />';
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->resumirCadFunc();
?>