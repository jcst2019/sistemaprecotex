<?php 

    class Ticket extends Conectar{

        public function insert_ticket( $id_usuario, $id_categoria, $titulo, $descripcion){

                $conectar = parent::conexion();
                parent::set_names();
                $sql ="insert into ticket(id_ticket,id_usuario,id_categoria,titulo, descripcion,fec_regis,id_estado) values (null,?,?,?,?,now(),'1')";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1,$id_usuario);
                $stmt->bindValue(2,$id_categoria);
                $stmt->bindValue(3,$titulo);
                $stmt->bindValue(4,$descripcion);
                $stmt->execute();
                return $resultado = $stmt->fetchAll();

        }
        public function listar_ticket_x_usu( $id_usuario){

            $conectar = parent::conexion();
            parent::set_names();
            $sql ="
                select 
                a.id_ticket,
                a.id_usuario,
                a.id_categoria,
                a.titulo,
                a.descripcion,
                a.fec_regis,
                b.descripcion as des_categoria,
                concat_ws(' ', c.nombre, c.apellido) as usuario
                from  ticket a
                inner join categoria b on a.id_categoria = b.id_categoria
                inner join usuario c on a.id_usuario = c.id_usuario
                where a.id_estado='1';
                and a.id_usuario = ?";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1,$id_usuario);
            $stmt->execute();
            return $resultado = $stmt->fetchAll();

    }

    }

?>