<?php



Route::get('/test', function () {
    $exitCode = \Artisan::call('route:list');
});

// Home
Route::get('/', 'HomeController')->name('home');


Route::group(['middleware' => 'auth'], function () {

    // Dashboard
	Route::get('dashboard', 'DashboardController')
			->name('dashboard')
			->middleware('auth');

	//Customers
	Route::resource('customers', 'CustomersController');
	Route::get('customers', array(
			'uses' => 'CustomersController@index',
			'as' => 'customers'
		));
	Route::post('customers/store', 'CustomersController@store');
	Route::get('customers/{id}', 'CustomersController@show');
	Route::get('customers/{id}/delete', array(
			'uses' => 'CustomersController@destroy', 
			'as' => 'customer.destroy'
		));

	//Employees
	Route::get('employees', array(
			'uses' => 'EmployeesController@index',
			'as' => 'employees'
		));
	Route::get('employees/create', array(
			'uses' => 'EmployeesController@create',
			'as' => 'employees.create'
		));
	Route::post('employees/store', array(
			'uses' => 'EmployeesController@store',
			'as' => 'employees.store'
		));

	/*Route::post('employees/store', 'EmployeesController@store');*/
	Route::get('employees/{id}', 'EmployeesController@show');

	//Loans
	Route::get('loan/application/{id}', 'LoansController@create');
	Route::post('loan/store', 'LoansController@store');
	Route::get('loans', 'LoansController@index')->name('loans');
	Route::get('loans/return', 'LoansController@returnsView')->name('returns');
	Route::post('loans_return/store', 'LoansController@store_loan_return');

	Route::get('loan/{id}/details', array(
			'uses' => 'LoansController@show', 
			'as' => 'loan.details'
		));

	Route::delete('loans/{id}/delete', array(
			'uses' => 'LoansController@destroy', 
			'as' => 'loan.destroy'
		));

	Route::get('loan/{id}/confirm', array(
			'uses' => 'LoansController@confirm',
			'as' => 'loan.confirm'
		));

	/////////////////////////////////////////////////////////////////////
	// Admin
	Route::get('admin', 'AdminController')->name('admin');

	// Roles
	Route::get('roles', 'RoleController@edit');
	Route::post('roles', 'RoleController@update');

	// Users
	Route::get('user/sort/{role?}', 'UserController@index');

	Route::resource('user', 'UserController', ['except' => 'index']);
	Route::put('uservalid/{id}', 'UserAjaxController@valid');
	Route::put('userseen/{user}', 'UserAjaxController@updateSeen');

	//Logout
	Route::get('logout', 'Auth\LoginController@logout');

});


// Authentication 
Auth::routes();
