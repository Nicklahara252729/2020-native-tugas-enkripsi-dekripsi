<?php 
class Kripto{
    public $baseEnkripsi="pl";
    public $baseDekripsi;
    public $mcryptEnkripsi;
    public $mcryptDekripsi;
    
    function tes(){
        return json_encode($baseEnkripsi);
    }
}

?>