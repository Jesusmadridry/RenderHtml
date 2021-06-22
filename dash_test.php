<?php
require 'c_dashboard.php';

$dsh = new dashboard();

// Array simple
// echo "<pre>";
// print_r($dsh->dsh);
// echo "</pre>";
// echo "<hr/>";

// dashboard
echo $dsh->getHtml();
// echo "<hr/>";

// Tras agregarle un cuadrado
echo "<pre>";
$dsh->addSquare(0,1,3,2);
// $dsh->addSquare(1,2,3,2);
// print_r($dsh->dsh);
echo "</pre>";
echo "<hr/>";

// dashboard
echo $dsh->getHtml();
?>




<style>

.color {
    background-color: red;
}

.divsizes {
    width: 50px;
    height: 50px;
    border: 1px solid black;
    margin: 5px;
}


</style>