<?php
class dashboard{
    var $dsh;
    public $html = "
    <div id='container' style=\"border:solid 1px;width:300px;height:200px;display:flex;flex-direction:row;flex-wrap: wrap\"></div>";

    // function __construct(){ //a = filas, b = columnas        

        // $this->html = "";

        // Por defecto se crean los cuadros vacíos
        // for($i=0;$i < $rows;$i++){
        //     for($j=0;$j<$columns;$j++){
        //         $this->dsh[$i][$j] = "<div style=\"border:solid 1px;width:50px;height:50px;margin:10px;\"></div>";
        //         $this->html .= $this->dsh[$i][$j];
        //     }
        // }
        // $this->html .= "";
    // }

    public function getHtml(){
        return $this->html;
    }
    public function setHtml($html) {
        $this->html=$html;
    }
    // public function getStructure(){
        
    // } 

    function addSquare($posx,$posy,$rows,$columns){ // coordenadas
        
        libxml_use_internal_errors(true);
        $doc = new DOMDocument(); 
        $doc->loadHTML($this->html);
        $doc->loadHTML($this->html);
        $divContainer = $doc->getElementById('container');
        $color = $doc->createElement('div', 'Color');
        $color->setAttribute('class', 'color divsizes');
        $noColor = $doc->createElement('div', 'NoColor');
        $noColor->setAttribute('class', 'divsizes');
        
        
        $this->html = "<div style=\"border:solid 1px;width:300px;height:200px;display:flex;flex-direction:row;flex-wrap: wrap\">";
    
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                if($i==$posx && $j==$posy){
                    // echo "match> ";
                    $divContainer->appendChild($color);
                } else {
                    $divContainer->appendChild($noColor);
                }
            }
        }
        echo $doc->saveHTML();
    }
}

?>