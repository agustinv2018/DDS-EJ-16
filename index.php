<?php

require_once 'modelo/lineacompra.php';
require_once 'modelo/pedidocompra.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';


$prov = new Proveedor();
$prov->setId(1);
$prov->setDescripcion('Bagley');

$prod = new Producto();
$prod->setCodigo(554899);
$prod->setDescripcion('Sonrisas');
$prod->setPrecioVenta('$155.55');

$prod1 = new Producto();
$prod1->setCodigo(997788);
$prod1->setDescripcion('Marucas');
$prod1->setPrecioVenta('$106.50');

$lc = new LineaCompra();
$lc->setProducto($prod);
$lc->setCantidad('10');
$lc->setCostoUnitario('$5.40');
$lc->setFueEntregado(true);

$lc1 = new LineaCompra();
$lc1->setProducto($prod1);
$lc1->setCantidad('50');
$lc1->setCostoUnitario('$7.60');
$lc1->setFueEntregado(true);

$pc = new PedidoCompra();
$pc->setFecha('19/08/2022');
$pc->setProveedor($prov);
$pc->setFechaEntregaEstimada('03/09/2022');
$pc->setCostoTotal('$262.05');
$pc->setPedidoCerrado(true);
$pc->setListaCompra($lc);
$pc->setListaCompra($lc1);

$pc->MostrarDatos();


