jQuery.fn.animateAuto=
	function(prop,speed,callback){
		var elem,height,width;
	
		return this.each(function(i,el){
						el=jQuery(el),elem=el.clone().css({"height":"auto","width":"auto"}).appendTo("body");
						height=elem.css("height"),width=elem.css("width"),elem.remove();
						
						if(prop==="height")
							el.animate({"height":height},speed,callback);
						else 
							if(prop==="width")
								el.animate({"width":width},speed,callback);
							else 
								if(prop==="both")
									el.animate({"width":width,"height":height},speed,callback);});
	}

	
jQuery(document).ready(function($){
						/*$("ul li:last").addClass("last");
						if($('[rel=tooltip]').length>0){
							$('[rel=tooltip]').tooltip();
						}
						
						if($('[data-toggle=popover]').length>0){
							$('[data-toggle=popover]').popover();
						}
						
						if($('a[rel^=fancybox]').length>0){
							$('a[rel^=fancybox]').fancybox();
						}
						
						if($('.carousel').length>0){
							$('.carousel').carousel();$('a.carousel-control').click(function(e){e.preventDefault();});
						}

						$("a[href='#']").click(function(e){e.preventDefault();});
						
						if($('.imgLiquid').length>0){
							$(".imgLiquidFill").imgLiquid({fill:true,horizontalAlign:"center",verticalAlign:"center",fadeInTime:2500,onItemFinish:function(index,container,img){container.addClass('imgLiquidAcabado');}});
							$(".imgLiquidNoFill").imgLiquid({fill:false,horizontalAlign:"center",verticalAlign:"50%"});
						}

						$("nav#site-navigation ul li a, #site-lang-selector, .social").addClass('noscroll');
						*/
						var scrollHeight = document.getElementById('contenido').offsetHeight ;
						
						$(window).scroll(function(){
							if( scrollHeight != 0){
								if( ( ($(page).scrollTop()*100 )/ scrollHeight ) > 50){
									$(".lineaSuperior").addClass('scroll').removeClass('noscroll');
									$(".cruzSuperior").addClass('scroll').removeClass('noscroll');
									$(".lineaSuperior2").addClass('scroll').removeClass('noscroll');
									$("#MenuPrincipalUL").addClass('scroll').removeClass('noscroll');
									$("#menuAuxUL").addClass('scroll').removeClass('noscroll');
									$("#menuAux2UL").addClass('scroll').removeClass('noscroll');
								}
								else{
									$(".lineaSuperior").removeClass('scroll').addClass('noscroll');
									$(".lineaSuperior2").removeClass('scroll').addClass('noscroll');
									$(".cruzSuperior").removeClass('scroll').addClass('noscroll');
									$("#MenuPrincipalUL").removeClass('scroll').addClass('noscroll');
									$("#menuAuxUL").removeClass('scroll').addClass('noscroll');
									$("#menuAux2UL").removeClass('scroll').addClass('noscroll');
								}
							}
							else{
									$(".lineaSuperior").removeClass('scroll').addClass('noscroll');
									$(".lineaSuperior2").removeClass('scroll').addClass('noscroll');
									$(".cruzSuperior").removeClass('scroll').addClass('noscroll');
									$("#MenuPrincipalUL").removeClass('scroll').addClass('noscroll');
									$("#menuAuxUL").removeClass('scroll').addClass('noscroll');
									$("#menuAux2UL").removeClass('scroll').addClass('noscroll');
							
							
							}
						});
						
						function barraSuperior(){
							if( scrollHeight != 0){
								if( ( ($(page).scrollTop()*100 )/ scrollHeight ) > 50){
									$(".lineaSuperior").addClass('scroll').removeClass('noscroll');
									$(".lineaSuperior2").addClass('scroll').removeClass('noscroll');
									$(".cruzSuperior").addClass('scroll').removeClass('noscroll');
									$("#MenuPrincipalUL").addClass('scroll').removeClass('noscroll');
									$("#menuAuxUL").addClass('scroll').removeClass('noscroll');
									$("#menuAux2UL").addClass('scroll').removeClass('noscroll');
								}
								else{
									$(".lineaSuperior").removeClass('scroll').addClass('noscroll');
									$(".lineaSuperior2").removeClass('scroll').addClass('noscroll');
									$(".cruzSuperior").removeClass('scroll').addClass('noscroll');
									$("#MenuPrincipalUL").removeClass('scroll').addClass('noscroll');
									$("#menuAuxUL").removeClass('scroll').addClass('noscroll');
									$("#menuAux2UL").removeClass('scroll').addClass('noscroll');
								}
							}
							else{
									$(".lineaSuperior").removeClass('scroll').addClass('noscroll');
									$(".lineaSuperior2").removeClass('scroll').addClass('noscroll');
									$(".cruzSuperior").removeClass('scroll').addClass('noscroll');
									$("#MenuPrincipalUL").removeClass('scroll').addClass('noscroll');
									$("#menuAuxUL").removeClass('scroll').addClass('noscroll');
									$("#menuAux2UL").removeClass('scroll').addClass('noscroll');
							
							
							}
						}
                       
						barraSuperior();
						
						/*
						$(window).resize(function(){});*/
						
						$(window).scroll(function(){});
					});