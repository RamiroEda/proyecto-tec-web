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

use Carbon\Carbon;

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

    public function nuevaPractica(Request $request) {
        /*$this->validate($request, [
            'nombre1' => 'required',//
            'descripcion1' => 'required',//
            'programa1' => 'required',//
            'semestre1' => 'required',//
            'grupo1' => 'required',
            'tipo1' => 'required',//
            'estrategia1' => 'required',//
            'competencia1' => 'required',//
            'ua1' => 'required',//
            'noPractica1' => 'required',//
            'objetivo1' => 'required',//
            'entidad1' => 'required',//
            'institucion1' => 'required',//
            'profesor1' => 'required',//
            'fecha1' => 'required',//
            'alumnos1' => 'required',//
            'presupuesto1' => 'required',//
        ]);*/

        $id = $request->profesor1;
        $profesor = \App\profesor::where('usuario_id',$id)->get();

        $dateInput = 'd/m/Y';
        $date = $request->fecha1;
        $dateOutput = 'Y-m-d';
        $dateFormated = Carbon::createFromFormat($dateInput,$date)->format($dateOutput);

        $prof_id;
        foreach ($profesor as $p) {
            $prof_id = $p->id;
        }

        $practica = \App\practica::create([
            'noPractica' => $request->noPractica1,
            'nombre' => $request->nombre1,
            'tipo' => $request->tipo1,
            'objetivo' => $request->objetivo1,
            'descripcion' => $request->descripcion1,
            'compentencias' => $request->competencia1,
            'edc' => $request->estrategia1,
            'fechaEntrega' => $dateFormated,
            'presupuesto' => $request->presupuesto1,
            'institucion' => $request->institucion1,
            'programaAcademico_id' => $request->programa1,
            'unidadAprendizaje_id' => $request->ua1,
            'profesor_id' => $prof_id,
            'semestre_id' => $request->semestre1,
            'noAlumnos' => $request->alumnos1,
            'entidadFederativa_id' => $request->entidad1
        ]);

        $reliza = \App\realiza::create([
            'grupo_id' => $request->grupo1,
            'practica_id' => $practica->id,
        ]);

        return redirect('/inicio');
    }

    public function practicas() {
        $practica = \App\practica::all();
        $programaAcademico = \App\programaAcademico::lists('programa','id');
        $semestre = \App\semestre::lists('semestre', 'id');
        $grupo = \App\grupos::lists('grupo','id');
        $tPractica = \App\tipoPractica::lists('tipo','id');
        $unidadAprendizaje = \App\unidadAprendizaje::lists('nombre','id');
        $entidadFederativa = \App\entidadFederativa::lists('entidad','id');
        $profesor = \App\User::where('tipo','<=','2')->lists('nombre','id');

        $data = [
            'practica' => $practica,
            'programa' => $programaAcademico,
            'semestre' => $semestre,
            'grupo'    => $grupo,
            'tipo'     => $tPractica,
            'ua'       => $unidadAprendizaje,
            'entidad'  => $entidadFederativa,
            'profesor' => $profesor,
        ];

        return view('Admin.tablas', $data);
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
            'comentario2',
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
    public function nuevoSemestre(Request $request) {
        $this->validate($request, [
            'semestre1' => 'required',
            'c',
        ]);

        $semestre = \App\semestre::create([
            'semestre' => $request->semestre1,
            'comentario' => $request->c,
        ]);

        return redirect('/inicio');
    }
    public function patchSemestre(Request $request) {
        $this->validate($request, [
            'semestre2' => 'required',
            'comentario2',
        ]);

        $semestre = \App\semestre::find($request->semestreID);

        $semestre->update([
            'semestre' => $request->semestre2,
            'comentario' => $request->comentario2,
        ]);

        return redirect('/inicio');
    }

    public function deleteSemestre(Request $request) {
        $semestre = \App\semestre::find($request->elmSemestre);
        $semestre->delete();

        return redirect('/inicio');
    }

    public function tablaNivel() {
        $nivel = \App\nivel::all();

        $data = [
            'nivel' => $nivel,
        ];

        return view('Admin.catalogos.nivel', $data);
    }

    public function nuevoNivel(Request $request) {
        $this->validate($request, [
            'nivel' => 'required',
            'comentario1',
        ]);

        $nivel = \App\nivel::create([
            'nivel' => $request->nivel,
            'comentario' => $request->comentario1
        ]);

        return redirect('/inicio');
    }

    public function patchNivel(Request $request) {
        $this->validate($request, [
            'Id' => 'required',
            'nivel2' => 'required',
            'comentario2'
        ]);

        $nivel = \App\nivel::find($request->Id);
        $nivel->update([
            'nivel' => $request->nivel2,
            'comentario' => $request->comentario2,
        ]);


        return redirect('/inicio');
    }

    public function deleteNivel(Request $request) {
        $plantel = \App\nivel::find($request->nivelElmID);
        $plantel->delete();

        return redirect('/inicio');
    }

    public function tablaGrupo() {
        $grupo = \App\grupos::all();
        $nivel = \App\nivel::lists('nivel','id');
        $semestre = \App\semestre::lists('semestre','id');

        $data = [
            'grupo' => $grupo,
            'grade' => $semestre,
            'level' => $nivel,
        ];
        return view('Admin.catalogos.grupo', $data);
    }
    public function nuevoGrupo(Request $request) {
        $this->validate($request, [
            'grupo' => 'required',
            'semestre'=>'required',
            'nivel'=>'required',
            'comentario1'
        ]);

        $grupos = \App\grupos::create([
            'grupo' => $request->grupo,
            'nivel_id' => $request->nivel,
            'semestre_id' => $request->semestre,
            'comentario' => $request->comentario1
        ]);

        return redirect('/inicio');
    }

    public function patchGrupo(Request $request) {
        $this->validate($request, [
            'grupo2' => 'required',
            'semestre2' => 'required',
            'nivel2' => 'required',
            'comentario',
        ]);

        $grupo = \App\grupos::find($request->GrupoID);
        $grupo->update([
            'grupo' => $request->grupo2,
            'semestre_id' => $request->semestre2,
            'nivel_id' => $request->nivel2,
            'comentario' => $request->comentario2
        ]);

        return redirect('/inicio');
    }

    public function deleteGrupo(Request $request) {
        $grupo = \App\grupos::find($request->elmGrupo);
        $grupo->delete();

        return redirect('/inicio');
    }

    public function nuevoTipoPractica(Request $request) {
        $this->validate($request,[
            'tipoPrac1' => 'required',
            'comentario1',
        ]);

        $tPractica = \App\tipoPractica::create([
            'tipo' => $request->tipoPrac1,
            'comentario' => $request->comentario1,
        ]);

        return redirect('/inicio');
    }

    public function tablaTipoPractica() {
        $tPractica = \App\tipoPractica::all();

        $data = [
            'tPractica' => $tPractica,
        ];

        return view('Admin.catalogos.tipo_practica', $data);
    }

    public function patchTipoPractica(Request $request) {
        $this->validate($request, [
            'tipoPracID' => 'required',
            'tipoPrac2' => 'required',
            'comentario2',
        ]);

        $tPractica = \App\tipoPractica::find($request->tipoPracID);

        $tPractica->update([
            'tipo' => $request->tipoPrac2,
            'comentario' => $request->comentario2,
        ]);

        return redirect('/inicio');
    }

    public function deleteTipoPractica(Request $request) {
        $tPractica = \App\tipoPractica::find($request->elmTipoPractica);
        $tPractica->delete();

        return redirect('/inicio');
    }

    public function nuevaEntidadFederativa(Request $request) {
        $this->validate($request,[
            'entfed1' => 'required',
            'comentario1'
        ]);

        $entidad = \App\entidadFederativa::create([
            'entidad' => $request->entfed1,
            'comentrio' => $request->comentario1,
        ]);

        return redirect('/inicio');
    }

    public function tablaEntidadFederativa() {
        $entidad = \App\entidadFederativa::all();

        $data = [
            'entidad' => $entidad,
        ];

        return view('Admin.catalogos.entidad_federativa', $data);
    }

    public function patchEntidadFederativa(Request $request) {
        $this->validate($request, [
            'entidadID' => 'required',
            'entfed2' => 'required',
            'comentario2',
        ]);

        $entidad = \App\entidadFederativa::find($request->entidadID);
        $entidad->update([
            'entidad' => $request->entfed2,
            'comentrio' => $request->comentario2,
        ]);

        return redirect('/inicio');
    }

    public function deleteEntidadFederatva(Request $request) {
        $entidad = \App\entidadFederativa::find($request->elmEntidad);
        $entidad->delete();

        return redirect('/inicio');
    }

    public function nuevaUnidadAprendizaje(Request $request) {
        $this->validate($request, [
            'nombre1' => 'required',
            'grupo1' => 'required',
            'profe1' =>'required',
            'comentario',
        ]);

        $usuario = \App\User::where('nombre','like','%'.$request->profe1.'%');
        $id = $usuario->id;
        $profesor = \App\profesor::where('usuario_id', $id);

        $grupo = \App\grupos::where('grupo','like','%'.$request->grupo1.'%');

        $ua = \App\unidadAprendizaje::create([
            'nombre' => $request->nombre1,
            'comentario' => $request->comentario1,
        ]);

        $imparte = \App\imparte::create([
            'unidadAprendizaje_id' => $ua->id,
            'profesor_id' => $profesor_id,
        ]);

        $reliza = \App\realiza::create([
            'unidadAprendizaje_id' => $ua->id,
            'grupo_id' => $grupo->id,
        ]);

        return redirec('/inicio');
    }

    public function tablaUnidadAprendizaje() {
        $unidad = \App\unidadAprendizaje::all();
        $grupo = \App\grupos::all();
        $profesor = \App\profesor::all();

        $data = [
            'unidad' => $unidad,
            'grupo' => $grupo,
            'profesor' => $profesor,
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
