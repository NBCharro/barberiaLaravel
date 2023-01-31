<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function empresa()
    {
        return view('empresa');
    }
    public function servicios()
    {
        return view('servicios');
    }
    public function carrito()
    {
        session_start();
        // if (isset($_SESSION['productosComprados'])) {
        //     $productosComprados = $_SESSION['productosComprados'];
        // } else {
        //     $_SESSION['productosComprados'] = [];
        //     $productosComprados = $_SESSION['productosComprados'];
        // }
        // return view('carrito')->with(["productosComprados" => $productosComprados]);
        return view('carrito');
    }

    public function compraRealizada()
    {
        session_start();
        $productosComprados = $_SESSION['productosComprados'];
        session_destroy();

        foreach ($productosComprados as $producto) {
            // $producto = Producto::where('id', '=', $producto['id'])->get();
            $stock = Producto::where('id', $producto['id']);
            $stock->decrement(
                'stock',
                $producto['cantidad']
            );
        }

        return view('compraRealizada')->with(['productosComprados' => $productosComprados]);
    }

    public function actualizarCarrito(Request $producto)
    {
        session_start();
        if (!isset($_SESSION['productosComprados'])) {
            $_SESSION['productosComprados'] = [];
        }
        $compra = [
            "id" => $producto->id,
            "nombre" => $producto->nombre,
            "precio" => $producto->precio,
            "cantidad" => $producto->cantidad,
            "stock" => $producto->stock,
            "imagen" => $producto->imagen,
        ];

        // Compruebo si el producto estaba en el carrito
        $estabaEnCarrito = false;
        $idEstabaEnCarrito = 0;
        foreach ($_SESSION['productosComprados'] as $key => $producto) {
            if ($producto['id'] == $compra['id']) {
                $estabaEnCarrito = true;
                $idEstabaEnCarrito = $key;
            }
        }

        // Si estaba en el carrito actualizo la cantidad y si no estaba lo agrego
        if ($estabaEnCarrito) {
            $_SESSION['productosComprados'][$idEstabaEnCarrito]['cantidad'] = $compra['cantidad'];
        } else {
            $_SESSION['productosComprados'][] = $compra;
        }

        return redirect()->route('productos.index');
    }

    public function actualizarCantidadCarrito(Request $request)
    {
        session_start();
        foreach ($_SESSION['productosComprados'] as $key => $producto) {
            if ($request->productos[$producto['id']] == 0) {
                unset($_SESSION['productosComprados'][$key]);
            } else {
                $_SESSION['productosComprados'][$key]['cantidad'] = $request->productos[$producto['id']];
            }
        }
        return view('carrito');
    }
}
