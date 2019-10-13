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
    public function loadView(Request $request, $pageName=null)
    {
        $route = Route::currentRouteName();
        $viewName = $route;

        if (isset($pageName)) {
            $viewName = $route . '.' . $pageName;
        }
        return view($viewName);
    }
}
