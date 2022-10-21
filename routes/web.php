<?php

use Illuminate\Support\Facades\Route;

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
    return view('prophouse');
});


Route::get('/communities', function () {

    $client = new \GraphQL\Client(
        'https://prod.backend.prop.house/graphql'
    );

    $gql = (new \GraphQL\Query('communities'))
        ->setSelectionSet(
            [
                'id',
                'name',
                'description'
            ]
        );

    $response = $client->runQuery($gql);
    $data = $response->getData();
    $communities = $data->communities;
    return $communities;
});
