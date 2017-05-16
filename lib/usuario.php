<?php



class Usuario{
    
    
    var $idusuario;
    var $nombre;
    var $clave;
  /*Valida la existencia del usuario */
    function VerificaUsuario(){
       $oConn = new Conexion();
       
        if($oConn->Conectar())
            $db = $oConn->objconn;
        else
            return false;
        
        
        $sql = "SELECT * FROM acceso WHERE nomusuario='$this->nombre' and pwdusuario='md5($this->clave)'";
        $resultado=$db->query($sql);
        
        
        if ($resultado->num_rows >= 1 || $resultado) {
            return true;
        } else
            return false;
    }
    }



 










/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

