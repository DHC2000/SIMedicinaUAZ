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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mision/styles.css')}}">
    <meta name="MedicinaAUZ " content="Pagina Facultad de Medicina Universidad Autonoma de Zacatecas"
        http-equiv="Facultad de Medicina UAZ">
    <!--script type="text/javascript" src="scripts.js"></script!-->
    <title>Mision y Vision</title>
</head>
    <body>
      <div class="grid-container">
        @include('includes.nav');
        <div class="banner-container item">

            <div class="conocenos">
                <h1>Conócenos</h1>
            </div>

            <div class="container-mision">
                <!-- these radio buttons hold state of which card is in front and which toggle button is visible -->
                <input type="radio" name="sushi-lunch" id="happy-radio">
                <input type="radio" name="sushi-lunch" id="lovers-radio" checked>

                <div class="selector">
                  <label for="happy-radio" class="happy-card">
                    <h1>Misión</h1>

                    <p>La misión de la Licenciatura es formar Médicos Generales con calidad profesional, valores éticos sólidos y formación humanista a través de una fundamentación científica, tecnológica, cultural y actualización médica continua, con liderazgo, actitud crítica, capaces de prevenir y solucionar ´problemas de salud, en el marco de un futuro sostenible al servicio de la sociedad.</p>
                  </label>

                  <label for="lovers-radio" class="lovers-card">
                    <h1>Visión</h1>

                    <p>La Licenciatura de Médico General se visualiza con un amplio reconocimiento social y liderazgo por su excelencia académica de competencia nacional e internacional, capaz de atender las exigencias actuales de la formación médica, educación, promoción de la salud e investigación en el marco de un futuro sostenible al servicio de la sociedad.
                    </p>
                  </label>

                  <label for="happy-radio" class="happy-pick">Mision !</label>
                  <label for="lovers-radio" class="lovers-pick">Vision !</label>
                </div>
              </div>
        </div>
        @include('includes.footer');
      </div>
        <script src="{{ asset('js/toggle.js')}}"></script>
    </body>
</html>
