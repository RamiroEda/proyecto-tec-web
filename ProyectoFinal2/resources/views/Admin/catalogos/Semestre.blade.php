
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
            {!!Form::open(array ('class'=>'form-group', 'method'=>'get'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    {!!Form::text('semestre',null,['id'=>'semestre','class'=>'form-control'])!!}
                </div>
            </div>
            {!!Form::close()!!}
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Agregar</button>
                <button class="btn btn-primary" data-toggle="modal"
                        data-target="#agregar">Cancelar</button><br><br>
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
                    <label for="semestre">Semestre</label>
                    {!!Form::text('semestre',null,['id'=>'semestre','class'=>'form-control'])!!}
                </div>
            </div>
            {!!Form::close()!!}


        </div>
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
                            <h2>Semestre</h2>
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
                                    <th>No.</th>
                                    <th style="width: 100%">Semestre</th>
                                    <th><b>Editar</b></th>
                                    <th><b>Eliminar</b></td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1er Semestre</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter2">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter3">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>6to Semestre</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter2">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter3">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>4to Semestre</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter2">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter3">
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

