<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"> </script>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
  <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
	<meta name="MedicinaUAZ " content="Pagina Facultad de Medicina Universidad Autonoma de Zacatecas" http-equiv="Facultad de Medicina UAZ">
	<meta name="author" content="Diego Hernandez Carrillo - UPZ">

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
				@include('includes.carousel')
		</div>
<!--div class="bttnArrows">
	<button class="arrows">
		<i class="fas fa-arrow-down"></i>
		<i class="fas fa-arrow-up menu-visible"></i>
	</button>
</div-->

	<div class="sec-menu item menu-visible">
		<!--ul>
			<li><a href=" "> Equidad & acoso </a> </li>
			<li><a href=" "> Investigacion </a> </li>
			<li><a href=" "> Vinculacion </a> </li>
			<li><a href=" "> Clinica Universitaria </a> </li>
			<li><a href=" "> Vida Universitaria </a> </li>
			<li><a href=" "> Mindfulness </a> </li>
			<li><a href=" "> Arte y cultura </a> </li>
			<li><a href=" "> Deporte </a> </li>
		</ul-->
	</div>
</div>
	@include('includes.footerBST')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script-->
<script type="text/javascript" src="{{ asset('js/toggle.js') }}"></script>
</body>
</html>
