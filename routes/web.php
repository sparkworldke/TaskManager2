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
/*
Route::get('/',[
    'uses'=>'DepartmentController@index',
    'as' =>'blade-scafolding.index'
]);*/
//login
Route::get('/', function () {
    return view('blade-scafolding.auth.login');
});

//main dashboard after Login
Route::get('/dashboard', 'HomeController@index')->name('home');

//Departments
Route::get('/departments',[
    'uses'=>'DepartmentController@index',
    'as' =>'blade-scafolding.departments.index'
]);

Route::get('/departments/create-department',[
    'uses' =>'DepartmentController@create',
    'as' => 'blade-scafolding.departments.create'

]);
Route::post('/departments/save-department',[
    'uses' =>'DepartmentController@store',
    'as' =>'blade-scafolding.departments.save'
]);

Route::get('/departments/edit-department/{id}',[
    'uses' =>'DepartmentController@edit',
    'as' =>'blade-scafolding.departments.edit'
]);
Route::post('/departments/update-department/{id}',[
    'uses' =>'DepartmentController@update',
    'as' =>'blade-scafolding.departments.update'
]);

Route::get('/departments/view-department/{id}',[
    'uses' =>'DepartmentController@show',
    'as' =>'blade-scafolding.departments.view'
]);


Route::get('/departments/delete-department/{id}',[
    'uses' =>'DepartmentController@destroy',
    'as' =>'blade-scafolding.departments.delete'
]);

//Employees
Route::get('/employees',[
    'uses'=>'EmployeesController@index',
    'as' =>'blade-scafolding.employees.index'
]);

Route::get('/employees/create',[
    'uses' =>'EmployeesController@create',
    'as' => 'blade-scafolding.employees.create'

]);
Route::post('/employees/save',[
    'uses' =>'EmployeesController@store',
    'as' =>'blade-scafolding.employees.save'
]);

Route::get('/employees/edit/{id}',[
    'uses' =>'EmployeesController@edit',
    'as' =>'blade-scafolding.employees.edit'
]);
Route::post('/employees/update/{id}',[
    'uses' =>'EmployeesController@update',
    'as' =>'blade-scafolding.employees.update'
]);

Route::get('/employees/view/{id}',[
    'uses' =>'EmployeesController@show',
    'as' =>'blade-scafolding.employees.view'
]);


Route::get('/employees/delete/{id}',[
    'uses' =>'EmployeesController@destroy',
    'as' =>'blade-scafolding.employees.delete'
]);

//Projects
Route::get('/projects',[
    'uses'=>'ProjectController@index',
    'as' =>'blade-scafolding.projects.index'
]);

Route::get('/projects/create',[
    'uses' =>'ProjectController@create',
    'as' => 'blade-scafolding.projects.create'

]);
Route::post('/projects/save',[
    'uses' =>'ProjectController@store',
    'as' =>'blade-scafolding.projects.save'
]);

Route::get('/projects/edit/{id}',[
    'uses' =>'ProjectController@edit',
    'as' =>'blade-scafolding.projects.edit'
]);
Route::post('/projects/update/{id}',[
    'uses' =>'ProjectController@update',
    'as' =>'blade-scafolding.projects.update'
]);

Route::get('/projects/view/{id}',[
    'uses' =>'ProjectController@show',
    'as' =>'blade-scafolding.projects.view'
]);


Route::get('/projects/delete/{id}',[
    'uses' =>'ProjectController@destroy',
    'as' =>'blade-scafolding.projects.delete'
]);

//Tasks
Route::get('/tasks',[
    'uses'=>'ProjectController@index',
    'as' =>'blade-scafolding.projects.index'
]);

Route::get('/tasks/create',[
    'uses' =>'ProjectController@create',
    'as' => 'blade-scafolding.projects.create'

]);
Route::post('/tasks/save',[
    'uses' =>'ProjectController@store',
    'as' =>'blade-scafolding.projects.save'
]);

Route::get('/tasks/edit/{id}',[
    'uses' =>'ProjectController@edit',
    'as' =>'blade-scafolding.projects.edit'
]);
Route::post('/tasks/update/{id}',[
    'uses' =>'ProjectController@update',
    'as' =>'blade-scafolding.projects.update'
]);

Route::get('/tasks/view/{id}',[
    'uses' =>'ProjectController@show',
    'as' =>'blade-scafolding.projects.view'
]);


Route::get('/tasks/delete/{id}',[
    'uses' =>'ProjectController@destroy',
    'as' =>'blade-scafolding.projects.delete'
]);

//Reports


//Users

//Must Login to view Content



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/home', function () {
    return view('blade-scafolding.home');
});
*/
