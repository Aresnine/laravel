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

/*
Route::get('/','[控制器]@[行为]');
例子：
	Route::get('/posts','\App\Http\Controllers\PostController@index');
	注意：控制器一定要带上命名空间
*/
Route::get('/posts','\App\Http\Controllers\PostController@index');
Route::post('/posts','\App\Http\Controllers\PostController@index');
/*
	any支持所有方法
*/
Route::any('/posts','\App\Http\Controllers\PostController@index');
/*
	match支持所匹配的方法写法如下
*/
Route::match(['get','post'],'/posts','\App\Http\Controllers\PostController@index');
/*
	<form action="/posts" method='POST'>

	</form>
*/
Route::put('/posts','\App\Http\Controllers\PostController@index');
/*
	<form action="/posts" method='POST'>
		<input type="hidden" name="_method" value="PUT" />
		{{method_field("PUT")}}
		上面两句等价
	</form>
*/
Route::get('/posts/{$id}','\App\Http\Controllers\PostController@index');

	function index($id)
	{
		/*
			形参就可以直接进行值得传递与接收
		*/
	}