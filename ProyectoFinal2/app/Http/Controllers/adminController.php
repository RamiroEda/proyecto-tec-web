<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iliiminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;


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
        $practicas = \App\practica::all();
        $total = sizeof($practicas);
        $terminados = sizeof(\App\practica::where('fechaEntrega', '>=', date("Y-m-d")));
        $pendientes = $total-$terminados;
        $porcRealizado = round(100 * $terminados / $total, 2);

        $data = [
            'practicas' => $practicas,
            'total' => $total,
            'porcRealizado' => $porcRealizado,
            'terminados' => $terminados,
            'pendientes' => $pendientes
        ];

        return view('Admin.home', $data);
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

    public function patchPractica(Request $request) {
        $this->validate($request, [
            'practicaID' => 'required', //
            'nombre2' => 'required', //
            'descripcion2' => 'required', //
            'programa2' => 'required', //
            'semestre2' => 'required', //
            'grupo2' => 'required', //
            'tipo2' => 'required', //
            'estrategia2' => 'required', //
            'compentencia2' => 'required', //
            'ua2' => 'required', //
            'noPractica2' => 'required', //
            'objetivo2' => 'required', //
            'entidad2' => 'required', //
            'institucion2' => 'required', //
            'profesor2' => 'required', //
            'fecha2' => 'required', //
            'alumnos2' => 'required', //
            'presupuesto2' => 'required' //
        ]);

        $profesor = \App\profesor::where('usuario_id', $request->profesor2)->get();
        $practica = \App\practica::find($request->practicaID);
        $realiza = \App\realiza::where('practica_id',$request->practicaID)->get();

        $dateInput = 'd/m/Y';
        $date = $request->fecha2;
        $dateOutput = 'Y-m-d';
        $dateFormated = Carbon::createFromFormat($dateInput,$date)->format($dateOutput);

        $profesor_id;
        foreach ($profesor as $p) {
            $profesor_id = $p->id;
        }

        $practica->update([
            'noPractica' => $request->noPractica2,
            'nombre' => $request->nombre2,
            'tipo' => $request->tipo2,
            'objetivo' => $request->objetivo2,
            'descripcion' => $request->descripcion2,
            'compentencias' => $request->competencia2,
            'edc' => $request->estrategia2,
            'fechaEntrega' => $dateFormated,
            'presupuesto' => $request->presupuesto2,
            'institucion' => $request->institucion2,
            'programaAcademico_id' => $request->programa2,
            'unidadAprendizaje_id' => $request->ua2,
            'profesor_id' => $profesor_id,
            'semestre_id' => $request->semestre2,
            'noAlumnos' => $request->alumnos2,
            'entidadFederativa_id' => $request->entidad2
        ]);

        foreach($realiza as $r) {
            $r->update([
                'grupo_id' => $request->grupo2
            ]);
        }

        return redirect('/inicio');
    }

    public function deletePractica(Request $request) {
        $this->validate($request, [
            'practicaElmID' => 'required',
        ]);

        $practica = \App\practica::find($request->practicaElmID);
        $realiza = \App\realiza::where('practica_id',$practica->id)->get();

        foreach($realiza as $r) {
            $r->delete();
        }

        $practica->delete();

        return redirect('/inicio');
    }

    public function plantel() {
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
            'grupo1' => 'required',
            'semestre'=>'required',
            'nivel'=>'required',
            'comentario1'
        ]);

        $grupos = \App\grupos::create([
            'grupo' => $request->grupo1,
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
            'comentario1',
        ]);

        $profedes= \App\profesor::where('usuario_id', $request->profe1)->get();
        $profeID;

        foreach ($profedes as  $value) {
          $profeID = $value->id;
        }

        $ua = \App\unidadAprendizaje::create([
            'nombre' => $request->nombre1,
            'comentario' => $request->comentario1,
        ]);


        $imparte = \App\imparte::create([
            'unidadAprendizaje_id' => $ua->id,
            'profesor_id' => $profeID,
        ]);

        return redirect('/inicio');
    }

    public function patchUnidadAprendizaje(Request $request) {
      $this->validate($request, [
          'UnidadID' => 'required',
          'ImparteID' => 'required',
          'nombre2' => 'required',
          'grupo2' => 'required',
          'profe2' =>'required',
          'comentario2',
      ]);

      $profedes= \App\profesor::where('usuario_id', $request->profe2)->get();
      $profeID;
      foreach ($profedes as  $value) {
        $profeID = $value->id;
      }

      $impartio = \App\imparte::find($request->ImparteID);
      $impartio->delete();

      $imparte = \App\imparte::create([
          'unidadAprendizaje_id' => $request->UnidadID,
          'profesor_id' => $profeID,
      ]);

        $unidadap = \App\unidadAprendizaje::find($request->UnidadID);
        $unidadap->update([
            'nombre' => $request->nombre2,
            'comentrio' => $request->comentario2,
        ]);

        return redirect('/inicio');
    }

    public function deleteUnidadAprendizaje(Request $request) {
        $impartio = \App\imparte::find($request->ImparteIDel);
        $impartio->delete();
        $unidadA = \App\unidadAprendizaje::find($request->UnidadIDel);
        $unidadA->delete();

        return redirect('/inicio');
    }

    public function tablaUnidadAprendizaje() {

        $unidad = \App\unidadAprendizaje::all();
        $grupo = \App\grupos::lists('grupo','id');
        $profesor = \App\User::where('tipo','<=','2')->lists('nombre','id');

        $data = [
            'unidad' => $unidad,
            'grupo' => $grupo,
            'prof' => $profesor,
        ];
        return view('Admin.catalogos.unidad_aprendizaje', $data);
    }


    public function newProfesor(Request $request) {
      $this->validate($request, [
          'nombre1' => 'required',
          'clave1' => 'required',
          'comentario1',
      ]);

      $usuario = \App\User::find($request->clave1);
      $usuario->update([
          'nombre' => $request->nombre1,
          'comentario' => $request->comentario1,
          'tipo' => 2,
      ]);

      $profe = \App\profesor::create([
          'usuario_id' => $request->clave1,
      ]);

      return redirect('/inicio');

    }

    public function patchProfesor(Request $request) {
      $this->validate($request, [
          'wop' => 'required',
          'nombre2' => 'required',
          'clave2' => 'required',
          'comentario2',
      ]);

      $usuario = \App\User::find($request->wop);
      $usuario->update([
          'nombre' => $request->nombre2,
          'usuario' => $request->clave2,
          'comentario' => $request->comentario2,
      ]);

      return redirect('/inicio');

    }

    public function delProfesor(Request $request) {

        $profe = \App\profesor::find($request->porfeDel);
        $profe->delete();

        $usuario = \App\User::find($request->UserDel);
        $usuario->update([
            'tipo' => 3,
        ]);

        return redirect('/inicio');
    }

    public function tablaProfesor() {
        $profesor = \App\profesor::all();
        $user = \App\User::where('tipo','>','2')->lists('usuario','id');
        $data = [
            'profesor' => $profesor,
            'usuario' => $user,
        ];

        return view('Admin.catalogos.profesor', $data);
    }

    private function mapAsistencias($asistencias){
        $res = array();
        foreach ($asistencias as $key => $val) {
            if(isset($res[$val->practica_id])){
                array_push($res[$val->practica_id], $val->alumno->usuario->toString());
            }else{
                $res[$val->practica_id] = [$val->alumno->usuario->toString()];
            }
        }

        return $res;
    }

    private function mapAlumnos($alumnos){
        $res = array();

        foreach ($alumnos as $key => $value) {
            $res[$value->id] = $value->usuario->nombre;
        }

        return $res;
    }

    public function nomina() {
        $practicas = \App\practica::all();
        $alumnos = $this->mapAlumnos(\App\alumno::all());
        $asistencias  = $this->mapAsistencias(\App\asiste::all());

        $data = [
            'practicas' => $practicas,
            'alumnos' => $alumnos,
            'asistencias' => $asistencias
        ];

        return view('Admin.Nomina', $data);
    }

    public function addAlumnoNomina(Request $request){
        $this->validate($request, [
            'id_alumno' => 'required',
            'id_practica' => 'required'
        ]);

        $profe = \App\asiste::create([
            'alumno_id' => $request->id_alumno,
            'asiste' => 1,
            'practica_id' => $request->id_practica,
        ]);

        return redirect('/inicio');
    }


    public function deleteAlumnoNomina(Request $request){
        var_dump($request->del_usuario);
        $alumno = \App\alumno::where('usuario_id', '=', $request->del_usuario)->first();
        $asistencia = \App\asiste::where('alumno_id', '=', $alumno->id);
        $asistencia->delete();

        return redirect('/inicio');
    }

    public function informesAcademicos() {
        return view('Admin.InformesAcademicos');
    }

    public function configuracion() {
        $director = \App\directivos::find(1);
        $SAc = \App\directivos::find(2);
        $SAd = \App\directivos::find(3);
        $SSEIS = \App\directivos::find(4);
        $EPVE = \App\directivos::find(5);
        $JDGA = \App\directivos::find(6);
        $DES = \App\directivos::find(7);
        $JDGCE = \App\directivos::find(8);

        $data = [
            'director' => $director,
            'SAc' => $SAc,
            'SAd' => $SAd,
            'SSEIS' => $SSEIS,
            'EPVE' => $EPVE,
            'JDGA' => $JDGA,
            'DES' => $DES,
            'JDGCE' => $JDGCE,
        ];

        return view('Admin.configuraciones.configuracion', $data);
    }

    public function configuracionUPIIZ(Request $request) {

        $director = \App\directivos::updateOrCreate(
            ['id' => 1],
            [
                'nombre' => $request->nombreDirector,
                'sexo' => $request->sexoDirector
            ]
        );

        $SAc = \App\directivos::updateOrCreate(
            ['id' => 2],
            [
                'nombre' => $request->nombreSAc,
                'sexo' => $request->sexoSAc
            ]
        );

        $SAd = \App\directivos::updateOrCreate(
            ['id' => 3],
            [
                'nombre' => $request->nombreSAd,
                'sexo' => $request->sexoSAd
            ]
        );

        $SSEIS = \App\directivos::updateOrCreate(
            ['id' => 4],
            [
                'nombre' => $request->nombreSSEIS,
                'sexo' => $request->sexoSSEIS
            ]
        );

        $EPVE = \App\directivos::updateOrCreate(
            ['id' => 5],
            [
                'nombre' => $request->nombreEPVE,
                'sexo' => $request->sexoEPVE
            ]
        );

        $data = [
            $director,
            $SAc,
            $SAd,
            $SSEIS,
            $EPVE
        ];

        return redirect('/inicio');
    }

    public function configuracionDES(Request $request) {
        $JDGA = \App\directivos::updateOrCreate(
            ['id' => 6],
            [
                'nombre' => $request->nombreJDGA,
                'sexo' => $request->sexoJDGA
            ]
        );

        $DES = \App\directivos::updateOrCreate(
            ['id' => 7],
            [
                'nombre' => $request->nombreDES,
                'sexo' => $request->sexoDES
            ]
        );

        $JDGCE = \App\directivos::updateOrCreate(
            ['id' => 8],
            [
                'nombre' => $request->nombreJDGCE,
                'sexo' => $request->sexoJDGCE
            ]
        );

        $data = [
            $JDGA,
            $DES,
            $JDGCE
        ];

        return redirect('/inicio');
    }
}
