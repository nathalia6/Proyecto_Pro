<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "","inventario");  
      $sql = "SELECT * FROM equipos ORDER BY Departamento ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Codigo"].'</td>  
                          <td>'.$row["Marca"].'</td>  
                          <td>'.$row["Serie"].'</td>  
                          <td>'.$row["Producto"].'</td>
                          <td>'.$row["Ram"].'</td>
                          <td>'.$row["Discoduro"].'</td>
                          <td>'.$row["Sistema"].'</td>
                          <td>'.$row["Arquitectura"].'</td>
                          <td>'.$row["Procesador"].'</td>
                          <td>'.$row["Macadd"].'</td>
                          <td>'.$row["Departamento"].'</td>
                          <td>'.$row["Puesto"].'</td>
                          <td>'.$row["Personal"].'</td>   
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('../tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("LISTA DE LAPTOPS");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '4', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(TRUE);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '200','6.0','500','800');  
      $obj_pdf->AddPage(); 
      $obj_pdf->Image('../imag/now.jpg' , 265 ,0, 35 , 21.5,'JPG');
      $obj_pdf->Cell(40,10,date('d/m/Y'),0,1,'L'); 
      $content = '';  
      $content .= '  
      <h1 align="center">Lista de Laptops</h1><br /> 
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr bgcolor="#c5d5d5">  
                <th width="7.9%">Codigo de Barras</th>  
                <th width="4.9%">Marca</th>  
                <th width="7.9%">No.Serie</th>  
                <th width="7.9%">No.Producto</th> 
                <th width="4.9%">Ram</th> 
                <th width="6.9%">Discoduro</th> 
                <th width="7.9%">Sistema Operativo</th> 
                <th width="7.9%">Arquitectura</th> 
                <th width="7.9%">Procesador</th>
                <th width="7.9%">Mac-Add</th> 
                <th width="7.9%">Departamento</th> 
                <th width="7.9%">Puesto</th> 
                <th width="7.9%">Personal Asignado</th>     
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Lista_de_Laptops.pdf', 'I');  
 }  
 ?>  