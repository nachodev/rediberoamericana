<?php
    session_start();
    $_SESSION['security_key'] = sha1(microtime(true)+1);
    $_SESSION['security'] = sha1(microtime(true));
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Red Iberoamericana</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="assets/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->

   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>  
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN LOGO (you can use logo image instead of text)-->
                <a class="navbar-brand logo-v1" href="index.html">
                    <img src="assets/img/logo.png" id="logoimg" alt="logotipo red iberoamericana">
                </a>
                <!-- END LOGO -->
            </div>
        
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li> 
                       <a href="nosotros.html">Nosotros</a> 
                    </li>
                    <li> 
                       <a href="universidades.html">Universidades</a> 
                    </li>
                    <li> 
                       <a href="actividades.html">Actividades</a> 
                    </li>
                    <li> 
                       <a href="publicaciones.html">Publicaciones</a> 
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Documentos<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="documentos.html">Documentos</a></li>
                            <li><a href="legislacion.html">Legislación</a></li>
                            <li><a href="jurisprudencia.html">Jurisprudencia</a></li>
                        </ul>
                    </li>
                    <li> 
                       <a href="contacto.php">Contacto</a> 
                    </li>
                </ul>                           
            </div>
            <!-- BEGIN TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER -->

    <!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">
    
        <!-- BEGIN BREADCRUMBS -->   
        <div class="row breadcrumbs margin-bottom-20">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <h1>Contacto</h1>
                </div>
                <div class="col-md-8 col-sm-8">
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END BREADCRUMBS -->

    <!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">


		<!-- BEGIN CONTAINER -->   
		<div class="container min-hight">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<h2>Formulario de contacto</h2>
					<p>Solicite información a través de nuestro formulario y le contestaremos lo más rápido posible. <br> 
                    También ponemos a tu disposición el correo de email o el teléfono para cualquier consulta.</p>
					<div class="space20"></div>
					<!-- BEGIN FORM-->
					<form id="contact-form" class="horizontal-form margin-bottom-40" role="form">
						<div class="form-group">
							<label class="control-label">Nombre</label>
							<div class="col-lg-12">
								<input id="name" name="name" type="text" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" >Email <span class="color-red">*</span></label>
							<div class="col-lg-12">
								<input id="email" name="email" type="text" class="form-control" >
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" >Mensaje</label>
							<div class="col-lg-12">
								<textarea id="message" name="message" class="form-control" rows="8"></textarea>
							</div>
						</div>
                        <input type="hidden" name="<?php echo $_SESSION['security_key'];?>" value="<?php echo $_SESSION['security'];?>"/>
						<button id="send-button" type="submit" class="btn btn-default sent-btn"><i class="icon-ok"></i> Enviar</button>
						<button id="cancel-button" type="button" class="btn btn-default">Cancelar</button>
                        <img id="gif-loading" src="assets/img/loading.gif">
					</form>
					<!-- END FORM-->                  
				</div>

				<div class="col-md-3 col-sm-3">
					<h2>Datos de contacto</h2>
					<address>
						<strong>Facultad de Derecho, <br>Plaza de la Universidad S/N </strong><br>
						Universidad de Granada. CP 18071 <br>
						<abbr title="Phone">Tel:</abbr> +34 647 40 68 40 <br>
                        <abbr title="Phone">Email:</abbr> info@rediberoamericana.com
					</address>                             
				</div>            
			</div>
		</div>
		<!-- END CONTAINER -->

	</div>
    <!-- END PAGE CONTAINER -->  

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5 col-sm-5">
                    <!-- BEGIN ABOUT -->                    
                    <h4>Red Iberoamericana de investigación sobre formas contemporáneas de esclavitud y Derechos Humanos</h4>
                    <p class="margin-bottom-10">Red Universitaria sin ánimo de lucro aprobada por la Asociación Universitaria Iberoamericana de Posgrado (AUIP)</p>
                    <div class="clearfix"></div>                    
                    <!-- END ABOUT -->          

                    <!-- END BLOG PHOTOS STREAM -->                              
                </div>
                <div class="col-xs-12 col-md-5 col-sm-5">
                    <!-- BEGIN CONTACTS -->                                    
                    <h4>Contacto</h4>
                    <address class="margin-bottom-10">
                        Facultad de Derecho, Plaza de la Universidad S/N <br />
                        Universidad de Granada. CP 18071 <br />
                        Tel: +34 647 40 68 40 <br />
                        Email: <a href="mailto:info@keenthemes.com">info@rediberoamericana.com</a>
                    </address>
                    <!-- END CONTACTS -->                                    

                    <!-- BEGIN SUBSCRIBE -->                                    
                   

                    <!-- END SUBSCRIBE -->                                    
                </div>
                <div class="col-xs-12 col-md-2 col-sm-2 logo-foot">
                    <!-- BEGIN TWITTER BLOCK -->                                                    
                     <img src="assets/img/logo-footer.png" alt="">                  
                    <!-- END TWITTER BLOCK -->                                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <p>
                        <span class="margin-right-10">2016 © Red Iberoamericana. Todos los derechos reservados.</span> 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="assets/plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script src="assets/scripts/app.js"></script>  
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();                      
        });
    </script>
    <script>
        $("#contact-form").submit(function(e){
            e.preventDefault();
            $("#gif-loading").css("display", "inline");
            $("#send-button").html = "sending";
            $("#send-button").prop( "disabled", true );
            $("#cancel-button").html = "sending";
            $("#cancel-button").prop( "disabled", true );
            $.ajax( {
                    url: "form.php",
                    data: $("#contact-form").serialize(),
                    method: "POST"
                } )
                .done(function(response) {
                    $("#gif-loading").css("display", "none");
                    $("#send-button").prop( "disabled", false );
                    $("#cancel-button").prop( "disabled", false );
                    alert("Mensaje enviado correctamente.");
                    console.log( response );
                })
                .fail(function(response) {
                    console.log( response );
                })  
        });

        
                 
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>