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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/historia/styles.css')}}">
    <meta name="MedicinaAUZ " content="Pagina Facultad de Medicina Universidad Autonoma de Zacatecas"
        http-equiv="Facultad de Medicina UAZ">
    <!--script type="text/javascript" src="scripts.js"></script!-->
    <title>Historia</title>
</head>

<body>

    <body>
        <div class="grid-container">
          @include('includes.nav')
            <div class="banner-container item">
                <div class="historia">
                    <h1>Historia</h1>
                    <!--p>
                        La misión de la Licenciatura es formar Médicos Generales con calidad profesional, valores éticos sólidos y formación humanista a través de una fundamentación científica, tecnológica, cultural y actualización médica continua, con liderazgo, actitud crítica, capaces de prevenir y solucionar ´problemas de salud, en el marco de un futuro sostenible al servicio de la sociedad.
                    </p-->
                </div>

                <main>
                    <div class='card'>
                      <div class='info'>
                        <h1 class='title'>Historia</h1>
                        <p class='description'>La misión de la Licenciatura es formar Médicos Generales con calidad profesional, valores éticos sólidos y formación humanista a través de una fundamentación científica, tecnológica, cultural y actualización médica continua, con liderazgo, actitud crítica, capaces de prevenir y solucionar ´problemas de salud, en el marco de un futuro sostenible al servicio de la sociedad.
                        </p>
                      </div>
                    </div>
                  </main>
            </div>
              @include('includes.footer')
      </div>
        <script src="{{ asset('js/toggle.js')}}"></script>
    </body>
</body>

</html>
