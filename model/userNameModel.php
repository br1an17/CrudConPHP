<?php
class usernameModel
{
    private $PDO;
    public function __construct()
    {

        require_once("c://xampp/htdocs/hola/config/DB.php");
        $cin = new db();
        $this->PDO = $con->conexion();
    }
    public function insertar($nombre)
    {
        $pito = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
        $pito->bindParam(":nombre", $nombre);
        return ($pito->execute()) ? $this->PDO->lastInserrId() : false;
    }

}




?>