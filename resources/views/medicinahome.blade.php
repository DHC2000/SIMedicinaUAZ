<!DOCTYPE html>
<html>

<head>


	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"> </script>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<meta name="MedicinaUAZ " content="Pagina Facultad de Medicina Universidad Autonoma de Zacatecas"
		http-equiv="Facultad de Medicina UAZ">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
	<title>Medicina UAZ</title>

</head>

<body class="body">

	<div class="loader-container">
		<div class="lds-roller">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<div class="grid-container">
    @include('includes.nav')

		<div class="banner-container item">
			<div class="slider">
				<div class="slide active">
          <img src="{{ asset('css/imgs/imgAniversario.jpg')}}" class="d-block w-100" alt="...">
					<!--div class="info">
						<h2>Winter Mountains</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
					</div-->
				</div>
				<div class="slide">
          <img src="{{ asset('css/imgs/imgDoctoradoPNPC.jpg')}}" class="d-block w-100" alt="...">
					<!--div class="info">
						<h2>Tropical Desert</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
					</div-->
				</div>
				<div class="slide">
          <img src="{{ asset('css/imgs/imgMisionVisionValores.jpg')}}" class="d-block w-100" alt="...">
					<!--div class="info">
						<h2>Steaming Volcanoes</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
					</div-->
				</div>

				<div class="navigation">
					<i class="fas fa-chevron-left prev-btn" id="btnPrev"></i>
					<i class="fas fa-chevron-right next-btn" id="btnNext"></i>
				</div>
				<div class="navigation-visibility">
					<div class="slide-icon active"></div>
					<div class="slide-icon"></div>
					<div class="slide-icon"></div>
					<div class="slide-icon"></div>
					<div class="slide-icon"></div>
				</div>
			</div>

</div>

<div class="bttnArrows">
	<button class="arrows">
		<i class="fas fa-arrow-down"></i>
		<i class="fas fa-arrow-up menu-visible"></i>

	</button>
</div>

<div class="sec-menu item menu-visible">
	<ul>
		<li><a href=" "> Equidad & acoso </a> </li>
		<li><a href=" "> Investigacion </a> </li>
		<li><a href=" "> Vinculacion </a> </li>
		<li><a href=" "> Clinica Universitaria </a> </li>
		<li><a href=" "> Vida Universitaria </a> </li>
		<li><a href=" "> Mindfulness </a> </li>
		<li><a href=" "> Arte y cultura </a> </li>
		<li><a href=" "> Deporte </a> </li>

	</ul>

</div>
<div class="contact-container item">

	<h2 class="f-title">Contacto </h2>
	<ul>
		<li> <i class="fas fa-phone-alt"></i>(492) 925 6690.</li>
		<li> <i class="fas fa-envelope"></i>s.academia.medicina@uaz.edu.mx</li>
		<li><i class="fas fa-phone-alt"></i>(493) 688 0026 (Ext.Fresnillo) </li>
		<li> </li>
		<li> </li>
	</ul>

</div>
<div class="sites-container item">
	<h2 class="f-title">Sitios de interes</h2>
	<ul>
		<li><a href="https://contraloriasocial.uaz.edu.mx/"> <img src="imgs/contraloria.png"> </a> </li>
		<li><a href="http://www.ciees.edu.mx/index.php/programas/programas"> <img src="imgs/ciees.png" alt="ciees"> </a> </li>
		<li><a href="https://www.gob.mx/sep"> <img src="imgs/sep.png" alt=""> </a> </li>
		<li><a href="http://www.anuies.mx/anuies/instituciones-de-educacion-superior/institucion.php?varSectionID=22&varIDInstitucion=1541"> <img src="imgs/anuies.png" alt=""></a> </li>
		<li><a href="https://conacyt.mx/ "> <img src="imgs/conacyt.png" alt=""></a> </li>
		<li><a href="https://www.copaes.org/"> <img src="imgs/copaes.png" alt=""></a> </li>
		<li><a href="http://www.cumex.org.mx/"> <img src="imgs/cumex.png" alt=""></a> </li>
		<li><a href="https://izai.org.mx/"> <img src="imgs/img_izai.png" alt=""></a> </li>
		<li><a href="https://www.plataformadetransparencia.org.mx/"> <img src="imgs/imgPNT.png" alt=""></a> </li>

	</ul>

</div>
<div class="maps-container item">
	<h2 class="f-title">Ubicacion </h2>
	<ul>
		<li><i class="fas fa-map-marker-alt"></i> <a
				href="https://www.google.com.mx/maps/place/Medicina+Humana+UAZ/@22.7709873,-102.6443775,17z/data=!4m13!1m7!3m6!1s0x868251f2e8abf3d1:0x8de764e02088d3b3!2sEnfermer%C3%ADa+UAZ,+98000+Zacatecas,+Zac.!3b1!8m2!3d22.7712198!4d-102.6427829!3m4!1s0x868251f28a1f53eb:0xe64fe77dc69d3adb!8m2!3d22.77033!4d-102.641414"
				target="_blank">Carretera Zacatecas - Guadalajara,Kilómetro 6, Ejido la Escondida. CP 98160, Zacatecas,
				Zacatecas México </a></li>

		<li><i class="fas fa-map-marker-alt"></i> <a
					href="https://wego.here.com/directions/mix//Medicina-Humana-Uaz-Extensi%C3%B3n-Fresnillo-Oficial,-Calle-Gonz%C3%A1lez-Echeverr%C3%ADa,-El-Olivar-Manuel-m-Ponce,-99070-Fresnillo:e-eyJuYW1lIjoiTWVkaWNpbmEgSHVtYW5hIFVheiBFeHRlbnNpXHUwMGYzbiBGcmVzbmlsbG8gT2ZpY2lhbCIsImFkZHJlc3MiOiJDQVJSRVRFUkEgRlJFTklMTE8tIFpBQ0FURUNBUyBLTSA1IEVKSURPIENFUlJPIERFIENISUxJVE9TLCA5OTAwMCBGcmVzbmlsbG8gZGUgR29uelx1MDBlMWxleiBFY2hldmVyclx1MDBlZGEsIE1cdTAwZTl4aWNvIiwibGF0aXR1ZGUiOjIzLjE3Njk0NSwibG9uZ2l0dWRlIjotMTAyLjg2MDc2LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjE0MzY2ODAzNTc5MjMxNH0=?map=23.17694,-102.86076,15,normal&fb_locale=es_LA"
					target="_blank">Calle González Echeverría, El Olivar Manuel m Ponce, 99070 Fresnillo, México</a></li>
	</ul>
</div>
<div class="networks-container item">
	<h2 class="f-title">Siguenos </h2>
	<ul>
		<li> <a href="https://www.facebook.com/medicinahumanauaz/" target="_blank"> <i
					class="fab fa-facebook"></i></a></li>

		<li> <a href="https://es-la.facebook.com/MedicinaUAZFresnillo/" target="_blank"> <i
						class="fab fa-facebook-square face-fresnillo"></i></a></li>
						<p>(Ext. Fresnillo) </p>

	</ul>
</div>

</div>
</body>

</html>
