<?php

Route::group([
	'namespace' => 'Seat\Kassie\Calendar\Http\Controllers',
	'middleware' => 'web',
	'prefix' => 'calendar'
], function () {

	Route::resource('operation', 'OperationController');

	Route::post('operation/subscribe', [
		'as' => 'operation.subscribe',
		'uses' => 'OperationController@subscribe'
	]);

	Route::post('operation/cancel', [
		'as' => 'operation.cancel',
		'uses' => 'OperationController@cancel'
	]);

	Route::post('operation/activate', [
		'as' => 'operation.activate',
		'uses' => 'OperationController@activate'
	]);

	Route::post('operation/close', [
		'as' => 'operation.close',
		'uses' => 'OperationController@close'
	]);

	Route::post('operation/delete', [
		'as' => 'operation.delete',
		'uses' => 'OperationController@delete'
	]);

	Route::get('lookup/characters', 'LookupController@lookupCharacters');

});