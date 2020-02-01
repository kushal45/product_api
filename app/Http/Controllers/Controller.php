<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Auth;

class Controller extends BaseController
{
    public function guard() {
        return Auth::guard('api');
    }
}
