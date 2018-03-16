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
										<h3 class="event-title"><a href="#">africa mission trip</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 30 mar 2014</span>
											<span><i class="fa fa-map-marker"></i> Africa</span>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque recusandae rerum alias veniam nisi repellat, libero molestias praesentium dolore harum quisquam quam dolorum repudiandae et, earum doloremque repellendus fugiat ab.</p>
										<a href="#" class="button">Join to this event</a>
										<a href="#" class="button secondary">Ask a question</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>

									<li>
										<h3 class="event-title"><a href="#">Bible school</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 30 mar 2014</span>
											<span><i class="fa fa-map-marker"></i> Saint paul church</span>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, consectetur explicabo beatae blanditiis dignissimos hic esse, voluptatum eaque maxime magni id possimus repudiandae ut exercitationem et temporibus ex vitae? Consequuntur!</p>
										<a href="#" class="button">Join to this event</a>
										<a href="#" class="button secondary">Ask a question</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">praying for kids</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 30 mar 2014</span>
											<span><i class="fa fa-map-marker"></i> true church</span>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit dicta dolores vero ipsum mollitia, laborum maiores beatae molestias numquam, eaque rerum optio facere nobis et voluptate, similique harum totam! At.</p>
										<a href="#" class="button">Join to this event</a>
										<a href="#" class="button secondary">Ask a question</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">love giving</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 30 mar 2014</span>
											<span><i class="fa fa-map-marker"></i> St cathedral</span>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit earum, minus error ipsum optio praesentium exercitationem necessitatibus accusamus reiciendis veritatis iste, aliquam nulla neque magni debitis deleniti harum molestias. Suscipit.</p>
										<a href="#" class="button">Join to this event</a>
										<a href="#" class="button secondary">Ask a question</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">god ont the vacation</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 30 mar 2014</span>
											<span><i class="fa fa-map-marker"></i> greenie lake</span>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae error officia, vero quo ducimus maiores, itaque consequatur vitae tempore nulla beatae quis. Asperiores perspiciatis facere harum ducimus doloribus. Neque, accusamus?</p>
										<a href="#" class="button">Join to this event</a>
										<a href="#" class="button secondary">Ask a question</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
									<li>
										<h3 class="event-title"><a href="#">homeless helping</a></h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i> 30 mar 2014</span>
											<span><i class="fa fa-map-marker"></i> Detroit city</span>
										</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, minus perspiciatis. Ad vero maxime iusto nemo, id optio iure officiis quisquam incidunt, ipsum suscipit! Unde facilis nisi totam. Reiciendis, accusamus.</p>
										<a href="#" class="button">Join to this event</a>
										<a href="#" class="button secondary">Ask a question</a>
										<a href="#" class="button secondary">Leer más</a>
									</li>
								</ul>

				
	
			<div id='calendar'></div>
			
			</div>
		</div>
@endsection

