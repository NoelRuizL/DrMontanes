<!doctype html>
<html>
<head>
<meta name="encoding" charset="utf-8" /> 
<!-- encoding ALWAYS before 1024 BYTES of the document -->

<!-- Lenguage Meta-->
<meta name="lang" content="es-ES" />
<!-- HELLO...I AM HERE-->
<meta name="author" content="Noel Ruiz Lopez" />
<!-- THIS TEXT WILL APPEAR WHEN YOU SEARCH WITH A ENGINE AS GOOGLE -->
<meta name="description" content="Página oficial del Pianista y compositor David Montañes. Aqui encontraras gran parte de sus composiciones y textos, sus colaboraciones con otras cartas y podras estar al dia de noticias y novedades relacionadas con las actividades en las que participa ">
<!-- IMPORTANT!! SEO -->
<meta name="keywords" content="David Montañes, Dr Montañes, piano granada, compositores granada, Tennica, Dr Montañes y su Equipo medico " />
<!--DEFAULT CSS -->
<meta http-equiv="default-style" content="principal" />
<!-- ROBOTS info -->
<meta name="robots" content="index, follow" />
<!--   ESTO PARA DESPUES DE 3000 segundos SALTAR AL ORACULO Sola
<meta http-equiv="refresh" content="3000; URL=Oraculo.html" />
 -->
<!-- FOR Responsive Design -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- INSTRUCTIONS FOR IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

<!---================END META CONTEXT ========================---->


<!-- TemplateBeginEditable name="doctitle" -->
<title>David Montañes y el XX</title>
<!-- TemplateEndEditable -->

<!-- ===================CSS CONTENT ============================-->
<!-- TemplateBeginEditable name="head" -->
<link rel="stylesheet" href="../css/principal.css"  type="text/css" title="principal">
<link rel="stylesheet" href="../css/reset.css"  type="text/css">
<link rel="stylesheet" href="../css/introEffect.css"  type="text/css">
<link rel="stylesheet" href="../css/icon.css"  type="text/css">
<link rel="stylesheet" href="../css/menu.css"  type="text/css">
<link rel="stylesheet" href="../css/audioStyle.css"  type="text/css">



<!-- ===============END CSS CONTENT ================================ -->
<!-- TemplateEndEditable -->

<!-- jquery Script -->
<script type="text/javascript" src="../lib/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../lib/js/jquery/jquery-migrate-1.2.1.min.js"></script>


<!-- MASTERSLIDER  -->

<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="../css/masterslider/masterslider.css" />
<!-- Master Slider Skin -->
<link rel='stylesheet' href="../css/masterslider/style.css"  type='text/css'>
<!-- MasterSlider Template Style -->
<link rel='stylesheet' href='../css/masterslider/ms-gallery-style.css' type='text/css'>
<link rel='stylesheet' href='../css/masterslider/ms-videogallery.css'  type='text/css'>

<!-- google font Lato -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
 
<!-- jQuery 
<script src="..lib/masterslider/jquery-1.10.2.min.js"></script>
<script src="..lib/masterslider/jquery.easing.min.js"></script> -->

<!-- Master Slider -->
<script src="../lib/masterslider/masterslider.min.js"></script>

<!-- END MASTER SLIDER -->
<!-- AUDIO SUPPORT -->
<link rel="stylesheet" href="../css/audio/mediaelementplayer.min.css" />
<script src="../lib/audio/mediaelement-and-player.min.js"></script>
<!-- END AUDIO SUPPORT -->



<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<!--
*                  BODY
*
*                  BODY
*
*                  BODY
*
*-->
<body id="page">

	<!-- linea negra que se queda con scroll -->
	<div class="lineaSuperior" style="background-color:#1A1A1A"></div>
    <div class="cruzSuperior" style="background-color:#fff"></div>
    <div class="lineaSuperior2 fuenteMarca" style="background-color:#fff">
    	<h1 class="titulo">David Montañes </h1>
       	<h2 class="descripcion">Pianista y Compositor </h2>
    </div>
	
    <div id="introcontainer" class="introcontainer intro-effect-sliced">
  		<!--
        <div id="logoBox" class="logo fuenteTitulo">
        	<h1 class="titulo">David Montañes </h1>
        </div> -->
        <!-- menu related with menu.css -->
		<?php include('../include/menu.php'); ?>
        
    
    
    	<!-- INTRO EFFECT  related with introEffect.css -->
	    <header id="Cabecera" class="headerIntro anchoMaximo">
    		<div class="bg-img">
    	    	<img src="../images/intro/2.jpg" alt="Background Image" />
    	    </div>
    	    <div class="titleCabecera">
       		 	<div>
       		      	 <h1 class="titulo">David Montañes </h1>
       	    	     <h2 class="descripcion">Pianista y Compositor </h2>
	            </div>
    	    </div>
        	<div class="bg-img">
	        	<img src="../images/intro/2.jpg" alt="Background Image" />
        	</div>    
		</header>
    	<button class="trigger" data-info="Entrar" onClick="LoadLanguage()"><span>Entrar || Enter</span></button>
	
    
    
    	<!-- CONTENIDO PRINCIPAL -->
    	<main id="contenido" class="contenido">
    		
            
            <div id="modulo1" class="modulo topSeparator">
    		<!-- UNA COLUMA -->
        		<div class="rowContainer bordeSuperior">
        	   	 	<section class="oneRow">
 						<?php include('../include/introText.php'); ?>
	                </section>
     	       </div>
        	</div>
   
   
   
            <div id="modulo2" class="modulo fondoNegroBordes">
    		<!-- DOS COLUMNAS-->
        		<div class="rowContainer">
        	   	 	<section class="twoRows">
	                    <header></header> 
	            		<div id="row1">
                        	<!-- Foto Vertical 30% FIGURE-->
                            <div id="fotoLat" >
							 					  
							</div>
    	                </div>
                    
        	            <div id="row2">
                        	<!-- Slider 70% FIGURE-->
                           <?php include('../include/sliderNews.php'); ?> 
<!-- 								<php include('../include/creacion/elmago.php'); ?> -->
            	        </div>
                	</section>
	        	</div>
            </div>
            
        	<div id="modulo3" class="modulo normalSeparator fondoNegroBordes">
    		<!-- UNA COLUMA -->
        		<div class="rowContainer">
        	   	 	<section class="fullRow">
 						   	<?php include('../include/sliderVideo.php'); ?>
                   	</section>
     	       </div>
        	</div>
            <div id="display" class="normalSeparator" style="width:100%">
            		<?php $disco='Diogenes'; include('../include/creacion/disco.php'); ?>
            </div>
            
    	</main>
    </div> <!--INTROCONTAINER-->
    
    
    
    <!-- Author And Lint to Softallica.com -->    
    <footer class="doubleSeparator fondoNegroBordes">
    LALALALALALA
    
    </footer>
    
   
    
<!-- SCRIPs----------------------->
    

<!-- INTRO SCRIPT --->
<script src="../lib/js/classie.js"></script>
<script src="../lib/js/scriptScroll.js"></script>
<script src="../lib/js/eventos.js" type="text/javascript" ></script>


<!-- MASTERSLIDER SCRIPT  -->
<script type="text/javascript">      
 
    var slider = new MasterSlider();
    slider.setup('masterslider' , {
        width:1000,
        height:500,
        space:10,
		autoplay:true,
		loop:true,
		speed:5,
        preload:3,
		startOnAppear:true,
        view:'fade'
    });
    slider.control('arrows');  
     
    var gallery = new MSGallery('ms-gallery-1' , slider);
    gallery.setup();
     
</script>
            
<script type="text/javascript">
 
    var slider2 = new MasterSlider();
     
    slider2.setup('masterslider2', {
        width : 1700,
        height : 956,
        space : 5,
        shuffle : true,
        autoplay:true,
		loop:true,
		speed:5,
        preload:3,
		startOnAppear:true,
        view : 'mask'
    });
     
    slider2.control('arrows');
    slider2.control('thumblist', {autohide : false,  dir : 'v'});
     
</script>

<!--    END MASTERSLIDERS   -->







</body>
</html>
