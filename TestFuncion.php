<?php
include 'Funcion.php';

$f1 = new funcion('sss','20:00','30','100'); 
$f2 = new funcion('dd','30:00','50','150'); 

echo $f1->__toString();
echo $f2->__toString();