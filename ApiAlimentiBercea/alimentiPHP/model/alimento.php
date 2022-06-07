<?php

    class Alimento implements JsonSerializable {

        // object fields
        private $id;
        private $categoria;
        private $prodotto;
        private $proteine;
        private $lipidi;
        private $carboidrati;
        private $energia;

        // constructor
        public function __construct(){
            // echo 'alimento costruito!';
        }

        // generic getter method
        public function __get($nome){
            return $this->$nome;
        }

        // generic setter method
        public function __set($nome, $value){
            $this->$nome = $value;
        }

        public function jsonSerialize() {
            return get_object_vars($this);
        }

    }

?>