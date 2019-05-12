
<!-- ---------------------------- MODALS ---------------------------------------------- -->


<!-- ---------------------------- AÑADIR ---------------------------------------------- -->

<div class="modal fade" id="agregar" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="display: inline">Agregar Plantel/Centro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!!Form::open(array ('url'=>'/catalogos/plantel','class'=>'form-group', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="NombrePlantel1">Nombre del Plantel</label>
                    {!!Form::text('NombrePlantel1',null,['id'=>'NombrePlantel1','class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="ClaveSEP1">Clave SEP</label>
                    {!!Form::text('ClaveSEP1',null,['id'=>'ClaveSEP1','class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios</label>
                    {!!Form::textarea('comentario1',null,['id'=>'comentario1','class'=>'form-control', 'rows' => 3])!!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <button class="btn btn-primary" data-toggle="modal"
                data-target="#agregar">Cancelar</button><br><br>
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

            {!!Form::open(array('url'=>'/catalogos/plantel', 'class'=>'form-group', 'method'=>'patch'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="NombrePlantel2">Nombre del Plantel</label>
                    {!!Form::text('NombrePlantel2',null,array('class'=>'form-control','id'=>'NombrePlantel2'))!!}
                </div>
                <div class="form-group">
                    <label for="ClaveSEP2">Clave SEP</label>
                    {!!Form::text('ClaveSEP2',null,['id'=>'ClaveSEP2','class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios</label>
                    {!!Form::textarea('comentario2',null,['id'=>'comentario2','class'=>'form-control', 'rows' => 3])!!}
                </div>

                <input type="hidden" name="plantelId" id="plantelId">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
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
            {!!Form::open(array('url'=>'catalogos/plantel', 'class'=>'form-group', 'method'=>'delete'))!!}
            <div class="modal-body">
                <label class="modal-label" style="text-align:center" id="mensaje">Eliminar</label>
            </div>
            <input type="hidden" name="plantelElmID" id="plantelElmID">
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
                            <h2>Catalogo de Plantel Educativo</h2>
                        </div>
                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">

                    <button class="btn btn-primary pull-right" data-toggle="modal"
                        data-target="#agregar">Nuevo</button><br><br>
                        <table id="alta" class="display table table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 10%">No.</th>
                                    <th style="width: 70%">Nombre del plantel</th>
                                    <th style="width: 20%">Clave SEP</th>
                                    <th><b>Editar</b></th>
                                    <th><b>Eliminar</b></td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $num = 1;
                                ?>
                                @foreach($planteles as $plantel)
                                <tr>
                                    <td>{{$num}}</td>
                                    <td>{{$plantel->programa}}</td>
                                    <td>{{$plantel->clave}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        onclick="modificarPlantel({{$plantel->id}},'{{$plantel->programa}}','{{$plantel->clave}}','{{$plantel->comentario}}');"
                                        data-target="#exampleModalCenter2">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#exampleModalCenter3"
                                        onclick="eliminarPlantel({{$plantel->id}},'{{$plantel->programa}}');">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                                    $num++;
                                ?>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </section>
        </div>
    </div>

    <script src="{{asset('/Template/js/custom/catalogo.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
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
