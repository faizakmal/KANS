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
        <td>".$data[5]."</td>
        <td>".$data[6]."</td>
        <td><a href=\"../../view/user/detailPage.php?id=".$data[0]."\"><i class='glyphicon glyphicon-search'></i></a>"."</td>
    </tr>   
                  ";    
                  }  