<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Routing\Controller as BaseController;

class CustomRouter extends BaseController
{
    /**
     * custom route to load view according to router
     *
     * @param Request $request
     * @return view
     */
    public function loadView(Request $request){
        $route = Route::getFacadeRoot()->current()->uri();
        $viewName = str_replace("/",".",$route);
        return view($viewName);
    }
}
