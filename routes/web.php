<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ReportController;
use App\Htpp\Controllers\BodegasController;
use App\Http\Controllers\RegistroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('report/reports_day',[ReportController::class, 'reports_day'])->name('reports.day');
Route::get('report/reports_dayPalmera',[ReportController::class, 'reports_dayPalmera'])->name('reports.dayPalmera');

Route::get('report/reports_date',[ReportController::class, 'reports_date'])->name('reports.date');
Route::get('report/report_datePalmera',[ReportController::class, 'reports_datePalmera'])->name('reports.datePalmera');


Route::post('report/report_results',[ReportController::class, 'report_results'])->name('report.results');

Route::post('report/report_resultsPalmera/',[ReportController::class, 'report_resultsPalmera'])->name('report.resultsPalmera');


Route::get('/', function () {
    return view('home');
});

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/indexPalmeras', [App\Http\Controllers\HomeController::class, 'indexPalmeras'])->name('home.indexPalmeras');
Route::get('home/{product}/showProduct', [App\Http\Controllers\HomeController::class, 'show'])->name('home.show');
Route::get('home/{bodega}/showBodegas', [App\Http\Controllers\HomeController::class, 'showBodegas'])->name('home.showBodegas');

Route::resource('users',UserController::class);
Route::get('users',[UserController::class,'index'])->name('users.index');
Route::get('users/{user}/edit',[UserController::class,'edit'])->name('users.edit');


Route::resource('roles',RoleController::class);
Route::get('roles',[RoleController::class, 'index'])->name('roles.index');
Route::get('roles/{role}/edit',[RoleController::class, 'edit'])->name('roles.edit');



Route::resource('categories', CategoryController::class);
Route::resource('providers', ProviderController::class);
Route::resource('clients', ClientController::class);

Route::resource('bodegas','App\Http\Controllers\BodegasController');
//Route::get('bodegas/{bodega}/edit',[BodegasController::class, 'edit'])->name('bodegas.edit');
Route::get('bodega/ReportsBodega','App\Http\Controllers\BodegasController@ReportsBodega')->name('bodegas.reports');

Route::get('bodega/registro','App\Http\Controllers\BodegasController@registro')->name('bodega.registro');
Route::get('bodega/generar','App\Http\Controllers\BodegasController@generar')->name('bodega.generar');
Route::post('orders/','App\Http\Controllers\BodegasController@generaStore');
Route::get('bodega/{id}/showRegistro','App\Http\Controllers\BodegasController@showRegistro')->name('bodega.showRegistro');
Route::get('bodega/boleta/{id}','App\Http\Controllers\BodegasController@boleta')->name('bodega.boleta');

Route::get('bodega/deposito','App\Http\Controllers\BodegasController@deposito')->name('bodega.deposito');
Route::post('ordersdep/','App\Http\Controllers\BodegasController@depositoStore');

Route::get('bodega/depositoRegistro','App\Http\Controllers\BodegasController@depositoRegistro')->name('bodega.depositoRegistro');
Route::get('bodega/{id}/showDeposito','App\Http\Controllers\BodegasController@showDeposito')->name('bodega.showDeposito');
Route::get('bodega/boleta2/{id}','App\Http\Controllers\BodegasController@boleta2')->name('bodega.boleta2');
Route::get('bodega/reports_date','App\Http\Controllers\BodegasController@reports_date')->name('bodega.reports_date');
Route::post('bodega/report_results','App\Http\Controllers\BodegasController@report_results')->name('report.results');

Route::get('bodega/deposito/reports_dateDep','App\Http\Controllers\BodegasController@reports_dateDep')->name('bodega.reports_dateDep');
Route::post('bodega/deposito/report_resultsDep','App\Http\Controllers\BodegasController@report_resultsDep')->name('report.resultsDep');

Route::resource('products', ProductController::class);
Route::get('product/index',[ProductController::class, 'index'])->name('product.index');
Route::get('product/create',[ProductController::class, 'create'])->name('product.create');
Route::get('product/showTraslados/{sale}',[ProductController::class, 'showTraslados'])->name('product.showTraslados');

Route::get('product/reports',[ProductController::class,'reports'])->name('products.reports');
Route::get('product/boleta/{sale}',[ProductController::class, 'boleta'])->name('product.boleta');

Route::resource('purchase', PurchaseController::class);
//Route::get('purchase/index',[PurchaseController::class, 'index'])->name('purchase.index');
Route::get('purchase/create',[PurchaseController::class, 'create'])->name('purchase.create');
Route::get('purchase/{purchase}/edit',[PurchaseController::class, 'edit'])->name('purchase.edit');
Route::get('purchase/{purchase}/show',[PurchaseController::class, 'show'])->name('purchase.show');
Route::get('purchase/{purchase}/show2',[PurchaseController::class, 'show2'])->name('purchase.show2');
Route::get('purchase/{purchase}/pdf',[PurchaseController::class, 'pdf'])->name('purchase.pdf');
Route::get('purchase/{purchase}/pdf2',[PurchaseController::class, 'pdf2'])->name('purchase.pdf2');

Route::resource('sales', SaleController::class);
Route::get('sale/index',[SaleController::class, 'index'])->name('sale.index');
Route::get('sale/prueba',[SaleController::class, 'prueba'])->name('sale.prueba');
Route::get('sale/palmeras',[SaleController::class, 'indexPalmeras'])->name('sale.indexPalmeras');
Route::get('sale/create',[SaleController::class, 'create'])->name('sale.create');
Route::get('sales/{sale}/show',[SaleController::class, 'show'])->name('sale.show');

Route::get('sales/{sale}/showPalmeras',[SaleController::class, 'showPalmeras'])->name('sale.showPalmeras');


Route::get('sales/{sale}/{producto}/salaVentaShow',[SaleController::class, 'showSalaPrat'])->name('sale.SalaPrat');
Route::get('sales/{sale}/{producto}/salaVentaShowPalmeras',[SaleController::class, 'showSalaPalmeras'])->name('sale.SalaPalmeras');


Route::get('sales/print/{sale}',[SaleController::class, 'print'])->name('sale.print');
Route::get('sales/print2/{sale}',[SaleController::class, 'print2'])->name('sale.print2');
Route::get('sales/boleta/{sale}',[SaleController::class, 'boleta'])->name('sale.boleta');
Route::get('sales/boleta2/{sale}',[SaleController::class, 'boleta2'])->name('sale.boleta2');
Route::get('sales/despacho/{sale}',[SaleController::class, 'despacho'])->name('sale.despacho');
Route::get('sales/despacho2/{sale}',[SaleController::class, 'despacho2'])->name('sale.despacho2');

Route::get('salaVentaPrat', [CartController::class, 'salaVentaPrat'])->name('cart.salaVentaPrat'); //index
Route::post('salaVentaPrat', [CartController::class, 'addToSalaPrat'])->name('cart.storePrat');// cart 
Route::get('saleVentasPrat', [CartController::class, 'saleVentasPrat'])->name('cart.saleVentasPrat');
Route::post('clearsSalaVentaPrat', [CartController::class, 'clearsSalaVentaPrat'])->name('cart.clearsSalaVentaPrat');

Route::get('cambiarSala/{sale}/{producto}',[CartController::class, 'cambiarSala'])->name('cart.cambiar');
Route::post('cambiarSala/{sale}/{producto}', [CartController::class, 'addToCambiarSala'])->name('cart.storeSala');// cart 
Route::get('saleCambiarSala/{sale}/{producto}', [CartController::class, 'saleCambiarSala'])->name('cart.saleCambiar');
Route::post('clearsCambiar/{sale}/{producto}', [CartController::class, 'clearsCambiar'])->name('cart.clearsCambiar');

Route::get('salaVentaPalmeras', [CartController::class, 'salaVentaPalmeras'])->name('cart.salaVentaPalmeras'); //index
Route::post('salaVentaPalmeras', [CartController::class, 'addToSalaPalmeras'])->name('cart.storePalmeras');// cart 
Route::get('saleVentaPalmeras', [CartController::class, 'saleVentasPalmeras'])->name('cart.saleVentasPalmeras');
Route::post('clearsSalaVentasPalmeras', [CartController::class, 'clearsSalaVentasPalmeras'])->name('cart.clearsSalaVentasPalmeras');



Route::get('cambiarSalaPalmeras/{sale}/{producto}',[CartController::class, 'cambiarSalaPalmeras'])->name('cart.cambiarPalmeras');
Route::post('cambiarSalaPalmeras/{sale}/{producto}', [CartController::class, 'addToCambiarSalaPalmeras'])->name('cart.storeSalaPalmeras');// cart 
Route::get('saleCambiarSalaPalmeras/{sale}/{producto}', [CartController::class, 'saleCambiarSalaPalmeras'])->name('cart.saleCambiarPalmeras');
Route::post('clearsCambiarPalmerass/{sale}/{producto}', [CartController::class, 'clearsCambiarPalmerass'])->name('cart.clearsCambiarPalmerass');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list'); //index
Route::get('addSale', [SaleController::class, 'addSale']);
Route::post('descuento',[CartController::class, 'descuento'])->name('cart.descuento');

Route::get('saleCart', [CartController::class, 'saleCart'])->name('cart.saleCart');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');// cart 

Route::get('product/cambio',[CartController::class,'cambioPalmeras'])->name('product.cambioPalmeras');
Route::post('product/cambio', [CartController::class, 'addTocambio'])->name('product.addTocambio');// cart 
Route::get('saleCambio', [CartController::class, 'saleCambio'])->name('product.saleCambio');
Route::post('clearsCambio', [CartController::class, 'clearsCambio'])->name('cart.clearsCambio');

Route::get('producto', [CartController::class, 'productList'])->name('cart.list2');
Route::get('saleProducto', [CartController::class, 'saleProducto'])->name('cart.saleProducto');

Route::post('producto',[CartController::class, 'addToProduct'])->name('cart.agregar');
Route::post('clears', [CartController::class, 'clearAllProducto'])->name('cart.clearProducto');


Route::get('palmeras', [CartController::class, 'palmerasList'])->name('cart.list3');
Route::post('palmeras', [CartController::class, 'addToPalmeras'])->name('cart.palmeras');
Route::get('salePalmeras', [CartController::class, 'salePalmeras'])->name('cart.salePalmeras');
Route::post('clearsPalmeras', [CartController::class, 'clearPalmeras'])->name('cart.clearPalmeras');



Route::get('compras', [CartController::class, 'comprasList'])->name('cart.list4');
Route::post('compras', [CartController::class, 'addToCompras'])->name('cart.compras');
Route::get('saleCompras', [CartController::class, 'saleCompras'])->name('cart.saleCompras');
Route::post('clearsCompras', [CartController::class, 'clearCompras'])->name('cart.clearCompras');


Route::post('update-cart', [CartController::class, 'updatoCart'])->name('cart.update');

Route::post('update-cart2', [CartController::class, 'updatoCart2'])->name('cart.update2');
Route::post('update-cart3', [CartController::class, 'updatoCart3'])->name('cart.update3');
Route::post('update-cart4', [CartController::class, 'updatoCart4'])->name('cart.update4');
Route::post('update-cart5', [CartController::class, 'updatoCart5'])->name('cart.update5');
Route::post('update-cart6/{producto}', [CartController::class, 'updatoCart6'])->name('cart.update6');
Route::post('update-cart7', [CartController::class, 'updatoCart7'])->name('cart.update7');
Route::post('update-cart8/{producto}', [CartController::class, 'updatoCart8'])->name('cart.update8');
Route::post('update-cart9', [CartController::class, 'updatoCart9'])->name('cart.update9');

Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('remove2', [CartController::class, 'removeCartPalmeras'])->name('cart.removePalmeras');
Route::post('remove3', [CartController::class, 'removeCartProducto'])->name('cart.removeProducto');
Route::post('remove4', [CartController::class, 'removeCartCompras'])->name('cart.removeCompras');
Route::post('remove5', [CartController::class, 'removeSalaVentasPrat'])->name('cart.removeSalaVentasPrat');
Route::post('remove6/{producto}', [CartController::class, 'removeCambiar'])->name('cart.removeCambiarSalaVenta');
Route::post('remove7', [CartController::class, 'removeSalaVentasPalmeras'])->name('cart.removeSalaVentasPalmeras');
Route::post('remove8/{producto}', [CartController::class, 'removeCambiarPalmeras'])->name('cart.removeCambiarSalaVentaPalmeras');
Route::post('remove9', [CartController::class, 'removeCambio'])->name('cart.removeCambio');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

