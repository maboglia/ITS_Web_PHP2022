<?php
    require_once "../dao/alimentoDAO.php";

    class Service{

        private $alimento;

        public function __construct(){
            $this -> alimento = new AlimentoDAO();
        }

        // Printing the preformatted result
        public function test(){
            echo '<pre>';
            print_r($this -> alimento->getAlimentoById(100));
            echo '</pre>';
        }

        public function getAlimenti(){
            return $this -> alimento -> getAlimenti();
        }

        public function getAlimentoById($id){
            return $this -> alimento -> getAlimentoById($id);
        }

    }

    
    
?>