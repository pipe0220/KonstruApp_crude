<?php

use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DetalleCarritoController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\EstadoPedidoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frmcategorias', [CategoriaController::class, 'create']);
Route::post('/frmcategorias', [CategoriaController::class, 'store'])->name('frmcategorias.store');

Route::get('/frmciudades', [CiudadController::class, 'create']);
Route::post('/frmciudades', [CiudadController::class, 'store'])->name('frmciudades.store');

Route::get('/frmcliente', [ClienteController::class, 'create']);
Route::post('/frmcliente', [ClienteController::class, 'store'])->name('frmclientes.store');

Route::get('/frmcompra', [CompraController::class, 'create']);
Route::post('/frmcompra', [CompraController::class, 'store'])->name('frmcompras.store');

Route::get('/frmdepartamentos', [DepartamentoController::class, 'create']);
Route::post('/frmdepartamentos', [DepartamentoController::class, 'store'])->name('frmdeparatamentos.store');

Route::get('/frmdetalles_carrtio', [DetalleCarritoController::class, 'create']);
Route::post('/frmdetalles_carrito', [DetalleCarritoController::class, 'store'])->name('frmdetalle_carritos.store');

Route::get('/frmdetalles_compra', [DetalleCompraController::class, 'create']);
Route::post('/frmdetalles_compra', [DetalleCompraController::class, 'store'])->name('frmdetalle_compra.store');

Route::get('/frmdetalles_pedido', [DetallePedidoController::class, 'create']);
Route::post('/frmdetalles_pedido', [DetallePedidoController::class, 'store'])->name('frmdetalle_pedidos.store');

Route::get('/frmestado_pedido', [EstadoPedidoController::class, 'create']);
Route::post('/frmestado_pedido', [EstadoPedidoController::class, 'store'])->name('frmestado_pedido.store');

Route::get('/frmpagos', [MetodoPagoController::class, 'create']);
Route::post('/frmpagos', [MetodoPagoController::class, 'store'])->name('frmmetodos_pago.store');

Route::get('/frmpedidos', [PedidoController::class, 'create']);
Route::post('/frmpedidos', [PedidoController::class, 'store'])->name('frmpedido.store');

Route::get('/frmpais', [PaisController::class, 'create']);
Route::post('/frmpais', [PaisController::class, 'store'])->name('frmpaises.store');

Route::get('/frmproductos', [ProductoController::class, 'create']);
Route::post('/frmproductos', [ProductoController::class, 'store'])->name('frmproductos.store');

Route::get('/frmproveedores', [ProveedorController::class, 'create']);
Route::post('/frmproveedores', [ProveedorController::class, 'store'])->name('frmproveedores.store');

Route::get('/frmcalificaciones', [CalificacionController::class, 'create']);
Route::post('/frmcalificiones', [CalificacionController::class, 'store'])->name('frmcalificaciones.store');

Route::get('/frmcarrito', [CarritoController::class, 'create']);
Route::post('/frmcarrito', [CarritoController::class, 'store'])->name('frmcarritos.store');

Route::get('/frminventario', [InventarioController::class, 'create']);
Route::post('/frminventario', [InventarioController::class, 'store'])->name('frmdetalle_compra.store');
