<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"> </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/directorio/styles.css')}}">
    <meta name="MedicinaAUZ " content="Pagina Facultad de Medicina Universidad Autonoma de Zacatecas"
        http-equiv="Facultad de Medicina UAZ">
    <!--script type="text/javascript" src="scripts.js"></script!-->
    <title>Directorio</title>
</head>

<body>

    <body>
        <div class="grid-container">
          @include('includes.nav')
            <div class="banner-container item">
                <div class="directori-title">
                    <h1>Directorio</h1>
                </div>
                <div class="container-directorio">
                    <div class="directorio">
                        <h2>Directorio</h2>

                        <p>
                            <span class="activo">
                                Dra. Rosa Martha Covarrubias Carrillo <br>
                                <strong> Directora</strong> <br>
                                            (492) 925 6690 Ext 4500
                                        <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. Elda Araceli García Mayorga <br>
                                <strong> Secretaria Académica </strong>  <br>
                                        (492) 925 6690 Ext 4500
                                        <br>
                            </span>
                             <br>
                            <span class="activo">
                                C.P. Martha Lorena García Macias <br>
                                <strong> Secretaria Administrativa</strong>  <br>
                                            (492) 925 6690 Ext 4505
                                        <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. en C. Lorena Ávila Carrasco <br>
                                <strong> Responsable de Programa Académico de Licenciatura Médico General</strong>  <br>
                                            (492) 925 6690 Ext 4502
                                        <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. Cristina Almeida Perales <br>
                                <strong> Responsable del Programa Académico de Maestría en Ciencias de la Salud</strong>  <br>
                                            (492) 925 6690 Ext 4526
                                        <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. Margarita de la Luz Martínez Fierro<br>
                                <strong>Responsable del Doctorado en Medicina Molecular</strong>  <br>
                                            <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dr. Ernesto Alvarado Flores<br>
                                <strong> Coordinador de la Extensión Fresnillo</strong>  <br>
                                            (492) 108 5053
                                        <br>
                            </span>
                            <br>
                            <span class="activo">
                                Mtra. Nelly Marisol Murillo Rosales <br>
                                <strong>Responsable del UCOBI / Departamento Escolar</strong>  <br>
                                            (492) 925 6690 Ext 4508
                                        <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. Mireya Neriza Rivas Pérez <br>
                                <strong> Coordinadora de la Clínica Universitaria</strong>  <br>
                                            (492) 925 6690 Ext 4515
                                            <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. Dellanira Ruiz de Chávez Ramírez <br>
                                <strong> Corrdinadora  Gestión de la Calidad</strong>  <br>

                            </span>
                            <br>
                            <span class="activo">
                                M. E. Yesica Alatorre Flores<br>
                                <strong> Responsable de Administración Académicaa</strong>  <br>
                                            (492) 925 6690 Ext 4500
                                            <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dr. Oscar Gustavo Meza Zavala<br>
                                <strong> Coordinador de Área Clínica, Internado y Servicio Social</strong>  <br>
                                            (492) 925 6690 Ext 4502 <br>
                                            <br>
                            </span>
                            <br>
                            <span class="activo">
                                Dra. Graciela Guel Alvarado<br>
                                <strong> Coordinador Educación Médica Contínua</strong>  <br>
                                            (492) 925 6690 Ext 4506 <br>
                            </span>

                        </p>

                    </div>

                    <div class="organigrama">

                    </div>
                </div>

            </div>
            @include('includes.footer')
        </div>
        <script src="{{ asset('js/toggle.js')}}"></script>
    </body>
</body>

</html>
