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
			<CFLOCATION URL="https://kyc.novum.capital/Consentium/index.cfm?e=2">

		</cfif>
	<Cfelse>
			<!--- redirect back to login page --->
			<CFLOCATION URL="https://kyc.novum.capital/Consentium/index.cfm?e=3">

	</cfif>


<CFELSEIF NOT ISDEFINED("Session.email")>
	<CFLOCATION URL="http://www.novum.capital">

</cfif>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Consentium ICO">
        <meta name="author" content="Christopher Low">

        <link rel="shortcut icon" href="../assets/images/favicon_1.ico">

        <title>Consentium Token Generation Event</title>

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
		

			function validateaddress()
			{
				if(document.getElementById('ethaddress').value.length > 0)
				{
			
					/**
					 * Checks if the given string is an address
					 *
					 * @method isAddress
					 * @param {String} address the given HEX adress
					 * @return {Boolean}
					*/
					var isAddress = function (address) {
						if (!/^(0x)?[0-9a-f]{40}$/i.test(address)) {
							// check if it has the basic requirements of an address
							alert("Your Ethereum Wallet Address does not seems valid. Please check again. If you have verified your address and still sees this error, please send an email to ask@novum.capital for follow up.");
							return false;
						} else if (/^(0x)?[0-9a-f]{40}$/.test(address) || /^(0x)?[0-9A-F]{40}$/.test(address)) {
							// If it's all small caps or all all caps, return true
							return true;
						} else {
							// Otherwise check each case
							return isChecksumAddress(address);
						}
					};
					/**
					 * Checks if the given string is a checksummed address
					 *
					 * @method isChecksumAddress
					 * @param {String} address the given HEX adress
					 * @return {Boolean}
					*/
					var isChecksumAddress = function (address) {
						// Check each case
						address = address.replace('0x','');
						var addressHash = sha3(address.toLowerCase());
						for (var i = 0; i < 40; i++ ) {
							// the nth letter should be uppercase if the nth digit of casemap is 1
							if ((parseInt(addressHash[i], 16) > 7 && address[i].toUpperCase() !== address[i]) || (parseInt(addressHash[i], 16) <= 7 && address[i].toLowerCase() !== address[i])) {
								alert("Your Ethereum Wallet Address does not seems valid. Please check again. If you have verified your address and still sees this error, please send an email to ask@novum.capital for follow up.");
								return false;
							}
						}
						return true;
					};

					var correct=isAddress(document.getElementById('ethaddress').value);
					
					if(!correct)
					{
						return false;
					}
					else
					{
						return true;
					}
					
				}
				else
				{
					alert("Please enter your Ethereum Wallet address");
					return false;
				
				}
			
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
                        <a href="" class="logo"><!--- <i class="icon-magnet icon-c-logo"></i> ---> <span><img src="novumlogo.png" width="0" height="0"></span></a>
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
                                <a href="agreement.cfm" class="waves-effect"><i class="ti-file"></i> <span> Consentium Agreement </span> </a>
                         
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
                               
                                <h4 class="page-title">Welcome to Consentium ICO</h4>
                      

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
						<Cfelseif session.kycstatus eq 3 and len(session.ethwallet) lt 3>
								<h4>Update Your Ethereum Wallet Address</h4>
								<p>
									Please submit information regarding your Ethereum Wallet address from which Ether will be send from. You will not be able to change your Ethereum Wallet address after submission. So, please make sure it is accurate and correct. We will begin to monitor your incoming contribution and the information which you provide will help us to identify yourself as the contributor.
									You MUST use the same Ethereum Wallet address as provided below. Please only send from recognised Ethereum Wallet providers such as MyEtherWallet.
									<br><br>
								</p>
                                   <form role="form" method="post" action="processinvesteth.cfm" onsubmit="return validateaddress()">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Your Email:<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <cfoutput><input type="email" name="email" required parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email" value="#session.email#"></cfoutput>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Your Ethereum Wallet Address: <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input id="ethaddress" type="text" placeholder="0x" name="ethaddress" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">Amount of Ether You Are Contributing:
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input  type="text" required placeholder="" class="form-control" id="hori-pass2" name="ethamount">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">Your Phone Number (including country code):
                                                <span class="text-danger"></span></label>
                                            <div class="col-7">
                                                <input  type="text" required placeholder="+" value="+" class="form-control" id="hori-pass2" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">
                                                <span class="text-danger"></span></label>
                                            <div class="col-7">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    View Contribution Address >
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-8 offset-4">

                                            </div>
                                        </div>
                                        <cfoutput>
                                        <input type="hidden" name="indexkey" value="#session.indexkey#">
                                        </cfoutput>
                                        
                                    </form>


								<!---
								<p>
									Please only send ETHER to the below address:
								</p>
								<p>
								<h1 class="display-4">0x8999jakas98191naksadh</h1>
								</p>
							--->
								
							</div>	
						<Cfelseif session.kycstatus eq 3 and len(session.ethwallet) gt 3>
								<p>
									Please send ETHER to the below address:
								</p>
								<p>
								<table border=2><tr><td>
								<h3>0x29Dda54a0Cd269DeD3225Ab4A064f234177a018C</h3></td></tr>
								</table>
								</p>
								<p><img src="CSM_ETHAddress.png"></p>
								<p>Please make sure the address in the image matches the text based address above before sending your ETH.</p>
								<p>
									You must only send ETHER from your Wallet Address: <cfoutput>#session.ethwallet#</cfoutput>
								</p>
																		
						</cfif>


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2017. Asia Focus Group Pte Ltd. All rights reserved.
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