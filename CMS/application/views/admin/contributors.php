<!DOCTYPE html>
<html>
<head>
	<!-- Include meta tag to ensure proper rendering and touch zooming -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  
	<title>List of Contributors</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('css/nav-slide.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('css/style.css');?>">
	<link href="<?=base_url('js/bootstrap-datepicker/css/bootstrap-datetimepicker.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
	
	<?php $this->load->view("header");?>
	<input type="hidden" id="js-vars" data-var='<?=$jsvar;?>'/>
	<div class="container" id="content"> 
		<div class="panel panel-primary">
	      <div class="panel-heading">List of Contributors
	      	
	      </div>
	      <div class="panel-body">
	       <div class="row"> 
				<div class="col-lg-12"> 
					<div id="btn-wrap" class="pull-right">
						<a class="btn btn-link" id="btn-add"  data-toggle="modal" data-target="#maintenance-form" data-backdrop="static"  data-keyboard="false"><span class="glyphicon glyphicon-plus"></span> New</a>		
						<a class="btn btn-link" id="btn-check" data-value="false"><span class="glyphicon glyphicon-unchecked"></span> <text>Mark all</text></a>		
						<a class="btn btn-link" id="btn-remove"><span class="glyphicon glyphicon-trash"></span> Remove</a>		
					</div>	
				</div>
			</div>
	      	<div class="row">
				<?php if($data) { ?>
				 	  	<div id="custom-search-input">
	                        <div class="input-group col-md-12">
	                            <input type="text" class="search-query form-control" placeholder="Search" />
	                            <span class="input-group-btn">
	                                <button class="btn btn-danger" type="button">
	                                    <span class=" glyphicon glyphicon-search"></span>
	                                </button>
	                            </span>
	                        </div>
	                    </div>
	            <?php } ?>
	            <!-- RESULT AFFECTED ROWS -->
					<?php if($this->session->flashdata('result')) {?>
						<p class="label label-info result"><?=$this->session->flashdata('result');?></p> 
					<?php }?>
					<!--  -->
				<div id="list-wrap" class="col-lg-12">	 
				 	<div class="panel-group" id="group">
				 	  <?php if($data) { ?> 
				 	  	 <?php foreach ($data as $row) { ?>
				 	  	 <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						     		<input class="chkElem" id="chk-<?=$row->ID;?>" type="checkbox"/> 
						      		<div class="btn-group pull-right" data-item='<?=json_encode($row);?>'>
							      		<a class="btn btn2 btn-link btn-edit savemode" data-toggle="collapse" data-parent="#group" href="#collapse<?=$row->ID;?>">Edit</a>

							        	<a class="btn btn2 btn-link btn-cancel editmode" data-toggle="collapse" data-parent="#group" href="#collapse<?=$row->ID;?>">Cancel</a>
							        	<a class="btn btn2 btn-link btn-save editmode">Update</a>  
						      		</div>
						        	
						      		<h4 class="list-group-item-heading"><?=$row->LASTNAME . ", " . $row->FIRSTNAME?></h4>
						        	<p class="list-group-item-text"><?=$row->CREATEDDATE?></p>
						      </h4>
						    </div>
						    <div id="collapse<?=$row->ID?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      		<form id='form-main'> 						     		
						      			<div class='form-group'><label for='LASTNAME'>Last name:</label><input class='form-control' id='LASTNAME' type='text' data-type="unique"/> </div>	 
						      			<div class='form-group'><label for='FIRSTNAME'>First name:</label><input class='form-control' id='FIRSTNAME' type='text' data-type="unique"/> </div>	 
						      			<div class='form-group'><label for='MIDNAME'>Middle name:</label><input class='form-control' id='MIDNAME' type='text'/> </div>	  
							     		 
							     	</form>

						      </div>
						    </div>
						     
						  </div> 
				 	  
				 	  <?php  } ?>
				 	  <?php } else{ ?>
				 	  		<!-- NO RECORDS FOUND  -->
				 	  		<label class="label label-default pull-right">No record(s) found.</label> 
				 	  <?php } ?> 
					</div>
				</div> 
		 
			</div>
				
	      </div>
	    </div>
		
		
				 
			

		

	</div>

	<div id="maintenance-form" class="modal fade" role="dialog">
	  <div class="modal-dialog"> 
	    <!-- Modal content-->
	    <div class="modal-content" >
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>

	        <h4 class="modal-title">Contributors information</h4>

	      </div>
	      <div class="modal-body">
	         <div class="row" style="padding: 0 36px;"> 
	         		<form id='form-main'> 						     		
		      			<div class='form-group'><label for='LASTNAME'>Last name:</label><input class='form-control' id='LASTNAME' type='text' data-type="unique"/> </div>	 
		      			<div class='form-group'><label for='FIRSTNAME'>First name:</label><input class='form-control' id='FIRSTNAME' type='text' data-type="unique"/> </div>	 
		      			<div class='form-group'><label for='MIDNAME'>Middle name:</label><input class='form-control' id='MIDNAME' type='text'/> </div>	 
		      			 
			     	</form>  
	         </div>
	      </div>
	      <div class="modal-footer">
		      <div class='btn-group pull-right'>
				      	<button type="button" class="btn btn-primary btn-save">Save</button>
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		       </div>
	      	
	      </div>
	    </div>

	  </div>
	</div>

	 


 
	 
 
	<script type="text/javascript" src='<?=base_url("js/jquery/jquery-1.11.3.js")?>'></script>
	<script type="text/javascript" src='<?=base_url("js/bootstrap/bootstrap.min.js")?>'></script>
	<script type="text/javascript" src='<?=base_url("js/nav-slide.js")?>'></script>
	<script type="text/javascript" src="<?=base_url('js/bootstrap-datepicker/js/moment.min.js');?>"></script> 
    <script type="text/javascript" src="<?=base_url('js/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js');?>"></script> 
    <script type="text/javascript" src="<?=base_url('js/bootbox.min.js');?>"></script> 
    <script type="text/javascript" src='<?=base_url('js/maskMoney.js');?>'></script> 
	<script type="text/javascript" src='<?=base_url("js/utility/ajaxCall.js")?>'></script>
	<script type="text/javascript" src='<?=base_url("js/admin/maintenance.js")?>'></script>
	 
</body>
	
</html>