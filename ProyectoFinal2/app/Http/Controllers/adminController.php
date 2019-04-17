<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iliiminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

use App\usuario;
use App\admin; //usuario tipo 1
use App\profesor; //usuario tipo 2
use App\alumno; //usuario tipo 3

class adminController extends Controller
{
    //
    public function __construct() {
        //$this->middleware('auth');
        //$this->middleware('admin');
    }

    public function index() {
        $index = 1;

        //$user = Auth::user();

        $data = [
            $index,
            //$user
        ];

        return view('Admin.menu', $data);
    }
}
