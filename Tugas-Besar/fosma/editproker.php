<?php
require('Proker.php');
if(isset($_GET['nama_proker'])){
    $Proker = new Proker();
    $proker = $Proker->editProker($_GET['nama_proker']);
    $edit = $proker->fetch(PDO::FETCH_OBJ);
    echo '
<!DOCTYPE html>
<html>
  <head>
    <title>Proker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="admin.php">Administrator</a></h1>
	              </div>
	           </div>
	           <div class="col-md-7">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="index.php">Log out</a>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                  <!-- Main menu -->
                  <li><a href="admin.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                  <li class="submenu">
                       <a href="#">
                          <i class="glyphicon glyphicon-calendar"></i> Galeri
                          <span class="caret pull-right"></span>
                       </a>
                       <!-- Sub menu -->
                       <ul>
                          <li><a href="admingaleri.php">Add Galeri</a></li>
                          <li><a href="listgaleri.php">List Galeri</a></li>
                      </ul>
                  </li>
                  <li><a href="adminsejarah.php"><i class="glyphicon glyphicon-pencil"></i> Sejarah</a></li>
                  <li class="submenu">
                       <a href="#">
                          <i class="glyphicon glyphicon-list"></i> Pengurus
                          <span class="caret pull-right"></span>
                       </a>
                       <!-- Sub menu -->
                       <ul>
                          <li><a href="formdaftar.php">Add Pengurus</a></li>
                          <li><a href="admindaftar.php">List Pengurus</a></li>
                      </ul>
                  </li>
                  <li class="submenu">
                       <a href="#">
                          <i class="glyphicon glyphicon-record"></i> Proker
                          <span class="caret pull-right"></span>
                       </a>
                       <!-- Sub menu -->
                       <ul>
                          <li><a href="adminproker.php">Add Proker</a></li>
                          <li><a href="listproker.php">List Proker</a></li>
                      </ul>
                  </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
	  			<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
			  				<div class="panel-body">
			  					<form class="form-horizontal" action="adminproker.php"  method="POST">

									<fieldset>
										<legend>Edit Proker</legend>
										<div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Nama Proker</label>
											<div class="col-sm-4">
												<input class="form-control" placeholder="Nama Proker" required type="text" name="nama_proker" value="'.$edit->nama_proker.'">
											</div>
										</div>
                    <div class="form-group">
  			  						<label class="col-md-2 control-label" for="text-field">Tanggal</label>
                      <div class="col-sm-4">
                        <input type="text" name="tanggal" required placeholder="Format: YYYY/MM/DD" value="'.$edit->tanggal.'" class="form-control"><br>
                        <div class="bfh-datepicker" data-format="y-m-d" data-date="today" name="tanggal" required value="'.$edit->tanggal.'"></div>
                    </div>
  			  					</div>

										<div class="form-group">
											<label class="col-md-2 control-label" for="textarea">Deskripsi</label>
											<div class="col-md-10">
												<textarea class="form-control" placeholder="Deskripsi" rows="4" name="deskripsi" required value="'.$edit->deskripsi.'"></textarea>
											</div>
										</div>
									</fieldset>

									<div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-primary" type="submit" name="addProker" value="Tambah Proker">
													<i class="fa fa-save"></i>
													Submit
												</button>
											</div>
										</div>
									</div>

								</form>
			  				</div>
			  			</div>
					</div>
        </div>
	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Created by Kelompok 9
            </div>

         </div>
      </footer>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>
';
}
if(isset($_POST['updateProker'])){
    $nama_proker = $_POST['nama_proker'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];

    $Proker = new Proker();
    $upd = $Proker->updateProker($nama_proker, $tanggal, $deskripsi);
    if($upd == "Success"){
        header('Location: listproker.php');
    }
}
 
?>
