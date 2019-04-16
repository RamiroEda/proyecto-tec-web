
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
            {!!Form::open(array ('class'=>'form-group', 'method'=>'get'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="entfed">Nombre< completo/label><!- Viene de catalogo->
                    <!input type="text" name="nombre" id="nombre" class="form-control">
                    {!!Form::text( 'nombre', null, ['id'=>'nombre', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="entfed">Clave de trabajador</label><!- Viene de catalogo->
                    <!input type="text" name="clave" id="clave" class="form-control">
                    {!!Form::text( 'clave', null, ['id'=>'clave', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios</label>
                    {!!Form::textarea('comentario',null,['id'=>'comentario','class'=>'form-control', 'rows' => 3])!!}
                </div>
            </div>
            {!!Form::close()!!}
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Añadir</button>
            </div>
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

            {!!Form::open(array ('class'=>'form-group', 'method'=>'get'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="entfed">Tipo de práctica</label><!- Viene de catalogo->
                    <!input type="text" name="nombre" id="nombre" class="form-control">
                    {!!Form::text( 'nombre', null, ['id'=>'nombre', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="entfed">Clave de trabajador</label><!- Viene de catalogo->
                    <!input type="text" name="clave" id="clave" class="form-control">
                    {!!Form::text( 'clave', null, ['id'=>'clave', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios</label>
                    {!!Form::textarea('comentario',null,['id'=>'comentario','class'=>'form-control', 'rows' => 3])!!}
                </div>
            </div>
            {!!Form::close()!!}
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>

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

            <div class="modal-body">
                ¿Está seguro de eliminar este elemento permanentemente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" class="close" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Borrar</button>
            </div>

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
                            <tr>
                                <td>1</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ing. Profesor Ejemplo</td>
                                <td>ABCDEFG12345</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter2">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
  
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