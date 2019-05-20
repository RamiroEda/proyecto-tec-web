<?php
    $prof = array();
    foreach($profesor as $p) {
        $prof[] = $p->usuario;
    }
?>

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
                    {!!Form::select('grupo1', $grupo, 0, ['class'=>'form-control', 'id'=>'grupo1'] );!!}
                </div>
                <div class="form-group">
                    <label for="unidadAprendizaje1">Profesor</label>
                    {!!Form::select('profe1', $prof, 0, ['class'=>'form-control', 'id'=>'profe1'] );!!}
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

            {!!Form::open(array ('class'=>'form-group', 'method'=>'get'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="entfed">Nombre</label><!- Viene de catalogo->
                    <!input type="text" name="nombre" id="nombre" class="form-control">
                    {!!Form::text( 'nombre', null, ['id'=>'nombre', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="entfed">Grupo</label><!- Viene de catalogo->
                    {!!Form::select('grupo', array('1' => 'XEJEX', '2' => 'XEJEX2'), '1', ['class'=>'form-control', 'id'=>'grupo'] );!!}
                </div>
                <div class="form-group">
                    <label for="entfed">Profesor</label><!- Viene de catalogo->
                    {!!Form::select('profe', array('1' => 'Profe 1', '2' => 'Profe 2'), 'F', ['class'=>'form-control', 'id'=>'profe'] );!!}
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
                                <td>{{$cont}}</td>
                                <td>{{$u->nombre}}</td>
                                <td>
                                    @foreach($u->realizado as $r)
                                    {{$r->grupo}}
                                    @endforeach
                                </td>
                                <td>{{$u->impartido->profesor->usuario}}</td>
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
