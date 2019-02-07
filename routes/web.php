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
		route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		route::post('/setting','UserSettingController@update');
		});
	});
});


Auth::routes();

