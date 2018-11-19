     <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">

    
  <style type="text/css">
 
/* cambiar el color de fondo a la barra */
nav.navbar {
    background-color: #154360
}
.dropdown li a {
  color: #B3B6B7 !important;
}


    </style>
                 <nav class="navbar navbar" role="navigation">
              <div class="container-fluid">             
                <div class="navbar-header"  >
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">                   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="../index">Inventario NOJRC</a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="navbar-nav">
                
                    <li class="dropdown">
                      <a style="text-decoration:none;"><span class="icon-plus"></span>Agregar<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                         <li><a href="../cpus/agregar">CPU</a></li>
                        <li><a href="../Laptops/agregarlaptop">LAPTOP</a></li>
                        <li><a href="../monitores/agregarmonitor">MONITOR</a></li>
                        <li><a href="../impresoras/agregarimpresora">IMPRESORA</a></li>
                      
                      </ul>
                    </li>
                  </ul>               
    
                  <ul class="navbar-nav">
                
                    <li class="dropdown">
                      <a style="text-decoration:none;" class="dropdown-toggle"><span class="icon-eye"></span> Visualizar<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="../cpus/visualizar_cpu">CPU</a></li>
                        <li><a  href="../Laptops/visualizar_laptops">LAPTOP</a></li>
                        <li><a href="../monitores/Visualizar_Monitores">MONITOR</a></li>
                        <li><a href="../impresoras/visualizar_Impresoras">IMPRESORA</a></li>
               
                        
                   
                      </ul>
                    </li>
                  </ul>  

 <ul class="navbar-nav">            
<li class="dropdown">
<?php
echo '<a style="text-decoration:none;" class="dropdown-toggle "href="../logout"> <span class="icon-enter"></span>   Logout </a>';
?>

                    </li>
                  </ul> 
             </div>
              </div>
            </nav>



