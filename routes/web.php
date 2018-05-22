<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'UserController@index');
$router->post('/store', function (Request $request){
        $data = new User();
        $data->name = $request->input('name');
        $data->alamat = $request->input('alamat');
        $data->no_tlp = $request->input('no_tlp');
        $data->save();
    
        return response('Berhasil Tambah Data');
});
