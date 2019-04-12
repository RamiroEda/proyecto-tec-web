
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
                <div class="form-group"><!- Viene de catalogo->
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
                    <label for="sems">Semestre</label><!- Viene de catalogo->
                    <!input type="text" name="semestre" id="sems" class="form-control">
                    {!!Form::text( 'semestre', null, ['id'=>'sems', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo(S)</label><!- Viene de catalogo->
                    <!input type="text" name="grupo(s)" id="grupo" class="form-control">
                    {!!Form::text( 'grupo',null,['id'=>'grupo', 'class'=>'form-control'] )!!}
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    {!!Form::select('tipo', array('F' => 'Foráneo', 'M' => 'Metropolitana'), 'F', ['class'=>'form-control', 'id'=>'tipo'] );!!}
                </div>
                <div class="form-group">
                    <label for="estrategia">Estrategia a Desarrollar</label>
                    {!!Form::textarea('estrategia', null, ['id'=>'estrategia', 'class'=>'form-control', 'rows'=>'3'])!!}
                    
                </div>
                <div class="form-group">
                    <label for="compentencia">Competencias a Desarrollar</label>
                    {!!Form::text( 'compentencia', null, ['id'=>'compentencia', 'class'=>'form-control']) !!}
                    
                </div>
                <div class="form-group">
                    <label for="Unidad">Unidad de aprenfizaje</label>
                </div>
                <div class="form-group"><!- Se genera por fecha->
                    <label for="no_practica">No. Práctica y visita escolar</label>
                    <!input type="text" name="no_practica" id="no_practica" class="form-control">
                    {!!Form::text( 'no_practica', null, ['id'=>'no_practica', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="objetivo">Objetivo</label>
                    {!!Form::textarea('objetivo', null, ['id'=>'objetivo', 'class'=>'form-control', 'rows'=>'3'])!!}
                </div>
                <div class="formgroup">
                    <label for="entidad">Entidad</label><!- Viene de catalogo->
                    {!!Form::text('entidad',null,['id'=>'objetivo', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nombre de la Empresa, Institución o Razón Social</label>
                    <!textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><!/textarea>
                    {!!Form::text('exampleFormControlTextarea1',null,['id'=>'exampleFormControlTextarea1', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="name_profesor">Nombre del profesor responsable</label><!- viene por catalogo>
                    <!input type="text" class="form-control" id="exampleFormControlInput1">
                    {!!Form::text('name_profesor', null, ['id'=>'name_profesor', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="datePickerAdd">Fecha</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <!input type='text' class="form-control" />
                        {!!Form::text('datetimepicker1', 'null', ['id'=>'datetimepicker1', 'class'=>'form-control'])!!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Numero total de alumnos</label>
                    <!input type="number" class="form-control" id="exampleFormControlInput2" min="0" value="0">
                    {!!Form::number('exampleFormControlInput2', '0', ['id'=>'exampleFormControlInput2', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3" >Numero total de profesores</label>
                    <!input type="number" class="form-control" id="exampleFormControlInput3" min="0" value="0">
                    {!!Form::number('exampleFormControlInput3', '0', ['id'=>'exampleFormControlInput3', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput4" >Presupuesto</label>
                    <!input type="number" class="form-control" id="exampleFormControlInput4" min="0" value="0" step="0.1">
                    {!!Form::number('exampleFormControlInput4', '0', ['id'=>'exampleFormControlInput4', 'min'=>'0', 'value'=>'0', 'class'=>'form-control'])!!}
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