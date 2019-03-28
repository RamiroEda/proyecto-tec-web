@extends('menu')
<!DOCTYPE html>

  @section('title')
    <title>Alta de prácticas y visitas escolares</title>
  @endsection

  @section('css')
    <link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
  @stop


  @section('content')
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
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>10</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>9</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>8</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>7</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>6</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>5</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>4</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>3</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>2</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
										<span class="glyphicon glyphicon-trash"></span>
									</button>
								</td>
							</tr>
							<tr>
                                <td>1</td>
                                <td>Sistemas Computacionales</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum dolore esse fugiat eaque quis amet exercitationem odio? Officiis magni tempora, neque repudiandae repellendus tempore explicabo voluptate aut distinctio autem?</td>
                                <td>Lic. Juan Ejemplo Lopez Lopez</td>
                                <td>04/03/2019</td>
								<td>40</td>
								<td>4</td>
								<td>$30000.0</td>
								<td>
									<button class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm">
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
  @stop

  @section('scripts')
  <script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>
  <script src="js/lib/datatables-net/datatables.min.js"></script>

    <script>
        $(function () {
            $('#alta').DataTable({
                responsive: true
            });
        });

    </script>
  @stop
