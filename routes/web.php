<?php

use App\Http\Controllers\StudentController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
//     $user = User::find(1);
//     $user->name = "Mahmoud";
//     $user->save();
//     dd($user);
// });

Route::get('/', function () {
    return view('welcome');
});
Route::controller(StudentController::class)->group(function(){
Route::resource('students', StudentController::class);
Route::get('students-export', 'export')->name('students.export');
Route::post('students-import', 'import')->name('students.import');
Route::get('students-import', 'import')->name('students.import');

});
