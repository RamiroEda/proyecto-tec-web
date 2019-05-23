
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
            {!!Form::open(array('url'=>'/catalogos/profesor','class'=>'form-group', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="entfed">Nombre completo</label>
                    {!!Form::text( 'nombre1', null, ['id'=>'nombre', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="entfed">Clave de trabajador</label>

                    {!!Form::select('clave1', $usuario, 1, ['class'=>'form-control', 'id'=>'clave1'])!!}
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios</label>
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

          {!!Form::open(array('url'=>'/catalogos/profesor','class'=>'form-group', 'method'=>'patch'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="entfed">Nombre</label><!- Viene de catalogo->
                    <!input type="text" name="nombre" id="nombre" class="form-control">
                    {!!Form::text( 'nombre2', null, ['id'=>'nombre2', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="entfed">Clave de trabajador</label><!- Viene de catalogo->
                    <!input type="text" name="clave" id="clave" class="form-control">
                    {!!Form::text( 'clave2', null, ['id'=>'clave2', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios</label>
                    {!!Form::textarea('comentario2',null,['id'=>'comentario2','class'=>'form-control', 'rows' => 3])!!}
                </div>
            </div>
            <input type="hidden" name="wop" id="wop">
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
          {!!Form::open(array('url'=>'/catalogos/profesor', 'class'=>'form-group', 'method'=>'delete'))!!}
          <div class="modal-body">
              <label class="modal-label" style="text-align:center" id="mensaje">Eliminar</label>
          </div>
          <input type="hidden" name="porfeDel" id="porfeDel">
          <input type="hidden" name="UserDel" id="UserDel">
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
                            <h2>Profesor</h2>
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
                                <th style="width: 50%">Profesor</th>
                                <th style="width: 50%">Clave de trabajador</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $cont = 1;
                            ?>
                            @foreach($profesor as $p)
                            <tr>
                                <td>{{$cont}}</td>
                                <td>{{$p->usuario}}</td>
                                <td>{{$p->usuario->usuario}}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal"
                                    onclick="modificarProfesor({{$p->usuario->usuario}},{{$p->usuario->id}},'{{$p->usuario->nombre}}','{{$p->usuario->comentario}}');"
                                    data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    onclick="eliminarProfe({{$p->id}},{{$p->usuario->id}},'{{$p->usuario}}');"
                                    data-target="#exampleModalCenter3">
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
