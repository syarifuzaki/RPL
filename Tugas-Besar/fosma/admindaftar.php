<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Pengurus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
	                 <h1><a href="admin.html">Administrator</a></h1>
	              </div>
	           </div>
	           <div class="col-md-7">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="index.html">Log out</a>
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
                  <li><a href="admin.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                  <li><a href="admingaleri.php"><i class="glyphicon glyphicon-calendar"></i> Galeri</a></li>
                  <li><a href="adminsejarah.php"><i class="glyphicon glyphicon-pencil"></i> Sejarah</a></li>
                  <li class="current"><a href="admindaftar.php"><i class="glyphicon glyphicon-list"></i>Daftar Pengurus</a></li>
                  <li class="submenu">
                       <a href="#">
                          <i class="glyphicon glyphicon-record"></i> Proker
                          <span class="caret pull-right"></span>
                       </a>
                       <!-- Sub menu -->
                       <ul>
                          <li><a href="adminproker.php">Add Proker</a></li>
                          <li><a href="signup.html">List Proker</a></li>
                      </ul>
                  </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title"></div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
              <legend>Daftar Pengurus</legend>
  						<table class="table">
			              <thead>
			                <tr>
			                  <th>NIM</th>
			                  <th>Nama</th>
			                  <th>Fakultas</th>
                        <th>Jabatan</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td>1</td>
			                  <td>Mark</td>
			                  <td>Otto</td>
			                  <td>@mdo</td>
                        <td><a href="formdaftar.php">Edit</a></td>
			                </tr>
			                <tr>
			                  <td>2</td>
			                  <td>Jacob</td>
			                  <td>Thornton</td>
			                  <td>@fat</td>
                        <td><a href="formdaftar.php">Edit</a></td>
			                </tr>
			                <tr>
			                  <td>3</td>
			                  <td>Larry</td>
			                  <td>the Bird</td>
			                  <td>@twitter</td>
                        <td><a href="formdaftar.php">Edit</a></td>
			                </tr>
			              </tbody>
			            </table>
  					</div>
  				</div>
  			</div>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>

         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>
