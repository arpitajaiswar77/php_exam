<?php 
include "db.php";
require "vendor/autoload.php";
$result=$conn->query("select * from book1");

$pdf=new TCPDF();
$pdf->AddPage();
$pdf->SetFont('times','B','12');
$pdf->Cell('0','10','book table','0','1','C');
$html='<table border="1", cellpadding="0", style="background-color:lightblue;">
<tr>
<th>ID</th>
<th>Title</th>
<th>Author Name</th>
<th>Genre</th>
<th>Total Copies</th>
<th>Availabe Copies</th>
</tr>';
while ($row=$result->fetch_assoc()) {
    $html .='<tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["author"].'</td>
     <td>'.$row["genre"].'</td>
      <td>'.$row["copy"].'</td>
       <td>'.$row["avail"].'</td>
    </tr>';
}

$html .='</table>';
$pdf->writeHTML($html,true,false,true,false,'');
$pdf->output("book.pdf","D");



?>