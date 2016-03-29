<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Slider" />
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
  </head>


  <body>
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Domotic</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Cuisine</a></li>
        <li><a href="badges.html">Salle de bain</a></li>
        <li><a href="collapsible.html">Chambre</a></li>
        <li><a href="mobile.html">Salon</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Home</a></li>
        <li><a href="sass.html">Cuisine</a></li>
        <li><a href="badges.html">Salle de bain</a></li>
        <li><a href="collapsible.html">Chambre</a></li>
        <li><a href="mobile.html">Salon</a></li>
      </ul>
    </div>
  </nav>



    <div id="wowslider-container1">
  	<div class="ws_images"><ul>
  		<li><img src="data1/images/domotiqueinfolinkioschema.png" alt="http://wowslider.com/" title="domotique-info-linkio-schema" id="wows1_0"/></li>
  		<li><img src="data1/images/domotiquemaison1.jpg" alt="domotique-maison-1" title="domotique-maison-1" id="wows1_1"/></li>
  	</ul></div>
  	<div class="ws_bullets"><div>
  		<a href="#" title="domotique-info-linkio-schema"><span><img src="data1/tooltips/domotiqueinfolinkioschema.png" alt="domotique-info-linkio-schema"/>1</span></a>
  		<a href="#" title="domotique-maison-1"><span><img src="data1/tooltips/domotiquemaison1.jpg" alt="domotique-maison-1"/>2</span></a>
  	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider</a> by WOWSlider.com v8.7</div>
  	<div class="ws_shadow"></div>
  	</div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  	<script type="text/javascript" src="engine1/wowslider.js"></script>
  	<script type="text/javascript" src="engine1/script.js"></script>
    <script>
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      })
    </script>

  </body>
</html>
