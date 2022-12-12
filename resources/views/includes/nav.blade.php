<div class="logo-container item"> </div>
<div class="bttnBars">
  <button class="toggle">
    <i class="fas fa-bars"></i>
  </button>
</div>
<nav class="main-menu item">
  <ul class="menu menu-visible">
    <li><a href=" "> Nosotros </a>
      <ul class="submn">
        <li><a href="{{ url('mision/')}}" target="_blank">Misión y Visión</a> </li>
        <li><a href="{{ url('historia/')}}" target="_blank">Historia</a> </li>
        <li><a href="https://www.medicinahumana-uaz.org/uploaded/files/PDIUAMHYCS2021-2025FINALavalado101121.pdf" target="_blank">Modelo Academico</a> </li>
        <li><a href="{{ url('directorio')}}" target="_blank">Directorio y Organigrama </a> </li>
        <li><a href="{{ url('HCUnidad')}}" target="_blank">H. Consejo de Unidad</a> </li>
        <li><a href="{{ url('direccion')}}" target="_blank">Dirección</a> </li>
        <!--li><a href="#">Secretaria Academica</a> </li>
        <li><a href="#">Secretaria Administrativa</a> </li>
        <li><a href="#">PDI</a> </li>
        <li><a href="#">Calidad</a> </li-->
      </ul>
    </li>

    <li><a href=" "> Planes de Estudio </a>
      <ul class="submn">
        @foreach($ofertas as $oferta)
           <form class="" action="{{ url('DatosPlan/'.$oferta->id.'/plan')}}" method="get">
                 <button class="btn-oferta" type="" name=""> <a type="submit" href="{{ url('DatosPlan/'.$oferta->id.'/plan')}}" target="_blank">{{$oferta->oferta}}</a></button>
           </form>
           @endforeach
      </ul>
    </li>
    <!--li><a href=" "> Docentes </a> </li>
    <li><a href=" "> Alumnos </a> </li>
    <li><a href=" "> Ingreso </a> </li>
    <li><a href=" "> Egresados </a> </li>
    <li><a href=" "> Educacion continua </a> </li!-->
    <li><a > Noticias & eventos </a> </li>
    <!--li><a href=" "> Escolares </a> </li>
    <li><a href=" "> Biblioteca </a> </li>
    <li><a href=" "> Campus en linea </a> </li-->
  </ul>
</nav>
