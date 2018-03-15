@extends('layout.app')


@section('content')
<div class="line center-block"></div>
			<div class="row center-block welcome">
				<h2>Bienvenidos a la Iglesia Bautista<br/>Hispana de Conroe</h2>
				<p>
					Bienvenidos a la Iglesia Bautista Hispana de Conroe, TX. Somos una iglesia cristiana bautista que existe para adorar al Creador del universo y para ayudar a la comunidad hispana a tener una mejor relacion con Jesucristo
				</p>
			</div>

			<div class="row imagenes">
				<div class="col-sm-6 col-md-4 imgg hover15">
						<a href="/quienessomos#section3" class="art">
								<figure>
										<img src="images/4.jpeg" width="200px" height="200px" class="images">
								</figure>
							<h2>Visión</h2>
						</a>
					<p class="texto">
						Ser La Iglesia de Jesucristo que nuestra Comunidad necesita para glorificar a Dios en cumplimiento de La Gran Comisión. <br>
						“Abre mis ojos, y miraré las maravillas de tu ley” Salmos 119:18
				    </p>
				</div>
				<div class="col-sm-6  col-md-4 imgg hover15">
						<a href="/servicios" class="art">
								<figure>
										<img src="images/received_268536743658288.jpeg" width="200px" height="200px" class="images">
								</figure>
							<h2>Servicios</h2>
					 	</a>
					<p class="texto">
						Servicios Regulares de la Iglesia <br>
						"Y nosotros, pueblo tuyo, y ovejas de tu prado, 
    					Te alabaremos para siempre; 
   						 De generación en generación cantaremos tus alabanzas." <br>Salmos 79:13
				    </p>
				</div>
				<div class="col-sm-12  col-md-4 imgg hover15">
						<a href="/eventos" class="art">
								<figure>
										<img src="images/images.jpg" width="200px" height="200px" class="images">
								</figure>
							<h2>Eventos</h2>
						</a>
					<p class="texto">
						Eventos en el año 2018. 
						Ver programa de la Convención de Texas. <br>
						"Y el ángel me dijo: Escribe: Bienaventurados los que son llamados a la cena de las bodas del Cordero. Y me dijo: Estas son palabras verdaderas de Dios." <br>Apocalipsis 19:9
				    </p>
				</div>
			</div>

<div class="container">
			<div class="quote row">
				<p>
					"Yo soy el camino, y la verdad y la vida; nadie viene al Padre, sino por mí” <br/>Juan 14:6
				</p>
			</div>
</div>
<div class="container-fluid">
<!-- **************** google map here *************  -->
<div class="row">
			<div class="map">
				<div class="google-map col-sm-12">
					<!-- <img src="images/map.png" width="450px" height="450px"> -->
				
					<iframe
					
		 				 id="map"
		 				 frameborder="0" style="border:0"
		 				 src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCsREWnohGEPHBYsEC8lRsU3h3qOdyiY5g
		  						  &q=Iglesia+Bautista+Hispana+de+Conroe">		  						  
					</iframe>
			
				</div>
	
			</div>
		</div>
	
	</div>
	@endsection


	