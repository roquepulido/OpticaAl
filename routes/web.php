<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiagnosticController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EyeglassController;
use App\Http\Controllers\FramesController;
use App\Http\Controllers\KindWorkController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LensController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TreatmentController;
use App\Models\Customer;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resources([
        "sucursales" => StoreController::class,
        "armazones" => FramesController::class,
        "tratamientos" => TreatmentController::class,
        "diagnosticos" => DiagnosticController::class,
        "clientes" => CustomerController::class,
        "empleados" => EmployeeController::class,
        "laboratorios" => LabController::class,
        "tipos-lab" => KindWorkController::class,
        "micas" => LensController::class,
        "stocks" => StockController::class,
        "lentes" => EyeglassController::class,
        "ventas" => SaleController::class,
    ]);
});


//test Routes
Route::get('/test-stores', [StoreController::class, 'index']);
Route::get('/test-frames', [FramesController::class, 'index']);
Route::get('/test-treatment', [TreatmentController::class, 'index']);
Route::get('/test-diag', [DiagnosticController::class, 'index']);
Route::get('/test-customer', [CustomerController::class, 'index']);
Route::get('/test-employee', [EmployeeController::class, 'index']);
Route::get('/test-labs', [LabController::class, 'index']);
Route::get('/test-kind', [KindWorkController::class, 'index']);
Route::get('/test-lens', [LensController::class, 'index']);
Route::get('/test-stock', [StockController::class, 'index']);
Route::get('/test-glass', [EyeglassController::class, 'index']);
Route::get('/test-sales', [SaleController::class, 'index']);

//end test



Route::get('/hi', function () {
    return view('hi');
})->middleware('role:admin');

require __DIR__ . '/auth.php';
