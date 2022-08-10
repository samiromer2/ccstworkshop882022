<?php //begin

//print_r($_POST);
//those values from the html
$companyname       = $_POST['companyname'];  
$companywakill     = $_POST['companywakill']; 
$companydatacash   = $_POST['companydatacash'];
$companyobjective  = $_POST['companyobjective']; 
//end
include "conn.php";

//var
$sql = "INSERT INTO `company`(`name`, `wakil`, `datacash`, `objective`) VALUES ('$companyname','$companywakill','$companydatacash','$companyobjective')";
//$conn->query($sql)
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location:formcomany.php ');
?> 