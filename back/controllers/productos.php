<?php 
include '../cors.php';
require '../model/productos.php';

$datos = json_decode(file_get_contents("php://input"),TRUE);

	if (isset($_GET['insertar'])) {
        
        $productos = new Productos();
        $res = $productos->insertar_producto();
        $res= json_encode($res); 
        echo($res);
        return 0; 
    }

    if (isset($_GET['eliminar'])) {
        $data = validarPostData('data');
        if(!isset($data)){
            echo json_encode(array('status'=>'fail', 'message'=>'no data', 'data'=> null));
            return 0;
        }
        $productos = new Productos();
        $res = $productos->borrar($data);
        $res= json_encode($res); 
        echo($res);
        return 0; 
    }

    if (isset($_GET['consultar'])) {
        $productos = new Productos();
        $res = $productos->consultar();
        $res= json_encode($res); 
        echo($res);
        return 0; 
    }



    function validarPostData($res)
    {
        $data = null;
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        
        if(isset($_POST[$res])) $data = $_POST[$res];

        else if($postdata && $request->$res){
            $data = $request->$res;
            $data = json_encode($data);
            $data = json_decode($data, true);
        }
        return $data;
    }

?> 