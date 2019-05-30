<!-- ---------------------------- Nomina ---------------------------------------------- -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="display: inline">Alta de alumnos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!!Form::open(array ('url'=>'/nomina','class'=>'form-group', 'method'=>'post'))!!}
                <div class="modal-body">
                    {!!Form::select('id_alumno', $alumnos, 1, ['class'=>'form-control', 'id'=>'nombre'])!!}</p>
                    <input type="hidden" name="id_practica" id="id_practica">
                    <button type="submit" class="btn btn-success">Agregar</button>
                </div>
            {!!Form::close()!!}
            <div class="modal-body">
                <table id="seguro" class="display table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" class="close" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Wops</button>
            </div>

        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------->
<div class="content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2>Nomina</h2>
                    </div>
                </div>
            </div>
        </header>
        <section class="card">
            <div class="card-block">
                <h3>Listado de prácticas</h3>
                <table id="nomina" class="display table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Empresa</th>
                            <th>Profesor</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($practicas as $p)
                            <tr>
                                <td>{{$p->noPractica}}</td>
                                <td>{{$p->institucion}}</td>
                                <td>{{$p->profesor->usuario->nombre}}</td>
                                <td>{{$p->fechaEntrega}}</td>
                                <td>
                                    <center>
                                        <button class="btn btn-primary btn-success" data-toggle="modal"
                                            data-target="#exampleModalCenter" onclick="displayNomina({{$p->id}}, [{{implode($asistencias[$p->id], ',')}}])">
                                            <span class="glyphicon glyphicon-cd">Agregar</span>
                                        </button>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

{!!Form::open(array ('url'=>'/nomina','class'=>'form-group', 'method'=>'delete', 'id'=>'delForm'))!!}
    <input type="hidden" name="del_practica" id="delPractica">
    <input type="hidden" name="del_usuario" id="delUsuario">
{!!Form::close()!!}

<script>
    $(function () {
        $('#nomina').DataTable({
            responsive: true,
            order: [
                [0, "desc"]
            ],
            columns: [
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
        $('#seguro').DataTable({
            responsive: false,
            order: [
                [0, "desc"]
            ],
            columns: [
                null,
                null,
                null,
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