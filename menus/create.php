 <!DOCTYPE html>
 <html>
 <head>
	 	<title>CMS Project - Blocks</title>
	 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body>
  	<div class="main no-gutter" >
	  	<?php 
	        include '../nav_panel.php';
	    ?>
	    <div class="rightSection col-md-10" id="main"> 	
		    <div class="s-panel">
		    	<h3><i class="fa fa-th-list"></i> Create </h3> 
		    </div>
			   <div class="col-md-9 col-sm-9">
				    
				<form>
				  <div class="form-group">			    
				    <input type="text"  class="form-control" id="exampleInputEmail1" placeholder="Title">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Identifier">
				  </div>				        
				</form>
				</div>	    	
		    <div class="col-md-3 col-sm-3">
		    	<form action="" name="filter_form" class="search-form" method="get" accept-charset="utf-8">
				    <div class="sidebar-content">				                
				        <p class="field-lang">
				           	<div class="dropdown ">
							 <button class="s-btn color btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Language
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="#">English (en) </a></li>
							    <li><a href="#">Deustch (de) </a></li>								   
							  </ul>
							</div>													                    
						</p>
						<div class="buttons">
		                    <button type="submit" class="btn btn-success s-btn">Save</button>
		                    <button type="button" class="btn btn-primary s-btn">Save and continue editing</button>
		                    <button type="button" class="btn btn-primary s-btn">Save and add new</button>
		                </div>
				    </div>				               
				</form>
		    </div>
		</div>  
	</div>
 </body>
 </html>

<script type="text/javascript" src="../script/script.js"></script>
