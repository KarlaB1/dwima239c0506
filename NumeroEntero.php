<?php
class NumeroEntero{
    private $ne;
    public function __construct($ne){
        $this -> ne = $ne;
    }
    public function setNe($ne){
        $this->ne =$ne;
    }
    public function getNe(){
        return $this->ne;
    }
}
?>