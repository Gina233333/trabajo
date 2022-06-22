<?php
if ($conec->connect_errno){
    echo "Fallo al conectar a MYSQL-. (" .$conec ->connect_errno.") " .$conect->error;
}
$Codigo = $_POST ['codigo'];
$Codigo = $_POST ['nombre'];
$Codigo = $_POST ['direccion'];
$Codigo = $_POST ['telefono'];
$Codigo = $_POST ['sexo'];
$Codigo = $_POST ['Observaciones'];
$