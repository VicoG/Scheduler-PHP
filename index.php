<?php include 'includes/header.php' ?>
		
<script type="text/javascript">
	$(document).ready(function() {
		
		$('#printCalendar').fullCalendar({
			header: { //sets buttons at top of calendar
				left: 'prev,next today',
				center: 'title',
				right: 'month,listWeek'
			},
			editable: true, //allows tasks to be editable in calendar- currently not being used
			droppable: true, //allows tasks to be moved to change due date
			navLinks: true, // can click day/week names to navigate views
			eventLimit: true, // allow "more" link when too many events
			weekends: false, // dont show weekends
			allDayDefault : true, // rtemoves time from claendar, all events are all day
			eventSources: [ // populates calendar from two sources either poster or Digital media tasks
				{
				  url: 'data.php',
				  color: '#FFFF66',
				  textColor: 'black',
				  error: function() {
					alert("Trouble loading Print data into the Calendar.");
					}
				},
				{
				  url: 'posterData.php',
				  color: '#3333ff',
				  textColor: 'white',
				  error: function() {
					alert("Trouble loading Digital Media data into the Calendar.");
					}
				}
			],
			loading: function(bool) {
				$('#loading').toggle(bool);
			},
			eventRender: function eventRender( event, element, view ) {
				return ['all', event.render].indexOf($('#render_selector').val()) >= 0;
			},
		    eventClick: function(event, jsEvent, view) { // function to display modal with data
				console.log("assigned To ",event.assignedTo);
				if (event.posterType == "") {
					$('#modalTitle').html('<h3 class="text-center">Job: ' + event.id +' &mdash; ' + event.jobName +'</h3>');
					$('#modalBody').html('<div class="row"><div class="col-md-6">Due By: <b>' + event.start.format('MM/DD/YYYY') +'</b><br>Assigned To: <b>' + event.assignedTo +'</b></div><div class="col-md-6">Contact: <b>' + event.contactName +'</b></div></div>');
					$('#modalBodyP').html('<div class="row"><div class="col-md-6"><p>Paper Size: <b>' + event.paperSize  + '</b><br>Sides: <b>' + event.printedOn  + '</b><br>Paper Finish: <b>' + event.paperFinish  + '</b><br>Ink Color: <b>' + event.ink  + '</b><br>Cover: <b>' + event.cover  + '</b></p></div><div class="col-md-6"><p># Originals: <b>' + event.numberOriginals  + '</b><br># of Copies: <b>' + event.numberCopies  + '</b><br>Units: <b>' + (event.numberOriginals * event.numberCopies) + '</b><br>Stapling: <b>' + event.stapling  + '</b><br>Binding: <b>' + event.binding  + '</b></p></div></div');
				} else {
					$('#modalTitle').html('<h3 class="text-center">Job: ' + event.id +' &mdash; ' + event.jobName +'</h3>');
					$('#modalBody').html('<div class="row"><div class="col-md-6">Due By: <b>' + event.start.format('MM/DD/YYYY') +'</b><br>Assigned To: <b>' + event.assignedTo +'</b></div><div class="col-md-6">Contact: <b>' + event.contactName +'</b></div></div>');
					$('#modalBodyP').html('<p>Poster Type: <b>' + event.posterType  + '</b></p><div class="col-md-11 col-md-offset-1"><p>Mounting: <b>' + event.mounting  + '</b><br>Laminating: <b>' + event.laminating  + '</b><br>Framing: <b>' + event.frame  + '</b><br>Paper Finish: <b>' + event.paperFinish  + '</b></p></p></div>');
				}
				
				$('#modalBody5').html('<b>Comments: </b><br>' + event.comments);
				$('#modalBody6').html('<b>ZIP Files: </b> <a href="" class="text-primary"> Click Here to download</a>');
				$('#eventUrl').attr('href','info.php?id=' + event.id);
				$('#eventComplete').attr('href','complete.php?id=' + event.id);
				$('#fullCalModal').modal();
				return false;
			},
			eventDrop: function(event, delta, revertFunc) { // drag to change date function
				
				
				var title = event.jobName;
				var start = event.start.format('MM/DD/YYYY');
				var eventid = event.id;
				var end = (event.end == null) ? start : event.end.format();
				//alert(event.jobName + " was dropped on "+start+ " id is "+ eventid);
				$.ajax({
					url: 'updateData.php',
					data: 'type=resetdate&title='+title+'&start='+start+'&end='+end+'&eventid='+eventid, //{type: resetdate, start: start, eventid: eventid},
					type: 'POST',
					dataType: 'json',
					success: function(response){
						if(response.status != 'Success'){		    				
						revertFunc();
						}
						
					},
					error: function(e){		    			
						revertFunc();
						alert('Error processing your request: '+e.responseText);
					}
				});
			}
		});
	
		
		$('#render_selector').on('change',function(){
			$('#printCalendar').fullCalendar('rerenderEvents');
		});
	});
</script>


<div class="col-lg-12 col-md-12" style="margin-top:5em;">
	<div class="form-group">
	<select id="render_selector" class="text-center" style="font-size:.7em;">
	  <option value="all"> All</option>
	  <option value="P"> Print</option>
	  <option value="DM"> Digital Media</option>
	</select>
	</div>
	<div id='printCalendar' style="margin-top:2em; height:100%;"></div>
</div>


	<!-- MODAL to display task information -->
	<div id="fullCalModal" class="modal fade">
        <div class="modal-dialog">
				<div class="panel panel-primary">
					<div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
						<span id="modalTitle"></span>
					</div>
					<div class="panel-body" id="backgroundImgPosterModal">
						<span id="modalBody"></span>
						<span id="modalBodyP"></span>		
							<p id="modalBody5"></p>
							<p id="modalBody6"></p>
					</div>
					<div class="modal-footer">
						<a class="btn btn-success pull-left modal_btn" id="eventComplete" disabled>Mark Complete</a>
						<button type="button" class="btn btn-default modal_btn" data-dismiss="modal">Close</button>
						<a class="btn btn-primary modal_btn" id="eventUrl" disabled >Details Page</a>
					</div>
                </div>
        </div>
    </div>
	
<?php  //mysqli_close($conn); ?>		
<?php include 'includes/footer.php'; ?>

