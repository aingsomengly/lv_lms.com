<?php

use App\Role;
use App\User;

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
// Route::get('user',function(){
//     $role = User::find(1)->role;
//         return $role;
//   });
Route::get('/', function () {
    return view('welcome');
});


Route::get('chart', function () {
    return view('chart');
});
Route::get('book_borrow', function () {
    return view('book_borrow');
});
Route::resource('/requestedbooks','RequestedbookController');


Auth::routes();

Route::resource('/books','BooksController');
Route::resource('/authors','AuthorsController');
Route::resource('/issuedbooks','IssuedbooksController');

Route::resource('/genres','GenresController');
Route::resource('/countries','IssuedbooksController');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');



Route::resource('borrows','Book\BooksController');
Route::resource('/students', 'StudentController');

Route::resource('/home', 'HomeController');

Route::resource('/roles', 'RoleController');
Route::resource('/users','UsersController');

// MEMBER AND LIBRARIAN AND ADMIN
Route::group(['middleware' => ['auth','roles'], 'roles' => ['Member','librarian','Admin']], function(){

    Route::resource('requestedbooks','RequestedbookController');
    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController')->except('create');
    Route::get('profile','ProfileController@profile')->name('profile');
    Route::post('profile','ProfileController@profileUpdate')->name('profile.update');
    Route::post('changepassword','ProfileController@changePassword')->name('profile.changepassword');

  });
