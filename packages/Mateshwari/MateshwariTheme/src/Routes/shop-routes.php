<?php

use Illuminate\Support\Facades\Route;
use Mateshwari\MateshwariTheme\Http\Controllers\Shop\MateshwariThemeController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'mateshwaritheme'], function () {
    Route::get('', [MateshwariThemeController::class, 'index'])->name('shop.mateshwaritheme.index');
});