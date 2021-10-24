<?php 

session_start();

class Conectar{

    public $dbh;

    protected function conexion(){
        try {
             $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=bd_help_desk","root","root");

             return $conectar;

        } catch (Exception $e) {
           print "!Error BD:" . $e->getMessage() . "<br/>";
           die();
        }

    }

    public function set_names(){

        return $this->dbh->query("SET NAMES 'utf8'");
    }

    static function ruta(){

        return "http://localhost:80/sistema_precotex";
    }


}

?>