<?php include 'includes/header.php'; ?>
                   

<div class="container fluid" id="home">
  <div class="row" >            
   <div class="col-md-12" id="backgroundItem">
<div class="table-responsive" style="margin:6em 0;">
<table class="table table-hover table-bordered" id="summaryActive"  cellspacing="0" width="100%">
<caption>Active Tasks</caption>
<thead>
<tr class="bg-info">
<th>Customer</th>
<th>Job Title</th>
<th>Location</th>
<th>Task #</th>
<th>Due Date</th>
<th>Cost</th>
</tr>
</thead>
</table>
</div>
   </div>
 </div>                
</div>
			
			
<?php include 'includes/footer.php'; ?>


<script type="text/javascript">
$(document).ready(function() {
	$('#summaryActive').DataTable({
		"ajax": 'arrays.txt',
		dom: 'Bfrtip',
		buttons: [
		   'print', 'excel', 'pdf', 'pageLength'
		],  
		"lengthMenu": [ 10, 25, 50, 75 ]
	});
});
	
$( function() {
	$( document ).tooltip();
});
 			
</script>