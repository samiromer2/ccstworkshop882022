 <?php
include "conn.php";
//$sql = "SELECT `id`, `name`, `wakil`, `datacash`, `objective` FROM `company`";
$sql = "SELECT `id`, `name`, `wakil`, `datacash`, `objective` FROM `company` WHERE 1";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">wakil</th>
      <th scope="col">datacash</th>
	  <th scope="col">objective</th>
    </tr>
  </thead>
  <tbody>
<?php
$count=1;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  $var1 = $row['id'];  
  $var2 =$row['name'];  
  $var3 =$row['wakil']; 
  $var4 =$row['datacash'];
  $var5 =$row['objective']; 
  echo "<tr>";
      echo "<th scope='row'>$count</th>";
	  $count++;
      echo "<td>$var2</td>";
      echo "<td>$var3</td>";
      echo "<td>$var4</td>";
	  echo "<td>$var5</td>";
    echo "</tr>";
   // print_r($row);
	//echo "<br>";
  }
?>  
  </tbody>
</table>
<?php
} else {
  echo "0 results";
}

?> 