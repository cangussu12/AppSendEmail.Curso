<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters ( overloarding / sobrecarregar)

        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
    }

/*
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        function gettelefone() {
            return $this->telefone;
        }
        //métodos
        function resumirCadFunc() {
            return "$this->nome, telefone: $this->telefone, possui $this->numFilhos Filhos(s)";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }
*/
    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    $y->__set('telefone', '19989547500');
    $y->__set('cargo', 'Analista de sistemas');
    $y->__set('salario', 'R$ 2.500,00 reais');
    //echo $y->resumirCadFunc();
    echo $y->__get('nome') . ', telefone: '. $y->__get('telefone') . ', ' .  'possui' . ' ' . $y->__get('numFilhos') . ' ' . 'Filhos' . '<br />' . 'Cargo:' .  $y->__get('cargo') . '<br />' . 'Salário: ' . $y->__get('salario');
    echo '<hr />';
    echo '<br />';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    $x->__set('telefone', '19989547511');
    $x->__set('cargo', 'Atendente de caixa');
    $x->__set('salario', 'R$ 1.400,00 reais');
    //echo $x->resumirCadFunc();
    echo $x->__get('nome') . ', telefone: '. $x->__get('telefone') . ', ' .  'possui' . ' ' . $x->__get('numFilhos') . ' ' . 'Filhos' . '<br />' . 'Cargo:' .  $x->__get('cargo') . '<br />' . 'Salário: ' . $x->__get('salario');

?>