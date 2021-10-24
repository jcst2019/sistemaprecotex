<?php 

    require_once("../config/conexion.php");
    require_once("../model/Ticket.php");

    $ticket = new Ticket();

    switch ($_GET["op"]) {
        case 'insertar':
            $ticket->insert_ticket($_POST["id_usuario"],$_POST["id_categoria"],$_POST["titulo"],$_POST["descripcion"]);
            break;
        case 'listar_x_usu':
            $datos = $ticket->listar_ticket_x_usu($_POST["id_usuario"]);
            $data= array();
            foreach ($datos as $row) {
                     $sub_array = array();
                     $sub_array[]=$row["id_ticket"];
                     $sub_array[]=$row["des_categoria"];
                     //$sub_array[]=$row["id_usuario"];
                     //$sub_array[]=$row["id_categoria"];
                     $sub_array[]=$row["usuario"];
                     $sub_array[]=$row["titulo"];
                     //$sub_array[]=$row["descripcion"];
                     $sub_array[]=date("d/m/Y H:i:s",strtotime($row["fec_regis"]));
                     $sub_array[] = '<button type="button" onClick="ver('.$row["id_ticket"].');"  id="'.$row["id_ticket"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';                
                     $sub_array[] = '<button type="button" onClick="ver('.$row["id_ticket"].');"  id="'.$row["id_ticket"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>'; 
                     $data[]= $sub_array;   
            }
            $result = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($result);
            break;
    }

?>