<?php
 error_reporting(0);
 require_once('../Connections/conn.php');

 $page = $_GET['page']; // get the requested page
 $limit = $_GET['rows']; // get how many rows we want to have into the grid
 $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
 $sord = $_GET['sord']; // get the direction
 if(!$sidx) $sidx =1; 
 $result = mysql_query("SELECT COUNT(*) AS count FROM employees");
 $row = mysql_fetch_array($result,MYSQL_ASSOC);
 $count = $row['count'];

 if( $count >0 ) { 
 $total_pages = ceil($count/$limit);
 //$total_pages = ceil($count/1);
 } else {
 $total_pages = 0; 
 } if ($page > $total_pages) 
 $page=$total_pages; 
 //$start = $limit*$page - $limit; // do not put $limit*($page - 1) 
 $SQL = "SELECT * from employees ORDER BY $sidx $sord"; 
 $result = mysql_query( $SQL ) or die("Couldn t execute query.".mysql_error());
 $responce->page = $page;
 $responce->total = $total_pages;
 $responce->records = $count; 
 $i=0;
 while($row = mysql_fetch_array($result,MYSQL_ASSOC)) { 
$responce->rows[$i]['emp_id']=$row['emp_id'];
$responce->rows[$i]['cell']=array($row['emp_id'],$row['emp_name'],$row['emp_startDate'], $row['emp_endDate'],$row['percentComplete'],$row['emp_status']);
 $i++;
 } 
 echo json_encode($responce);
?>