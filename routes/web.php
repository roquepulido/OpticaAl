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
use App\Http\Controllers\UserController;
use Illuminate\Contracts\View\View;
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
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::post('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('/customers/delete/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
    Route::get('/stores/create', [StoreController::class, 'create'])->name('stores.create');
    Route::post('/stores', [StoreController::class, 'store'])->name('stores.store');
    Route::get('/stores/{id}', [StoreController::class, 'show'])->name('stores.show');
    Route::post('/stores/{id}', [StoreController::class, 'update'])->name('stores.update');
    Route::get('/stores/delete/{id}', [StoreController::class, 'destroy'])->name('stores.destroy');
});
Route::middleware('auth')->group(function () {

    Route::resources([

        "frames" => FramesController::class,
        "treatments" => TreatmentController::class,
        "diagnostics" => DiagnosticController::class,
        "employees" => EmployeeController::class,
        "labs" => LabController::class,
        "kinds" => KindWorkController::class,
        "lenses" => LensController::class,
        "stocks" => StockController::class,
        "eyeglasses" => EyeglassController::class,
        "sales" => SaleController::class,
        "users" => UserController::class,
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
Route::get("/test", function () {
    return view("test");
});

//end test



Route::get('/hi', function () {
    return view('hi');
})->middleware('role:admin');

require __DIR__ . '/auth.php';
