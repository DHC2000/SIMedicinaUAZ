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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/CUnidad/styles.css')}}">
    <meta name="MedicinaAUZ " content="Pagina Facultad de Medicina Universidad Autonoma de Zacatecas" http-equiv="Facultad de Medicina UAZ">
    <title>Consejo de Unidad</title>
</head>
<body>
   	 <div class="grid-container">
      @include('includes.nav')
   		 <div class="banner-container item">
            <div class="container-consejo">
                <h1>H. Consejo de Unidad</h1>
                <div class="consejo__inicio">
                    <a name="inicio"></a>
                        <h2>Objetivos y funciones</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos temporibus nemo architecto esse sit earum quo accusamus. In tempora, ab nisi quam nam modi voluptatibus magni unde commodi officiis consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, eveniet. Earum ipsum culpa repellendus nemo rem eos soluta. Illum aperiam earum vitae quisquam at incidunt iusto quia iure quibusdam numquam! <br>
                    </p>
                </div>
                <div class="consejo__integrantes">
                    <a name="integrantes"></a>
                    <h2> Integrantes</h2>
                   <div class="cards-integrantes">
                    <ul class="cards">
                        <li>
                          <a href="" class="card">
                            <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                                <div class="card__header-text">
                                  <h3 class="card__title">Dra. Rosa Martha Covarrubias Carrillo</h3>
                                  <span class="card__status">Presidente</span>
                                </div>
                              </div>
                              <p class="card__description">Correo: direcciónmedicina@uaz.edu.mx</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="card">
                            <img src="../imgs/EscudoUAZ.png" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                <div class="card__header-text">
                                  <h3 class="card__title"> Dr. Fernando Hernández del Real</h3>
                                  <span class="card__status">Consejero</span>
                                </div>
                              </div>
                              <p class="card__description"> Correo: drfernando.hedz@uaz.edu.mx</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="card">
                            <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                                <div class="card__header-text">
                                  <h3 class="card__title">Dra. Elda Araceli García Mayorga</h3>
                                  <span class="card__tagline">Secretaria</span>
                                  <!--span class="card__status">1 hour ago</span-->
                                </div>
                              </div>
                              <p class="card__description">Correo: s.academica.medicina@uaz.edu.mx</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="card">
                            <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                <div class="card__header-text">
                                  <h3 class="card__title">Univ. Fatima Palacios Rodríguez </h3>
                                  <span class="card__status">Consejero</span>
                                </div>
                              </div>
                              <p class="card__description">Correo: fatima3487@gmail.com</p>
                            </div>
                          </a>
                        </li>
                      </ul>
                   </div>
                </div>


                <div class="consejo__agenda">
                    <a name="agenda"></a>
                    <h2> Agendas</h2>
                  <div class="agenda-container">
                    <iframe src="https://calendar.google.com/calendar/embed?src=1190847%40upz.edu.mx&ctz=America%2FMexico_City" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                  </div>
                </div>


                <div class="consejo__actas">
                    <a name="actas"></a>
                    <h2> Actas</h2>
                    <div>
                         <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos temporibus nemo architecto esse sit earum quo accusamus. In tempora, ab nisi quam nam modi voluptatibus magni unde commodi officiis consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, eveniet. Earum ipsum culpa repellendus nemo rem eos soluta. Illum aperiam earum vitae quisquam at incidunt iusto quia iure quibusdam numquam! <br>

                    </p>
                </div>
                    <div>
                        <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos temporibus nemo architecto esse sit earum quo accusamus. In tempora, ab nisi quam nam modi voluptatibus magni unde commodi officiis consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, eveniet. Earum ipsum culpa repellendus nemo rem eos soluta. Illum aperiam earum vitae quisquam at incidunt iusto quia iure quibusdam numquam! <br>

                    </p>
                </div>
                    <div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos temporibus nemo architecto esse sit earum quo accusamus. In tempora, ab nisi quam nam modi voluptatibus magni unde commodi officiis consectetur.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, eveniet. Earum ipsum culpa repellendus nemo rem eos soluta. Illum aperiam earum vitae quisquam at incidunt iusto quia iure quibusdam numquam! <br>

                        </p>
                    </div>
                </div>

                <div class="consejo__consejoACS">
                    <a name="consejo"></a>
                    <h2> Representantes del H.Consejo del Area de Ciencias de la Salud</h2>
                    <div class="cards-consejo">

                        <ul class="cards">
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">Jessica Parker</h3>
                                      <span class="card__status">1 hour ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">kim Cattrall</h3>
                                      <span class="card__status">3 hours ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">Jessica Parker</h3>
                                      <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>
                                      <span class="card__status">1 hour ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">kim Cattrall</h3>
                                      <span class="card__status">3 hours ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                          </ul>
                    </div>
                </div>


                <div class="consejo__agenda">
                    <a name="consejo-U"></a>
                    <h2> Representantes del H.Consejo Universitario</h2>
                    <div class="consejoU">
                        <ul class="cards">
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">Jessica Parker</h3>
                                      <span class="card__status">1 hour ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">kim Cattrall</h3>
                                      <span class="card__status">3 hours ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">Jessica Parker</h3>
                                      <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>
                                      <span class="card__status">1 hour ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="" class="card">
                                <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                  <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                    <div class="card__header-text">
                                      <h3 class="card__title">kim Cattrall</h3>
                                      <span class="card__status">3 hours ago</span>
                                    </div>
                                  </div>
                                  <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                                </div>
                              </a>
                            </li>
                          </ul>
                    </div>
                </div>

            </div>
   		 </div>
   		 <div class="sec-menu item ">
   			 <ul>
              <li><a href="#inicio"> Inicio </a> </li>
              <li><a href="#integrantes "> Integrantes </a> </li>
              <li><a href=" #agenda"> Agendas </a> </li>
              <li><a href="#actas"> Actas</a> </li>
              <li><a href="#consejo"> H.Consejo del Area de Ciencias de la Salud</a> </li>
              <li><a href="#consejo-U"> H.Consejo Universitario</a> </li>
          </ul>
   		 </div>
       @include('includes.footer')
   	 </div>
     <script src="{{ asset('js/toggle.js')}}"></script>
</body>
</html>
