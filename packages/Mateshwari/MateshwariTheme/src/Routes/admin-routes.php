<?php

use Illuminate\Support\Facades\Route;
use Mateshwari\MateshwariTheme\Http\Controllers\Admin\MateshwariThemeController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/mateshwaritheme'], function () {
    Route::controller(MateshwariThemeController::class)->group(function () {
        Route::get('', 'index')->name('admin.mateshwaritheme.index');
    });
});