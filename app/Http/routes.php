<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('resume', ['as' => 'resume', function () {
    $filename = 'Resume - Jeffrey DeVince.pdf';
	$path = storage_path($filename);

	return Response::make(file_get_contents($path), 200, [
	    'Content-Type' => 'application/pdf',
	    'Content-Disposition' => 'inline; filename="'.$filename.'"'
	]);
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
