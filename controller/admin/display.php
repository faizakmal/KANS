<?php


include '../../database/connect.php';

$sql = "SELECT * FROM `datadiri_alumni`";
$result = mysqli_query($conn, $sql);
$id = 0;
while ($data = mysqli_fetch_array ($result)){  
$id++; 
echo "   
 	<tr>  
    	<td>".$id."</td>
        <td>".$data[1]."</td>   
        <td>".$data[0]."</td>
        <td>".$data[7]."</td>
        <td>".$data[8]."</td>
        <td><a href=\"../../view/admin/detailPage.php?id=".$data[0]."\"><i class='glyphicon glyphicon-search'></i></a>"." || <a href=\"../../controller/admin/delete.php?id=".$data[0]."\" onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a></td>
    </tr>   
                  ";    
                  }  
