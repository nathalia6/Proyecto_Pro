<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

echo '<p align=center style="font-family: Century Gothic; font-size:40pt;"> Bienvenido</p>';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="fonts/style.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/menuresponsive.js"></script>

  
  <title>Inicio</title>




  <style type="text/css">
 
/* cambiar el color de fondo a la barra */
nav.navbar {
    background-color: #154360
}
.dropdown li a {
  color: #FFFFFF !important;
}


    </style>
  <style>
    h1 span {
      color: #ff8000;
      margin-right: 20px;
    

}
body
    {
background-image: url(imag/nuevo.jpg);
background-size: 100% 100%;
background-attachment: fixed;

}
  </style>


<h1 class="text-info" ><strong><center>Sistema de Inventario Web</center></strong></h1>


</head>
<!--
<body>
<div align="center">
<a href="agregar.php" class="button blue radius">
<span class="icon-plus"></span>Agregar</a>
<a href="eliminar.php" class="button yellow radius">
<span class="icon-cancel-circle"></span>Eliminar</a>
<a href="visualizar.php" class="button blue radius">
<span class="icon-eye"></span>Visualizar</a>
-->

</div>
<div>
<header class="container">    
      <nav class="navbar">
        <div class="container-fluid">         
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">             
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a style="text-decoration:none" class="navbar-brand" href="index.php">Inventario NOJRC</a>
          </div>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
          
              <li class="dropdown">
                <a style="text-decoration:none"  href="agregar.php" class="dropdown-toggle"><span class="icon-plus"></span> Agregar <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="cpus/agregar.php">CPU</a></li>
                   <li><a href="laptops/agregarlaptop.php">LAPTOP</a></li>
                    <li><a href="monitores/agregarmonitor">MONITOR</a></li>
                  <li><a href="impresoras/agregarimpresora">IMPRESORA</a></li>
                
                  
                 <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Dropdown <b class="caret right"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            -->
                </ul>

              </li>
            </ul>           
            <!--<ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul> 
        -->


         

            <ul class="navbar-nav">
          
              <li class="dropdown">
                 <a style="text-decoration:none" href="visualizar_cpu.php" class="dropdown-toggle"><span class="icon-eye"></span> Visualizar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="cpus/Visualizar_cpu">CPU</a></li>
                  <li><a href="Laptops/visualizar_laptops">LAPTOP</a></li>
                  <li><a href="monitores/visualizar_monitores">MONITOR</a></li>
                  <li><a href="impresoras/visualizar_impresoras">IMPRESORA</a></li>
            
                  
             
                </ul>
              </li>
            </ul> 

            

 <ul class="navbar-nav">        
<li class="dropdown">
<?php
echo '<a  style="text-decoration:none" href="logout.php"><span class="icon-enter" class="dropdown-toggle"></span> Logout</a>';
?>


                  
           
               
              </li>
            </ul> 
          </div>
        </div>
      </nav>    
  </header>



</div>

<body>
  <div>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  charset="utf-8">
    <link rel="stylesheet" type="text/css" src="css/bootstrap.css">
    
    
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>

    
   <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
<div>

<div class="container" align="center">
    
      
      <div class="row">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        
        <!--<a href="nuevo.php" class="button" align="center">Nuevo Registro</a>-->     
      </div>
    </div>  
  </div>
  <br><br>
