<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalogo', [App\Http\Controllers\CatalogoController::class, 'index'])->name('catalogo.index');

Route::get('/marcas', [App\Http\Controllers\MarcasController::class, 'index'])->name('marcas.index');

Route::get('/maquinas', [App\Http\Controllers\MaquinasController::class, 'index'])->name('maquinas.index');

Route::get('/pasos', [App\Http\Controllers\PasosController::class, 'index'])->name('pasos.index');

Route::get('/encuesta', [App\Http\Controllers\EncuestaController::class, 'index'])->name('encuesta.index');

Route::get('/archivos', [App\Http\Controllers\ArchivosController::class, 'index'])->name('archivos.index');

Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
Route::get('/questions/{id}/answer', [QuestionController::class, 'answer'])->name('questions.answer');
Route::post('/questions/answer', [QuestionController::class, 'storeAnswer'])->name('questions.storeAnswer');

route::group(['middleware' => ['auth', 'role:admin']], function () {});
Route::resource('users', UserController::class);