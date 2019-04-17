<!-- ---------------------------- INFORMES ACADEMICOS ---------------------------------------------- -->

<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="display: inline">Informes académicos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>¿Considera usted, qué se cumplió el objetivo deseado?
                <input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                <p>¿Por qué?
                <input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                <p>Describe brevemente la actividad desarrollada y/o los beneficios obtenidos:
                <textarea rows="4" class="form-control" placeholder="Textarea"></textarea></p>
                <p>Concluciones:
                <textarea rows="4" class="form-control" placeholder="Textarea"></textarea></p>
                <p>Observaciones:
                <textarea rows="4" class="form-control" placeholder="Textarea"></textarea></p>
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
                            <h2>Informes académicos</h2>
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
                            <tr>
                                <td>1</td>
                                <td>FuaaaaH!</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td><center>
                                    <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-cd">Agregar</span>
                                    </button>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>FuaaaaH!</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td><center>
                                    <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-cd">Agregar</span>
                                    </button>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>FuaaaaH!</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td><center>
                                    <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-cd">Agregar</span>
                                    </button>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>FuaaaaH!</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td><center>
                                    <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-cd">Agregar</span>
                                    </button>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>FuaaaaH!</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td><center>
                                    <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModalCenter3">
                                        <span class="glyphicon glyphicon-cd">Agregar</span>
                                    </button>
                                    </center>
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

            $('#datetimepicker1').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        });

    </script>
