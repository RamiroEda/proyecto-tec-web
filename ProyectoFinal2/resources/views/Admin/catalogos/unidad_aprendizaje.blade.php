

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
            {!!Form::open(array('url'=>'/catalogos/unidad_aprendizaje','class'=>'form-group', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="unidadAprendizaje1">Nombre</label>
                    {!!Form::text( 'nombre1', null, ['id'=>'nombre1', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="unidadAprendizaje1">Grupo</label>
                    {!!Form::select('grupo1', $grupo, 1, ['class'=>'form-control', 'id'=>'grupo1'])!!}
                </div>
                <div class="form-group">
                    <label for="unidadAprendizaje1">Profesor</label>
                    {!!Form::select('profe1', $prof, 1, ['class'=>'form-control', 'id'=>'profe1'])!!}
                </div>
                <div class="form-group">
                    <label for="unidadAprendizaje1">Comentarios</label>
                    {!!Form::textarea('comentario1',null,['id'=>'comentario1','class'=>'form-control', 'rows' => 3])!!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Añadir</button>
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

    {!!Form::open(array('url'=>'/catalogos/unidad_aprendizaje', 'class'=>'form-group', 'method'=>'patch'))!!}
    <div class="modal-body">
      <div class="form-group">
          <label for="entfed">Nombre</label>
          {!!Form::text('nombre2',null,['id'=>'nombre2','class'=>'form-control'])!!}
      </div>
      <div class="form-group">
          <label for="entfed">Grupo</label>
          {!!Form::select('grupo2', $grupo, 1, ['class'=>'form-control', 'id'=>'grupo2'])!!}
      </div>
      <div class="form-group">
          <label for="entfed">Profesor</label>
          {!!Form::select('profe2', $prof, 1, ['class'=>'form-control', 'id'=>'profe2'])!!}
      </div>
      <div class="form-group">
          <label for="comentario">Comentarios</label>
          {!!Form::textarea('comentario2',null,['id'=>'comentario2','class'=>'form-control', 'rows' => 3])!!}
      </div>
        <input type="hidden" name="GrupoID" id="GrupoID">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <input type="hidden" name="UnidadID" id="UnidadID">
    <input type="hidden" name="ImparteID" id="ImparteID">
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
            {!!Form::open(array('url'=>'/catalogos/unidad_aprendizaje', 'class'=>'form-group', 'method'=>'delete'))!!}
            <div class="modal-body">
                <label class="modal-label" style="text-align:center" id="wop">Eliminar</label>
            </div>
            <input type="hidden" name="UnidadIDel" id="UnidadIDel">
            <input type="hidden" name="ImparteIDel" id="ImparteIDel">
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
                            <h2>Unidad de aprendizaje</h2>
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
                                <th style="width: 50%">Nombre</th>
                                <th>Grupo</th>
                                <th style="width: 50%">Profesor</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $cont = 1;
                            ?>
                            @foreach($unidad as $u)
                            <tr>
                                <td>{{$u->id}}</td>
                                <td>{{$u->nombre}}</td>
                                <td>

                                </td>
                                <td>{{$u->impartido->profesor->usuario}}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal"
                                    onclick="UA({{$u->id}},{{$u->impartido->id}},'{{$u->nombre}}','{{$u->comentario}}');"
                                    data-target="#exampleModalCenter2">

                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    onclick="eUA({{$u->id}},{{$u->impartido->id}},'{{$u->nombre}}');"
                                    data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                                <?php
                                    $cont++;
                                ?>
                            </tr>
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
                    [0, "asc"]
                ],
                columns: [
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
