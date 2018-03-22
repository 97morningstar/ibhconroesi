@extends('layout.app')
@section('title')
- Eventos
@endsection


@section('content')
			<h2>Próximos eventos</h2>
			<div class="container">

				@if(auth()->check())
						<div class="container">
       		  				<a class="btn btn-primary" href="/eventos/create">Crear Evento</a>
       		  			</div>
       		  	@endif
				
				<ul class="event-list large">
									<li>
										<h3 class="event-title"><a href="#">Reunión de primavera en la Iglesia Bautista de Tallowood</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 7 Febrero 2018</span>
											<span><i class="fa fa-map-marker"></i> Iglesia Bautista de Tallowood</span>
										</span>
										<p>Balance del trabajo de la iglesia en los primeros 6 meses. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>

									<li>
										<h3 class="event-title"><a href="#">Primer convivio en el barrio de Las Trailas</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 18 marzo 2018</span>
											<span><i class="fa fa-map-marker"></i> Las Trailas</span>
										</span>
										<p>Tiempo de esparcimiento con todas las familias de esa comunidad a fin de mostrarles confianza, ayudarles en sus necesidades y promocionar el trabajo de la Iglesia</p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Semana de pasiones</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 25 de Marzo al 1 de Abril 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p>Tiempo de recordatorio y celebración de la muerte y resurrección de Jesucristo. 
											<br>
										
												<p>Domingo 25. &nbsp&nbsp Domingo de Ramos. Escuela Dominical especial por la entrada triunfal de Jesús en Jerusalén. </p>
												<p>Viernes 23.  &nbsp&nbsp	Sermón de las 7 palabras. </p>
												<p>Domingo 1.   &nbsp&nbsp		Escuela Dominical especial por el día de resurrección. </p>
											
										</p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Domingo de resurrección</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 1 de Abril 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p>Programa especial. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Segundo convivio</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i>  8 de Abril 2018</span>
											<span><i class="fa fa-map-marker"></i> Casa de hospedaje de Paulino y Blanca Vadillo</span>
										</span>
										<p>Tiempo de esparcimiento con todas las perdonas de esa casa a fin de mostrarles confianza, ayudarles en sus necesidades y promocionar el trabajo de la iglesia. </p>
									{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Ciclo de edificación del Hogar y la Familia.</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 8 de Mayo al 17 de Junio 2018</span>
											<span><i class="fa fa-map-marker"></i></span>
										</span>
										<p></p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Día de las madres</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 8 de Mayo 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p>Celebración especial para homenajear a nuestras madres. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Segunda reunión en la Iglesia Bautista de Tallowood</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 13 de Junio 2018</span>
											<span><i class="fa fa-map-marker"></i> Iglesia Bautista de Tallowood</span>
										</span>
										<p>Balance del trabajo de la iglesia en los primeros 9 meses. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Día de los Padres</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 17 de Junio 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p>Celebración especial para homenajear a nuestros padres. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>									
									<li>
										<h3 class="event-title"><a href="#">Escuela de Verano. </a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 9 al 15 de Julio 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p>Programa especial con nuestros niños con la participación de toda la iglesia. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>								
									<li>
										<h3 class="event-title"><a href="#">Programa de Verano. </a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> Agosto 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p> Diferentes actividades variadas que incluyen celebración de escuelas dominical en lugares fuera del santuario. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">Primer aniversario</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 16 de Septiembre 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p> Escuela dominical especial por un año de trabajo de la iglesia. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>



										<li>
										<h3 class="event-title"><a href="#">Día de la Biblia</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 2 de Diciembre 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p> Escuela Dominical especial. </p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>

										<li>
										<h3 class="event-title"><a href="#">Actividad especial por la apertura de la Navidad. </a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 2 de Diciembre 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p></p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>

										<li>
										<h3 class="event-title"><a href="#">Noche buena</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 24 de Diciembre 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p>Convivio conjunto con toda la Iglesia</p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>

										<li>
										<h3 class="event-title"><a href="#">Celebración de la Navidad.</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 25 de Diciembre 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p></p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>

										<li>
										<h3 class="event-title"><a href="#">Celebración de fin de año. </a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 31 de Diciembre 2018</span>
											<span><i class="fa fa-map-marker"></i> Templo</span>
										</span>
										<p></p>
										{{--<a href="#" class="button">Unirte</a>--}}
										<a href="/contactos" class="button secondary">Haz una pregunta</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
								</ul>

				
	
			<div id='calendar'></div>
			
			</div>
		</div>
@endsection

