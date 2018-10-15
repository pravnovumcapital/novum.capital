<CFIF IsDefined("Form.email") AND IsDefined("Form.password")>
	<cfquery name="InvestorExist" datasource="novumcapitalkyc">
		SELECT *
		FROM investors
		WHERE (Email like <cfqueryparam value='#form.email#' cfsqltype='CF_SQL_VARCHAR'>)
	</cfquery>
	<cfif InvestorExist.RecordCount eq 1>
		<cfif InvestorExist.password eq Hash(form.password & InvestorExist.checksum, "SHA-512")>
			<cfset userfound=1>
			<cfset session.email = form.email>
			<cfset session.firstname = InvestorExist.Firstname>
			<cfset session.kycstatus = InvestorExist.kycstatus>
			<cfset session.indexkey = InvestorExist.indexkey>

		<Cfelse>
			<!--- redirect back to login page --->
			<CFLOCATION URL="http://kyc.novum.capital/bountie/index.cfm?e=2">

		</cfif>
	<Cfelse>
			<!--- redirect back to login page --->
			<CFLOCATION URL="http://kyc.novum.capital/bountie/index.cfm?e=3">

	</cfif>


<CFELSEIF NOT ISDEFINED("Session.email")>
	<CFLOCATION URL="http://www.novum.capital">

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

        <link href="../plugins/footable/css/footable.core.css" rel="stylesheet">
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />


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

                              <!---
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                              
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                              
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Helpdesk</span>
                                </a>
								--->
								
								
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

						
							<cflocation url="uploaddoc.cfm">
						<Cfelseif session.kycstatus eq 2>
							
							<div class="alert alert-success fade show m-b-0">
								<h4>KYC Process Pending</h4>
								<p>
									We are still processing your application. Once it is approved, you will be able to view the Ethereum Wallet Address to contribute to.
								</p>
									
							</div>
						<Cfelseif session.kycstatus eq 3>
						
							<cfquery name="TransactionExist" datasource="novumcapitalkyc">
								SELECT *
								FROM transactions
								WHERE investorID = <cfqueryparam value='#session.indexkey#' cfsqltype='CF_SQL_INTEGER'>
							</cfquery>
	
							<h4 class="m-t-0 header-title">Contribution History</h4>
							
							
							<CFIF TransactionExist.RecordCount gt 0>
								<p class="text-muted m-b-30 font-13">
									View your contribution history for Bountie ICO in the table below. You can click on each row to view the details of the token transfer.
								</p>

								<table id="demo-foo-accordion" class="table table-colored m-b-0 toggle-arrow-tiny">
									<thead>
									
									<tr>
										<th data-toggle="true"> Date</th>
										<th> Amount </th>
										<th data-hide="phone"> Tokens </th>
										<th data-hide="all"> Transaction ID </th>
										<th data-hide="all"> Status </th>
									</tr>
									</thead>
									<tbody>
									
									<cfloop query="TransactionExist">
										<cfoutput>
											<tr>
												<td>#lsDateFormat(TransactionExist.investdatetime, "ddd, mmmm dd, yyyy")#</td>
												<td>#TransactionExist.amount# #TransactionExist.currency#</td>
												<td>#TransactionExist.investtokens#</td>
												<td>#TransactionExist.ethtransactionID#</td>
												<td>
													<Cfif TransactionExist.investstatus eq 1>
														<span class="label label-table label-success">Processed</span>
													<cfelse>
														<span class="label label-table label-disabled">Processing</span>
													</cfif>
													
												</td>
											</tr>
										</cfoutput>
									</cfloop>
									
									</tbody>

								</table>		
							<cfelse>
								<br><br>
								No contributions as of now.
							</cfif>										
								
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

        <script src="../plugins/footable/js/footable.all.min.js"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

        <script src="../assets/pages/jquery.footable.js"></script>


    </body>
</html>