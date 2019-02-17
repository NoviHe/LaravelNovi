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
	route::prefix('user')->group(function(){

		route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');

		route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
		route::post('/add','UserController@save')->middleware('akses.admin');
		
		route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		route::post('/setting','UserSettingController@update');
		});
	});
});


Auth::routes();

route::any('register', function(){return abort(404); });
