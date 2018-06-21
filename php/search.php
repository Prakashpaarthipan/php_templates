<?php
require_once ('../lib/config.php');
 echo 'hi';
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM countries WHERE couname LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($con, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["couname"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
else{
	echo 'failed';
}

?>