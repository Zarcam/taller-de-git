<?php
//Autor: Alejandro Rebagliato<correo@correo.correo>

require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre=trim(fgets(STDIN));
print new HolaMundo($nombre);
