<!DOCTYPE html>
<html lang="en">
<head>
    <title>Some title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


<link rel='stylesheet' type='text/css' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/sunny/jquery-ui.css' />
<link rel='stylesheet' type='text/css' href='http://www.trirand.com/blog/jqgrid/themes/ui.jqgrid.css' />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery-ui-custom.min.js'></script>        
<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/i18n/grid.locale-en.js'></script>

<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery.jqGrid.js'></script>

<script>
var task_link = "http://localhost/cssdeck/dashboard/dashboar.php?Emp_ID=";
$(document).ready(function () {
$("#emp_grid").jqGrid({
url: "getGridData.php?q=3",
datatype: "json",
colNames: ["Emp Id", "Emp Name", "Emp Start Date", "Emp End Date" , "Percent", "Status","ACTIONS"],
colModel: [
{ name: "emp_id",index:"emp_id",editable:true,formatter: formatEmpID},
{ name: "emp_name",index:"emp_name",editable:true},
{ name: "emp_startDate",index:"emp_startDate",sorttype:'date',edittype:"text",formatter: 'date',formatoptions: { srcformat: 'Y/m/d', newformat: 'm/d/Y'},editable:true,
                 editoptions: {
                            // dataInit is the client-side event that fires upon initializing the toolbar search field for a column
                            // use it to place a third party control to customize the toolbar
                            dataInit: function (element) {
                                $(element).datepicker({
                                    dateFormat: 'mm/dd/yy',
                                    //minDate: new Date(2010, 0, 1),
                                    maxDate: new Date(2020, 0, 1),
                                    showOn: 'focus'
                                });
                            }
                        },
   searchoptions: {
    dataInit: function(elem) {
        $(elem).datepicker({
        dateFormat: 'mm/dd/yy',
        //minDate: new Date(2010, 0, 1),
        maxDate: new Date(2020, 0, 1),
        showOn: 'focus'
        });
    }
}

},
{ name: "emp_endDate",index:"emp_endDate",sorttype:'date',edittype:"text",formatter: 'date',formatoptions: { srcformat: 'Y/m/d', newformat: 'm/d/Y'},editable:true,
                 editoptions: {
                            // dataInit is the client-side event that fires upon initializing the toolbar search field for a column
                            // use it to place a third party control to customize the toolbar
                            dataInit: function (element) {
                                $(element).datepicker({
                                    dateFormat: 'mm/dd/yy',
                                    //minDate: new Date(2010, 0, 1),
                                    maxDate: new Date(2020, 0, 1),
                                    showOn: 'focus'
                                });
                            }
                        },
   searchoptions: {
    dataInit: function(elem) {
        $(elem).datepicker({
        dateFormat: 'mm/dd/yy',
        //minDate: new Date(2010, 0, 1),
        maxDate: new Date(2020, 0, 1),
        showOn: 'focus'
        });
    }
}

},

{ name: "percentComplete",index:"percentComplete",editable:true},
{ name: "emp_status",index:"emp_status",editable:true,edittype:"select",editoptions:{value:"Onboarding:Onboarding;Released:Released"}},
{name:'act',index:'act', width:130,sortable:false}
],
 rowNum:10,
 rowList:[10,20,30],
 pager: '#pemp_grid',
 loadonce:true,
 ignoreCase: true,
 viewrecords: true,
 autowidth:true,
 cmTemplate: { title: false },
 height:'100%',
 gridComplete: function(){
		var ids = jQuery("#emp_grid").jqGrid('getDataIDs');
		for(var i=0;i<ids.length;i++){
			var cl = ids[i];
			be = "<input style='height:22px;width:40px;' type='button' value='Edit' onclick=\"jQuery('#emp_grid').jqGrid('editRow','"+cl+"');\"  />"; 
			se = "<input style='height:22px;width:40px;' type='button' value='Save' onclick=\"jQuery('#emp_grid').jqGrid('saveRow','"+cl+"');\"  />"; 
			ce = "<input style='height:22px;width:50px;' type='button' value='Cancel' onclick=\"jQuery('#emp_grid').jqGrid('restoreRow','"+cl+"');\" />"; 
			jQuery("#emp_grid").jqGrid('setRowData',ids[i],{act:be+se+ce});
		}	
	},
editurl: "update.php",
caption: "Employee Details"
}); 
$("#emp_grid").jqGrid('navGrid',"#pemp_grid",{edit:false,del:false,refresh: false, search: false},{

                 closeOnEscape: true,
                 closeAfterAdd: true,
                 reloadAfterSubmit: true
                 } );
$("#emp_grid").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: false, defaultSearch: "cn" });
});
function formatEmpID(cellvalue, options, rowObject) {
            var link = task_link + cellvalue;
            return "<a href='" + link + "' target='_blank'>" + cellvalue + "</a>";
        }
</script>

</head>
<body>	

<img src="animation.gif" width="1500" height="100" alt=""/>
<div align="center">    
  <table id="emp_grid"><tr><td></td></tr></table> 
<div id="pemp_grid"></div>
</div>
</body>

	
</html>