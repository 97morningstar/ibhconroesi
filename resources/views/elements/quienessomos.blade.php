<?php function activeMenuu($url){
    return request()->is($url) ? 'active' : '';
  }?>
@extends('layout.app')


@section('content')

<div class="container" id="quienes">

	<div class="col-md-9">
		<div id="section1"></div>
		<hr>
		<br>
		<br>
		<div class="color_entero_1 text-center" >
				<h2>Quiénes Somos</h2>
				<p>Somos una Iglesia Cristiana, Bautista, que está siendo plantada bajo los principios bíblicos que históricamente han identificado nuestra denominación.</p> 
		</div>

		
		<div id="section2"></div>
		<hr>
		<br>
		<br>
		<div class="color_entero_2 text-center" >
				<h2>Nuestros principios</h2>
				<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">Faceta que impacta</th>
							<th class="text-center">Principio</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td>Principio escatológico</td>
							<td>EL SEÑORÍO de JESUCRISTO</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Principio Hermenéutico</td>
							<td>La autoridad final del  NUEVO TESTAMENTO</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Principio Teológico</td>
							<td>EL BAUTISMO y la MEMBRESÍA DE LA IGLESIA son sólo para creyentes regenerados</td>
						</tr>
						<tr>
							<td>4.</td>
							<td>Principio Eclesiológico</td>
							<td>La IGLESIA LOCAL es autónoma.</td>
						</tr>
						<tr>
							<td>5.</td>
							<td>Principio sociológico</td>
							<td>EL GOBIERNO de la CONGREGACIÓN se efectúa mediante la decisión de todos sus miembros bajo la Dirección del Espíritu Santo y las Sagradas Escrituras. </td>
						</tr>	
						<tr>
							<td>6.</td>
							<td>Principio espiritual</td>
							<td>La LIBERTAD DE CONCIENCIA</td>
						</tr>		
						<tr>
							<td>7.</td>
							<td>Principio político</td>
							<td>La separación de la IGLESIA y el ESTADO.</td>
						</tr>			
						<tr>
							<td>8.</td>
							<td>Principio Evangelístico</td>
							<td>El Evangelismo personal y la mentalidad Misionera.</td>
						</tr>					
					</tbody>
				</table>
			</div>
		</div>
		<div id="section3"></div>
		<hr>
		<br>
		<br>
		<div class="color_entero_3">
			<h2>Visión</h2>
			<p>Ser La Iglesia de Jesucristo que nuestra Comunidad necesita para glorificar a Dios en cumplimiento de La Gran Comisión.</p>
		</div>
		<div id="section4"></div>
		<hr>
		<br>
		<br>
		<div class="color_entero_4">
			<div class="mision">
				<h2>Misión</h2>
				<ol class="mision">
					<li class="mision"><span>1.</span><p>Consolidarnos como una iglesia saludable, basada en los Principios Bíblicos de la Fe Cristiana, lo más cercana al modelo de Iglesia del Nuevo Testamento. </p></li>
					<li class="mision"><span>2.</span><p>Ser una iglesia orgánica, consolidada, con todos los ministerios formados y en acción: Evangelismo, Adoración, Educación Cristiana, Administración, etc. </p></li>
					<li class="mision"><span>3.</span><p>Ser una iglesia misionera que se abre al mundo para sustentar el evangelio de Jesucristo a otras naciones. </p></li>
					<li class="mision"><span>4.</span><p>Ser una iglesia modelo y de referencia, que glorifica a Dios y honre a sus patrocinadores. </p></li>
				</ol>
			</div>
		</div>
		<div id="section5"></div>
		<hr>
		<br>
		<br>
		<div class="color_entero_5">
			<h2>Nuestros valores</h2>
			<p>Declaramos que nuestros valores, para los cuales trabajaremos y usaremos como guía para consolidar nuestros planes estratégicos en el cumplimiento de la visión y misión de Dios en nuestra congregación, son los siguientes:</p>
			<ul>
				<li>Fidelidad a la Palabra de Dios y apego a la sana doctrina</li>
				<li>Alto nivel de santidad en cada uno de sus miembros</li>
				<li>Pasión por el trabajo evangelístico y misionero</li>
				<li>Madurez constante y crecimiento espiritual</li>
				<li>Fuerte liderazgo</li>
				<li>Adoración genuina. “Una iglesia con un poderoso ministerio de adoración tiene un 	potencial de crecimiento”</li>
				<li>Ayudar a los más necesitados en la iglesia y la comunidad</li>
				<li>Honestidad y transparencia</li>
				<li>Alto sentido de disciplina y disciplina de la permanencia</li>
			</ul>
		</div>
		<div id="section6"></div>
		<hr>
		<br>
		<br>
		<div class="color_entero_6">
			<h2>En qué creemos</h2>
			<p>Nuestra declaración de fe, para ser tenida en cuenta en cursos, talleres, escuelas y cualquier actividad de enseñanza de nuestra Iglesia</p>
			<div class="mision">
				<ol class="mision">
					<li class="mision"><span>1.</span><p><strong> LAS ESCRITURAS</strong> Creemos que la Biblia es la inspirada Palabra de Dios en su totalidad</p></li>

					<li class="mision"><span>2.</span><p><strong> LA TRINIDAD</strong> Creemos en un solo Dios, que existe eternamente en tres personas distintas: Padre, Hijo y Espíritu Santo</p></li>

					<li class="mision"><span>3.</span><p><strong> El Hombre</strong> Creemos que el hombre fue creado a la imagen de Dios, que no llego a existir como resultado de una evolución</p></li>

					<li class="mision"><span>4.</span><p><strong> Satanás</strong> Creemos que Satanás es el instigador del pecado, un ser espiritual real, y no simplemente la personificación del mal</p></li>

					<li class="mision"><span>5.</span><p><strong> La salvación</strong> Creemos que la sangre derramada en la cruz provee la base para el perdón de pecados y obtención de la Salvación, la cual es un don gratuito de Dios mediante la fe</p></li>

					<li class="mision"><span>6.</span><p><strong> La vida Cristiana</strong> Creemos que todo aquel que cree en Cristo debe vivir para Él y no para si mismo y debe vivir mediante el poder del Espíritu Santo que mora en él</p></li>

					<li class="mision"><span>7.</span><p><strong> La iglesia</strong> Creemos que la iglesia es el cuerpo de Cristo, de la cual Él es la cabeza, y cuyos miembros son todos aquellos que verdaderamente han recibido por medio de la fe</p></li>

					<li class="mision"><span>8.</span><p><strong> Las ordenanzas</strong> Creemos que las únicas ordenanzas para la iglesia reconocidas por las Escrituras, son el bautismo por inmersión en agua y la Cena del Señor</p></li>

					<li class="mision"><span>9.</span><p><strong> El eterno destino del hombre</strong> Creemos que solo hay dos destinos después de la muerte: para el que cree la presencia y compañía del Señor. El que no cree  queda inmediata y conscientemente separado de Dios, destinado a juicio, condenación y castigo eterno</p></li>

					<li class="mision"><span>10.</span><p><strong> Las cosas futuras</strong> Creemos que el siguiente evento profético es el arrebatamiento (rapto) de la iglesia. Luego le seguirá el período de siete años de la gran tribulación. Creemos que al final de la Gran Tribulación el señor Jesucristo regresará físicamente, en su segunda venida, para ejecutar juicio e introducir el reino milenial sobre la tierra por 1000 años. Después del milenio será seguido por el juicio final de Satanás, cuando sea lanzado eternamente dentro del lago de fuego; por el juicio del gran trono blanco y la resurrección corporal de aquellos que no creyeron en Cristo, por la creación de cielos y tierra nueva y por el eterno estado de las cosas.</p></li>
				</ol>
			</div>
		</div>
	</div>
	<div class="col-md-2" id="side_div">

		
		<div id="sidenav_1">
			<ul class="side">
				<a href="#section1"><li>Quiénes Somos</li></a>
				<a href="#section2"><li>Nuestros principios</li></a>
				<a href="#section3"><li>Visión</li></a>
				<a href="#section4"><li>Misión</li></a>
				<a href="#section5"><li>Nuestros Valores</li></a>
				<a href="#section6"><li>En qué creemos</li></a>
			</ul>
		</div>

	</div>
</div>
	@endsection