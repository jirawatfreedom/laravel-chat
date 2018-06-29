<?php

use App\Events\MessagePosted;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/chat', function () {
//     return view('chat');
// })->middleware('auth');
//
// Route::get('/messages', function () {
//     return App\Message::with('user')->get();
// })->middleware('auth');
//
// Route::post('/messages', function () {
//     // Store the new message
//     $user = Auth::user();
//     // dd($user);
//
//     $message = $user->messages()->create([
//         'message' => request()->get('message')
//     ]);
//
//     // Announce that a new message has been posted
//     broadcast(new MessagePosted($message, $user))->toOthers();
//
//     return ['status' => 'OK'];
// })->middleware('auth');
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index');
// //TEST Mode
// Route::get('/mail', function () {
//     // send an email to "batman@batcave.io"
//     Mail::to('batman@batcave.io')->send(new App\Mail\KryptoniteFound);
//
//     return view('welcome');
// });
//
// Route::get('/uuid', function () {
//     return App\User::create([
//         'name' => 'Jane',
//         'email' => 'john@jane.com',
//         'password' => bcrypt('password'),
//     ]);
// });
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
Auth::routes();

Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');
