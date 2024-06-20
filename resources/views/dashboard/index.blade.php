﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Rhythm Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-success fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-50">
			  <span class="light-logo"><img src="../images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="align-left"></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
			  <i data-feather="bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-danger-light">
			  	<i data-feather="settings"></i>
			  </a>
          </li>
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
				<div class="d-flex pt-5">
					<div class="text-end me-10">
						<p class="pt-5 fs-14 mb-0 fw-700 text-primary">Johen Doe</p>
						<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
					</div>
					<img src="../images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
				</div>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
              </li>
            </ul>
          </li>	
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="help-bt">
			<a href="tel:108" class="d-flex align-items-center">
				<div class="bg-danger rounded10 h-50 w-50 l-h-50 text-center me-15">
					<i data-feather="mic"></i>
				</div>
				<h4 class="mb-0">Emergency<br>help</h4>
			</a>
		</div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">			
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
					<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
					<li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
					<li><a href="index4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 4</a></li>
				  </ul>
				</li>
				<li>
				  <a href="appointments.html">
					<i data-feather="calendar"></i>
					<span>Appointments</span>
				  </a>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i data-feather="users"></i>
					<span>Patients</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="patients.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Patients</a></li>
					<li><a href="patient_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Patient Details</a></li>
				  </ul>
				</li>				
				<li class="treeview">
				  <a href="#">
					<i data-feather="activity"></i>
					<span>Doctors</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="doctor_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Doctors</a></li>
					<li><a href="doctors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Doctor Details</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="package"></i>
					<span>Features</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">											
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
							<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
							<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
							<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
							<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
						</ul>
					</li>												
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>BS UI
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
							<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
							<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
							<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
							<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
							<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
							<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
							<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
						</ul>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
							<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
							<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
							<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
							<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
							<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
							<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
							<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
						</ul>
					</li>									
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom UI
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
							<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
							<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
							<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
							<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
							<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
							<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
							<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
							<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
							<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
							<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
							<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
							<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
							<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
							<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>	
						</ul>
					</li>  
				  </ul>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i data-feather="inbox"></i>
					<span>Forms, Tables & Charts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
							<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
							<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
							<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
							<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
							<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
							<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
							<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
							<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
							<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
						</ul>
					</li> 		
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
							<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
							<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
							<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
						</ul>
					</li> 
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
							<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
							<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
							<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
							<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
							<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
							<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
							<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
							<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
							<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
							<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
						</ul>
					</li>
				  </ul>
				</li>				 
				<li class="treeview">
				  <a href="#">
					<i data-feather="grid"></i>
					<span>Apps & Widgets</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
							<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
							<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
							<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
							<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
						</ul>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
									<li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
									<li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
									<li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
									<li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
									<li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
									<li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
									<li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>	
								</ul>
							</li>											  	
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
									<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
								</ul>
							</li>					  	
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
									<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
									<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
								</ul>
							</li>
						</ul>
					</li>					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ecommerce
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
							<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
							<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
							<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
							<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
							<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sample Pages
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
							<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
							<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
							<li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
							<li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
							<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
							<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
							<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
							<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
							<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
							<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
							<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
							<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
						</ul>
					</li>
				  </ul>
				</li>	 
				<li class="treeview">
				  <a href="#">
					<i data-feather="lock"></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="alert-triangle"></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>	
				  </ul>
				</li>	 	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="../images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Make an Appointments</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best Helth Care here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">Rhythm Admin Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="row">						
						<div class="col-xl-3 col-md-6 col-6">
							<div class="box">
								<div class="box-body text-center">
									<div class="bg-primary-light rounded10 p-20 mx-auto w-100 h-100">
										<img src="../images/svg-icon/medical/icon-1.svg" class="" alt="" />
									</div>
									<p class="text-fade mt-15 mb-5">Total Patients</p>
									<h2 class="mt-0">1,548</h2>
								</div>
							</div>
						</div>						
						<div class="col-xl-3 col-md-6 col-6">
							<div class="box">
								<div class="box-body text-center">
									<div class="bg-danger-light rounded10 p-20 mx-auto w-100 h-100">
										<img src="../images/svg-icon/medical/icon-2.svg" class="" alt="" />
									</div>
									<p class="text-fade mt-15 mb-5">Consulation</p>
									<h2 class="mt-0">448</h2>
								</div>
							</div>
						</div>						
						<div class="col-xl-3 col-md-6 col-6">
							<div class="box">
								<div class="box-body text-center">
									<div class="bg-warning-light rounded10 p-20 mx-auto w-100 h-100">
										<img src="../images/svg-icon/medical/icon-3.svg" class="" alt="" />
									</div>
									<p class="text-fade mt-15 mb-5">Staff</p>
									<h2 class="mt-0">848</h2>
								</div>
							</div>
						</div>						
						<div class="col-xl-3 col-md-6 col-6">
							<div class="box">
								<div class="box-body text-center">
									<div class="bg-info-light rounded10 p-20 mx-auto w-100 h-100">
										<img src="../images/svg-icon/medical/icon-4.svg" class="" alt="" />
									</div>
									<p class="text-fade mt-15 mb-5">Total Rooms</p>
									<h2 class="mt-0">3,100</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-12">						
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Daily Revenue Report</h4>
								</div>
								<div class="box-body">							
									<h3 class="text-primary mt-0">$32,485 <small class="text-muted">$12,458</small></h3>
									<div id="recent_trend"></div>							
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">						
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Payments history</h4>
								</div>
								<div class="box-body">	
									<div class="inner-user-div2">
										<div>
											<div class="d-flex justify-content-between align-items-end">
												<div>
													<a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Johen Doe</a>
													<h5 class="my-5">Kidney function test</h5>
												</div>
												<div>
													<h5 class="my-5">$ 25.15</h5>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
												<div>
													<p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="d-flex justify-content-between align-items-end">
												<div>
													<a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Michael Doe</a>
													<h5 class="my-5">Emergency appointment</h5>
												</div>
												<div>
													<h5 class="my-5">$ 99.15</h5>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
												<div>
													<p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="d-flex justify-content-between align-items-end">
												<div>
													<a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Bertie Maxwell</a>
													<h5 class="my-5">Complementation test</h5>
												</div>
												<div>
													<h5 class="my-5">$ 40.45</h5>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
												<div>
													<p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="d-flex justify-content-between align-items-end">
												<div>
													<a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Clyde Morales</a>
													<h5 class="my-5">USG + Consultation</h5>
												</div>
												<div>
													<h5 class="my-5">$ 29.90</h5>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
												<div>
													<p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="d-flex justify-content-between align-items-end">
												<div>
													<a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Michael Doe</a>
													<h5 class="my-5">Emergency appointment</h5>
												</div>
												<div>
													<h5 class="my-5">$ 99.15</h5>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
												<div>
													<p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Doctor List</h4>
									<p class="mb-0 pull-right">Today</p>
								</div>
								<div class="box-body">
									<div class="inner-user-div3">
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-primary mb-1 fs-16">Dr. Jaylon Stanton</a>
												<span class="text-fade">Dentist</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../images/avatar/avatar-10.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-danger mb-1 fs-16">Dr. Carla Schleifer</a>
												<span class="text-fade">Oculist</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../images/avatar/avatar-11.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-success mb-1 fs-16">Dr. Hanna Geidt</a>
												<span class="text-fade">Surgeon</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../images/avatar/avatar-12.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-info mb-1 fs-16">Dr. Roger George</a>
												<span class="text-fade">General Practitioners</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="../images/avatar/avatar-15.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-warning mb-1 fs-16">Dr. Natalie doe</a>
												<span class="text-fade">Physician</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">						
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Balance</h4>
								</div>
								<div class="box-body">	
									<div class="d-flex align-items-center justify-content-between">										
										<div class="d-flex align-items-center">
											<div class="icon">
												<i class="fa fa-arrow-up text-primary me-10 fs-20 bg-primary-light rounded-circle text-center w-70 h-70 l-h-70"></i>
											</div>
											<div>
												<p class="text-muted mb-5">Income</p>
												<h4 class="my-0">$142K</h4>
											</div>
										</div>
										<div id="balance1"></div>	
									</div>	
									<div class="d-flex align-items-center justify-content-between">										
										<div class="d-flex align-items-center">
											<div class="icon">
												<i class="fa fa-arrow-down text-danger me-10 fs-20 bg-danger-light rounded-circle text-center w-70 h-70 l-h-70"></i>
											</div>
											<div>
												<p class="text-muted mb-5">Outcome</p>
												<h4 class="my-0">$43K</h4>
											</div>
										</div>
										<div id="balance2"></div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">						
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Patient Statistics</h4>
								</div>
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="d-flex align-items-center me-30">
											<div class="bg-gradient-success overflow-h me-10 rounded10 w-50 h-50 l-h-50 fs-18 text-center text-white"><i class="fa fa-hospital-o"></i></div>
											<div>
												<p class="fs-14 text-fade mb-0">Admit</p>
												<h5 class="mb-0">2158</h5>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="bg-gradient-primary overflow-h me-10 rounded10 w-50 h-50 l-h-50 fs-18 text-center text-white"><i class="fa fa-home"></i></div>
											<div>
												<p class="fs-14 text-fade mb-0">Discharge</p>
												<h5 class="mb-0">1112</h5>
											</div>
										</div>
									</div>
									<div id="overview_trend"></div>						
								</div>
							</div>	
						</div>
						<div class="col-xl-6 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Patient Review</h4>
								</div>
								<div class="box-body p-0">
									<div class="inner-user-div">
									  <div class="media-list bb-1 bb-dashed border-light">
										<div class="media align-items-center">
										  <a class="avatar avatar-lg status-success" href="#">
											<img src="../images/avatar/1.jpg" class="bg-success-light" alt="...">
										  </a>
										  <div class="media-body">
											<p class="fs-16">
											  <a class="hover-primary" href="#">Theron Trump</a>
											</p>
											  <span class="text-muted">2 day ago</span>
										  </div>
										  <div class="media-right">
											  <div class="d-flex">
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star-o"></i>
											  </div>
										  </div>
										</div>					
										<div class="media pt-0">
											<p class="text-fade">Vestibulum tincidunt sit amet sapien et eleifend. Fusce pretium libero enim, nec lacinia est ultrices id. Duis nibh sapien, ultrices in hendrerit ac, pulvinar ut mauris. Quisque eu condimentum justo. </p>
										</div>
									  </div>
									  <div class="media-list bb-1 bb-dashed border-light">
										<div class="media align-items-center">
										  <a class="avatar avatar-lg status-success" href="#">
											<img src="../images/avatar/3.jpg" class="bg-success-light" alt="...">
										  </a>
										  <div class="media-body">
											<p class="fs-16">
											  <a class="hover-primary" href="#">Johen Doe</a>
											</p>
											  <span class="text-muted">5 day ago</span>
										  </div>
										  <div class="media-right">
											  <div class="d-flex">
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star-half-o"></i>
											  </div>
										  </div>
										</div>					
										<div class="media pt-0">
											<p class="text-fade">Praesent venenatis viverra turpis quis varius. Nullam ullamcorper congue urna, in sodales eros placerat non.</p>
										</div>
									  </div>
									  <div class="media-list">
										<div class="media align-items-center">
										  <a class="avatar avatar-lg status-success" href="#">
											<img src="../images/avatar/4.jpg" class="bg-success-light" alt="...">
										  </a>
										  <div class="media-body">
											<p class="fs-16">
											  <a class="hover-primary" href="#">Tyler Mark</a>
											</p>
											  <span class="text-muted">7 day ago</span>
										  </div>
										  <div class="media-right">
											  <div class="d-flex">
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
											  </div>
										  </div>
										</div>					
										<div class="media pt-0">
											<p class="text-fade">Pellentesque a pretium orci. In hac habitasse platea dictumst. Nulla mattis odio enim, id euismod neque bibendum non.</p>
										</div>
									  </div>
									  <div class="media-list bb-1 bb-dashed border-light">
										<div class="media align-items-center">
										  <a class="avatar avatar-lg status-success" href="#">
											<img src="../images/avatar/5.jpg" class="bg-success-light" alt="...">
										  </a>
										  <div class="media-body">
											<p class="fs-16">
											  <a class="hover-primary" href="#">Theron Trump</a>
											</p>
											  <span class="text-muted">2 day ago</span>
										  </div>
										  <div class="media-right">
											  <div class="d-flex">
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star-half-o"></i>
											  </div>
										  </div>
										</div>					
										<div class="media pt-0">
											<p class="text-fade">Curabitur condimentum molestie ligula iaculis euismod. Fusce nulla lectus, tincidunt eu consequat.</p>
										</div>
									  </div>
									  <div class="media-list bb-1 bb-dashed border-light">
										<div class="media align-items-center">
										  <a class="avatar avatar-lg status-success" href="#">
											<img src="../images/avatar/6.jpg" class="bg-success-light" alt="...">
										  </a>
										  <div class="media-body">
											<p class="fs-16">
											  <a class="hover-primary" href="#">Johen Doe</a>
											</p>
											  <span class="text-muted">5 day ago</span>
										  </div>
										  <div class="media-right">
											  <div class="d-flex">
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star"></i>
												  <i class="text-warning fa fa-star-o"></i>
											  </div>
										  </div>
										</div>					
										<div class="media pt-0">
											<p class="text-fade">Proin lacinia eleifend nulla eu ornare. Integer commodo elit purus. Suspendisse mattis gravida interdum. In laoreet nisi eget felis ornare, tempus luctus nulla pellentesque. Donec maximus lobortis ullamcorper. </p>
										</div>
									  </div>
									</div>
								</div>
								<div class="box-footer">
									<a href="#" class="waves-effect waves-light d-block w-p100 btn btn-primary">See More Reviews</a>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Upcoming Appointments</h4>
						</div>
						<div class="box-body">
							<div id="paginator1"></div>
						</div>
						<div class="box-body">
							<div class="inner-user-div4">
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton</p>
											<span class="text-dark fs-16">Emergency appointment</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:00 <span class="mx-20">$ 30</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Polly Paul</p>
											<span class="text-dark fs-16">USG + Consultation</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:30 <span class="mx-20">$ 50</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
											<span class="text-dark fs-16">Laboratory screening</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:00 <span class="mx-20">$ 70</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-4.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Harmani Doe</p>
											<span class="text-dark fs-16">Keeping pregnant</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:30 </p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Mark Wood</p>
											<span class="text-dark fs-16">Primary doctor consultation</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 12:00 <span class="mx-20">$ 30</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex align-items-center mb-10">
										<div class="me-15">
											<img src="../images/avatar/avatar-6.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
										</div>
										<div class="d-flex flex-column flex-grow-1 fw-500">
											<p class="hover-primary text-fade mb-1 fs-14">Shawn Marsh</p>
											<span class="text-dark fs-16">Emergency appointment</span>
										</div>
										<div>
											<a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
										<div>
											<p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 13:00 <span class="mx-20">$ 90</span></p>
										</div>
										<div>
											<div class="dropdown">
												<a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
												  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
												  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">		
						<div class="box-header no-border">
							<h4 class="box-title">Appointments Overview</h4>
						</div>
						<div class="box-body">	
							<div id="chart432"></div>
						</div>																		
					</div>					
					<div class="box">		
						<div class="box-header">
							<h4 class="box-title">Recovery rate</h4>
						</div>
						<div class="box-body">
							<div class="mb-30">
								 <div class="d-flex align-items-center justify-content-between mb-5"><h5>80 %</h5><h5>Cold</h5></div>
								 <div class="progress  progress-xs">
									<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									</div>
								 </div>
							</div>
							<div class="mb-30">
								 <div class="d-flex align-items-center justify-content-between mb-5"><h5>24 %</h5><h5>Fracture</h5></div>
								 <div class="progress  progress-xs">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
									</div>
								 </div>
							</div>
							<div>
								 <div class="d-flex align-items-center justify-content-between mb-5"><h5>91 %</h5><h5>Ache</h5></div>
								 <div class="progress  progress-xs">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
									</div>
								 </div>
							</div>
							<div>
								 <div class="d-flex align-items-center justify-content-between mb-5"><h5>50 %</h5><h5>Hematoma</h5></div>
								 <div class="progress  progress-xs">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
									</div>
								 </div>
							</div>
							<div>
								 <div class="d-flex align-items-center justify-content-between mb-5"><h5>72 %</h5><h5>Caries</h5></div>
								 <div class="progress  progress-xs">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
									</div>
								 </div>
							</div>							
						</div>
					</div>
				</div>
			</div>			
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->
		
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-30"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="../assets/vendor_components/date-paginator/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/vendor_components/date-paginator/bootstrap-datepaginator.min.js"></script>
	
	<!-- Rhythm Admin App -->
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>
	
</body>
</html>
