<?php 

    class Categoria extends Conectar{

        public function get_categoria(){

                $conectar = parent::conexion();
                parent::set_names();
                $sql ="select * from categoria where ind_estado='1'";
                $stmt = $conectar->prepare($sql);
                $stmt->execute();
                return $resultado = $stmt->fetchAll();

        }

    }

?>