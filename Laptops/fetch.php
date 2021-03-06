<?php
$con=mysqli_connect('localhost','root','','inventario')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'Codigo',
    2   =>  'Marca',
    3   =>  'Serie',
    4   =>  'Producto',
    5   =>  'Ram',
    6   =>  'Discoduro',
    7   =>  'Sistema',
    8   =>  'Arquitectura',
    9   =>  'Procesador',
    10  =>  'Macadd',
    11  =>  'Departamento',
    12  =>  'Puesto',
    13  =>  'Personal'
);  //create column like table in database

$sql ="SELECT * FROM equipos";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM equipos WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (Codigo Like '".$request['search']['value']."%' ";
    $sql.=" OR Marca Like '".$request['search']['value']."%' ";
    $sql.=" OR Departamento Like '".$request['search']['value']."%' ";
    $sql.=" OR Puesto Like '".$request['search']['value']."%' ";
    $sql.=" OR Macadd Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[1];
    $subdata[]=$row[2]; 
    $subdata[]=$row[3];
    $subdata[]=$row[4];
    $subdata[]=$row[5];
    $subdata[]=$row[6];
    $subdata[]=$row[7];
    $subdata[]=$row[8];
    $subdata[]=$row[9];
    $subdata[]=$row[10];
    $subdata[]=$row[11];
    $subdata[]=$row[12];
    $subdata[]=$row[13];
    
     //Serie           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<center><button style="font-size: 25;" type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><span class="icon-pencil2"">&nbsp;</span>Editar</button>
         <a style="font-size: 25;" href="visualizar_laptops?delete='.$row[0].'" onclick="return confirm(\'Estás seguro que deseas borrar el registro?\')" class="btn btn-danger btn-xs"><span class="icon-bin" >&nbsp;</span>Borrar</a></center>';
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
