<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location: ../login");
}

echo '<p align=center style="font-family: Century Gothic; font-size:40pt; ">Bienvenido</p>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <?php include("head.php");?>
        

<h1 class="text-info" ><strong><center>Sistema de Inventario Web</center></strong></h1>
    </head>
    <header class="container">
        <?php include("header.php");?>
    </header>

<body> 
    <div class="table-responsive">
        <div align="center">
            <h1 class="text-info" align="center"><strong>LISTA DE CPUS</strong></h1>
       <img  src="../imag/cpu_opt.png" alt="..." align="center" class="img-circle">

       
        </div> <!--Aqui empieza la tabla -->
       <br>
        <table id="example" class="table-hover table-bordered" style="font-size: 25;">
            <thead>
            <tr>
                <th style="color:ffffff" bgcolor="#154360">Codigo</th>
                <th style="color:ffffff" bgcolor="#154360">Marca</th>
                <th style="color:ffffff" bgcolor="#154360">No.Serie</th>
                <th style="color:ffffff" bgcolor="#154360">No.Producto</th>
                <th style="color:ffffff" bgcolor="#154360">Ram</th>
                <th style="color:ffffff" bgcolor="#154360">Discoduro</th>
                <th style="color:ffffff" bgcolor="#154360">Sistema</th>
                <th style="color:ffffff" bgcolor="#154360">Arquitectura</th>
                <th style="color:ffffff" bgcolor="#154360">Procesador</th>
                <th style="color:ffffff" bgcolor="#154360">Mac-Add</th>
                <th style="color:ffffff" bgcolor="#154360">Departamento</th>
                <th style="color:ffffff" bgcolor="#154360">Puesto</th>
                <th style="color:ffffff" bgcolor="#154360">Personal Asignado</th>
                <th style="color:ffffff" bgcolor="#154360">Acción</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                 <th style="color:ffffff" bgcolor="#154360">Codigo</th>
                <th style="color:ffffff" bgcolor="#154360">Marca</th>
                <th style="color:ffffff" bgcolor="#154360">No.Serie</th>
                <th style="color:ffffff" bgcolor="#154360">No.Producto</th>
                <th style="color:ffffff" bgcolor="#154360">Ram</th>
                <th style="color:ffffff" bgcolor="#154360">Discoduro</th>
                <th style="color:ffffff" bgcolor="#154360">Sistema</th>
                <th style="color:ffffff" bgcolor="#154360">Arquitectura</th>
                <th style="color:ffffff" bgcolor="#154360">Procesador</th>
                <th style="color:ffffff" bgcolor="#154360">Mac-Add</th>
                <th style="color:ffffff" bgcolor="#154360">Departamento</th>
                <th style="color:ffffff" bgcolor="#154360">Puesto</th>
                <th style="color:ffffff" bgcolor="#154360">Personal Asignado</th>
                <th style="color:ffffff" bgcolor="#154360">Acción</th>
            </tr>
            </tfoot>
        </table>

        <!--create modal dialog for display detail info for edit on button cell click-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div id="content-data"></div>
            </div>
        </div>

         <div class="modal fade" id="mayModal" role="dialog">
            <div class="modal-dialog">
                <div id="content-data"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                "processing":true,
                "serverSide":true,
                "bDeferRender": true,    
                "sPaginationType": "full_numbers",
                "ajax":{
                    url:"fetch.php",
                    type:"post"
                },
        "oLanguage": {
            "sProcessing":     "Procesando...",
            "sLengthMenu": 'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="40">40</option>'+
                '<option value="50">50</option>'+
                '<option value="60">60</option>'+
                '<option value="70">70</option>'+
                '<option value="80">80</option>'+
                '<option value="90">90</option>'+
                '<option value="100">100</option>'+
                '<option value="500">All</option>'+
                '</select> registros',    
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar :",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
            });
        });
    </script>
    <!--script js for get edit data-->
    <script>
        $(document).on('click','#getEdit',function(e){
            e.preventDefault();
            var per_id=$(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url:'editdata.php',
                type:'POST',
                data:'id='+per_id,
                dataType:'html'
            }).done(function(data){
                $('#content-data').html('');
                $('#content-data').html(data);
            }).fial(function(){
                $('#content-data').html('<p>Error</p>');
            });
        });
      </script>

      <style type="text/css">
          .btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
    }
     .btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}


      </style>

<form method="post" action="Reporte_Cpus" target="_blank">  
<div align="center">
    <button class="btn btn-danger btn-circle btn-lg" name="generate_pdf">
        <a style="text-decoration:none"> <span class="icon-file-pdf"> </span>
        </a>
    </button>
</div>
</form>

<form action="Reporte_exel_Cpus">
<div align="center"> 
<button class="btn btn-success btn-circle btn-lg">
    <a style="text-decoration:none"><span class="icon-file-excel"> </span>
    </a>
</button>
</div>
</form>
<div align="center">
<button  class="btn btn-warning btn-circle btn-lg"><a style="text-decoration:none"href="code.php"><span class="icon-barcode"></span> </a>
</button>
</div>
<br>
</body>

</html>
<!--este es para atraer los campos llenados de la base de datos para poder modigicarlos-->
<?php
$con=mysqli_connect('localhost','root','','inventario');
if(isset($_POST['btnEdit'])){
    $new_id=mysqli_real_escape_string($con,$_POST['txtid']);
    $new_codigo=mysqli_real_escape_string($con,$_POST['txtcodigo']);
    $new_marca=mysqli_real_escape_string($con,$_POST['txtmarca']);
    $new_serie=mysqli_real_escape_string($con,$_POST['txtserie']);
    $new_producto=mysqli_real_escape_string($con,$_POST['txtproducto']);
    $new_ram=mysqli_real_escape_string($con,$_POST['txtram']);
    $new_discoduro=mysqli_real_escape_string($con,$_POST['txtdiscoduro']);
    $new_sistema=mysqli_real_escape_string($con,$_POST['txtsistema']);
    $new_arquitectura=mysqli_real_escape_string($con,$_POST['txtarquitectura']);
    $new_procesador=mysqli_real_escape_string($con,$_POST['txtprocesador']);
    $new_macadd=mysqli_real_escape_string($con,$_POST['txtmacadd']);
    $new_departamento=mysqli_real_escape_string($con,$_POST['txtdepartamento']);
    $new_puesto=mysqli_real_escape_string($con,$_POST['txtpuesto']);
    $new_personal=mysqli_real_escape_string($con,$_POST['txtpersonal']);
    //$new_fecha=mysqli_real_escape_string($con,$_POST['txtfecha']);
    //$new_veloci=mysqli_real_escape_string($con,$_POST['txtveloci']);



    $sqlupdate="UPDATE cpus SET Codigo='$new_codigo',
         Marca='$new_marca',Serie='$new_serie',Producto='$new_producto',Ram='$new_ram',Discoduro='$new_discoduro',Sistema='$new_sistema',Arquitectura='$new_arquitectura',Procesador='$new_procesador',Macadd='$new_macadd',Departamento='$new_departamento',Puesto='$new_puesto',Personal='$new_personal'
                WHERE id='$new_id'";
    $result_update=mysqli_query($con,$sqlupdate);
    if($result_update){
        echo '<script>window.location.href="Visualizar_cpu"</script>';
    }
    else{
        echo '<script>alert("Update Failed")</script>';
    }
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sqldelete="DELETE FROM cpus WHERE id='$id'";
    $result_delete=mysqli_query($con,$sqldelete);
    if($result_delete){
        echo'<script>window.location.href="Visualizar_cpu"</script>';
    }
    else{
        echo'<script>alert("Error para eliminar")</script>';
    }
}
?>
