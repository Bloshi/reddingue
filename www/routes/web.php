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

Route::get('/', 'HomeController@index')->name('accueil');

Route::get('/actualite', 'ActuController@actualite')->name('actualite.index');

Route::get('/evenement', 'EventController@event')->name('evenement.index');

Route::get('/nous-contacter', 'ContactController@index')->name('contact.index');
Route::post('/nous-contacter', 'ContactController@contacter')->name('contact.contacter'); 

Route::get('/nos-services', 'ServiceController@service')->name('service.index');

Route::group(['prefix' => 'administration'], function() {

	// index admin
		Route::get('/', 'Admin\IndexAdminController@login')->name('admin.index');
		Route::post('/', 'Admin\IndexAdminController@logValidation')->name('admin.log');
	//

	// actu
		Route::get('/gestion/actualite/liste', 'Admin\GestionActuController@list')->name('admin.gestion.actu.list');
		Route::get('/gestion/actualite/ajout', 'Admin\GestionActuController@ajout')->name('admin.gestion.actu.ajout');
	//

	// contact
		Route::get('/gestion/contact/list', 'Admin\GestionContactController@contactList')->name('admin.gestion.contact.list');
	//

	// event
		Route::get('/gestion/evenement/base/de/donnee', 'Admin\GestionEventController@eventList')->name('admin.gestion.event.list');
		
		Route::get('/gestion/evenement/generer/un/evenement', 'Admin\GestionEventController@eventAdd')->name('admin.gestion.event.add');
		Route::post('/gestion/evenement/generer/un/evenement', 'Admin\GestionEventController@postEventAdd')->name('admin.adding.newevent');
	//

}); 