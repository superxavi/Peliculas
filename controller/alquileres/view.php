<?php
include '../../model/conectar.php';
$sql = "SELECT * FROM alquileres";
$result = $conn->query($sql);
//Proceso de creacion de tabla y relleno de datos de la BDD
include '../../model/desconectar.php';
if(isset($_GET['alq_id']))
{
    include '../../model/conectar.php';
    $id = $_GET['alq_id'];
    $sql = "SELECT a.alq_id, s.soc_nombre, p.pel_nombre, a.alq_fecha_desde, a.alq_fecha_hasta, a.alq_valor, a.alq_fecha_entrega FROM alquileres AS a, socios AS s, peliculas as p
    WHERE a.soc_id = s.soc_id
    AND a.pel_id = p.pel_id
    AND a.alq_id=".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';
}
?>