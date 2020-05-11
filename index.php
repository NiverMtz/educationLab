<?php 
  include 'header.php';
?>
<br><br>
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Bienvenido/a</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <!--<p class="login-box-msg">Iniciar sesión</p>-->
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Usuario" id="loginid" type="text" autocomplete="off" />
                  <!--<span
                    style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                    id="span_loginid"></span> -->
                  <!---Alredy exists  ! -->
                  <!--<span class="glyphicon glyphicon-user form-control-feedback"></span> -->
                  
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Contraseña" id="loginpsw" type="password" autocomplete="off" />
                  <!--<span
                    style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                    id="span_loginpsw"></span>-->
                  <!---Alredy exists  ! -->
                  <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" id="loginrem"> Recordarme
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Iniciar sesión</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
  <!--Banner-->
  <!--<div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border"> -->
              <!--<a href="#footer" class="btn-trial">¡ PRUEBA GRATUITA   !</a></li>-->
  <!--          </div>
            <div class="intro-para text-center quote">
              <p class="big-text"><i>The key to a better life</i></p><br>
              <p class="big-text">Education Lab busca <b>democratizar el saber</b>, llevarlo hasta donde la educación de
                calidad está más limitada.Ello a traves de un trabajo multidisciplinar que permita facilitar el
                conocimiento, volverlo más digerible y significativo, sin perder rigurosidad.</p> -->
              <!--a href="#footer" class="btn get-quote">GET A QUOTE</a-->
  <!--          </div>
            <a href="#feature" class="mouse-hover"> -->
              <!--<div class="mouse"></div>-->
  <!--          </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!--Créditos al autor-->
  <!--<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px"
    href="https://unsplash.com/@juniorferreir_?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
    target="_blank" rel="noopener noreferrer"
    title="Download free do whatever you want high-resolution photos from Júnior Ferreira">
    <span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg"
        style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32">
        <title>unsplash-logo</title>
        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z">
        </path>
      </svg>
    </span><span style="display:inline-block;padding:2px 3px">Júnior Ferreira</span></a>-->
  <!--/ Banner-->
  <!--Images Slider--><!--class="section-padding"-->
  <section id="talleres" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <!--<h2>Cursos y Talleres</h2>
          <p>Descripción o comentarios de los cursos y talleres...</p>-->
          <!--<hr class="bottom-line">-->
        </div>
      </div>
      <div id="c-slider">
        <div id="slider">
          <section><img src="img/banners/BANN01.png" alt=""></section>
          <section><img src="img/banners/BANN02.png" alt=""></section>
          <section><img src="img/banners/BANN03_03.png" alt=""></section>
          <section><img src="img/banners/BANN04.png" alt=""></section>
          <section><img src="img/banners/BANN05.png" alt=""></section>
          <section><img src="img/banners/BANN06.png" alt=""></section>
        </div>
        <div id="btn-prev">&#60;</div>
        <div id="btn-next">&#62;</div>
        <!-- script src="js/slider.js"></script -->
      </div>
  </section>

  </div>
  <!--Feature-->
  <!--section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Features</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni
            dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>¿Qué es Education Lab?</h4>
                <p>Education Lab es un centro de capacitación efectivo que brinda herramientas y servicios educativos de
                  calidad, tanto presenciales como en línea, con un valor de uso real capaz de incidir en las
                  capacidades, habilidades y comportamientos de las personas, en aras de reconstruir el tejido social y
                  mejorar las condiciones educativas y laborales de nuestros usuarios.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>¿Cuál es el objetivo de Education Lab?</h4>
                <p>Education Lab busca democratizar el saber, llevarlo hasta donde la educación de calidad está más
                  limitada. Ello a traves de un trabajo multidisciplinar que permita facilitar el conocimiento, volverlo
                  más digerible y significativo, sin perder rigurosidad.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>¿Por qué es necesario Education Lab?</h4>
                <p>Por la lacerante desigualdad que impide a muchos el acceso a una educación de calidad.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section-->
  <!--/ feature-->
  <!--Organisations-->
  <!--section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>No tienen acceso a recursos...</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Viven en marginación...</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Quieren comprender temas de relevancia social...</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt">¿Por qué es necesario Education Lab?</h3>
              <h4 class="sm-txt"></h4>
            </hgroup>
            <p class="det-p">Por la acelerante desigualdad que impide a muchos
               el acceso a una educación de calidad.</p>
          </div>
        </div>
      </div>
    </div>
  </section-->
  <!--/ Organisations-->
  <!--Sección de pruebas-->
  <section id="conocenos">
    <div>
      <div class="w-container col-12">
        <!--<div class="margin-80">-->
          <div class="flex-row-container reverse">
            <div class="flex-item _2-items pqcursa">
              <div class="flex-row-container align-top justify-start">
                <h1 class="h1-gris5 _28pts" >¿Qué es  </h1><img src="img/logo_EL_001.png" width="200px" alt=""
                  class="image">
                <h1 class="h1-gris5 _28pts">?</h1>
              </div><br>
              <!--class="text-gris5 _18pts-->
              <p>Un centro de capacitación efectivo que brinda herramientas, tanto presenciales como en línea, con potencial real de incidir en las capacidades, habilidades y comportamientos de las personas. </p>
            </div>
            <div class="flex-item _2-items">
              <video width="450px" controls> <!--autoplay --> 
                <source src="img/EducationLab_0.mp4" type="video/mp4">
              </video>
              <!--<img src="img/services_1.png" width="auto" alt="" class="image-56"> -->
            </div>
          </div>
        <!--</div> -->
      </div>
    </div>
  </section>
  <section>
    <div>
      <div class="w-container">
        <div class="margin-80">
          <div class="flex-row-container reverse">
            <div class="flex-item _12-items pqcursa">
              <div class="flex-row-container align-top justify-start">
                <h1 class="h1-gris5 _28pts">¿Qué ofrece  </h1><img src="img/logo_EL_001.png" width="200px" alt=""
                  class="image">
                <h1 class="h1-gris5 _28pts">?</h1>
              </div><br><!-- class="text-gris5 _18pts" -->
              <p>Capacitaciones con potencial real de transformar la vida de las personas a través de un aprendizaje significativo. </p>
            </div>
            <div class="flex-item _12-items centered"><img src="img/services_2.png" width="auto" alt=""
                class="image-56"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div>
      <div class="w-container">
        <div class="margin-80">
          <div class="flex-row-container reverse">
            <div class="flex-item _12-items pqcursa">
              <div class="flex-row-container align-top justify-start">
                <h1 class="h1-gris5 _28pts">¿Cuál es el objetivo de <img src="img/logo_EL_001.png" width="200px" alt=""
                  class="image">?</h1>
                <h1 class="h1-gris5 _28pts">?</h1>
              </div><br><!-- class="text-gris5 _18pts" -->
              <p><b>Democratizar el saber</b>, llevarlo hasta donde la educación de calidad está más limitada, en aras de mejorar la calidad de vida de las personas. </p>
            </div>
            <div class="flex-item _12-items centered"><img src="img/services_2.png" width="auto" alt=""
                class="image-56"></div>
          </div>
        </div>
      </div>
    </div>
    <!--<div>
      <div class="w-container">
        <div class="margin-80">
          <div class="flex-row-container reverse">
            <div class="flex-item _2-items centered"><img src="img/services_3.png" width="auto" alt=""
                class="image-56"></div>
            <div class="flex-item _2-items pqcursa">
              <div class="flex-row-container align-top justify-start">
                <h1 class="h1-gris5 _28pts">¿Cuál es el objetivo de <img src="img/logo_EL_001.png" width="200px" alt=""
                  class="image">?</h1>
              </div>
              <p class="text-gris5 _18pts" style="line-height: 1.5"><b>Democratizar el saber</b>, llevarlo hasta donde la educación de calidad está más limitada, en aras de mejorar la calidad de vida de las personas. </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>-->
  </section>
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12" align="center">
          <div class="detail-info">
            <!-- <hgroup> -->
              <h1 class="det-txt">¿Por qué es necesario Education Lab?</h1><br>
              <!-- <h4 class="sm-txt"></h4>-->
           <!-- </hgroup> class="det-p"-->
            <p>Por la acelerante desigualdad que impide a muchos
               el acceso a una educación de calidad.</p><bR>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="orga-stru">
              <h3>12.6%</h3>
              <p>De las empresas imparten algún tipo de capacitación a sus trabajadores.</p>
              <i class="fa fa-building"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="orga-stru">
              <p>Menos del </p>
              <h3>35%</h3>
              <p>de personas que reciben capacitación en las pequeñas y medianas empresas son mujeres</p>
              <i class="fa fa-female"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="orga-stru">
              <h3>7.7%</h3>
              <p>De las empresas dedicadas al comercio cuentan con algún tipo de capacitación</p>
              <i class="fa fa-cog"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="orga-stru">
              <h3>66.8%</h3>
              <p>De las personas que trabajan en TICS lo hacen en empresas</p>
              <i class="fa fa-users"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="orga-stru">
              <p>Las mujeres en México dedican </p>
              <h3>2.5</h3>
              <p>veces más de tiempo a las labores del hogar que los hombres</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="orga-stru">
              <p>México es el país de la OCDE que presenta la brecha laboral más grande en cuanto a trabajo remunerado</p>
              <i class="fa fa-dollar"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Cta-->
  <!--<section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">¡Subscribete ahora!</h2>
          <p class="cta-2-txt">Aplica por tu membresía
          </p>
          <div class="cta-2-form text-center">
            <form action="#" method="post" id="workshop-newsletter-form">
              <input name="" placeholder="Ingresa tu email" type="email">
              <input class="cta-2-form-submit-btn" value="Suscribete" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--/ Cta-->
  <!--Testimonial-->
   <!--<section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">Comentario de nuestros suscriptores.</h2>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">Me agragda que...
              </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par"> Es un proyecto...
            </p>  
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Capacitaciones efectivas</h2>
          <p></p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right" >
          <figure class="imghvr-fold-up" style="border: 2px solid #085D9D;">
            <img src="img/banners/BANN05.png" class="img-responsive" >
            <figcaption>
              <h2 style="color: #239FC0; text-align: center; font-size: 20px">Aprender a aprender en la WEB</h2>
              <p style="color: #000; font-size: 15px">Brinda estrategias de búsqueda de información en internet y manejo de herramientas informáticas para aumentar la independencia educativa.</p>
            </figcaption>
            <!--<a href="#"></a>-->
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <!--<figure class="imghvr-fold-up">-->
            <img src="img/banners/BANN00.png" class="img-responsive" style="border: 2px solid #20A4C9;">
            <!--<figcaption>
              <h2>¿Cómo ser docente en el Siglo XXI?</h2>
              <p>Enseñará a los profesores como actualizarse de forma autónoma en un torno donde las nuevas formas de enseñanza y aprendizaje se revolucionan constantemente.</p>
            </figcaption>-->
            <!--<a href="#"></a>-->
          <!--</figure>-->
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="border: 2px solid #1EA5C2;">
            <img src="img/banners/BANN06.png" class="img-responsive">
            <figcaption>
              <h2 style="color: #239FC0; text-align: center; font-size: 20px">Herramientas digitales para el Mundo Laboral Contemporáneo</h2>
              <p style="color: #000; font-size: 15px">Habilidades computacionales que debe poseer cualquier profesionista para optimizar el trabajo coorporativo</p>
            </figcaption>
            <!--<a href="#"></a>-->
          </figure>
        </div>
      </div>
    </div>
     <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="border: 2px solid #66D3D6;">
            <img src="img/banners/BANN02.png" class="img-responsive">
            <figcaption>
              <h2  style="color: #239FC0; text-align: center; font-size: 20px">¿Cómo ser docente en el Siglo XXI?</h2>
              <p style="color: #000; font-size: 15px">Enseñará a los profesores como actualizarse de forma autónoma en un torno donde las nuevas formas de enseñanza y aprendizaje se revolucionan constantemente.</p>
            </figcaption>
            <!--<a href="#"></a>-->
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="border: 2px solid #426578;">
            <img src="img/banners/BANN04.png" class="img-responsive">
            <figcaption  style="border: 1px solid #085D9D;">
              <h2 style="color: #239FC0; text-align: center; font-size: 20px">Deconstruyendo la Masculinidad</h2>
              <p style="color: #000; font-size: 15px">A partir de ejercicios prácticos y simulación de actividades cotidianas, develaremos la violencia machista que se expresa en prácticas habituales en aras de reorientar la conducta al respecto.</p>
            </figcaption>
            <!--<a href="#"></a>-->
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="border: 2px solid #C0D8E4;" >
            <img src="img/banners/BANN03_03.png" class="img-responsive">
            <figcaption>
              <h2 style="color: #239FC0; text-align: center; font-size: 20px">Enfoques imprescindibles del Mundo Contemporáneo</h2>
              <p style="color: #000; font-size: 15px">Versará cuatro pilares básicos del mundo contemporáneo: “Derechos Humanos”, “Perspectiva de Género”, “Perspectiva de Juventud” e “Interculturalidad”.</p>
            </figcaption>
            <!--<a href="#"></a>-->
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <!--Pricing-->
  <!--section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Pricing</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni
            dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table"-->
            <!-- Plan  -->
<!--
            <div class="pricing-head">
              <h4>Monthly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">200</span>
            </div-->

            <!-- Plean Detail -->
<!--            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table"-->
            <!-- Plan  --><!--
            <div class="pricing-head">
              <h4>Quarterly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">800</span>
            </div-->

            <!-- Plean Detail -->
 <!--           <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table"-->
            <!-- Plan  --><!--
            <div class="pricing-head">
              <h4>Year Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
            </div-->

            <!-- Plean Detail -->
<!--            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!--/ Pricing-->
  

  <?php
   include 'footer.php';
  ?>