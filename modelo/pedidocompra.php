<?php

class PedidoCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntregaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
    private $listLineasCompras = array();




    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }




    public function getProveedor()
    {
        return $this->proveedor;
    }


    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }



    public function getFechaEntregaEstimada()
    {
        return $this->fechaEntregaEstimada;
    }


    public function setFechaEntregaEstimada($fechaEntregaEstimada)
    {
        $this->fechaEntregaEstimada = $fechaEntregaEstimada;
    }



    public function getCostoTotal()
    {
        return $this->costoTotal;
    }


    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;
    }



    public function getPedidoCerrado()
    {
        return $this->pedidoCerrado;
    }


    public function setPedidoCerrado($pedidoCerrado)
    {
        $this->pedidoCerrado = $pedidoCerrado;
    }


    public function getListLineasCompras()
    {
        return $this->listLineasCompras;
    }


    public function setListaCompra($lc)
    {
        $this->listLineasCompras[] = $lc;
    }

    public function MostrarDatos()
    {
        echo 'Datos del Pedido de Compra : ' . '<br>';
        echo 'Fecha : ' . $this->getFecha() . '<br>';
        echo 'Proveedor ID : ' . $this->getProveedor()->getId() . '<br>';
        echo 'Descripcion del Proveedor : ' . $this->getProveedor()->getDescripcion() . '<br>';
        echo 'Fecha Entrega Estimada : ' . $this->getFechaEntregaEstimada() . '<br>';
        echo 'Costo Total : ' . $this->getCostoTotal() . '<br>';
        echo 'Pedido Cerrado : ' . $this->getPedidoCerrado() . '<br>';
        echo '<hr>';


        foreach ($this->getListLineasCompras() as $lc) {
            echo 'Datos de la Linea Compra : ' . '<br>';
            echo 'Codigo Producto : ' . $lc->getProducto()->getCodigo() . '<br>';
            echo 'Descripcion del Producto : ' . $lc->getProducto()->getDescripcion() . '<br>';
            echo 'Precio de Venta del Producto : ' . $lc->getProducto()->getPrecioVenta() . '<br>';
            echo 'Cantidad : ' . $lc->getCantidad() . '<br>';
            echo 'Costo Unitario : ' . $lc->getCostoUnitario() . '<br>';
            echo 'Fue Entregado : ' .$lc->getFueEntregado() . '<br>';
            echo '<hr>';
        }
    }
}
