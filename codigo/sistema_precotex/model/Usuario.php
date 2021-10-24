<?php

class Usuario extends Conectar{

    public function login(){

          $conectar=parent::conexion();

          parent::set_names();

          if(isset($_POST["enviar"])){

            $correo = $_POST["correo"];
            $pasword= $_POST["pasword"];


            if(empty($correo) or empty($pasword)){
                echo  $correo ;
                header("Location:".Conectar::ruta()."/index.php?m=2");
                exit();
            }else{

                $sql = "select * from usuario where correo=? and pasword=? and id_estado='1'";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1,$correo);
                $stmt->bindValue(2,$pasword);
                $stmt->execute();

                $resultado = $stmt->fetch();
                if(is_array($resultado) and count($resultado)>0){
                    $_SESSION["usu_id"]=$resultado["id_usuario"];
                    $_SESSION["usu_nom"]=$resultado["nombre"];
                    $_SESSION["usu_ape"]=$resultado["apellido"];
                    header("Location:".Conectar::ruta()."/view/home/home.php");
                    exit();

                }else{
                    header("Location:".Conectar::ruta()."/index.php?m=1");
                    exit();
                }
            }

          }

    }

}
?>