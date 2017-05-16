<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
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
	                 <h1><a href="admin.php">Administrator</a></h1>
	              </div>
	           </div>
             <div class="col-md-7">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="logout.php">Log out</a>
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
            <li class="current"><a href="admin.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
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
		  		<div class="col-md-6 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Admin Panel</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			Selamat datang di Admin Panel Web FOSMA UNS Solo, pada admin panel ini terdapat 4 fitur antara lain: Galeri, Sejarah, Pengurus, dan Proker.
						<br /><br />
					</div>
		  		</div>
		  	</div>

		  	<div class="content-box-large">
				Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
				<br /><br />
				Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
				<br /><br />
				Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
				<br /><br />
				Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
				<br /><br />
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
