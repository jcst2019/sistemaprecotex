<?php 

    require_once("../config/conexion.php");
    require_once("../model/Categoria.php");

    $categoria = new Categoria();

    switch ($_GET["op"]) {
        case 'combo':
            $datos = $categoria->get_categoria();
            if(is_array($datos)== true and count($datos)>0){
               $html="<option value=-1 > Seleccionar Categoría</option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row['id_categoria']."'>".$row['descripcion']."</option>";
                }
                echo $html;
            }
            break;
    }

?>