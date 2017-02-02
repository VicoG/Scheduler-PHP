<?php
	$room= (string) $_GET["room"];
	$dept= (string) $_GET["dept"];
?>
<!-- Modal content-->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<div class="panel-heading">
<span class="panel-title">
<h2 class="fa fa-pencil-square"></span> Add/ Edit Room Assignment: Building 1000</h2>
</div>
</div>
<div class="modal-body panel-group">
<div class="panel-body" id="invoice-item">            
<div class="row">
<div class="col-md-12">
     <!-- Begin Forms -->
     <!-- First Form enters a new room occupant, phone number and department -->                           

<form method="post" action="" class="form-horizontal" role="form"> <!-- Add new Person to room -->
 
 <div class="form-group">
<p class="col-md-12  text-primary"><span class="fa fa-pencil-square"></span> ADD an Occupant to Room <?php echo $room;?></p>
<p><label for="inputStandard" class="col-md-4 control-label text-primary pull-left">Name of Occupant</label></p>
<div class="col-md-8">
 <div>
<input type="text" required name="name" class="form-control" pattern=".{0,50}"  title=" Maximum characters is 50" placeholder="Required">
 </div>
</div>
 </div>
 <div class="form-group">
<p><label for="inputStandard" class="col-md-4 control-label text-primary pull-left">Email</label></p>
<div class="col-md-8">
 <div>
<input type="text" name="phone" class="form-control" pattern=".{0,12}"  title=" Maximum characters is 12" placeholder="Optional">
 </div>
</div>
 </div>
 <div class="form-group">
 <div class="row"></div>
<h4 ><label for="inputStandard" class="col-md-6 control-label text-primary">Assign the Room a Department:</label></h4><div class="col-md-5"></div>
 </div>
 
<div class="col-md-4">
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '3') echo 'checked="checked"'; ?> value="3">Admin</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '6') echo 'checked="checked"'; ?> value="6">Sales</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '7') echo 'checked="checked"'; ?> value="7">Shipping</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '11') echo 'checked="checked"'; ?> value="11">Human Resources</label>
	</div>
</div>
<div class="col-md-4">
	<div class="radio">
	<label><input type="radio" name="dept"  <?php if ($dept == '1') echo 'checked="checked"'; ?> value="1">IT Support</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '8') echo 'checked="checked"'; ?> value="8">Accounting</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '9') echo 'checked="checked"'; ?> value="9">Billing</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept" <?php if ($dept == '10') echo 'checked="checked"'; ?> value="10">Computers</label>
	</div>
</div>
<div class="col-md-4">
	<div class="radio">
	<label><input type="radio" name="dept"  <?php if ($dept == '5') echo 'checked="checked"'; ?> value="5">Common Area</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept"  <?php if ($dept == '2') echo 'checked="checked"'; ?> value="2">CEO</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept"  <?php if ($dept == '4') echo 'checked="checked"'; ?> value="4">Other</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="dept"  <?php if ($dept == '0') echo 'checked="checked"'; ?> value="0">Empty</label>
	</div>
</div>
<div id="invoice-footer">
<div class="col-md-12">                
<div class="invoice-buttons pull-right mt15">
<input type="submit" class="btn btn-primary mr10" name="submit" value="Add Person to Room" />
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
   </div>
</div>
</form>
</div>
</div>
</div>
<div class="panel-body" id="invoice-item"> <!-- Edit Existing TESA and Notes if present, if  not form below will show to ADD new information-->
          
<div class="row">
<div class="col-md-12">
<form method="post" action="" class="form-horizontal" role="form">
<div class="form-group">
<p class="col-md-12  text-alert"><span class="fa fa-pencil-square"></span> EDIT Room </p>
<p><label for="inputStandard" class="col-md-1 control-label text-alert">Phone No. </label></p>
<div class="col-md-11">
 <div>
<textarea type="text" name="notes" maxlength="150" title=" Maximum characters is 150" class="form-control" placeholder="Optional - Max Length 150 characters" rows="2" cols="70"></textarea>
 </div>
</div>
</div>
<div class="form-group">
<p><label for="inputStandard" class="col-md-1 control-label text-alert">Notes</label></p>
<div class="col-md-11">
 <div>
<textarea type="text" name="notes" maxlength="1500" title=" Maximum characters is 1500" placeholder="Optional - Max Length 1500 characters" class="form-control" rows="3" cols="70"></textarea>
 </div>
</div>
</div>
 
<div class="row" id="invoice-footer">
            <div class="col-md-12">                
                <div class="clearfix"></div>             
<div class="invoice-buttons pull-right">
<input type="submit" class="btn btn-alert mr10" name="submitNotesEdit" value=" Save EDIT Room Information"/>
<input type="submit" class="btn btn-danger mr10" name="deleteRoomInfo" value="Remove Room Information" />
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
   </div>
</div>
</form>
</div>
</div><!-- End row -->
  </div> <!-- End Invoice -->
</div> <!-- end modal-body panel-group —>