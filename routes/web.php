<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/{p?}', function ($p='home') {
    return view("pages/".$p);
});

/*Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/post', function () {
    return view('pages.post');
});


Route::get('/photos', function () {
    return view('pages.photos');
});
*/

=======
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'viewForm'])->name('home');
Route::post('/add-student',[StudentController::class,'addStudent']);
>>>>>>> 7364533a8bc957eac886b0abd87884bdc7ca4ae0
