<?php

namespace App\Http\Controllers\Youth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sentinel;

class YouthController extends Controller
{
    //
    public function getHome() {
        echo 'Youth page';
        return null;
    }
    public function logout() {
        Sentinel::logout();
        return redirect()->intended('/');
    }
}
