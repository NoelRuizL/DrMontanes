            <div id="modulo2" class="modulo fondoNegroBordes">
    		<!-- DOS COLUMNAS-->
        		<div class="rowContainer">
        	   	 	<section class="twoRows">
	                    <header></header> 
	            		<div id="row1">
                        	<!-- Foto Vertical 30% FIGURE-->
                            <div id="fotoDisco" >
                            	<?php
                            
					$directory="../mp3/Catastrofico/".$disco;
					$numero = 1; 
					$dirint = dir($directory);
     				$altura_maxima=100;
					while (($archivo = $dirint->read()) !== false)
					{
						if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
						
						$info_imagen = getimagesize($directory."/".$archivo);
						$imagen_ancho = $info_imagen[0];
						$imagen_alto = $info_imagen[1];
						
						
						$proporcion = ($altura_maxima * 100) / $imagen_alto;
						
						$altura_final = ($imagen_alto * $proporcion) / 100;
						$anchura_final = ($imagen_ancho * $proporcion) / 100;
						
						
						echo '<a href="'.$directory."/".$archivo.'">'."\n";
						echo '<img src="'.$directory."/".$archivo.'" width="'.$anchura_final.'%" height='.$altura_final.'%">'."\n".'</a>';
					}
}
					$dirint->close();
                                        ?>                             					  
							</div>
    	                </div>
                    
        	            <div id="row2">
                        	<!-- Slider 70% FIGURE-->
                            <article id="ElMago" class="">
                                <div class="main-album-info">
                                    <header class="entry-header">
                                        <h1 class="entry-title"> </h1>
                                        <div class="entry-meta">
                                            <div class="album-element">
                                                <span class="lab">Año: </span>
                                                <span class="val">1967</span>
                                            </div>
                                            <div class="album-element">
                                                <span class="lab">Año de edición: </span>
                                                <span class="val">1967</span>
                                            </div>
                                            <div class="album-element">
                                                <span class="lab">País: </span>
                                                <span class="val">España</span>
                                            </div>
                                            
                                            <div class="album-element">
                                                <span class="lab">Discografica: </span>
                                                <span class="val">Edigsa</span>
                                            </div>
                                            
                                            <div class="album-element">
                                                <span class="lab">Formato: </span>
                                                <span class="val">Larga Duración</span>
                                            </div>
                                        </div> 
                                    </header> 
                               </div>
                               <div class="album-text">
                               </div>
                               
                               <div class="portada">
                                   <div class="portadaContainer">
                                        <div class="girador">
                                             <div class="front">
                                                 <div class="back">
                                                 </div>
                                              </div>
                                         </div>
                                    </div>
                               </div>
                               
                               
                               <div class="cancionesContainer">
                                   <div class="vinilo">
                                        
                                   </div>
                                   <div class="girador">
                                            
                                   </div>
                                   <div class="canciones">
                                        <?php
                            
                                            $directory="../mp3/Catastrofico/".$disco;
											$numero = 1; 
                                            $dirint = dir($directory);
                                            while (($archivo = $dirint->read()) !== false)
                                            {
                                                if (eregi("mp3", $archivo) || eregi("wav", $archivo) || eregi("MP3", $archivo)){
                                            
                                                    $info_imagen = getimagesize($directory."/".$archivo);
                            
                                        
                                                    echo '<a href="'.$directory."/".$archivo.'" class="lb_ego"><span class="color2"><i class="icon icon-play"></i></span>'.' '.$numero.' .- '.$archivo."\n";
                                                    echo '</a>';
                                                    
                                                    $numero++;
                                                }
                                            }
                                            $dirint->close();
                                        ?>
                            
                                   </div>
                            
                                   <div class="reproductor normalSeparator" style="width:50%; display:block">
                                   <!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]-->
                                      <audio id="player1" style="width:200%;height:100%;" width="200%" height="100%" src="../mp3/Catastrofico/Diogenes/saturno.mp3"  type="audio/mp3" controls></audio>	      	 		  
                                   </div>
                               </div> 
                                                
                               
                            <script>
                            $(document).ready(function(){$('video, audio').mediaelementplayer();});
                            </script>  
                            
                            
                            </article>
                         </div>
                	</section>
	        	</div>
            </div>