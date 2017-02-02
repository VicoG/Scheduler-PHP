  <!DOCTYPE html>


<html>
<head>

	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<title>ToDo Now</title>
	<meta name="author" content="Steve DiStefano">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="assets/images/checked-checkbox.png">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/modsTODO.css">
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<!-- Image Resizer -->
	<script src="vendor/plugins/image-map-resizer-master/js/imageMapResizer.min.js"></script>
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Font Awesome -->
		<!-- Font CSS (Via CDN) -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->


<!--[if lte IE 10]>
<div id="warning">
<h2 class="red">You are using an OUTDATED browser. In addition, your Browser Is NOT Supported by the LAB! You are opening your computer up to vulnerabilities.</h2><br />
<h2 class="red">This site will not function properly if you use Internet Explorer. <a href='https://www.microsoft.com/en-us/WindowsForBusiness/End-of-IE-support'> Even Microsoft recommends you upgrade!!! </a></h2><br />
<h3>Please upgrade to <a href='https://www.mozilla.org/en-US/firefox/new/'> FireFox- a LAB Supported Browser </a>, <a href='https://support.apple.com/downloads/safari'>Safari</a> or <a href='https://www.google.com/chrome/browser/desktop/'> Chrome </a>. Thank You!&nbsp;&nbsp;&nbsp;<a href="#" onClick="document.getElementById('warning').style.display = 'none';"><b> Close Window</b></a></h3>
</div>
<![endif]-->
</head>


<body class="sb-l-o sb-r-c">


  <!-- Start: Main -->

<div id="main">
<!-- Start: Header -->

    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="indexToDo.php">
          <b style="text-shadow: 1px 1px #3BAFDA;">ToDo:</b> Now <sub>v2.0</sub>
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span><!--+++++++++++  toggle left diebar button +++++++++++++++-->
      </div>

      <ul class="nav navbar-nav navbar-left">

        <li class="dropdown menu-merge">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="hidden-xs ">Navigation</span>

            <span class="caret caret-tp"></span>

          </a><!--++++++++++++++++++++++ Navigation Dropdown +++++++++++++++++++++-->
            <ul class="dropdown-menu multi-level dropdown-persist" role="menu" >
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-comments text-warning"></span>
                    <span class="sidebar-title"> First Response (100)</span>
                </a>
				  <ul class="dropdown-menu">
					<li><a role="menuitem" tabindex="-1" href=""><span class="sidebar-title ">  Da dove viene (100)</span></a></li>
					</ul>
            </li>
		    <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-truck text-warning"></span>
                    <span class="sidebar-title"> Second Response (200)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href=""><span class="sidebar-title "> Da dove viene (200)</span></a></li>
                    <li role="presentation"><a href=""><span class="sidebar-title "> Dove posso trovarlo (201)</span></a></li>
                    </ul>
            </li>
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-code-fork text-danger"></span>
                    <span class="sidebar-title"> Third Response (300)</span>
                </a>
				  <ul class="dropdown-menu">
				    <li role="presentation"><a href=""><span class="sidebar-title "> Da dove viene (300)</span></a></li>
                    <li role="presentation"><a href=""><span class="sidebar-title "> Dove posso trovarlo (301)</span></a></li>
                    </ul>
            </li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-exclamation-triangle text-danger"></span>
                    <span class="sidebar-title"> Fourth Response (400)</span>
                </a>
				  <ul class="dropdown-menu">
				  	<li role="presentation"><a href=""><span class="sidebar-title "> Da dove viene (400)</span></a></li>
                    <li role="presentation"><a href=""><span class="sidebar-title "> Dove posso trovarlo (401)</span></a></li>
                    </ul>
            </li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-building text-danger"></span>
                    <span class="sidebar-title"> Fifth Response (500)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href=""><span class="sidebar-title "> Da dove viene (500)</span></a></li>
                    <li role="presentation"><a href=""><span class="sidebar-title "> Dove posso trovarlo (501)</span></a></li>
                    </ul>
            </li>
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-wrench text-success"></span>
                    <span class="sidebar-title"> Sixth Response (600)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href=""><span class="sidebar-title "> Da dove viene (600)</span></a></li>
					<li role="presentation"><a href=""><span class="sidebar-title "> Dove posso trovarlo (601)</span></a></li>
				</ul>
          </li>
	   </ul>
    </li>
</ul>


<ul class="nav navbar-nav navbar-right"><!--+++++++++++Right Nav +++++++++++++++-->
	<li>
		<h2 class="text-danger pull-right hidden-xs hidden-sm" style="margin-right:.5em; font-size: 1.5em !important;">
			<em style="text-shadow: 1px 1px #E63F24;"> Active Alert </em> <small style="color:#EC6F5A;">Something's Happening </small> 
			<i class="fa fa-exclamation-triangle text-danger" aria-hidden="true">  </i> <small style="color:#85D27A;"> Training </small>
		</h2>
	</li>

	<li class="dropdown menu-merge"><!--+++++++++++If Admin Show Admin menu +++++++++++++++-->
		<a href="#" class="dropdown-toggle fw600 pt20" data-toggle="dropdown" >
		<span class="text-system hidden-xs hidden-sm">  Logged in as Guest</span>
		<span class="caret caret-tp"></span>
		</a>
		<ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
			<li class="list-group-item">
				 <a href=""><span  class="fa fa-home text-system pl20"></span><span class="sidebar-title text-system pl10"> HOME </span></a>
			</li>
			<li class="list-group-item">
				<a href=""><span class="fa fa-tachometer text-system pl20" ></span><span class="sidebar-title text-system pl10"> Administrator MENU </span></a>
			</li>
			<li class="dropdown-footer">
			  <a href="">
			  <span class="fa fa-power-off pr5"></span> Logout </a>
			</li>
		</ul>
	</li>
</ul>
	  
</header><!-- End: Header -->


<div id="skin-toolbox">
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-sitemap text-primary"></i>
        </span>
        <span class="panel-title"> Decision Diagrams</span>
      </div>
      <div class="panel-body pn">
		<a href="#" id="s100" class="btn btn-primary btn-block pb10 pt10">100 Series</a>
        <a href="#" id="s200" class="btn btn-primary btn-block pb10 pt10" disabled>200 Series</a>
        <a href="#" id="s300" class="btn btn-primary btn-block pb10 pt10" disabled>300 Series</a>
        <a href="#" id="s400" class="btn btn-primary btn-block pb10 pt10" disabled>400 Series</a>
        <a href="#" id="s500" class="btn btn-primary btn-block pb10 pt10" disabled>500 Series</a>
        <a href="#" id="s600" class="btn btn-primary btn-block pb10 pt10" disabled>600 Series</a>
        
      </div>
    </div>
  </div>
  
  

  
  			<!-- Start: Left Decsion Framework Sidebar -->
<aside id="sidebar_left" class="nano nano-light affix sidebar-light"> <!-- Start: Sidebar Left Content -->
  <div class="sidebar-left-content nano-content" style="background-color:#F7C65F;">
  <ul class="nav sidebar-menu mr15">
	<li class="sidebar-label">
	  <div class="panel panel-tile text-primary br-b bw5 br-primary-light mt40">
            <div class="panel-body pl20 p5">                
                 <img src="assets/images/action.png" alt="A" class="img-responsive pull-right" />
                <h2 class="mt15 lh15">
                    <b>100</b>
                </h2>
                <h5 class="text-muted mt20">Initial Control Actions</h5>
            </div>
            <div class="panel-footer bg-white br-t br-light p12">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                <div class="btn-group pull-right mb15 mt15" role="group">                
					<a href="" class="btn btn-primary "><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>                  
					<a href="" class="btn btn-primary ">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
				</div>                                                                                      
            </div>                    
        </div>
		</li>
		
		<li class="sidebar-label text-center ">
			<div>
				<button id="toggleKey" type="button" class="btn btn-link text-muted"><i class="fa fa-arrow-up" aria-hidden="true"></i> Hide/ Show Key Strategy <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
			</div>
		</li>
		<li class="sidebar-label" id="key">    
			<div class="panel panel-primary" id="p7" data-panel-color="panel-info">
				<div class="panel-heading">
					<span class="panel-title"> Key Strategy Objectives (100)</span>                    
				</div>
				<div class="panel-body">
					<p> <strong>1.</strong> and praising pain was born </p>
					<p> <strong>2.</strong> and I will give you a complete account of the system, </p>
					<p> <strong>3.</strong> and expound the actual teachings of the great explorer </p> 
				</div>
			</div>
		</li>
		
		<li class="sidebar-label text-center">
			<div>
				<button id="toggle" type="button" class="btn btn-link text-muted"><i class="fa fa-arrow-up" aria-hidden="true"></i> Hide/ Show Sub-Steps <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
			</div>
		</li>
		
		<li class="sidebar-label">
        <div id="nav-spy">
			<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
				<div class="panel-body">                
					<p><strong>100-1</strong><span class="text-muted"> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,</span></p>
					<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
				</div>
			</div>
			<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
				<div class="panel-body">                
					<p><strong>100-2</strong><span class="text-muted"> but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </span></p>
					<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
				</div>
			</div>
			<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
				<div class="panel-body">                
					<p><strong>100-3</strong><span class="text-muted"> but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </span></p>
					<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
				</div>
			</div>
			<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
				<div class="panel-body">                
					<p><strong>100-4</strong><span class="text-muted"> but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</span></p>
					<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
				</div>
			</div>
			<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
				<div class="panel-body">                
					<p><strong>100-5</strong><span class="text-muted"> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?  </span></p>
				</div>
			</div>
        </div>	
		</li>

	<li class="sidebar-label">
    <div class="panel panel-primary" data-panel-color="panel-info">
        <div class="panel-heading pt5">
            <h4 class="panel-title text-center">At vero eos et accusamus et iusto odio dignissimos </h4>                    
        </div>
        <div class="panel-body">
            <p> <strong>1.</strong> qui blanditiis praesentium voluptatum </p>
            <p> <strong>2.</strong> deleniti atque corrupti quos dolores  </p>
            <p> <strong>3.</strong> et quas molestias excepturi</p> 
            <p> <strong>4.</strong> Emergency si sint occaecati cupiditate non provident, </p> 
            <p> <strong>5.</strong> similique sunt in culpa qui officia deserunt tuation stabilized</p> 
            <br />
            <p>
            	Note: mollitia animi, id est 
            </p>
        </div>
    </div>
	</li>          

  </ul>   <!-- End: Sidebar Left Menu List -->
  </div> <!-- End: Sidebar Left Content -->
</aside>

 <section id="content_wrapper" ><!-- Start: Content-Wrapper -->  

<script type="text/javascript">	               
$(document).ready( function () {
    $('#tableResponse').DataTable({  
		"columnDefs": [
			{ "orderable": false, "targets": 6 },
			{ "orderable": false, "targets": 4 },
			{ "orderable": false, "targets": 5 }
	  	],
		dom: 'Bfrtip',
        buttons: [
            'print'
		]
	} );
	
	$('#tableTransit').DataTable({  
		"columnDefs": [
			{ "orderable": false, "targets": 6 },
			{ "orderable": false, "targets": 4 },
			{ "orderable": false, "targets": 5 }
	  	],
		dom: 'Bfrtip',
        buttons: [
            'print'
		]
	});
});	
</script>

	
<div class="panel-body mb40" id="invoice-item">
	<div id="TR" class="row table-responsive">
		<div class="col-md-12">
		<table class="table table-hover table-bordered" id="tableResponse" style="clear:both;">
			<caption class="bg-alert" style="border: 3px double #8362D6;"><h2 style="text-shadow: 2px 2px #484D61;">Level- 100: ToDo Tasks</h2></caption>
		<thead>
			<tr class="primary">
				<th>È universalmente riconosciuto</th>
				<th>Esistono innumerevoli variazioni</th> 
				<th>Al contrario di quanto si </th>
				<th>Il brano standard del</th>
				<th>Finibus Bonorum et Malorum</th>
				<th>Lorem ipsum dolor sit</th>
				<th></th>
			</tr>
		</thead>
	  <tbody>
	  	<tr>
			<td>
				<dl>
					<dt>Sed ut perspiciatis unde</dt>
						<dd>omnis iste natus error </dd><br>
						<dd>sit voluptatem accusantium</dd>
				</dl>
				<dl>
					<dt>doloremque laudantium</dt>
						<dd>totam rem aperiam</dd><br> 
						<dd>eaque ipsa quae ab </dd>
					</dt>
				</dl>
			</td>
			<td>
				<dl>
					<dd>illo inventore veritatis et quasi</dd><br>
					<dd>architecto beatae vitae dicta</dd><br>
					<dd>sunt explicabo</dd><br>
					<dd>quia voluptas sit </dd><br>
					<dd>aspernatur aut odit </dd>
				</dl>
			</td>
			<td> 
			
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-success btn-xs" id="btnClick" name="submit" ><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-success btn-xs" id="btnClick" name="submit" ><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
				</dl>
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>est, qui dolorem ipsum quia dolor sit</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td>
				<p><a href="" target="_blank" >At vero eos et accusamus et iusto odio dignissimos</a></p>
				<p><a href="" target="_blank" >Ducimus qui blanditiis praesentium</a></p>
				<p><a href=""target="_blank" >Et harum quidem rerum facilis est et</a></p>
				<p><a href="" target="_blank" >Nam libero tempore</a></p>
				<p><a href="">Temporibus autem quibusdam et aut </a></p>
				<p><a href="" >Sed ut perspiciatis unde</a></p>
			</td>  
			<td>
				<div class="btn-group">
				  <a href="" data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit" disabled></i></a><br><br>
				  <a href=""  data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download" disabled></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash-o"></i></button>
				 </div>
			</td> 
		</tr>
	  	<tr>
			<td>
				<dl>
					<dt>Sed ut perspiciatis unde</dt>
						<dd>omnis iste natus error </dd><br>
						<dd>sit voluptatem accusantium</dd>
				</dl>
				<dl>
					<dt>doloremque laudantium</dt>
						<dd>totam rem aperiam</dd><br> 
						<dd>eaque ipsa quae ab </dd>
					</dt>
				</dl>
			</td>
			<td>
				<dl>
					<dd>illo inventore veritatis et quasi</dd><br>
					<dd>architecto beatae vitae dicta</dd><br>
					<dd>sunt explicabo</dd><br>
					<dd>quia voluptas sit </dd><br>
					<dd>aspernatur aut odit </dd>
				</dl>
			</td>
			<td> 
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd>
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
				</dl> 
			
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>est, qui dolorem ipsum quia dolor sit</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>est, qui dolorem ipsum quia dolor sit</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td>
				<p><a href="" target="_blank" >At vero eos et accusamus et iusto odio dignissimos</a></p>
				<p><a href="" target="_blank" >Ducimus qui blanditiis praesentium</a></p>
				<p><a href=""target="_blank" >Et harum quidem rerum facilis est et</a></p>
				<p><a href="" target="_blank" >Nam libero tempore</a></p>
				<p><a href="">Temporibus autem quibusdam et aut </a></p>
				<p><a href="" >Sed ut perspiciatis unde</a></p>
			</td>  
			<td>
				<div class="btn-group">
				  <a href="" data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit" disabled></i></a><br><br>
				  <a href=""  data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download" disabled></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash-o"></i></button>
				 </div>
			</td> 
		</tr>
	  	<tr>
			<td>
				<dl>
					<dt>Sed ut perspiciatis unde</dt>
						<dd>omnis iste natus error </dd><br>
						<dd>sit voluptatem accusantium</dd>
				</dl>
				<dl>
					<dt>doloremque laudantium</dt>
						<dd>totam rem aperiam</dd><br> 
						<dd>eaque ipsa quae ab </dd>
					</dt>
				</dl>
			</td>
			<td>
				<dl>
					<dd>illo inventore veritatis et quasi</dd><br>
					<dd>architecto beatae vitae dicta</dd><br>
					<dd>sunt explicabo</dd><br>
					<dd>quia voluptas sit </dd><br>
					<dd>aspernatur aut odit </dd>
				</dl>
			</td>
			<td> 
			
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-success btn-xs" id="btnClick" name="submit" ><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-success btn-xs" id="btnClick" name="submit" ><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl> 
					<dd>amet, consectetur, adipisci velit,</dd>
				</dl>
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>est, qui dolorem ipsum quia dolor sit</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
				</dl> 
			</td>
			<td>
				<p><a href="" target="_blank" >At vero eos et accusamus et iusto odio dignissimos</a></p>
				<p><a href="" target="_blank" >Ducimus qui blanditiis praesentium</a></p>
				<p><a href=""target="_blank" >Et harum quidem rerum facilis est et</a></p>
				<p><a href="" target="_blank" >Nam libero tempore</a></p>
				<p><a href="">Temporibus autem quibusdam et aut </a></p>
				<p><a href="" >Sed ut perspiciatis unde</a></p>
			</td>  
			<td>
				<div class="btn-group">
				  <a href="" data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit" disabled></i></a><br><br>
				  <a href=""  data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download" disabled></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash-o"></i></button>
				 </div>
			</td> 
		</tr>
	  	<tr>
			<td>
				<dl>
					<dt>Sed ut perspiciatis unde</dt>
						<dd>omnis iste natus error </dd><br>
						<dd>sit voluptatem accusantium</dd>
				</dl>
				<dl>
					<dt>doloremque laudantium</dt>
						<dd>totam rem aperiam</dd><br> 
						<dd>eaque ipsa quae ab </dd>
					</dt>
				</dl>
			</td>
			<td>
				<dl>
					<dd>illo inventore veritatis et quasi</dd><br>
					<dd>architecto beatae vitae dicta</dd><br>
					<dd>sunt explicabo</dd><br>
					<dd>quia voluptas sit </dd><br>
					<dd>aspernatur aut odit </dd>
				</dl>
			</td>
			<td> 
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			<form  method="post" action="">
				<button class="btn btn-warning btn-xs" id="btnClick" name="submit" ><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></button> <strong> Nemo enim ipsam voluptatem</strong>
			</form>
				<dl>
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
				</dl> 
		
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>est, qui dolorem ipsum quia dolor sit</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>ut fugit, sed quia consequuntur magni</dd> 
					<dd>sequi nesciunt. Neque porro quisquam</dd> 
					<dd>amet, consectetur, adipisci velit,</dd> 
				</dl> 
			</td>
			<td>
				<p><a href="" target="_blank" >At vero eos et accusamus et iusto odio dignissimos</a></p>
				<p><a href="" target="_blank" >Ducimus qui blanditiis praesentium</a></p>
				<p><a href=""target="_blank" >Et harum quidem rerum facilis est et</a></p>
				<p><a href="" target="_blank" >Nam libero tempore</a></p>
				<p><a href="">Temporibus autem quibusdam et aut </a></p>
				<p><a href="" >Sed ut perspiciatis unde</a></p>
			</td>  
			<td>
				<div class="btn-group">
				  <a href="" data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm" disabled><i class="fa fa-edit"></i></a><br><br>
				  <a href=""  data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm" disabled><i class="fa fa-download"></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash-o"></i></button>
				 </div>
			</td> 
		</tr>
	  </tbody>
	</table>
	</div>                
	<br />
	<div class="row " id="invoice-footer ">
		<div class="col-md-12">                
			<div class="clearfix"></div>
			<div class="invoice-buttons">
				<a href="" class="btn btn-success pull-right mr15" disabled><i class="fa fa-plus"></i> Add</a>                             
          	</div>
     	</div>                               
    </div> 

	</div>            
	</div>        
</div>




<footer id="content-footer"  class="affix">
		<div class="col-xs-4 col-sm-1 ">
			<span>Progress:</span>
		</div>

		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">  
			  <div class="progress-bar progress-bar-warning bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
			  </div>
			  <b><span> <i class="fa fa-truck"></i>   First Response  30%</span></b>
			</div>
		  </div>
				

		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
			  </div>
			  <b><span><i class="fa fa-code-fork"></i>  Second Response  50%</span></b>
			</div>
		  </div>


		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
			  </div>
			  <b><span><i class="fa fa-exclamation-triangle"></i>   Third Response  70%</span></b>
			</div>
		  </div>


		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
			  </div>
			  <b><span><i class="fa fa-building"></i>  Fourth Response  90%</span></b>
			</div>
		  </div>


		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-success bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
			  </div>			  
			  <b><span><i class="fa fa-wrench"></i> Fifth Response  40%</span></b>
			</div>
		  </div>
	  <div class="col-xs-4 col-sm-1 text-right">
		<a href="#content" class="footer-return-top">
		  <span class="fa fa-arrow-up"></span>
		</a>
	  </div>
</footer>


	</section>  <!-- End: Content -->

	<!-- Image popup -->
        <div id="modal-image1" class="popup-basic popup-lg mfp-with-anim mfp-hide">
          <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
					 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792"
					 style="enable-background:new 0 0 612 792;" xml:space="preserve">
				<image style="overflow:visible;" width="470" height="411" xlink:href="assets/images/flowchart.jpg"  transform="matrix(1 0 0 1 71 190)">
				</image>
					<a href=""><rect x="252" y="193" style="fill:none;" width="112" height="58" /></a>
					<a href=""><rect x="240" y="271" width="131" height="81" style="fill:none;"/></a>
					<a href=""><rect x="240" y="388" width="132" height="79" style="fill:none;"/></a>
					<a href=""><rect x="240" y="501" width="131" height="80" style="fill:none;"/></a>
					<a href=""><rect x="80" y="382" width="115" height="61" style="fill:none;"/></a>
					<a href=""><rect x="421" y="520" width="109" height="51" style="fill:none;"/></a>
			</svg>
        </div>
  

    <!-- BEGIN: PAGE SCRIPTS -->

	<!-- Theme Javascript -->
	<script src="assets/js/utility.js"></script>
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- Widget Javascript -->
	<script src="assets/js/demo/widgets.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Tables Filter-->
	<script src="vendor/TableFilter/multifilter.min.js"></script>
	<!-- Data Tables -->
	<link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>
	<script type="text/javascript" src="assets/js/datatables.min.js"></script>
	
 <script type="text/javascript">

  jQuery(document).ready(function() {

    "use strict";
    Demo.init();   // Init Demo JS  
    Core.init();// Init Theme Core  
	
	$("#toggle").click(function(){   // Toggles left sidebar
		$("#nav-spy").toggle(1000);
	});
	$("#toggleKey").click(function(){   // Toggles left sidebar
		$("#key").toggle(1000);
	});



    // ++++++++++++++++++++++  Controls side map popout  ++++++++++++++++++++++++++
    $('.example-preview').on('click', 'a.dz-remove', function() {
      $(this).parent('.example-preview').remove();
    });
	
    // Form Skin Switcher
	$('#s100').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image1'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
    $('#s200').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image2'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
	$('#s300').on('click', function() 
		{
		  
		  $.magnificPopup.open({
			removalDelay: 500, //delay removal by X to allow out-animation,
			items: {
			  src: '#modal-image3'
			},
			// overflowY: 'hidden', // 
			callbacks: {
			  beforeOpen: function(e) {
				var Animation = 'mfp-zoomIn';
				this.st.mainClass = Animation;
			  }
			},
			midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		  });
	
		});
	$('#s400').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image4'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
	$('#s500').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image5'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
	$('#s600').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image6'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });	 
    });

    // this controls the left side panel show/hide
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
        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        demoHighCharts.init();
        runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });
  });

  </script> <!-- END: PAGE SCRIPTS -->

	<?php //imageMapResize(); ?>  <!-- Resize SVG Maps in popout for SVG buttons to work properly -->


</body>
</html>






