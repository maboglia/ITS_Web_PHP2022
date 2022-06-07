<?php

    require_once '../service/alimentoService.php';

    

    class alimentoMVC{

        public $service;

        public function __construct(){
            $this -> service = new Service();
        }

        public function getAlimenti(){
            include "../view/header.php";

            $alimenti = $this -> service -> getAlimenti();

            include "../view/table.php";



            include "../view/footer.php";
            

            
        }

        public function getAlimento($id){
            include "../view/header.php";

            $alimento = $this -> service -> getAlimentoById($id);

            include "../view/detail.php";



            include "../view/footer.php";
            

            
        }

    }

?>