<!-- ---------------------------- MODALS ---------------------------------------------- -->


<!-- ---------------------------- AÑADIR ---------------------------------------------- -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="display: inline">Añadir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!!Form::open(array('url'=>'/practicas','class'=>'form-group', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de la practica</label>
                    {!!Form::text('nombre1', null, ['class'=>'form-control', 'id'=>'nombre1'])!!}
                </div>
                <div class="form-group">
                    <label>descripción</label>
                    {!!Form::textarea('descripcion1', null, ['id'=>'descripcion1', 'class'=>'form-control', 'rows'=>'3'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Programa académico</label>
                    {!!Form::select('programa1',$programa, 0, ['class'=>'form-control', 'id'=>'programa1'])!!}
                </div>
                <div class="form-group">
                    <label for="sems">Semestre</label>
                    {!!Form::select('semestre1',$semestre, 1, ['class'=>'form-control', 'id'=>'semestre1'])!!}
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo(S)</label>
                    {!!Form::select('grupo1',$grupo, 1, ['class'=>'form-control', 'id'=>'grupo1'])!!}
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    {!!Form::select('tipo1',$tipo, 1, ['class'=>'form-control', 'id'=>'tipo1'])!!}
                </div>
                <div class="form-group">
                    <label for="estrategia">Estrategia a Desarrollar</label>
                    {!!Form::textarea('estrategia1', null, ['id'=>'estrategia1', 'class'=>'form-control', 'rows'=>'3'])!!}

                </div>
                <div class="form-group">
                    <label for="compentencia">Competencias a Desarrollar</label>
                    {!!Form::text( 'compentencia1', null, ['id'=>'compentencia1', 'class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    <label for="Unidad">Unidad de aprendizaje</label>
                    {!!Form::select('ua1',$ua, 1, ['class'=>'form-control', 'id'=>'ua'])!!}
                </div>
                <div class="form-group">
                    <label for="no_practica">No. Práctica y visita escolar</label>
                    {!!Form::number('noPractica1', 0, ['id'=>'noPractica1', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="objetivo">Objetivo</label>
                    {!!Form::textarea('objetivo1', null, ['id'=>'objetivo1', 'class'=>'form-control', 'rows'=>'3'])!!}
                </div>
                <div class="formgroup">
                    <label for="entidad">Entidad</label>
                    {!!Form::select('entidad1',$entidad, 1, ['class'=>'form-control', 'id'=>'entidad1'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nombre de la Empresa, Institución o Razón Social</label>
                    {!!Form::text('institucion1',null,['id'=>'institucion1', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="name_profesor">Nombre del profesor responsable</label>
                    {!!Form::select('profesor1',$profesor, 1, ['class'=>'form-control', 'id'=>'proesor1'])!!}
                </div>

				<div class="form-group">
                        <label class="form-label" for="date-mask-input">Fecha de realización</label>
                        {!!Form::text('fecha1', null, ['class'=>'form-control','id'=>'date-mask-input'])!!}
                        <small class="text-muted">Formato de fecha: DD/MM/AAAA</small>
				</div>

                <div class="form-group">
                    <label for="exampleFormControlInput2">Numero total de alumnos</label>
                    {!!Form::number('alumnos1', '0', ['id'=>'alumnos1', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput4" >Presupuesto</label>
                    {!!Form::number('presupuesto1', '0', ['id'=>'presupuesto1', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

 <!-- ---------------------------- EDITAR ---------------------------------------------- -->

 <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="display: inline">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!!Form::open(array('url'=>'/practicas','class'=>'form-group', 'method'=>'patch'))!!}
            <div class="modal-body">
                <input type="hidden" name="practicaID" id="practicaID">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de la practica</label>
                    {!!Form::text('nombre2', null, ['class'=>'form-control', 'id'=>'nombre2'])!!}
                </div>
                <div class="form-group">
                    <label>descripción</label>
                    {!!Form::textarea('descripcion2', null, ['id'=>'descripcion2', 'class'=>'form-control', 'rows'=>'3'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Programa académico</label>
                    {!!Form::select('programa2',$programa, 0, ['class'=>'form-control', 'id'=>'programa2'])!!}
                </div>
                <div class="form-group">
                    <label for="sems">Semestre</label>
                    {!!Form::select('semestre2',$semestre, 1, ['class'=>'form-control', 'id'=>'semestre2'])!!}
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo(S)</label>
                    {!!Form::select('grupo2',$grupo, 1, ['class'=>'form-control', 'id'=>'grupo2'])!!}
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    {!!Form::select('tipo2',$tipo, 1, ['class'=>'form-control', 'id'=>'tipo2'])!!}
                </div>
                <div class="form-group">
                    <label for="estrategia">Estrategia a Desarrollar</label>
                    {!!Form::textarea('estrategia2', null, ['id'=>'estrategia2', 'class'=>'form-control', 'rows'=>'3'])!!}

                </div>
                <div class="form-group">
                    <label for="compentencia">Competencias a Desarrollar</label>
                    {!!Form::text( 'compentencia2', null, ['id'=>'compentencia2', 'class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    <label for="Unidad">Unidad de aprendizaje</label>
                    {!!Form::select('ua2',$ua, 1, ['class'=>'form-control', 'id'=>'ua2'])!!}
                </div>
                <div class="form-group">
                    <label for="no_practica">No. Práctica y visita escolar</label>
                    {!!Form::number('noPractica2', 0, ['id'=>'noPractica2', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="objetivo">Objetivo</label>
                    {!!Form::textarea('objetivo2', null, ['id'=>'objetivo2', 'class'=>'form-control', 'rows'=>'3'])!!}
                </div>
                <div class="formgroup">
                    <label for="entidad">Entidad</label>
                    {!!Form::select('entidad2',$entidad, 1, ['class'=>'form-control', 'id'=>'entidad2'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nombre de la Empresa, Institución o Razón Social</label>
                    {!!Form::text('institucion2',null,['id'=>'institucion2', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="name_profesor">Nombre del profesor responsable</label>
                    {!!Form::select('profesor2',$profesor, 1, ['class'=>'form-control', 'id'=>'profesor2'])!!}
                </div>

				<div class="form-group">
                        <label class="form-label" for="date-mask-input">Fecha de realización</label>
                        {!!Form::text('fecha2', null, ['class'=>'form-control', 'id'=>'fecha2'])!!}
                        <small class="text-muted">Formato de fecha: DD/MM/AAAA</small>
				</div>

                <div class="form-group">
                    <label for="exampleFormControlInput2">Numero total de alumnos</label>
                    {!!Form::number('alumnos2', '0', ['id'=>'alumnos2', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput4" >Presupuesto</label>
                    {!!Form::number('presupuesto2', '0', ['id'=>'presupuesto2', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
            {!!Form::close()!!}

        </div>
    </div>
</div>

<!-- ---------------------------- ELIMINAR ---------------------------------------------- -->

<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="display: inline">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!!Form::open(array('url'=>'/practicas', 'class'=>'form-group', 'method'=>'delete'))!!}
            <div class="modal-body">
                <label class="modal-label" style="text-align:center" id="mensaje">Eliminar</label>
            </div>
            <input type="hidden" name="practicaElmID" id="practicaElmID">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" class="close" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </div>
            {!!Form::close()!!}

        </div>
    </div>
</div>

    <div class="content">
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Alta de practicas y visitas escolares</h2>
                        </div>
                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <button class="btn btn-primary hid">.</button>
                    <button class="btn btn-primary new" data-toggle="modal"
                        data-target="#exampleModalCenter">Nuevo</button>
                    <table id="alta" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Programa académico</th>
                                <th>Razón</th>
                                <th>Profesor</th>
                                <th>Fecha</th>
                                <th>No. alumnos</th>
                                <th>Presupuesto</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($practica as $p)
                            <tr>
                                <td>{{$p->noPractica}}</td>
                                <td>{{$p->programaAcademico->programa}}</td>
                                <td>{{$p->institucion}}</td>
                                <td>{{$p->profesor->usuario}}</td>
                                <td>{{$p->fechaEntrega}}</td>
                                <td>{{$p->noAlumnos}}</td>
                                <td>{{$p->presupuesto}}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModalCenter2"
                                    onclick="modificarPractica({{$p->id}},'{{$p->nombre}}',
                                            '{{$p->descripcion}}',{{$p->programaAcademico_id}},
                                            {{$p->semestre_id}},{{$p->realizado->grupo_id}},
                                            {{$p->tipo}},'{{$p->edc}}','{{$p->competencias}}',
                                            {{$p->unidadAprendizaje_id}},{{$p->noPractica}},
                                            '{{$p->objetivo}}',{{$p->entidadFederativa_id}},
                                            '{{$p->institucion}}',{{$p->profesor_id}},
                                            '{{$p->fechaEntrega}}',{{$p->noAlumnos}},
                                            {{$p->presupuesto}});">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#exampleModalCenter3"
                                    onclick="eliminarPractica({{$p->id}},'{{$p->nombre}}');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

<script src="{{asset('/Template/js/custom/catalogo.js')}}"></script>

<script>
        $(function () {
            $('#alta').DataTable({
                responsive: true,
                order: [
                    [0, "desc"]
                ],
                columns: [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    {
                        "orderable": false
                    },
                    {
                        "orderable": false
                    }
                ]
            });

            $('#datetimepicker1').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        });

</script>
