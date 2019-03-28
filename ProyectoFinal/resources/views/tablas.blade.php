<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alta de prácticas y visitas escolares</title>

    <link href="img/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tablas.css">
</head>

<body>
    <div class="page-content">
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
                    <table id="alta" class="display table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Programa académico</th>
                                <th>Razón</th>
                                <th>Profesor</th>
                                <th>Fecha</th>
                                <th>No. alumnos</th>
                                <th>No. profesores</th>
                                <th>Presupuesto</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>11</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
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
                                <td>10</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>9</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm data-toggle="modal" data-target="#exampleModalCenter2"">
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
                                <td>1</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore
                                    esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque
                                    repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
                                <td>40</td>
                                <td>4</td>
                                <td>$30000.0</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2">
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
                        <label for="exampleFormControlSelect1">Programa académico</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="SIS">Sistemas Computacionales</option>
                            <option value="MEC">Mecatrónica</option>
                            <option value="ALI">Alimentos</option>
                            <option value="AMB">Ambiental</option>
                            <option value="MET">Metalúrgica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sems">Semestre</label>
                        <!input type="text" name="semestre" id="sems" class="form-control">
                        {!!Form::text( 'semestre', null, ['id'=>'sems', 'class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        <label for="grupo">Grupo</label>
                        <!input type="text" name="grupo(s)" id="grupo" class="form-control">
                        {!!Form::text( 'grupo',null,['id'=>'grupo', 'class'=>'form-control'] )!!}
                    </div>
                    <div class="form-group">
                        <label for="no_practica">No. Práctica y visita escolar</label>
                        <!input type="text" name="no_practica" id="no_practica" class="form-control">
                        {!!Form::text( 'no_practica', null, ['id'=>'no_practica', 'class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nombre de la razón social</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre del profesor responsable</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="datePickerAdd">Fecha</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
					</div>
					<div class="form-group">
                        <label for="exampleFormControlInput2">Numero total de alumnos</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" min="0" value="0">
					</div>
					<div class="form-group">
                        <label for="exampleFormControlInput3" >Numero total de profesores</label>
                        <input type="number" class="form-control" id="exampleFormControlInput3" min="0" value="0">
					</div>
					<div class="form-group">
                        <label for="exampleFormControlInput4" >Presupuesto</label>
                        <input type="number" class="form-control" id="exampleFormControlInput4" min="0" value="0" step="0.1">
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

                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Programa académico</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="SIS">Sistemas Computacionales</option>
                            <option value="MEC">Mecatrónica</option>
                            <option value="ALI">Alimentos</option>
                            <option value="AMB">Ambiental</option>
                            <option value="MET">Metalúrgica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nombre de la razón social</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre del profesor responsable</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="datePickerAdd">Fecha</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
					</div>
					<div class="form-group">
                        <label for="exampleFormControlInput2">Numero total de alumnos</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" min="0" value="0">
					</div>
					<div class="form-group">
                        <label for="exampleFormControlInput3" >Numero total de profesores</label>
                        <input type="number" class="form-control" id="exampleFormControlInput3" min="0" value="0">
					</div>
					<div class="form-group">
                        <label for="exampleFormControlInput4" >Presupuesto</label>
                        <input type="number" class="form-control" id="exampleFormControlInput4" min="0" value="0" step="0.1">
                    </div>
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


    <!-- ---------------------------------------------------------------------------------- -->

    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/tether/tether.min.js"></script>
    <script src="js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>

    <script src="js/lib/datatables-net/datatables.min.js"></script>

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

    <script src="js/app.js"></script>
</body>

</html>
