<?php
require '../conex.php';

class Productos extends Conex
{
    function insertar_producto(){
     parent :: conectar();
      $insert_prodcut ="INSERT INTO `productos` (`ID`, `Nombre de producto`, `Referencia`, `Precio`, `Peso`, `Categoria`, `Stock`, `Fecha de creacion`, `Fecha de ultima venta`) VALUES (NULL, 'producto', '1', '2', '3333', '1', '2', '2021-04-06', '2021-04-21 18:08:00.000000');";
      $id_dpn = parent::queryRegistro($insert_prodcut);
      parent :: cerrar(); 

      if (intval( $id_dpn ) <= 0) {
          return array(
              'status'    => 'errorDatos', 
              'message'   => 'No fue posible crear product'
          );
      }
      return array(
        'status'    => 'success', 
        'message'   => 'bien'
    );

    

        
    }

    function consultar(){
      parent :: conectar();
       $insert_prodcut ="select * from productos";
       $insert_prodcut= parent::consultaTodo( $insert_prodcut);
      parent :: cerrar(); 
      return $insert_prodcut; 
         
     }

     function borrar($data){

      $consul_elimiar =
        "DELETE FROM  productos where id = $data[id]"; 
        parent::conectar();
        parent::query($consul_elimiar);
        parent::cerrar();

        return array("status"=> "success", "mensaje"=>"eliminadi"); 
         
     }

     function actualizar($data){
      $updatexdatosxpersonaxnatural= "UPDATE productos
      SET
        nombre   = 'nombre'
      WHERE (id = '$data[id]');";

      parent::conectar();
      parent::query( $updatexdatosxpersonaxnatural );
      parent::cerrar();
 
         
     }



}

?>