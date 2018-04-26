<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



//Routes
Route::get('/', 'IndexController@getIndex',true)->name('new_studio');
Route::get('/all-studios', 'IndexController@getAllStudios',true)->name('all_studios');
Route::get('/all-items', 'IndexController@getAllItems',true)->name('all_studio_items');
Route::post('/', 'IndexController@uploadStudio',true)->name('new_studio_upload');
Route::post('/create-group', 'IndexController@createFolder')->name('create_studio_group');
Route::post('/createfile/{dirname}', 'IndexController@createFile')->name('create_studio_create_file');
Route::post('/edit-group-name', 'IndexController@getEeditGroupName')->name('new_studio_edit_group_name');
Route::post('/edit-sub-group-name', 'IndexController@getEeditSubGroupName')->name('new_studio_edit_sub_group_name');
Route::post('/edit-studio-form', 'IndexController@getEeditStudioForm')->name('new_studio_edit_studio_form');
Route::post('/edit-studio', 'IndexController@getEeditStudio')->name('new_studio_edit_studio');
Route::post('/delete-studio', 'IndexController@getDeleteStudio')->name('new_studios_delete');