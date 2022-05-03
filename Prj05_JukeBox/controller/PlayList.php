<?php

class PlayList {
    
    private $canzoni = [];

    public function addCanzone($canzone)
    {
        $this->canzoni[] = $canzone;
    }

    public function init()
    {
        $file_canzoni = './assets/canzoni2020_.csv';

        $array_canzoni = file($file_canzoni);

        foreach ($array_canzoni as $riga_canzone) {
            
            $canzone = explode("|", $riga_canzone);
            $titolo = $canzone[0];
            $cantante = isset($canzone[1])?$canzone[1]:'unknown';

            $this->addCanzone(new Canzone(0, $titolo, $cantante));


        }

    }

    public function getCanzoni(){
        return $this->canzoni;
    }


}








?>