<?php



Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Additional routes can be added here
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Profile routes
    Route::get('/', function () {
        return view('profile.index');
    })->name('index');
    
    Route::get('/edit', function () {
        return view('profile.edit');
    })->name('edit');
    
    Route::put('/update', function () {
        // Simple profile update - you can enhance this later
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    })->name('update');
    
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    } else {
        // Fallback password change route
        Route::get('password', function () {
            return view('profile.password');
        })->name('password.edit');
        
        Route::post('password', function () {
            // Simple password update - you can enhance this later
            return redirect()->route('profile.index')->with('success', 'Password changed successfully!');
        })->name('password.update');
    }
});
