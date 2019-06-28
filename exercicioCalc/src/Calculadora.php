<?php
    class Calculadora{
        private $valor1;
        private $valor2;

        public function __construct($valor1,$valor2){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
        }

        public function soma(){
            return $this->valor1+$this->valor2;
        }

        public function subtracao(){
            return $this->valor1-$this->valor2;
        }
        
        public function multiplicacao(){
            return $this->valor1*$this->valor2;
        }

        public function divisao(){
            return $this->valor1/$this->valor2;
        }
    }
?>