<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CloudMoolah ICO">
		<meta name="author" content="Christopher Low">

		<link rel="shortcut icon" href="../assets/images/favicon_1.ico">

		<title>CloudMoolah Token Generation Event</title>

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>
		<script>
		    function validatefields()
			{
				if(document.getElementById('email').value.length <5)
				{
						return false;
				}
            	else return true;
			}
		</script>
		
        <script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
	  <CFIF IsDefined("URL.e")>
		<CFIF URL.e eq 1>
			<div class="alert alert-success">
				<Center>Your new password has been sent to your mailbox.</Center>
			</div>	

		<CFELSEIF URL.e eq 2>
			<div class="alert alert-danger">
				<Center>Email does not exist. If you need further assistance, please send an email to ask@novum.capital</Center>
			</div>								    		
		<CFELSEIF URL.e eq 3>
			<div class="alert alert-danger">
				<Center>Captcha failed. Code: 221.</Center>
			</div>								    		
		<CFELSEIF URL.e eq 4>
			<div class="alert alert-danger">
				<Center>Captcha failed.</Center>
			</div>								    		
		</CFIF>
	  </CFIF>
	  
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h4 class="text-center"> Reset Password </h4>
				</div>

				<div class="p-20">
					<form method="post" action="processforgotpassword.cfm" role="form" class="text-center" onsubmit="return validatefields();">
						
						<div class="form-group m-b-0">
							<div class="input-group">
								<input type="email" id="email" class="form-control" name="email" placeholder="Enter Email" required="">
								<input type="hidden" name="tgetitle" value="CloudMoolah ICO">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-pink w-sm waves-effect waves-light">
										Reset
									</button> 
								</span>
							</div>
							<br>
                        <div class="form-group">
                            <div class="col-12">
           						<div class="g-recaptcha" data-sitekey="6Lf_7D4UAAAAABAMw7P1s39mm8Ls-oQk1s1SggUx"></div>
                            </div>
                        </div>

						</div>

					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<p>
						Go back to the <a href="login.cfm" class="text-primary m-l-5"><b>Login Page</b></a>
					</p>
				</div>
			</div>

		</div>

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

		<script src="../assets/js/jquery.core.js"></script>
		<script src="../assets/js/jquery.app.js"></script>

	</body>
</html>