<!DOCTYPE html>
<html lang="en">
<head>
	<title>RHM - <?php echo $__env->yieldContent("title"); ?></title>
	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="rhm,rent,housing,manage">
	<meta name="description" content="Easy & hassle free Rent & Housing Management Web Application">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/materialadmin.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/material-design-iconic-font.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/toastr.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/css/custom.css" />
	<!-- Extra CSS files from child page -->
	<?php echo $__env->yieldContent("extraStyle"); ?>

	<style>
		.section-header {
			height: 30px;
		}
		.height-9, .size-9 {
			height: 320px;
		}
		.height-5, .size-5 {
			height: 310px;
		}
		.flatno .tile .tile-text {

			font-size: 14px;

		}
		.header-nav-options .dropdown > a .badge {
			font-size: 16px;
			top: -13px;

		}
	</style>
	<!-- END STYLESHEETS -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/js/libs/utils/html5shiv.js"></script>
	<script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/js/libs/utils/respond.min.js"></script>
	<![endif]-->
</head>
<body class="menubar-hoverable header-fixed menubar-pin ">

<!-- BEGIN HEADER-->
<header id="header" class="no-print">
	<div class="headerbar">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="headerbar-left">
			<ul class="header-nav header-nav-options">
				<li class="header-nav-brand" >
					<div class="brand-holder">
						<a href="<?php echo e(URL::Route('user.dashboard')); ?>">
							<span class="text-lg text-bold text-primary">Rent & Housing Manage</span>
						</a>
					</div>
				</li>
				<li>
					<a id="menubarToggler" class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="headerbar-right">
			<ul class="header-nav header-nav-options">
				<li class="dropdown">
					<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
						<i class="fa fa-taka">&#2547;</i><sup class="badge style-danger">4</sup>
					</a>
					<ul class="dropdown-menu animation-expand">
						<li class="dropdown-header">Today's Collection</li>
						<li>
							<a class="alert alert-callout alert-warning" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/user01.jpg" alt="" />
								<strong>Alex Anistor</strong><br/>
								<small>$ 45,000</small>
							</a>
						</li>
						<li>
							<a class="alert alert-callout alert-info" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/user01.jpg" alt="" />
								<strong>Alicia Adell</strong><br/>
								<small>$ 50,000</small>
							</a>
						</li>
						<li class="dropdown-header">Options</li>
						<li><a href="../../html/pages/login.html">View all Collections <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
						<li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->
				<li class="dropdown">
					<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
						<i class="fa fa-2x fa-money"></i><sup class="badge style-danger">6</sup>
					</a>
					<ul class="dropdown-menu animation-expand">
						<li class="dropdown-header">Today's Reciveable</li>
						<li>
							<a class="alert alert-callout alert-warning" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/user01.jpg" alt="" />
								<strong>Alex Anistor</strong><br/>
								<small>$ 2,5000</small>
							</a>
						</li>
						<li>
							<a class="alert alert-callout alert-info" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/user01.jpg" alt="" />
								<strong>Alicia Adell</strong><br/>
								<small>$ 5,5000</small>
							</a>
						</li>
						<li class="dropdown-header">Options</li>
						<li><a href="../../html/pages/login.html">View all Dues <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
						<li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->

				<li class="dropdown">
					<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
						<i class="fa fa-2x fa-building"></i><sup class="badge style-danger">15</sup>
					</a>
					<ul class="dropdown-menu animation-expand">
						<li class="dropdown-header">To-Let</li>
						<li>
							<a class="alert alert-callout alert-info" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/building.png" alt="" />
								<strong>Navana Tower</strong><br/>
								<small>10th Floor[105]</small>
							</a>
						</li>
						<li>
							<a class="alert alert-callout alert-warning" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/building.png" alt="" />
								<strong>Tridhara Tower</strong><br/>
								<small>8th Floor[850]</small>
							</a>
						</li>
						<li class="dropdown-header">Options</li>
						<li><a href="../../html/pages/login.html">View all To-Let <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
						<li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->

			</ul><!--end .header-nav-options -->
			<ul class="header-nav header-nav-profile">
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
						<img src="../../assets/img/user01.jpg" alt="" />
						<span class="profile-info">
								<?php echo e(session('name')); ?>

							<small><?php echo e(getUserRole(auth()->user())); ?></small>
							</span>
					</a>
					<ul class="dropdown-menu animation-dock">
						<li><a href="<?php echo e(URL::Route('user.profile')); ?>"><i class="fa fa-fw fa-user"></i> My profile</a></li>
						<li><a href="<?php echo e(URL::Route('user.lock')); ?>"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
						<li><a href="<?php echo e(URL::Route('user.logout')); ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->
			</ul><!--end .header-nav-profile -->

		</div><!--end #header-navbar-collapse -->
	</div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">

	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div><!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->

	<!-- BEGIN CONTENT-->
	<div id="content">
		<!-- BEGIN CHILD PAGE-->
	<?php echo $__env->yieldContent('content'); ?>
	<!-- END CHILD PAGE-->
	</div><!--end #content-->
	<!-- END CONTENT -->

	<!-- BEGIN MENUBAR-->
	<div id="menubar" class="no-print">
		<div class="menubar-fixed-panel">
			<div>
				<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
					<i class="fa fa-bars"></i>
				</a>
			</div>
			<div class="expanded">
				<a href="<?php echo e(URL::Route('user.dashboard')); ?>">
					<span class="text-lg text-bold text-primary ">Rent&nbsp;Housing Manage</span>
				</a>
			</div>
		</div>
		<div class="menubar-scroll-panel">

			<!-- BEGIN MAIN MENU -->
			<ul id="main-menu" class="gui-controls">

				<!-- BEGIN DASHBOARD -->
				<li>
					<a href="<?php echo e(URL::Route('user.dashboard')); ?>" >
						<div class="gui-icon"><i class="md md-home"></i></div>
						<span class="title">Dashboard</span>
					</a>
				</li><!--end /menu-li -->
				<!-- END DASHBOARD -->


				<!-- BEGIN PROJECT -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-account-balance"></i></div>
						<span class="title">Projects</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('project.create')); ?>" ><span class="title">New</span></a></li>
						<li><a href="<?php echo e(URL::Route('project.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END PROJECT -->
				<!-- BEGIN Flat -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-business"></i></div>
						<span class="title">Flats</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('flat.create')); ?>" ><span class="title">Allocate</span></a></li>
						<li><a href="<?php echo e(URL::Route('flat.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END Flat -->
				<!-- BEGIN CUSTOMER -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-account-child"></i></div>
						<span class="title">Cutomers</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('customer.create')); ?>" ><span class="title">New</span></a></li>
						<li><a href="<?php echo e(URL::Route('customer.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li>
				<!-- END CUSTOMER -->
				<!-- BEGIN Rent -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-markunread-mailbox"></i></div>
						<span class="title">Manage Rent</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('rent.create')); ?>" ><span class="title">New</span></a></li>
						<li><a href="<?php echo e(URL::Route('rent.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li>
				<!-- END Rent -->
				<!-- BEGIN Collection -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="fa fa-taka">&#2547;</i></div>
						<span class="title">Manage Collection</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('collection.create')); ?>" ><span class="title">New</span></a></li>
						<li><a href="<?php echo e(URL::Route('collection.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li>
				<!-- END Collection -->
				<!-- BEGIN Collection -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-send"></i></div>
						<span class="title">Manage Expense</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('expense.create')); ?>" ><span class="title">New</span></a></li>
						<li><a href="<?php echo e(URL::Route('expense.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li>
				<!-- END Collection -->
				<?php if(auth()->check() && auth()->user()->hasRole('supervisor')): ?>
				<!-- BEGIN REPORT -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-file-download"></i></div>
						<span class="title">Reports</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('report.projects')); ?>" ><span class="title">Projects</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.flats')); ?>" ><span class="title">Flats</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.customers')); ?>" ><span class="title">Cutomers</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.rents')); ?>" ><span class="title">Rents</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.collections')); ?>" ><span class="title">Collections</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.expenses')); ?>" ><span class="title">Expenses</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.balance')); ?>" ><span class="title">Account Balance</span></a></li>
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END REPORT -->
				<?php endif; ?>
			<?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
				<!-- BEGIN REPORT -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-file-download"></i></div>
						<span class="title">Reports</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('report.projects')); ?>" ><span class="title">Projects</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.flats')); ?>" ><span class="title">Flats</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.customers')); ?>" ><span class="title">Cutomers</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.rents')); ?>" ><span class="title">Rents</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.collections')); ?>" ><span class="title">Collections</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.expenses')); ?>" ><span class="title">Expenses</span></a></li>
						<li><a href="<?php echo e(URL::Route('report.balance')); ?>" ><span class="title">Account Balance</span></a></li>
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END REPORT -->
				<?php endif; ?>
			<?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
				<!-- BEGIN user -->
				<li class="gui-folder">
					<a>
						<div class="gui-icon"><i class="md md-account-child"></i></div>
						<span class="title">Manage Users</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="<?php echo e(URL::Route('user.create')); ?>" ><span class="title">New</span></a></li>
						<li><a href="<?php echo e(URL::Route('user.index')); ?>" ><span class="title">All</span></a></li>
					</ul><!--end /submenu -->
				</li><!--end /menu-li -->
				<!-- END user -->
				<?php endif; ?>

			</ul><!--end .main-menu -->
			<!-- END MAIN MENU -->

			<div class="menubar-foot-panel">
				<small class="no-linebreak hidden-folded">
					<span class="opacity-75">Copyright &copy; 201</span> <strong>ShanixLab</strong>
				</small>
			</div>
		</div><!--end .menubar-scroll-panel-->
	</div><!--end #menubar-->
	<!-- END MENUBAR -->
</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src="<?php echo e(url('/')); ?>/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/libs/spin.js/spin.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/libs/toastr.js"></script>

<script src="<?php echo e(url('/')); ?>/assets/js/core/source/App.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/core/source/AppNavigation.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/core/source/AppOffcanvas.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/core/source/AppCard.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/core/source/AppForm.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/js/core/source/AppVendor.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        var pgurl = window.location.href.substr(window.location.href);
        $("#main-menu li a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' ){
                $("#main-menu li").removeClass('active');
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().addClass("active");
            }
        });
        <!-- Toastr -->
        toastr.options.hideDuration = 0;
        toastr.clear();
        toastr.options.closeButton = 'true';
        toastr.options.progressBar = 'false';
        toastr.options.debug = 'flase';
        toastr.options.positionClass = 'toast-top-right';
        toastr.options.showDuration = 330;
        toastr.options.hideDuration = 330;
        toastr.options.timeOut = 5000;
        toastr.options.extendedTimeOut = 1000;
        toastr.options.showEasing = 'swing';
        toastr.options.hideEasing = 'swing';
        toastr.options.showMethod = 'slideDown';
        toastr.options.hideMethod = 'slideUp';
        toastr.options.onclick = null;
        <?php if(Session::has('success')): ?>
        toastr.success('<?php echo e(Session::get("success")["body"]); ?>','<?php echo e(Session::get("success")["title"]); ?>');
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
			toastr.error('<?php echo e(Session::get("error")["body"]); ?>','<?php echo e(Session::get("success")["title"]); ?>');
        <?php endif; ?>
        <?php if(Session::has('warning')): ?>
		toastr.warning('<?php echo e(Session::get("warning")["body"]); ?>','<?php echo e(Session::get("success")["title"]); ?>');
		<?php endif; ?>
		<!-- toastr end -->
    });

</script>
<!-- Extra js from child page -->
<?php echo $__env->yieldContent("extraScript"); ?>

<!-- END JAVASCRIPT -->

</body>
</html>
