<!DOCTYPE html>
<html lang="en">
<head>
    <title>Some title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css' />
<link rel='stylesheet' type='text/css' href='http://www.trirand.com/blog/jqgrid/themes/ui.jqgrid.css' />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/i18n/grid.locale-en.js'></script>
  <script type="text/javascript"> 
    $.jgrid.no_legacy_api = true; 
    $.jgrid.useJSON = true; 
    </script>
<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery-ui-custom.min.js'></script>        
<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery.jqGrid.js'></script>


</head>
<body>	
      <div> 
          <?php include ("grid.php");?> 
      </div> 
      <br/> 
      <?php tabs(array("grid.php"));?> 

</body>

	
</html>
