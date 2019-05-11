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

    public function home() {
        return view('Admin.home');
    }

    public function tablas() {
        return view('Admin.tablas');
    }

    public function panel() {
        return view('Admin.catalogos.plantel');
    }

    public function tablaSemestre() {
        return view('Admin.catalogos.Semestre');
    }

    public function tablaNivel() {
        return view('Admin.catalogos.nivel');
    }

    public function tablaGrupo() {
        return view('Admin.catalogos.grupo');
    }

    public function tablaTipoPractica() {
        return view('Admin.catalogos.tipo_practica');
    }

    public function tablaEntidadFederativa() {
        return view('Admin.catalogos.entidad_federativa');
    }

    public function tablaUnidadAprendizaje() {
        return view('Admin.catalogos.unidad_aprendizaje');
    }

    public function tablaProfesor() {
        return view('Admin.catalogos.profesor');
    }

    public function nomina() {
        return view('Admin.Nomina');
    }

    public function informesAcademicos() {
        return view('Admin.InformesAcademicos');
    }

    public function configuracion() {
        return view('Admin.configuraciones.configuracion');
    }
}
