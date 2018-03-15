<footer>
		<div class="container-fluid">
			<div class="footer-info col-sm-12 col-md-5">
				<h5>Iglesia Bautista<br/>Hispana de Conroe</h5>
				<a class="addresss" href="https://www.google.com/maps/place/Iglesia+Bautista+Hispana+de+Conroe/@30.3025159,-95.4597659,17z/data=!4m13!1m7!3m6!1s0x86473940f2f70dbf:0x2e08d94990e26db9!2s600+S+Frazier+St,+Conroe,+TX+77301!3b1!8m2!3d30.3026313!4d-95.4582749!3m4!1s0x86473940f11f018f:0x63a51f46448880ac!8m2!3d30.3028688!4d-95.4583982" target="_blank">
					<p class="address">600 Frazier St. Conroe 77301</p>
				</a>
				<div class="redes">
					<ul class="redes">
						<li class="facebook">
							<a href="https://www.facebook.com/ibhconroe/" target="_blank"><img src="/images/facebook.png"></a>
						</li>
						<li class="twitter">
							<a href="https://twitter.com/ibhconroe" target="_blank"><img src="/images/twitter.png"></a>
						</li>
						<li class="mail">
							<a href="mailto:ibhconroe@gmail.com" target="_blank"><img src="/images/btn_mail.png"></a>
						</li>
					</ul>
				</div>
				<p class="design">Made with <span class="error">&lt;3</span> by Elisa Martinez</p>
			</div>
			<div class="footer-navs col-sm-12 col-md-7">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<ul>
						  <li><a href="/"><span class="fa fa-home"> </span> Menú</a></li>
	                     <li><a href="/servicios"><span class="fa fa-clock"> </span> Servicios</a></li>
	                     <li><a href="/eventos"><span class="fa fa-calendar-alt"> </span> Eventos</a></li>
	                     
	                     <li><a href="/quienessomos"><span class="fa fa-question-circle"> </span> Quiénes Somos</a></li> 
	                     <li ><a href="/galeria"><span class="fa fa-images"> </span> Galería</a></li>
	                     <li><a href="/contactos"><span class="fa fa-envelope"> </span> Contactos</a></li>


	                     

	             @if(auth()->guest())
				  <li><a href="/login"><span class="fas fa-unlock-alt"> </span> Admin</a></li>
       		  	@endif
       		  	@if(auth()->check())
       		  			<p class="text-center">{{ auth()->user()->name }}</p>
       		  			<li><a href="/logout"><span class="fas fa-unlock-alt"> </span> Cerrar Sesion</a></li>
       		  	@endif

					</ul>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3">
					<h6>Recursos</h6>
					<ul>
						<li><a href="http://www.biblia.es/reina-valera-1960.php" target="_blank"><span class="fas fa-book"> </span> Biblia Online</a></li>
						<li><a href="#"><span class="fas fa-calendar"> </span> Calendario</a></li>
					</ul>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3">
					<h6>Contáctanos</h6>
					<ul>
						<li><a href="/oracion"><span class="fas fa-hand-paper"> </span> Pedir Oración</a></li>
						<li><a href="/contactos"><span class="fas fa-pencil-alt"> </span> Escríbenos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h6>Quienes somos</h6>
					<ul>
						<li><a href="/quienessomos#section6"><span class="fas fa-hand-point-up"> </span> En qué creemos</a></li>
						<li><a href="/lideres"><span class="fas fa-angle-double-right"> </span> Líderes</a></li>
						<li><a href="#top" class="scroll"><span class="fas fa-arrow-up"> </span> Volver arriba</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>