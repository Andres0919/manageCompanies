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
Route::middleware(['locate'])->group(function() {


    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/lang/{locale}', function ($locale){
        Session::put('locale', $locale);

        return view('welcome');
    });

    Route::middleware(['auth'])->group(function(){
        Route::get('/home', 'HomeController@index')->name('home');
    
        Route::resource('companies', 'CompanyController');
        Route::resource('employees', 'EmployeeController');
    
        Route::get('/console', function () {
        
            Artisan::call('config:cache');
            
            
            Artisan::call('migrate:refresh', [
                '--force' => true,
            ]);
            Artisan::call('db:seed');
    
            Artisan::call('config:cache');
            
    
            return redirect('/');
        });
        
        Route::get('/cache', function () {
    
            Artisan::call('config:cache');
            Artisan::call('cache:clear');
    
            return redirect('/');
        });
        
    });    
});
