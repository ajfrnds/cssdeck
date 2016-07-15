<?php
require_once('../Connections/conn.php');

 $emp_id = $_POST['emp_id'];
  //This contains the data that will update the db
 $emp_name = $_POST['emp_name'];
 $emp_startDate = mysql_real_escape_string($_POST['emp_startDate']);
 $emp_startDate = date('Y-m-d', strtotime(str_replace('-', '/', $emp_startDate)));
 
 $emp_endDate = mysql_real_escape_string($_POST['emp_endDate']);
 $emp_endDate = date('Y-m-d', strtotime(str_replace('-', '/', $emp_endDate)));
 $percentComplete = $_POST['percentComplete'];
 $emp_status = $_POST['emp_status'];

 if($_POST['oper'] == 'edit'){
 mysql_query("UPDATE employees SET emp_name='$emp_name',emp_startDate='$emp_startDate', '$emp_endDate',percentComplete='$percentComplete',emp_status='$emp_status' where emp_id='$emp_id'")
 or die(mysql_error());
 }

 if($_POST['oper'] == 'add'){
 $query = "INSERT INTO employees VALUES ('$emp_id','$emp_name', '$emp_startDate', '$emp_endDate','$percentComplete','$emp_status')";
 $run = mysql_query($query)or die(mysql_error());
}

 mysql_close($conn);
?>