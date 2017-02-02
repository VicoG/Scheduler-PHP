<?php include 'includes/header.php' ?>
<?php //include 'includes/db.php' ?>
<?php //include 'includes/functions.php' ?>


<div class="container">		
	<div class="row">                                        	
		<div class="col-md-8  col-md-offset-4" style="margin-top: 5em;">
			<h2>Add a New Project:</h2>
		</div>
		<div class="col-md-12" >
			<form method="POST" action="" role="form" id="OUN">
			<div class="row"
				<fieldset>
					<legend><span style="color:rgb(66, 134, 244);">Customer/ Contact Info: </span></legend>
					<span class="text-info">
					<div class="form-group col-md-5">
						<label for="customerOUN">Customer Name: </label>
						<input type="text" class="form-control" name="customerOUN" required placeholder="Required">
					</div>
					<div class="form-group col-md-5">
						<label for="contactOUN">Contact Phone: </label>
						<input type="text" class="form-control" name="contactOUN" required placeholder="Required">
					</div>
					</span>
				</fieldset>
			</div>
			<div class="row" style="margin-top:1em;">
				<fieldset>
					<legend><span style="color:rgb(66, 134, 244);">Job Information:</span></legend>
					<div class="col-md-12">
					<div class="form-group">
						<label for="jobTitle">Document Title: </label>
						<input type="text" class="form-control" name="jobTitle" required placeholder="Required">
					</div>
					<div class="form-inline">
						<div class="form-group">
							<label for="numberOriginals">No. of Originals:: </label>
							<input type="text" class="form-control" name="numberOriginals" required placeholder="Required">
						</div>
						<div class="form-group">
							<label for="numberCopies">Copies of Each: </label>
							<input type="text" class="form-control" name="numberCopies" required placeholder="Required">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="projectNumber">Project #: </label>
								<input type="text" class="form-control" name="projectNumber">
							</div>
						</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="taskNumber">Task #: </label>
									<input type="text" class="form-control" name="taskNumber">
								</div>
							</div>
						</div>
					<div class="row">
						<div class="col-md-6">
							<div class="radio form-group">
								<h4> Process Timing:</h4>
								<label class="radio" >
								  <input type="radio" name="Timing" id="Timing" required value="Rush"> Rush
								</label>
								<label class="radio">
								  <input type="radio" name="Timing" id="Timing" required value="Normal"> Normal
								</label>
								<label class="radio">
								  <input type="radio" name="Timing" id="Timing" required value="UnKnown"> UnKnown
								</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<h4>Date Submitted:</h4>
								<div class='input-group date' id='dueDate2'>
									<input type='text' class="form-control" name="submitDate" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="form-group">
								<h4> Due Date:</h4>
								<div class='input-group date' id='dueDate'>
									<input type='text' class="form-control" name="dueDateTime" required/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				</fieldset>
			</div>
			<div class="col-md-5 pull-right">
				<input class="btn-success" type="submit" name="submit" value="Submit" disabled />
			</div>
		</form>
		</div> <!-- End: Admin Content -->
		<div id="created"></div>
	</div>
</div>

<script type="text/javascript">
	$(function () {
		$('#dueDate').datetimepicker({
			daysOfWeekDisabled: [0, 6],
			useCurrent: false,
			format: 'MM/DD/YYYY'
		});
		$('#dueDate2').datetimepicker({
			daysOfWeekDisabled: [0, 6],
			useCurrent: false,
			format: 'MM/DD/YYYY'
		});
	});
</script>

	
<?php include 'includes/footer.php' ?>
	