<?php
include_once('controlActualizarCarta.php');

if(isset($_POST['bntActualizar']) or isset($_POST['btnRegresarEstado'])){
    $objCarta = new actualizarCarta;
    session_start();
    $objCarta->listarCarta();
} elseif(isset($_POST['btnAActualizar'])) {
    $objActualizar = new actualizarCarta;
    $objActualizar->listarProductos();
} elseif(isset($_POST['btnModificarProducto'])) {
    $objActualizando = new actualizarCarta;
    $objActualizando->actualizarProducto($_POST['idProducto'], $_POST['nombre'], $_POST['tipo'], $_POST['precio'], $_POST['stock'],$_POST['estado']);
} elseif(isset($_GET['tipoProducto'])) {
    $objActualizando = new actualizarCarta;
    $objActualizando->listarProductosPorTipo($_GET['tipoProducto']);
} elseif(isset($_POST['btnRegistrarProducto'])) {
    $objActualizar = new actualizarCarta;
    $objActualizar->insertarProducto($_POST['nombre'], $_POST['tipo'], $_POST['precio'], $_POST['stock']);
} elseif(isset($_POST['btnBuscarProducto'])) {
    
    $objActualizar = new actualizarCarta;
    $objActualizar->buscarProducto($_POST['nombre']);
} else {
    include_once('../shared/formMensajeSistema.php');
    $nuevoMensaje = new formMensajeSistema;
    $nuevoMensaje -> formMensajeSistemaShow("Acceso no Permitido","<a href='../index.php'>Iniciar Sesion</a>");
}
?>