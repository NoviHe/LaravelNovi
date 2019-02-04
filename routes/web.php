 <?php

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

Route::get('/', function () {
    return view('welcome');
});

route::group(['middleware'=>['auth']], function(){
	route::prefix('admin')->group(function(){
		route::get('/', function(){
			return view('admin.pages.dashboard'); 
		})->name('admin.home');
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
