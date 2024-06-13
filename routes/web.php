<?php
// Controladores

use App\Http\Controllers\AssistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Models\Assist;
// Illuminate
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

    // Resources
    Route::resource('students', StudentController::class);

    // Student
    Route::get('/assists/{id}', [StudentController::class,'assists'])->name('student.assists');

    // Assist
    Route::get('/assist', [StudentController::class, 'search'])->name('assist.search');
    Route::post('/assist/show', [AssistController::class, 'show'])->name('assist.show');
    Route::post('assist/create', [AssistController::class, 'store'])->name('assist.store');

});

require __DIR__.'/auth.php';
