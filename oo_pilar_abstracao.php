<?php

       class Carro extends Veiculo {
           public $teto_solar = true;

           function __construct($placa, $cor) {
               $this->placa = $placa;
               $this->cor = $cor;
           }
       
           function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        
        function alterarPosicaoVolante() {
            echo 'Alterar posição do volante';
        }
       }

       class Moto extends Veiculo{
           public $contraPesoGuidao = true;

           function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

           function empinar(){
            echo 'Empinar';
        }
       }

       class Veiculo {
           public $placa = null;
           public $cor = null;

           function acelerar(){
               echo 'Acelerar';
           }

           function freiar(){
            echo 'Freiar';
        }
       }

       $carro = new Carro('ABC1515', 'Branco');
       $moto = new Moto('DEF1122', 'Preto');

       echo '<pre>';
       print_r($carro);
       echo '</pre>';

       echo '<br />';

       echo '<pre>';
       print_r($moto);
       echo '</pre>';

       echo '<hr />';

       $carro->acelerar();
       echo '<br />';
       $carro->abrirTetoSolar();
       echo '<br />';
       $carro->freiar();

       echo '<hr />';

       $moto->acelerar();
       echo '<br />';
       $moto->empinar();
       echo '<br />';
       $moto->freiar();
?>