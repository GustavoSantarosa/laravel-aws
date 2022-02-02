<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return "Enjoy the Silence...";
});

Route::prefix('v1')->group(function () {
    Route::prefix('cognito')->group(function () {
        Route::post('login',                       'CognitoController@login');
        Route::post('registeruser',                'CognitoController@registerUser');
        Route::post('admincreateuser',             'CognitoController@adminCreateUser');
        Route::post('confirmuserregistration',     'CognitoController@confirmUserRegistration');
        Route::post('sendcoderesetpassword',       'CognitoController@sendCodeResetPassword');
        Route::post('changepasswordaccessfirst',   'CognitoController@changePasswordAccessFirst');
        Route::post('resetpassword',               'CognitoController@resetPassword');
        Route::post('refreshauthentication',       'CognitoController@refreshAuthentication');
        Route::delete('{email}',                   'CognitoController@deleteUser');
        Route::post('getuseremail',                'CognitoController@getUserEmail');
        Route::post('tokendecode',                 'CognitoController@jwtDecode');
        Route::get('finduser',                     'CognitoController@findUser');
        Route::post('resendconfirmationcode',      'CognitoController@resendConfirmationCode');
    });

    Route::prefix('s3')->group(function () {
        Route::get('listbuckets',                 'S3Controller@listBuckets');
        Route::get('listobjects',                 'S3Controller@listObjects');
        Route::post('uploadobject',               'S3Controller@uploadObject');
        Route::post('downloadobject',             'S3Controller@downloadObject');
    });

    Route::prefix('ses')->group(function () {
        Route::post('send',                       'SesController@send');
        Route::get('info',                        'SesController@info');
    });

    Route::prefix('polly')->group(function () {
        Route::post('texttospeech',               'PollyController@texttospeech');
    });
});
