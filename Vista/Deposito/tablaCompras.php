<?php
$Titulo = "Tabla Compras";
include_once '../Estructura/cabecera.php';
if ($_SESSION['rolactivodescripcion'] <> 'deposito') {
    $mensaje = "No tiene permiso de deposito para acceder a este sitio.";
    echo "<script> window.location.href='../Home/index.php?mensaje=" . urlencode($mensaje) . "'</script>";
    // Ver las compras generadas por los clientes
    // Cambiar el estado de las compras
    // EN CADA CAMBIO DE ESTADO SE LE DEBE NOTIFICAR AL USUARIO
    // ACEPTADA (SE RESTA EL STOCK DE ESE CARRITO A TODOS LOS PRODUCTOS CORRESPONDIENTES)
    // CANCELADA (RECHAZA EL CARRITO DEL CLIENTE, NO OCURRE NADA MAS ALLA DEL CAMBIO DE ESTADO DE LA COMPRA)
    // ENVIADA (CAMBIO DE ESTADO)
} else {
    $objItems = new abmCompra();
    $listaProds = $objItems->buscar(null);
    if (count($listaProds) > 0) {
?>
        <div class="table-responsive">
            <table class="table table-hover caption-top" id="tablaProductos">
                <caption>Compras</caption>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Productos lista</th>
                        <th>Estado</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($listaProds as $item) {?>
                        <tr>
                            <td><?php echo $item->getID() ?></td>
                            <td><?php echo $item->getObjUsuario()->getUsNombre() ?></td>
                            <td><a href="#" class="verProductos"><button class="btn btn-outline-info col-8 mx-4"><i class="fa-solid fa-list-ul mx-2"></i></button></a></td>
                            <td></td>
                            <td><?php echo $item->getCofecha() ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="container-fluid p-4 mt-5 border border-2 rounded-2 bg-light d-none" style="width: 350px;" id='editarProducto'>
                <h5 class="text-center"><i class="fa-solid fa-file-pen me-2"></i>Actualizar Producto</h5>
                <hr>
            </div>
        </div>

        <script src="../../Utiles/js/funcionesABMCompras.js"></script>
    <?php } else {
    ?>
        <div class="container p-2">
            <div class="alert alert-info" role="alert">
                No hay productos cargados
            </div>
        </div>
<?php
    }
    include_once '../Estructura/pie.php';
} ?>