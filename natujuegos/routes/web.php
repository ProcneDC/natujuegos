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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// rutas de auth (login, register, etc.)
//Route::auth();
/*
Route::get ('/profile', 'UserController@profile')->name('profile')->middleware('auth');

Route::post('/profile', 'UserController@update')->middleware('auth');
Route::get ('/changetheme', 'UserController@changeTheme');
Route::get('/admin', 'AdminController@getPhrases')->name('admin')->middleware('auth')->middleware('isAdmin');
Route::post('/admin', 'AdminController@setPhrases');

// rutas de partidas
Route::get ('/game/tutorial', 'GameController@tutorial'); // tutorial
Route::get ('/game/public', 'GameController@publicGame')->name('publicgame')->middleware('auth'); // ver partidas publicas o crear nueva
Route::get ('/game/joinpublic/{mode}', 'GameController@joinPublicGame')->middleware('auth'); // unirse a partida publica
Route::get ('/game/create/{data}', 'GameController@createGameForm'); // formulario para crear partida nueva
Route::post('/game/create', 'GameController@createGame'); // ruta post para crear partida
Route::get ('/game/view/{id}', 'GameController@viewGame')->name('viewgame')->middleware('auth'); // ver partida
Route::get ('/game/accept/{game_id}/{user_id}', 'GameController@acceptGame')->middleware('auth'); // aceptar invitacion
Route::get ('/game/reject/{game_id}/{user_id}', 'GameController@rejectGame')->middleware('auth'); // rechazar invitacion
Route::get ('/game/play/{id}', 'GameController@playGame')->name('gameplay'); // jugar partida
Route::post('/game/finish', 'GameController@finishGame'); // ruta post que procesa la partida finalizada
Route::get ('/game/cancel/{game_id}/{user_id}', 'GameController@cancelGame'); // cancelar partida

// rutas de usuarios/amigos
Route::get('/user/friends', 'UserController@friendsPage')->middleware('auth'); // pantalla de amigos y busqueda de usuarios
Route::get('/user/friends/request/{id}/{back}', 'UserController@friendshipRequest')->middleware('auth'); // solicitar amistad
Route::get('/user/friends/accept/{id}/{back}', 'UserController@friendshipAccept')->middleware('auth'); // aceptar amistad
Route::get('/user/friends/cancel/{id}/{back}', 'UserController@friendshipCancel')->middleware('auth'); // cancelar amistad
Route::get('/user/view/{id}/{back}', 'UserController@viewUser')->name('viewuser')->middleware('auth'); // ver datos de usuario
Route::get('/user/search/{query}', 'UserController@searchUsers')->middleware('auth'); // buscar usuarios (usado por ajax)


*/