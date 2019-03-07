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
/*ad*/

Route::get('/', function () {
    return view('welcome');
});

route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
	
	route::get('/', function(){
			return view('admin.pages.dashboard'); 
		})->name('admin.home');

	/* user */
	route::prefix('user')->group(function(){

		route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
		route::delete('/', 'UserController@delete')->middleware('akses.admin');

		route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
		route::post('/add','UserController@save')->middleware('akses.admin');

		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')
					->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')
					->middleware('akses.admin');
			
		route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		route::post('/setting','UserSettingController@update');
	});
	/*kategory*/
	route::group(['prefix'=>'kategori','middleware'=>'akses.admin'], function(){
		route::get('/','KategoriController@daftar')->name('admin.kategori');
		route::get('/add','KategoriController@add')->name('admin.kategori.add');
		route::post('/add','KategoriController@save');

		route::get('/edit/{id}','KategoriController@edit')->name('admin.kategori.edit');
		route::post('/edit/{id}','KategoriController@update');
	});
});


Auth::routes();

route::any('register', function(){return abort(404); });
