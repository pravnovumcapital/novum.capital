<CFIF IsDefined("Form.email") AND IsDefined("Form.password")>

	<cfset googlerecaptchatoken = form['g-recaptcha-response']>

	<cfhttp result="GoogleAPIresult" method="POST" charset="utf-8" url="https://www.google.com/recaptcha/api/siteverify">
		<cfhttpparam name="secret" type="formfield" value="6Lf_7D4UAAAAAKxvBOAnKAjaGiWNSEuwgf2FK2dq">
		<cfhttpparam name="response" type="formfield" value="#googlerecaptchatoken#">
	</cfhttp>
	
	<cfif IsJSON(GoogleAPIresult.FileContent)>
		<cfset recaptcharesponse=DeserializeJSON(GoogleAPIresult.FileContent)> 
	
		<cfif recaptcharesponse.success eq "NO">
			<CFLOCATION URL="index.cfm?e=4">
		<cfelse>
		
			<cfquery name="InvestorExist" datasource="novumcapitalkyc">
				SELECT *
				FROM investors
				WHERE (Email like <cfqueryparam value='#form.email#' cfsqltype='CF_SQL_VARCHAR'>) AND TgeSource = <cfqueryparam value='#form.tgesource#' cfsqltype='CF_SQL_INTEGER'>
			</cfquery>		
			<cfif InvestorExist.RecordCount eq 1>
				<cfif InvestorExist.password eq Hash(form.password & InvestorExist.checksum, "SHA-512")>
					<cfset userfound=1>
					<cfset session.email = form.email>
					<cfset session.firstname = InvestorExist.Firstname>
					<cfset session.kycstatus = InvestorExist.kycstatus>
					<cfset session.indexkey = InvestorExist.indexkey>
					<cfset session.ethwallet = InvestorExist.ethwallet>
				<Cfelse>
					<!--- redirect back to login page --->
					<CFLOCATION URL="index.cfm?e=2">

				</cfif>			
				
			<cfelse>
				<CFLOCATION URL="index.cfm?e=3">
				
			</cfif>
		</cfif>

	<Cfelse>
			<!--- redirect back to login page --->
			<CFLOCATION URL="index.cfm?e=4">

	</cfif>


<CFELSEIF NOT ISDEFINED("Session.email")>
	<CFLOCATION URL="index.cfm">

</cfif>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bountie ICO">
        <meta name="author" content="Christopher Low">

        <link rel="shortcut icon" href="../assets/images/favicon_1.ico">

        <title>Bountie Token Generation Event</title>

        <link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>
		<script>
			function gotouploaddoc()
			{
				window.location="uploaddoc.cfm";
			
			}
		
		</script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="" class="logo"><!--- <i class="icon-magnet icon-c-logo"></i> ---> <span><img src="novumlogo.png" width="200" height="30"></span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="../assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="../assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">


                        <li class="list-inline-item notification-list">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="dripicons-expand noti-icon"></i>
                            </a>
                        </li>

                   
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-user noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome <cfoutput>#session.Firstname#</cfoutput></small> </h5>
                                </div>

                       
                                <!-- item-->
                                <a href="logout.cfm" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <!--- 
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        --->
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider --->
                    <div id="sidebar-menu">
                        <ul>

                            <li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="investormain.cfm" class="waves-effect"><i class="ti-home"></i> <span> Home </span> </a>
                         
                            </li>
                            <li class="has_sub">
                                <a href="agreement.cfm" class="waves-effect"><i class="ti-file"></i> <span> Bountie Agreement </span> </a>
                         
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-id-badge"></i> <span> Knowing You </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="uploaddoc.cfm">Document Upload</a></li>
                                    
            
                                </ul>
                            </li>



                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-money"></i> <span> Invest </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="investeth.cfm">with Ethereum</a></li>
                                    <li><a href="investfiat.cfm">with Fiat Currency</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                               <a href="transactions.cfm" class="waves-effect"><i class="ti-receipt"></i><span> Transactions </span> </a>
      
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                               
                                <h4 class="page-title">Welcome to Bountie ICO</h4>
                      

                            </div>
                        </div>
						<br><br>
						<cfif session.kycstatus eq 1>
						<!---
							<div class="alert alert-danger fade show m-b-0">
								<h4>IMPORTANT!</h4>
								<p>
									Please upload your Identification documents in order for us to verify your identity. Bountie and Novum Capital will never share your details or documents with anyone. Your information will be kept with the strictest confidence.
								</p>
								<p>
									<button type="button" class="btn btn-default waves-effect waves-light" onclick="gotouploaddoc()">
										Go to Document Upload
									</button>
									
								</p>
							</div>
						--->
						
							<cflocation url="uploaddoc.cfm">
						<Cfelseif session.kycstatus eq 2>
							
							<div class="alert alert-success fade show m-b-0">
								<h4>Thank You</h4>
								<p>
									Thank you for submitting your documents in order for us to verify your identity. We will never share your details or documents with anyone. Your information will be kept with the strictest confidence.
									We typically take 48 hours or less to complete the KYC process. Please remember to check your email <cfoutput>#session.email#</cfoutput>. If all is well, you will be able to view the Ethereum Wallet address or Bank Transfer information in the Invest section.
									However, we may also reject your interest to participate in this Token Generation Event if you fail our KYC process or for any reason whatsoever.
								</p>
								
								
							</div>
						<Cfelseif session.kycstatus eq 3>
							
							<div class="alert alert-success fade show m-b-0">
								<h4>Participate Now</h4>
								<p>
									You have passed the KYC process. You may proceed to contribute to this Token Generation Event. Go to the Invest page.
								</p>
								
								
							</div>								
						</cfif>


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2017. Novum Capital Ltd. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function () {

                $("#upcoming, #inprogress, #completed").sortable({
                    connectWith: ".taskList",
                    placeholder: 'task-placeholder',
                    forcePlaceholderSize: true,
                    update: function (event, ui) {

                        var todo = $("#todo").sortable("toArray");
                        var inprogress = $("#inprogress").sortable("toArray");
                        var completed = $("#completed").sortable("toArray");
                    }
                }).disableSelection();

            });
        </script>

    </body>
</html>