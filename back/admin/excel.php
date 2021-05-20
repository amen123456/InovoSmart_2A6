<?php

$connection=mysqli_connect('localhost','root','','projetweb');
$output='';
if(isset($_POST["export_excel"]))
{
   $sql="SELECT id,nom,prenom FROM etudiants";
   $result = mysqli_query($connection,$sql);
   if(mysqli_num_rows($result)>0)
   { $output .= '
   <table class="table" bordered="1">
   <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prenom</th>
    </tr>
    ';
    while($row=mysqli_fetch_array($result))
    { $output .='
    <tr> 
        <td>'.$row["id"].'</td>
         <td>'.$row["nom"].'</td>
         <td>'.$row["prenom"].'</td>
    </tr>
    ';
    }
    $output.='</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download.xls');
    echo $output;
   }
}
        








?>