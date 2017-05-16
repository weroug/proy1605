<?php
$PATH='lib/';

include  $PATH.'lib/Conexion.php';
include $PATH.'lib/Usuario.php';

$oUsr=new Usuario();

$oUsr->nombre='flopez';

   
        
if ($oUsr->VerificaUsuario()) {
    echo "existe";
} else
    echo "No existe";
    


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

