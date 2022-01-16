<?php

require_once('conexion.php');

class clsCliente{
 
     public function insertar($cliente)
     {
         # code... 
         $sql = 'INSERT INTO cliente(tipodoc,nrodoc,razon_social,direccion) 
                 VALUES(:tipodoc,:nrodoc,:razon_social,:direccion)';
         
         $parametros = array(
                ':tipodoc' => $cliente['tipodoc'],
                ':nrodoc' => $cliente['nrodoc'],
                ':razon_social' => $cliente['razon_social'],
                ':direccion' => $cliente['direccion']
         );

         global $cnx;
         $pre = $cnx->prepare($sql);
         $pre-> execute($parametros);
         return $pre;
     }

  

}

?>