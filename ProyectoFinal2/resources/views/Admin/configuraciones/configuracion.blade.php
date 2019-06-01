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
                            {!!Form::open(array('url'=>'/configuracion/UPIIZ','class'=>'form-control', 'method'=>'post'))!!}
                            <div class="form-group">
                                @if($director != null)
                                    {!!Form::text('nombreDirector', $director->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre del director(a)', 'id'=>'nombreDirector'])!!}
                                    @if($director->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoDirector', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoDirector', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoDirector', 'hombre',true)!!}
                                        Mujer {!!Form::radio('sexoDirector', 'mujer',false)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreDirector', null, ['class'=>'form-control', 'placeholder'=>'Nombre del director(a)', 'id'=>'nombreDirector'])!!}
                                    Hombre {!!Form::radio('sexoDirector', 'hombre', ['class'=>'form-control', 'id'=>'DirectorHombre'])!!}
                                    Mujer {!!Form::radio('sexoDirector', 'mujer', ['class'=>'form-control', 'id'=>'DirectorMujer'])!!}
                                @endif
                            </div>
                            <div class="form-group">
                                @if($SAc != null)
                                    {!!Form::text('nombreSAc', $SAc->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre de subritector(a) académico(a)', 'id'=>'nombreSAc'])!!}
                                    @if($SAc->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoSAc', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoSAc', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoSAc', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoSAc', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreSAc', null, ['class'=>'form-control', 'placeholder'=>'Nombre de subritector(a) académico(a)', 'id'=>'nombreSAc'])!!}
                                    Hombre {!!Form::radio('sexoSAc', 'hombre', ['class'=>'form-control', 'id'=>'SAcHombre'])!!}
                                    Mujer {!!Form::radio('sexoSAc', 'mujer', ['class'=>'form-control', 'id'=>'SAcMujer'])!!}
                                @endif
                            </div>
                            <div class="form-group">
                                @if($SAd != null)
                                    {!!Form::text('nombreSAd', $SAd->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre del subdirector(a) administrativo(a)', 'id'=>'nombreSAd'])!!}
                                    @if($SAd->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoSAd', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoSAd', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoSAd', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoSAd', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreSAd', null, ['class'=>'form-control', 'placeholder'=>'Nombre del subdirector(a) administrativo(a)', 'id'=>'nombreSAd'])!!}
                                    Hombre {!!Form::radio('sexoSAd', 'hombre', ['class'=>'form-control', 'id'=>'SadHombre'])!!}
                                    Mujer {!!Form::radio('sexoSAd', 'mujer', ['class'=>'form-control', 'id'=>'SAdMujer'])!!}
                                @endif
                            </div>
                            <div class="form-group">
                                @if($SSEIS != null)
                                    {!!Form::text('nombreSSEIS', $SSEIS->nombre, ['class'=>'form-control', 'placeholder'=>'Subdirector(a) de Servicios Educativos e Integración Social', 'id'=>'nombreSSEIS'])!!}
                                    @if($SSEIS->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoSSEIS', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoSSEIS', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoSSEIS', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoSSEIS', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreSSEIS', null, ['class'=>'form-control', 'placeholder'=>'Subdirector(a) de Servicios Educativos e Integración Social', 'id'=>'nombreSSEIS'])!!}
                                    Hombre {!!Form::radio('sexoSSEIS', 'hombre', ['class'=>'form-control', 'id'=>'SSEISHombre'])!!}
                                    Mujer {!!Form::radio('sexoSSEIS', 'mujer', ['class'=>'form-control', 'id'=>'SSEISMujer'])!!}
                                @endif
                            </div>
                            <div class="form-group">
                                @if($EPVE != null)
                                    {!!Form::text('nombreEPVE', $EPVE->nombre, ['class'=>'form-control', 'placeholder'=>'Encargado(a) de prácticas y visitas escolares'])!!}
                                    @if($EPVE->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoEPVE', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoEPVE', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoEPVE', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoEPVE', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreEPVE', null, ['class'=>'form-control', 'placeholder'=>'Encargado(a) de prácticas y visitas escolares'])!!}
                                    Hombre {!!Form::radio('sexoEPVE', 'hombre', ['class'=>'form-control', 'id'=>'EPVEHombre'])!!}
                                    Mujer {!!Form::radio('sexoEPVE', 'mujer', ['class'=>'form-control', 'id'=>'EPVErMujer'])!!}
                                @endif
                            </div>
                            <div class="form-goup">
                                <button type="submit" class="btn btn-rounded btn-success">Guardar</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div><!--.tab-pane-->

					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-2">
                        <div class="conteiner-fluid">
                            {!!Form::open(array('url'=>'/configuracion/DES','class'=>'form-control', 'method'=>'post'))!!}
                            <div class="form-group">
                                @if($JDGA != null)
                                    {!!Form::text('nombreJDGA', $JDGA->nombre, ['class'=>'form-control', 'placeholder'=>'Jefe(a) del departamento de Gestión Académica', 'id'=>'nombreJDGA'])!!}
                                    @if($JDGA->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoJDGA', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoJDGA', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoJDGA', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoJDGA', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreJDGA', null, ['class'=>'form-control', 'placeholder'=>'Jefe(a) del departamento de Gestión Académica', 'id'=>'nombreJDGA'])!!}
                                    Hombre {!!Form::radio('sexoJDGA', 'hombre', ['class'=>'form-control', 'id'=>'JDGAHombre'])!!}
                                    Mujer {!!Form::radio('sexoJDGA', 'mujer', ['class'=>'form-control', 'id'=>'JDGAMujer'])!!}
                                @endif
                            </div>
                            <div class="form-group">
                                @if($DES != null)
                                    {!!Form::text('nombreDES', $DES->nombre, ['class'=>'form-control', 'placeholder'=>'Director(a) de Educación Superior', 'id'=>'nombreDES'])!!}
                                    @if($DES->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoDES', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoDES', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoDES', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoDES', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreDES', null, ['class'=>'form-control', 'placeholder'=>'Director(a) de Educación Superior', 'id'=>'nombreDES'])!!}
                                    Hombre {!!Form::radio('sexoDES', 'hombre', ['class'=>'form-control', 'id'=>'DESHombre'])!!}
                                    Mujer {!!Form::radio('sexoDES', 'mujer', ['class'=>'form-control', 'id'=>'DESMujer'])!!}
                                @endif
                            </div>
                            <div class="form-group">
                                @if($JDGCE != null)
                                    {!!Form::text('nombreJDGCE', $JDGCE->nombre, ['class'=>'form-control', 'placeholder'=>'Jefe(a) de la Divición de Gestión y Calidad Educativa'])!!}
                                    @if($JDGCE->sexo == "hombre")
                                        Hombre {!!Form::radio('sexoJDGCE', 'hombre', true)!!}
                                        Mujer {!!Form::radio('sexoJDGCE', 'mujer', false)!!}
                                    @else
                                        Hombre {!!Form::radio('sexoJDGCE', 'hombre', false)!!}
                                        Mujer {!!Form::radio('sexoJDGCE', 'mujer', true)!!}
                                    @endif
                                @else
                                    {!!Form::text('nombreJDGCE', null, ['class'=>'form-control', 'placeholder'=>'Jefe(a) de la Divición de Gestión y Calidad Educativa'])!!}
                                    Hombre {!!Form::radio('sexoJDGCE', 'hombre', ['class'=>'form-control', 'id'=>'JDGCEHombre'])!!}
                                    Mujer {!!Form::radio('sexoJDGCE', 'mujer', ['class'=>'form-control', 'id'=>'JDGCEMujer'])!!}
                                @endif
                            </div>
                            <div class="form-goup">
                                <button type="submit" class="btn btn-rounded btn-success">Guardar</button>
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div><!--.tab-pane-->
				</div><!--.tab-content-->

            </div>
        </section>
    </div>
</div>
