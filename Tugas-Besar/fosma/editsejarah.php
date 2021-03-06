<?php
require('Sejarah.php');
if(isset($_GET['title'])){
    $Sejarah = new Sejarah();
    $history = $Sejarah->editSejarah($_GET['title']);
    $edit = $history->fetch(PDO::FETCH_OBJ);
    $tampilkan = "SELECT deskripsi FROM sejarah";
    echo '
<!DOCTYPE html>
<html>
  <head>
    <title>Sejarah</title>
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
	                 <h1><a href="index.php">Administrator</a></h1>
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
                          <li><a href="fomrdaftar.php">Add Pengurus</a></li>
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


 										<legend>Edit Sejarah</legend>
										<form class="form-horizontal" action="editsejarah.php"  method="POST">
										<fieldset>
 										<div class="form-group">
 											<label class="col-md-2 control-label" for="text-field">Judul Sejarah</label>
 											<div class="col-sm-4">
 												<input class="form-control" placeholder="Judul" type="text" name="title" value="'.$edit->title.'">
 											</div>
 										</div>
                    <div class="form-group">
 											<label class="col-md-2 control-label" for="text-field">Deskripsi</label>
                    <div class="panel-body">
                      <textarea id="ckeditor_full" placeholder="Enter text ..." name="deskripsi" value="'.$edit->deskripsi.'">
                      </textarea>

                    </div>
 									</fieldset>
                  <div class="form-actions">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-default" type="submit" >
                          <a href="adminsejarah.php">Cancel</a>
                        </button>
                        <button class="btn btn-primary" type="submit" name="updateSejarah" value="Update" >
                          <i class="fa fa-save"></i>
                          Update
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
 			  				</div>
         		   </div>
 			  			</div>
 					</div>
         </div>
 	  		<!--  Page content -->
 		  </div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Created by Kelompok 9
            </div>

         </div>
      </footer>

     <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/editors.js"></script>
  </body>
</html>
';
}
if(isset($_POST['updateSejarah'])){
    $title = $_POST['title'];
    $deskripsi = $_POST['deskripsi'];

    $Sejarah = new Sejarah();
    $upd = $Sejarah->updateSejarah($title, $deskripsi);
    if($upd == "Success"){
        header('Location: adminsejarah.php');
    }
}
 
?>
