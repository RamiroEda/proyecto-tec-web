<div class="content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2>Configuración</h2>
                    </div>
                </div>
            </div>
        </header>
        <section class="card">
            <div class="card-block">

				<div class="tabs-section-nav">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#tabs-2-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Autoridades de la UPIIZ
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-2" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Autoridades de la DES
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="tabs-2-tab-1">
                        <div class="conteiner-fluid">
                            {!!Form::open(array('class'=>'form-control', 'method'=>'get'))!!}
                            <div class="form-group">
                                {!!Form::text('nombreDirector', $director->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre del director(a)', 'id'=>'nombreDirector'])!!}
                                Hombre {!!Form::radio('sexoDirector', 'hombre', ['class'=>'form-control', 'id'=>'DirectorHombre'])!!}
                                Mujer {!!Form::radio('sexoDirector', 'mujer', ['class'=>'form-control', 'id'=>'DirectorMujer'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::text('nombreSAc', $SAc->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre de subritector(a) académico(a)', 'id'=>'nombreSAc'])!!}
                                Hombre {!!Form::radio('sexoSAc', 'hombre', ['class'=>'form-control', 'id'=>'SAcHombre'])!!}
                                Mujer {!!Form::radio('sexoSAc', 'mujer', ['class'=>'form-control', 'id'=>'SAcMujer'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::text('nombreSAd', $SAd->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre del subdirector(a) administrativo(a)', 'id'=>'nombreSAd'])!!}
                                Hombre {!!Form::radio('sexoSAd', 'hombre', ['class'=>'form-control', 'id'=>'SadHombre'])!!}
                                Mujer {!!Form::radio('sexoSAd', 'mujer', ['class'=>'form-control', 'id'=>'SAdMujer'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::text('nombreSSEIS', $SSEIS->nombe, ['class'=>'form-control', 'placeholder'=>'Subdirector(a) de Servicios Educativos e Integración Social', 'id'=>'nombreSSEIS'])!!}
                                Hombre {!!Form::radio('sexoSSEIS', 'hombre', ['class'=>'form-control', 'id'=>'SSEISHombre'])!!}
                                Mujer {!!Form::radio('sexoSSEIS', 'mujer', ['class'=>'form-control', 'id'=>'SSEISMujer'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::text('nombreEPVE', $EPVE->nombre, ['class'=>'form-control', 'placeholder'=>'Encargado(a) de prácticas y visitas escolares'])!!}
                                Hombre {!!Form::radio('sexoEPVE', 'hombre', ['class'=>'form-control', 'id'=>'EPVEHombre'])!!}
                                Mujer {!!Form::radio('sexoEPVE', 'mujer', ['class'=>'form-control', 'id'=>'EPVErMujer'])!!}
                            </div>
                            <div class="form-goup">
                                <button type="button" class="btn btn-rounded btn-success">Guardar</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div><!--.tab-pane-->

					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-2">
                        <div class="conteiner-fluid">
                            {!!Form::open(array('class'=>'form-control', 'method'=>'get'))!!}
                            <div class="form-group">
                                {!!Form::text('nombreJDGA', $JDGA->nombre, ['class'=>'form-control', 'placeholder'=>'Jefe(a) del departamento de Gestión Académica', 'id'=>'nombreJDGA'])!!}
                                Hombre {!!Form::radio('sexoJDGA', 'hombre', ['class'=>'form-control', 'id'=>'JDGAHombre'])!!}
                                Mujer {!!Form::radio('sexoJDGA', 'mujer', ['class'=>'form-control', 'id'=>'JDGAMujer'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::text('nombreDES', $DES->nombre, ['class'=>'form-control', 'placeholder'=>'Director(a) de Educación Superior', 'id'=>'nombreDES'])!!}
                                Hombre {!!Form::radio('sexoDES', 'hombre', ['class'=>'form-control', 'id'=>'DESHombre'])!!}
                                Mujer {!!Form::radio('sexoDES', 'mujer', ['class'=>'form-control', 'id'=>'DESMujer'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::text('nombreJDGCE', $JDGCE->nombre, ['class'=>'form-control', 'placeholder'=>'Jefe(a) de la Divición de Gestión y Calidad Educativa'])!!}
                                Hombre {!!Form::radio('sexoJDGCE', 'hombre', ['class'=>'form-control', 'id'=>'JDGCEHombre'])!!}
                                Mujer {!!Form::radio('sexoJDGCE', 'mujer', ['class'=>'form-control', 'id'=>'JDGCEMujer'])!!}
                            </div>
                            <div class="form-goup">
                                <button type="button" class="btn btn-rounded btn-success">Guardar</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div><!--.tab-pane-->
				</div><!--.tab-content-->

            </div>
        </section>
    </div>
</div>
