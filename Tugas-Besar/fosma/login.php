<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="admin.php">Administrator</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
                        <form action="proseslogin.php" method="POST">
                          <h6>Sign In</h6>
        			            <div class="content-wrap"><p align="left"><font size="3" face="Vani"><b>Username</b></font></p>

                                    <input    type="text"
                                              name="username"
                                              class="form-control"
                                              placeholder="Username"
                                              title="Username"
                                              required
                                              autofocus
                                    /><br/><p align="left"><font size="3" face="Vani"><b>Password</b></font></p>
                                    <input    type="password"
                                              name="password"
                                              class="form-control"
                                              placeholder="Password"
                                              title="Password"
                                              required
                                    />

                                    <div class="action" type="submit">
              			                    <button class="btn btn-md btn-default btn-line btn-block" type="submit" name="login" title="Login"><a >Login</a></button>
              			                </div>
                                    
                                </div>
                        </form>

                    </div>

                </div>
                        </div>
                        </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
