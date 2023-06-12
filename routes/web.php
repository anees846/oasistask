<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/users', function () {
//     $users = User::all();
//     return view('users',['users' => $users]);
// });

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-loginadmin', [AuthController::class, 'adminpostLogin'])->name('adminlogin.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('post-edituser', [AuthController::class, 'postUseredit'])->name('edituser.post');
Route::get('adminlogin', [AuthController::class, 'adminlogin'])->name('adminlogin');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('edituser/{id}', [AuthController::class, 'edituser']);
Route::get('admindashboard', [AuthController::class, 'admindashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
