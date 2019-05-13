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
        $planteles = \App\programaAcademico::all();

        $data = [
            'planteles' => $planteles
        ];

        return view('Admin.catalogos.plantel', $data);
    }

    public function nuevoPlantel(Request $request) {
        $this->validate($request, [
            'NombrePlantel1' => 'required',
            'ClaveSEP1' => 'required',
            'comentario1',
        ]);

        $plantel = \App\programaAcademico::create([
            'programa' => $request->NombrePlantel1,
            'clave' => $request->ClaveSEP1,
            'comentario' => $request->comentario1,
        ]);

        return redirect('/inicio');
    }

    public function patchPlantel(Request $request) {
        $this->validate($request, [
            'plantelId' => 'required',
            'NombrePlantel2' => 'required',
            'ClaveSEP2' =>'required',
            'comentario'
        ]);

        $plantel = \App\programaAcademico::find($request->plantelId);
        $plantel->update([
            'programa' => $request->NombrePlantel2,
            'clave' => $request->ClaveSEP2,
            'comentario' => $request->comentario2,
        ]);

        return redirect('/inicio');
    }

    public function deletePlantel(Request $request) {
        $plantel = \App\programaAcademico::find($request->plantelElmID);
        $plantel->delete();

        return redirect('/inicio');
    }

    public function tablaSemestre() {
        $semestre = \App\semestre::all();

        $data = [
            'semestre' => $semestre,
        ];
        return view('Admin.catalogos.Semestre', $data);
    }

    public function tablaNivel() {
        $nivel = \App\nivel::all();

        $data = [
            'nivel' => $nivel,
        ];

        return view('Admin.catalogos.nivel', $data);
    }

    public function tablaGrupo() {
        $grupo = \App\grupos::all();

        $data = [
            'grupo' => $grupo,
        ];
        return view('Admin.catalogos.grupo', $data);
    }

    public function tablaTipoPractica() {
        $tPractica = \App\tipoPractica::all();

        $data = [
            'tPractica' => $tPractica,
        ];

        return view('Admin.catalogos.tipo_practica', $data);
    }

    public function tablaEntidadFederativa() {
        $entidad = \App\entidadFederativa::all();

        $data = [
            'entidad' => $entidad,
        ];

        return view('Admin.catalogos.entidad_federativa', $data);
    }

    public function tablaUnidadAprendizaje() {
        $unidad = \App\unidadAprendizaje::all();

        $data = [
            'unidad' => $unidad,
        ];
        return view('Admin.catalogos.unidad_aprendizaje', $data);
    }

    public function tablaProfesor() {
        $profesor = \App\profesor::all();

        $data = [
            'profesor' => $profesor
        ];

        return view('Admin.catalogos.profesor', $data);
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
