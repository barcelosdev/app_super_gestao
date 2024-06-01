<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'hello'])->name('site.home');
Route::get('/login', fn () => 'Login')->name('site.login');
Route::get('/sobre-nos', [AboutUsController::class, 'hello'])->name('site.about-us');

Route::get('/contato', [ContactController::class, 'index'])->name('site.contact');
Route::post('/contato', [ContactController::class, 'index'])->name('site.contact');

Route::prefix('app')->group(function () {
    Route::get('/clientes', fn () => 'Clientes')->name('app.customers');
    Route::get('/fornecedores', [SupplierController::class, 'index'])->name('app.suppliers');
    Route::get('/produtos', fn () => 'Produtos')->name('app.products');
});


Route::get('/teste/{param_one}/{param_two}', [TestController::class, 'test'])->name('test');

Route::fallback(function () {
    echo 'A página acessada não existe. <a href="' . route("site.home") . '">Clique aqui<a/> para voltar ao início';
});
