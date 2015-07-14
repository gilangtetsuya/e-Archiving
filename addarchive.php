<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Input Data Berkas</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker3.css">
 </head>
 <body class="skin-blue fixed sidebar-mini">
   <div class="wrapper">
   	 
   	 <?php include 'header.php'; ?>

   	  <?php include 'navigation.php'; ?>
   	
   	<div class="content-wrapper">
   	 <section class="content-header">
   	  <h1>
   	  	Input Data Berkas
   	  	<small>Add Archive</small>
   	  </h1>
   	  <ol class="breadcrumb">
   	   <li><i class="fa fa-dashboard"></i> Home</li>
   	   <li class="active">Add Archive</li>
   	  </ol>	
   	 </section>	
   	 <section class="content">
   	  <div class="row">
   	   <div class="col-md-7">
   	   	<div class="box box-primary">
   	   	 <div class="box-header with-border">
   	   	  <h3 class="box-title text-muted">Details Archive Data</h3>	
   	   	  <div class="box-tools pull-right">
   	   	  	<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="collapse"><i class="fa fa-minus"></i></button>
   	   	  </div>
   	   	 </div>
   	   	 <div class="box-body">
   	   	  <form name="add" method="post">
   	   	  <div class="form-group form-group-sm">
   	   	   <label>No Agenda</label>
   	   	   <div class="row">
   	   	   	<div class="col-xs-3">
   	   	   	 <input type="text" name="no_agenda" class="form-control">	
   	   	   	</div>
   	   	   </div>	
   	   	  </div>
   	   	  <div class="form-group">
   	   	   <label>Tgl Masuk</label>
   	   	   <div class="row">
   	   	    <div class="col-xs-4">
   	   	     <div class="input-group input-group-sm">
   	   	      <div class="input-group-addon">
   	   	      	<i class="fa fa-calendar"></i>
   	   	      </div>
   	   	      <input type="text" name="tgl_masuk" id="datepick" class="form-control" readonly>	
   	   	     </div>	
   	   	    </div>	
   	   	   </div>	
   	   	  </div>
   	   	  <div class="form-group form-group-sm">
   	   	   <label>No Pelayanan</label>
   	   	   <div class="row">
   	   	   	<div class="col-xs-2" style="margin-right: -20px;">
   	   	   	 <input type="text" name="tahun" class="form-control" maxlength="4" onkeyup="autotab(this, document.add.bundel)">	
   	   	   	</div>
   	   	   	<div class="col-xs-2" style="margin-right: -20px;">
   	   	   	 <input type="text" name="bundel" class="form-control" maxlength="4" onkeyup="autotab(this, document.add.urut)">	
   	   	   	</div>
   	   	   	<div class="col-xs-2">
   	   	   	 <input type="text" name="urut" class="form-control" maxlength="3">	
   	   	   	</div>
   	   	   </div>	
   	   	  </div>
   	   	  <div class="form-group form-group-sm">
   	   	   <label>Perihal</label>
   	   	   <div class="row">
   	   	   	<div class="col-xs-4">
   	   	   	<select class="form-control">
   	   	   	 <option value="">- -</option>
   	   	   	 <option value="penerbitan">Penerbitan</option>
   	   	   	 <option value="pemecahan">Pemecahan</option>
   	   	   	 <option value="pembetulan">Pembetulan</option>
   	   	   	 <option value="balik nama">Balik Nama</option>
   	   	   	 <option value="keberatan">Keberatan</option>
   	   	   	 <option value="pengurangan">Pengurangan</option>
   	   	     </select>		
   	   	   	</div>
   	   	   </div>
   	   	  </div>
   	   	  <div class="form-group form-group-sm">
   	   	   <label>Nop</label>
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
   	   	   <div class="form-group form-group-sm">
   	   	   	<label>Nama Pemohon</label>
   	   	   	<div class="row">
   	   	   	 <div class="col-xs-6">
   	   	   	  <input type="text" name="pemohon" class="form-control">	
   	   	   	 </div>	
   	   	   	</div>
   	   	   </div>
   	   	   <div class="form-group form-group-sm">
   	   	   	<label>Status</label>
   	   	   	<div class="row">
   	   	   	 <div class="col-xs-4">
   	   	   	  <select class="form-control">
   	   	   	   <option value="">- -</option>
   	   	   	   <option value=""></option>
   	   	   	   <option value=""></option>	
   	   	   	  </select>	
   	   	   	 </div>	
   	   	   	</div>
   	   	   </div>	
   	   	  </form>	
   	   	 </div>	
   	   	</div>
   	   </div>	
   	  </div>	
   	 </section>
   	</div>

   	 <?php include 'footer.php'; ?>

   </div>
  <!-- Javascript -->
  <script>
   function autotab(current, to){
       if(current.getAttribute&&current.value.length == current.getAttribute('maxlength')) {
           to.focus();
       }
   }
  </script>
  <script type ="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script type ="text/javascript" src="component/js/bootstrap.min.js"></script>
  <script type ="text/javascript" src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script type ="text/javascript" src="plugins/fastclick/fastclick.min.js"></script>
  <script type ="text/javascript" src="component/js/app.min.js"></script>
  <script type ="text/javascript" src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <script>
     $(function() {
       $('#datepick').datepicker({
       	 format: 'dd-mm-yyyy'
       });
     });
    </script>
 </body>
</html>