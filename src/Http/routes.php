<?php

Route::get('demo/test', function () {
	return 'Test';
});

Route::get('demo/hello', function () {
	return Demo::hello();
});

Route::get('demo/view', function () {
	return view('websanova-demo::index');
});

Route::get('demo/config', function () {
	return config('websanova-demo-main.hello') . 
		   config('websanova-demo-main.world');
});

Route::get('demo/model', function () {
	dd(\Websanova\Demo1\Models\Item::get());
});

Route::get('demo', '\Websanova\Demo1\Http\DemoController@index');