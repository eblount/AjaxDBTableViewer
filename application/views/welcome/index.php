<table id="songtable">
	<thead>
		<tr>
		<?php foreach(explode(',',DBCOLUMNNAMES) as $column): ?>
			<th><?php echo $column; ?></th>
		<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>

<style type="text/css">
div.dataTables_length label {
    width: 460px;
    float: left;
    text-align: left;
}
 
div.dataTables_length select {
    width: 75px;
}
 
div.dataTables_filter label {
    float: right;
    width: 460px;
}
 
div.dataTables_info {
    padding-top: 8px;
}
 
div.dataTables_paginate {
    float: right;
    margin: 0;
}
 
table {
    margin: 1em 0;
    clear: both;
}
</style>

<script>
$(document).ready(function(){
	$.extend( $.fn.dataTableExt.oStdClasses, {
    "sSortAsc": "header headerSortDown",
    "sSortDesc": "header headerSortUp",
    "sSortable": "header"
	} );
	$('#songtable').dataTable({
		"bJQueryUI": true,
		"bServerSide": true,
		"sAjaxSource": "/welcome/browse",
		"sPaginationType": "bootstrap"
	});
	$(window).bind('resize', function () {
		oTable.fnAdjustColumnSizing();
	} );
});	
</script>
