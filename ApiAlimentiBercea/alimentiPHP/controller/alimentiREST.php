<?php

    require_once '../service/alimentoService.php';

    class alimentoREST{

        public $service;

        public function __construct(){
            $this -> service = new Service();
        }

        public function getAlimenti(){
            header("ContentType:application/json");
            echo json_encode($this -> service -> getAlimenti());

        }

        public function getAlimento($id){
            header("ContentType:application/json");
            echo json_decode($this -> service -> getAlimentoById($id));
  
        }

    }

?>