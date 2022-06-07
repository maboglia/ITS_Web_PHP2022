<?php

    require_once "../dao/connection.php";
    require_once "../model/alimento.php";

    class AlimentoDAO {
        
        private $DB;

        public function __construct(){
            // creazione oggetto
            $connessione = new Connection();
            
            // Connesssione al db
            $connessione->connect();    
            
            // Assignement of the connection
            $this->DB = $connessione->getConn();
        }

        public function getAlimenti(){
            // query to get the 'alimenti' table
            $query = "SELECT * FROM alimenti";

            // executing the query on the db
            $result = $this->DB->query($query);

            // setting the fetch mode for the data from 'Alimento'
            $result->setFetchMode(PDO::FETCH_CLASS,"Alimento");

            // empty container array
            $alimenti = [];

            // getting the data from the result and adding it to the array
            while($alimento=$result->fetch()){
                $alimenti[] = $alimento;
                // var_dump($alimento);
            }

            return $alimenti;
        }

        public function getAlimentoById($id){
            // query to get the 'alimenti' table
            $query = "SELECT * FROM alimenti WHERE id = {$id}";

            // executing the query on the db
            $result = $this->DB->query($query);

            // setting the fetch mode for the data from 'Alimento'
            $result->setFetchMode(PDO::FETCH_CLASS,"Alimento");
            
            return $result->fetch();
        }

    }

?>