<?php



class Libro {//new Libro()
    
    private $id;
    public $titolo;

    public function __construct($id=1, $titolo="Generico"){
        $this->id = $id;
        $this->titolo = $titolo;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        return    $this->id . ") " . $this->titolo;
    }

}
