	
<!-- Begin: Page Footer -->
<footer id="content-footer" class="affix">
	<div class="row">
  		<div class="col-md-11">
             <ul class="list-inline">
				 <li style="background-color:rgba(230, 195, 0,.5); border-radius: 2em; border: .1em solid grey; width:4em; text-align:center;">Admin</li>
				 <li style="background-color: maroon; border-radius: 2em; border: .1em solid grey; width:4em; text-align:center;">Sales</li>
				 <li style="background-color:rgba(255, 192, 203,.7); border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;"><i class="fa fa-file-text-o" ></i> HR</li>
				 <li style="background-color: white; border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;">Empty</li>
				 <li style="background-color: rgba(128,128,128,.9); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;">Open Area</li>
				 <li style="background-color: rgba(255, 26, 26,.7); border-radius: 2em; border: .1em solid grey; width:4em; text-align:center;" >Ship</li>
				 <li style="background-color: rgba(0, 128, 0,.7); border-radius: 2em; border: .1em solid grey; width:4em; text-align:center;"> Acct</li>
				 <li style="background-color: rgba(0, 0, 255, .8); border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;"> CEO</li>
				 <li style="background-color: rgba(255, 255, 26,.8); border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;">Comp</li>
				 <li style="background-color: rgba(255, 173, 51,.8); border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;">Billing</li>
				 <li style="background-color: rgba(153, 0, 153,.8); border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;"><i class="fa fa-laptop"></i> IT</li>
				 <li style="background-color: rgba(102, 255, 255,.5); border-radius: 2em; border: .1em solid grey; width:5em; text-align:center;">Other</li>
			</ul>
    	</div>
		<div class="col-md-1 text-right">
			<a href="#content" class="footer-return-top">
			  	<span class="fa fa-arrow-up"></span>
			</a>
		</div>
	</div>
</footer><!-- End: Page Footer -->

	</section><!-- End: Content-Wrapper -->
</div><!-- End: Main -->
  
  <!-- BEGIN: PAGE SCRIPTS -->
	
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- JQuery Tooltip -->
	<script type="text/javascript" src="assets/js/jquery.qtip.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Theme Javascript -->
	<script src="assets/js/utility.js"></script>
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- Data Tables -->
	<script src="assets/js/datatables.min.js"></script>
	<!--<script src="vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>-->

<script type="text/javascript">

  jQuery(document).ready(function() {
    "use strict";
  
    // Init Theme Core    
    Core.init();
    });

    // Init Admin Panels on widgets inside the ".admin-panels" container

    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      // mobile: true,
      onStart: function() {
        // Do something before AdminPanels runs
      },

      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
      },

      onSave: function() {
        $(window).trigger('resize');
      }
    });

    var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];

 </script><!-- END: PAGE SCRIPTS -->

</body>
</html>

