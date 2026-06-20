<?php

namespace Mateshwari\MateshwariTheme\Http\Controllers\Shop;

use Illuminate\View\View;
use Webkul\Shop\Http\Controllers\Controller;

class MateshwariThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('mateshwaritheme::shop.index');
    }
}
