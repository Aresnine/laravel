<?php
/**
LARAVEL中强大的路由
HTTP方法:
	1、路由方法
		1、Route::get($uri,$callback);
		2、Route::post($uri,$callback);
		3、Route::put($uri,$callback);
		4、Route::patch($uri,$callback);
		5、Route::delete($uri,$callback);
		6、Route::options($uri,$callback);
	2、路由参数
	Route::get('user/{$id}',function($id){
		return 'user'.$id;
	})


*/

/**
实例说明：
*/
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
			路由参数的绑定：
				形参就可以直接进行值得传递与接收
		*/
	}
/*
	路由绑定：
*/	
Route::get('/posts/create','\App\Http\Controllers\PostController@index');
Route::get('/posts/create','\App\Http\Controllers\PostController@index');
Route::get('/posts/create','\App\Http\Controllers\PostController@index');

Route::group(['prefix'=>'posts'],function(){
	Route::get('/{id}','\App\Http\Controllers\PostController@index');
	Route::get('/delte','\App\Http\Controllers\PostController@index');
	Route::get('/create','\App\Http\Controllers\PostController@index');

})
