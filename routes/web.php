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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {


        /**
         * Routes Profiles x Permission
         */
        Route::get('profiles/{id}/permission', 'ACL\PermissionProfileController@permission')->name('profiles.permission');


        /**
         * Routes Profiles
         */
        Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');
        Route::resource('profiles', 'ACL\ProfileController');

        /**
         * Routes Permission
         */
        Route::any('permissions/search', 'ACL\PermissionController@search')->name('permissions.search');
        Route::resource('permissions', 'ACL\PermissionController');

        /**
         * Routes Details Plans
         */
        Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plans.index');
        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plans.create');
        Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plans.store');
        Route::get('plans/{url}/details/{idDetail}', 'DetailPlanController@show')->name('details.plans.show');
        Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('details.plans.edit');
        Route::put('plans/{url}/details/{idDetail}', 'DetailPlanController@update')->name('details.plans.update');
        Route::delete('plans/{url}/details/{idDetail}', 'DetailPlanController@destroy')->name('details.plans.destroy');



        /**
         * Routes Plans
         */
        Route::get('plans', 'PlanController@index')->name('plans.index');
        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::post('plans', 'PlanController@store')->name('plans.store');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::put('plans/{id}', 'PlanController@update')->name('plans.update');
        Route::get('plans/{id}/edit', 'PlanController@edit')->name('plans.edit');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::any('plans/search', 'PlanController@search')->name('plans.search');

        /**
         * Home Dashboard
         */
        Route::get('/', 'PlanController@index')->name('admin.index');
});
