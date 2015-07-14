<?php

 if(isset($_POST['set'])){
    print_r($_FILES);  
 }

 ?>
	<link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
	<link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker3.css">
    <div class="box">
     <div class="box-header">
      <h3 class="box-title">test</h3>	
     </div>
     <div class="box-body">
      <div class="row">
     <div class="col-xs-2">
			<form method="post" name="add" enctype="multipart/form-data">
			<div class="form-group">
			<div class="input-group">
			<div class="input-group-addon">
			<i class="fa fa-calendar"></i>	
			</div>
			<input type="text" class="form-control pull-right" id="datepick" readonly>
			</div>	
			</div>
			</div>
			 </div>	
			<div class="form-group">
			 <label>Nop Induk</label>
			 <div class="row">
			  <div class="col-xs-1" style="width:75px; margin-right: -20px;">
			  	<input type="text" class="form-control" maxlength="2" onkeyup="autotab(this, document.add.kota)">
			  </div>
			  <div class="col-xs-1" style="width:75px; margin-right: -20px;">
			  	<input type="text" name="kota" class="form-control" maxlength="2" onkeyup="autotab(this, document.add.kec)">
			  </div>
			  <div class="col-xs-1" style="width:85px; margin-right: -20px;">
			  	<input type="text" name="kec" class="form-control" maxlength="3" onkeyup="autotab(this, document.add.kel)">
			  </div>
			  <div class="col-xs-1" style="width:85px; margin-right: -20px;">
			  	<input type="text" name="kel" class="form-control" maxlength="3" onkeyup="autotab(this, document.add.blok)">
			  </div>
			  <div class="col-xs-1" style="width:85px; margin-right: -20px;">
			  	<input type="text" name="blok" class="form-control" maxlength="3" onkeyup="autotab(this, document.add.nourut)">
			  </div>
			  <div class="col-xs-1" style="width:90px; margin-right: -20px;">
			  	<input type="text" name="nourut" class="form-control" maxlength="4" onkeyup="autotab(this, document.add.kode)">
			  </div>
			  <div class="col-xs-1" style="width:70px; margin-right: -20px;">
			  	<input type="text" name="kode" class="form-control" maxlength="1">
			  </div>	
			 </div>	
			</div>
			</form>
     
   
     </div>
     	<?php 
         
     	?>
    </div>
    <script>
     function autotab(current, to){
     	if(current.getAttribute&&current.value.length == current.getAttribute('maxlength')){
           to.focus();
     	}
     }
    </script>
	<script type ="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script type ="text/javascript" src="component/js/bootstrap.min.js"></script>
	<script type ="text/javascript" src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script type ="text/javascript" src="plugins/fastclick/fastclick.min.js"></script>
	<script type ="text/javascript" src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <script>
     $(function() {
       $('#datepick').datepicker({
       	 format: 'dd-mm-yyyy'
       });
     });
    </script>