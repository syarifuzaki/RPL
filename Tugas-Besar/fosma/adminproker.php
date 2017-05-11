<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
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
	                 <h1><a href="admin.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
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
                  <li><a href="adminsejarah.php"><i class="glyphicon glyphicon-stats"></i> Sejarah</a></li>
                  <li><a href="admindaftar.php"><i class="glyphicon glyphicon-list"></i>Daftar Pengurus</a></li>
                  <li class="current"><a href="adminproker.php"><i class="glyphicon glyphicon-record"></i> Proker</a></li>
                  <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editor</a></li>
                  <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
	  			<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
			  				<div class="panel-heading">
								<div class="panel-title">Default Elements</div>
							</div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" action="">

									<fieldset>
										<legend>Default Form Elements</legend>
										<div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Text field</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Default Text Field" type="text">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Auto Complete</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Type somethine..." type="text" list="list">
												<datalist id="list">
													<option value="Alexandra"></option>
													<option value="Alice"></option>
													<option value="Anastasia"></option>
													<option value="Avelina"></option>
													<option value="Basilia"></option>
													<option value="Beatrice"></option>
													<option value="Cassandra"></option>
													<option value="Cecil"></option>
													<option value="Clemencia"></option>
													<option value="Desiderata"></option>
													<option value="Dionisia"></option>
													<option value="Edith"></option>
													<option value="Eleanora"></option>
													<option value="Elizabeth"></option>
													<option value="Emma"></option>
													<option value="Felicia"></option>
													<option value="Florence"></option>
													<option value="Galiana"></option>
													<option value="Grecia"></option>
													<option value="Helen"></option>
													<option value="Helewisa"></option>
													<option value="Idonea"></option>
													<option value="Isabel"></option>
													<option value="Joan"></option>
													<option value="Juliana"></option>
													<option value="Karla"></option>
													<option value="Karyn"></option>
													<option value="Kate"></option>
													<option value="Lakisha"></option>
													<option value="Lana"></option>
													<option value="Laura"></option>
													<option value="Leona"></option>
													<option value="Mandy"></option>
													<option value="Margaret"></option>
													<option value="Maria"></option>
													<option value="Nanacy"></option>
													<option value="Nicole"></option>
													<option value="Olga"></option>
													<option value="Pamela"></option>
													<option value="Patricia"></option>
													<option value="Qiana"></option>
													<option value="Rachel"></option>
													<option value="Ramona"></option>
													<option value="Samantha"></option>
													<option value="Sandra"></option>
													<option value="Tanya"></option>
													<option value="Teresa"></option>
													<option value="Ursula"></option>
													<option value="Valerie"></option>
													<option value="Veronica"></option>
													<option value="Wilma"></option>
													<option value="Yasmin"></option>
													<option value="Zelma"></option>
												</datalist>
												<p class="note"><strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.</p>
											</div>

										</div>

										<div class="form-group">
											<label class="col-md-2 control-label">Password field</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Password field" type="password" value="mypassword">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 control-label" for="textarea">Textarea</label>
											<div class="col-md-10">
												<textarea class="form-control" placeholder="Textarea" rows="4"></textarea>
											</div>
										</div>


									</fieldset>

									<fieldset>
										<legend>Unstyled Checkbox</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox default</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
														<input type="checkbox">
														Checkbox 1 </label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox">
														Checkbox 2 </label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox">
														Checkbox 3 </label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="checkbox-inline">
													<input type="checkbox">
													Checkbox 2 </label>
												<label class="checkbox-inline">
													<input type="checkbox">
													Checkbox 2 </label>
												<label class="checkbox-inline">
													<input type="checkbox">
													Checkbox 3 </label>
											</div>
										</div>

									</fieldset>

									<fieldset>
										<legend>Unstyled Radiobox</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Radios default</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio">
														Radiobox 1 </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio">
														Radiobox 2 </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio">
														Radiobox 3 </label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="radio radio-inline">
													<input type="radio">
													Radiobox 1 </label>
												<label class="radio radio-inline">
													<input type="radio">
													Radiobox 2 </label>
												<label class="radio radio-inline">
													<input type="radio">
													Radiobox 3 </label>
											</div>
										</div>



									</fieldset>

									<fieldset>
										<legend>File inputs</legend>

										<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="exampleInputFile1">
												<p class="help-block">
													some help text here.
												</p>
											</div>
										</div>

									</fieldset>


									<fieldset>
										<legend>Unstyled Select</legend>
										<div class="form-group">
											<label class="col-md-2 control-label" for="select-1">Select</label>
											<div class="col-md-10">

												<select class="form-control" id="select-1">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>

											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label" for="multiselect1">Multiple select</label>
											<div class="col-md-10">
												<select multiple="multiple" id="multiselect-1" class="form-control custom-scroll" title="Click to Select a City">
													<option>Amsterdam</option>
													<option selected="selected">Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option selected="selected">Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
									</fieldset>

									<fieldset>
										<legend>Input States</legend>

										<div class="form-group has-warning">
											<label class="col-md-2 control-label">Input warning</label>
											<div class="col-md-10">
												<div class="input-group">
													<input class="form-control" type="text">
													<span class="input-group-addon"><i class="fa fa-warning"></i></span>
												</div>
												<span class="help-block">Something may have gone wrong</span>
											</div>

										</div>

										<div class="form-group has-error">
											<label class="col-md-2 control-label">Input error</label>
											<div class="col-md-10">
												<div class="input-group">
													<input class="form-control" type="text">
													<span class="input-group-addon"><i class="glyphicon glyphicon-remove-circle"></i></span>
												</div>
												<span class="help-block"><i class="fa fa-warning"></i> Please correct the error</span>
											</div>
										</div>

										<div class="form-group has-success">
											<label class="col-md-2 control-label">Input success</label>
											<div class="col-md-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
													<input class="form-control" type="text">
													<span class="input-group-addon"><i class="fa fa-check"></i></span>
												</div>
												<span class="help-block">Something may have gone wrong</span>
											</div>
										</div>

									</fieldset>

									<fieldset>
										<legend>Input sizes</legend>

										<div class="form-group">
											<label class="control-label col-md-2">Extra Small Input</label>
											<div class="col-md-10">
												<input class="form-control input-xs" placeholder=".input-xs" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Small Input</label>
											<div class="col-md-10">
												<input class="form-control input-sm" placeholder=".input-sm" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Default Input</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Default input" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Large Input</label>
											<div class="col-md-10">
												<input class="form-control input-lg" placeholder=".input-lg" type="text">
											</div>
										</div>

									</fieldset>

									<fieldset>
										<legend>Select Sizes</legend>
										<div class="form-group">
											<label class="control-label col-md-2">Small Select</label>
											<div class="col-md-10">
												<select class="form-control input-sm">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Default Select</label>
											<div class="col-md-10">
												<select class="form-control">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Large Select</label>
											<div class="col-md-10">
												<select class="form-control input-lg">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>

									</fieldset>

									<fieldset>
										<legend>Prepend &amp; Append</legend>

										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Input</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">@</span>
															<input class="form-control" id="prepend" placeholder="Username" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">W/ input &amp; radios</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">
																<span class="onoffswitch">
																	<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="st3">
																	<label class="onoffswitch-label" for="st3">
																		<div class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></div>
																		<div class="onoffswitch-switch"></div>
																	</label>
																</span>
															</span>
															<input class="form-control" placeholder="" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="form-group">
											<label class="control-label col-md-2" for="append">Appended Input</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" id="append" type="text">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2" for="appendprepend">Combined</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input class="form-control" id="appendprepend" type="text">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2" for="appendbutton">With buttons</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" id="appendbutton" type="text">
															<div class="input-group-btn">
																<button class="btn btn-default" type="button">
																	Search
																</button>
																<button class="btn btn-default" type="button">
																	Options
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2">With dropdowns</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">

														<div class="input-group">
															<input type="text" class="form-control">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default" tabindex="-1">Action</button>
																<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu pull-right" role="menu">
																	<li><a href="javascript:void(0);">Action</a></li>
																	<li><a href="javascript:void(0);">Another action</a></li>
																	<li><a href="javascript:void(0);">Something else here</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0);">Cancel</a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">

														<div class="input-group">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default" tabindex="-1">Action</button>
																<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu" role="menu">
																	<li><a href="javascript:void(0);">Action</a></li>
																	<li><a href="javascript:void(0);">Another action</a></li>
																	<li><a href="javascript:void(0);">Something else here</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0);">Cancel</a></li>
																</ul>
															</div>
															<input type="text" class="form-control">
														</div>

													</div>
												</div>
											</div>
										</div>

									</fieldset>

									<div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-default" type="submit">
													Cancel
												</button>
												<button class="btn btn-primary" type="submit">
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

	  		<!--  Page content -->
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
