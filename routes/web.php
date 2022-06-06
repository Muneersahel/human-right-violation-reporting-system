<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route for login as a home page
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::post('login', 'LogineController@login')->name('login');
Route::get('home', 'HomeController@index')->name('home');

//Ridirect each user to home page based on its roles
Route::get('admin/home',['uses'=> 'AdminController@home','as' => 'admin/home']);
Route::get('customer/home',['uses'=> 'CustomerController@home','as' => 'customer/home']);
Route::get('monitor/home',['uses'=> 'MonitorController@home','as' => 'monitor/home']);
Route::get('constructor/home',['uses'=> 'ConstructorController@home','as' => 'constructor/home']);

//The routes for the system administration
Route::get('admin/create-staff', 'AdminController@create')->name('create-staff');
Route::post('admin/create-staff', 'AdminController@store')->name('store-staff');
Route::get('admin/edit-staff/{id}', 'AdminController@edit')->name('edit-staff');
Route::put('admin/edit-staff/{id}', 'AdminController@update')->name('update-staff');
Route::get('admin/edit/{id}', 'AdminController@editAdmin')->name('edit-admin');
Route::put('admin/edit/{id}', 'AdminController@updateAdmin')->name('update-admin');
Route::get('admin/staff-management', 'AdminController@index')->name('staff-management');
Route::get('admin/show-staff/{id}', 'AdminController@show')->name('show-staff');
Route::delete('admin/delete-staff/{id}', 'AdminController@destroy')->name('destroy-staff');

//The routes for the management of customers
Route::get('admin/customer-management', 'CustomerController@index')->name('customer-management');
Route::get('customer/registration', 'CustomerController@create')->name('register');
Route::post('customer/registration', 'CustomerController@store')->name('register');
// Route::get('admin/edit-customer/{id}', 'CustomerController@editcustomer')->name('edit-customer');
// Route::put('admin/edit-customer/{id}', 'CustomerController@updatecustomer')->name('update-customer');
Route::get('customer/edit-customer/{id}', 'CustomerController@edit')->name('editcustomer');
Route::put('customer/update-customer/{id}', 'CustomerController@update')->name('updatecustomer');
Route::get('admin/show-customer/{id}', 'CustomerController@show')->name('show-customer');
Route::delete('admin/delete-customer/{id}', 'CustomerController@destroy')->name('destroy-customer');

//The routes for the management of sms-victims
Route::get('monitor/victim-registration/{id}', 'VictimController@create')->name('create-victim');
Route::post('monitor/victim-registration/{id}', 'VictimController@store')->name('store-victim');

//Routes for customer-applications and management
Route::get('monitor/show-incidents', 'IncidentController@index')->name('index-incident');
Route::get('getcenters','IncidentController@getCenters')->name('centers');
Route::get('getdistrict','IncidentController@district')->name('district');
Route::get('getcenterid','IncidentController@getId')->name('centerid');
Route::get('customer/create-incident', 'IncidentController@create')->name('create-incident');
Route::post('customer/create-incident', 'IncidentController@store')->name('store-incident');
Route::get('customer/show-incident', 'IncidentController@show')->name('show-incident');
// Route::get('admin/show-incidents/{id}','IncidentController@management')->name('manage-incident');//
Route::delete('monitor/delete-incident/{id}', 'IncidentController@destroy')->name('destroy-incident');

//The Routes for HRM incidents and Management
Route::get('monitor/incident-validation/{id}', 'MonitorController@create')->name('monitor-create');
Route::post('monitor/incident-validation/{id}', 'MonitorController@store')->name('monitor-store');
Route::get('monitor/incident-details/{id}','MonitorController@show')->name('show-incidents');
Route::get('monitor/sms-management','MonitorController@index')->name('monitor-sms');//
Route::get('monitor/edit/{id}', 'MonitorController@edit')->name('edit-monitor');
Route::put('monitor/edit/{id}', 'MonitorController@update')->name('update-monitor');
Route::get('download/photos/{id}', 'MonitorController@photos')->name('photos');
Route::get('download/videos/{id}', 'MonitorController@videos')->name('videos');
Route::get('download/voices/{id}', 'MonitorController@voices')->name('voices');

//The routes for the management of the centers
Route::get('admin/center-management', 'CenterController@index')->name('center-management');
Route::get('admin/create-center', 'CenterController@create')->name('create-center');
Route::post('admin/create-center', 'CenterController@store')->name('store-center');
Route::get('admin/edit-center/{id}', 'CenterController@edit')->name('edit-center');
Route::put('admin/edit-center/{id}', 'CenterController@update')->name('update-center');
// Route::get('admin/show-center/{id}','CenterController@show')->name('show-center');
Route::post('showcenter','CenterController@show')->name('showcenter');
Route::delete('admin/delete-center/{id}', 'CenterController@destroy')->name('destroy-center');

//The routes for the management of reported sms
Route::get('customer/create-sms', 'SmsController@create')->name('create-sms');
Route::post('customer/create-sms', 'SmsController@store')->name('store-sms');
Route::get('admin/sms-management', 'SmsController@index')->name('sms-management');
Route::get('admin/show-sms/{id}', 'SmsController@show')->name('show-sms');
Route::get('admin/assing-sms/{id}', 'SmsController@edit')->name('edit-sms');
Route::put('admin/assing-sms/{id}', 'SmsController@update')->name('update-sms');
Route::delete('admin/delete-sms/{id}', 'SmsController@destroy')->name('destroy-sms');

//The routes for the management of reported voices
Route::get('customer/create-voice', 'VoiceController@create')->name('create-voice');
Route::post('customer/create-voice', 'VoiceController@store')->name('store-voice');
Route::get('admin/voice-management', 'VoiceController@index')->name('voice-management');
Route::get('admin/show-voice/{id}', 'VoiceController@show')->name('show-voice');
Route::get('admin/assing-voice/{id}', 'VoiceController@edit')->name('edit-voice');
Route::put('admin/assing-voice/{id}', 'VoiceController@update')->name('update-voice');
Route::delete('admin/delete-voice/{id}', 'VoiceController@destroy')->name('destroy-voice');