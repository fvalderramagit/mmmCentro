<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
    <title>M.M.M Medellín Sede Centro</title>

    <!--------------------------------------- BOOTSTRAP 4 ---------------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-------------------------------------------------------------------------------------->
    <!----------------------------------- CARGAR CSS DE LA PAG WEB ------------------------->
    <!-------------------------------------------------------------------------------------->
    <?php if($this->uri->segment(1)=="" or $this->uri->segment(2)=="inicio"){?>
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/navbar.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/inicio.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/swiper.min.css">
    <?php }?>
    
    <?php if($this->uri->segment(2)=="escuelaDominical"){?>
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/navbar.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/escuelaDominical.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/lightcase/src/css/lightcase.css">
    <?php }?>

    <?php if($this->uri->segment(2)=="jovenes"){?>
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/navbar.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/jovenes.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/lightcase/src/css/lightcase.css">
    <?php }?>

    <?php if($this->uri->segment(2)=="adolecentes"){?>
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/navbar.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/adolecentes.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/lightcase/src/css/lightcase.css">
    <?php }?>
    
    <!--------------------------------------- FONTAWESOME --------------------------------->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
    <!------------------------------------------ FONTS ------------------------------------->
    <!--------Raleway--->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  </head>
<body>
 
<!------------------------------------------------------------------------------->
<!---------------------------- BARRA DE NAVEGACION MIA------------------------------>
<!------------------------------------------------------------------------------
<nav id="menu" class="navbar navbar-expand-lg navbar-light fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="#">M.M.M Sede Centro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link ancla" data-ancla="carouselExampleIndicators" href="<?php echo base_url();?>sitioWeb">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-3 dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Quien Somos 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item px-3" href="<?php echo base_url();?>sitioWeb/historia">Historia</a>
                <a class="dropdown-item px-3" href="#">Doctrina</a>
                </div>
            </li>

            <li class="nav-item px-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Biblioteca 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item px-3" href="#">Revista</a>

                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link ancla" data-ancla="eventos" >Grupos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ancla" data-ancla="eventos" >eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ancla text-gold" href="#">contactenos</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!------------------------------------------------------------------------------->
<!------------------------- FIN BARRA DE NAVEGACION ----------------------------->
<!------------------------------------------------------------------------------->


<!------------------------------------------------------------------------------->
<!--------------------------- BARRA DE NAVEGACION ------------------------------->
<!------------------------------------------------------------------------------->
<nav id="menu" class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand icon" href="">
            <img src="<?php echo base_url();?>assets/img/navbar/logo.png" width="35" height="35" class="d-inline-block icono align-top" alt="">
            &nbsp;Medellín Sede Centro
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link ancla" data-ancla="carouselExampleIndicators" href="<?php echo base_url();?>sitioWeb/inicio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ancl" data-ancla="quienesSomo" href="<?php echo base_url();?>sitioWeb/historia">Quienes somos</a>
            </li>
            <li class="nav-item px-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acerca de Grupos 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item px-3" href="<?php echo base_url();?>sitioWeb/jovenes">Jovenes</a>
                    <a class="dropdown-item px-3" href="<?php echo base_url();?>sitioWeb/adolecentes">Adolescentes</a>
                    <a class="dropdown-item px-3" href="<?php echo base_url();?>sitioWeb/escuelaDominical">Niños</a>
                    <!--<a class="dropdown-item px-3" href="#">Grupos de Evangelismo</a>
                    <a class="dropdown-item px-3" href="#">Grupo de Caballeros</a>
                    <a class="dropdown-item px-3" href="#">Grupo de Damas</a>-->
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link ancla" data-ancla="eventos" >eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ancla text-gold" href="#">contactenos</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!------------------------------------------------------------------------------->
<!------------------------- FIN BARRA DE NAVEGACION ----------------------------->
<!------------------------------------------------------------------------------->