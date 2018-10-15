<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Welcome to CloudMoolah Token Generation Event">
		<meta name="author" content="Christopher Low">

		<link rel="shortcut icon" href="../assets/images/favicon_1.ico">

		<title>CloudMoolah Token Generation Event</title>

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="../assets/js/modernizr.min.js"></script>
        <script>
        function validatesignup()
        {
        	if(document.getElementById('email').value == "")
        	{
        		alert("Please enter a valid email address.");
        		document.getElementById('email').focus();
        		return false;
        	}
         	if(document.getElementById('password').value.length < 8)
        	{
        		alert("Your password must have a minimum of 8 characters.");
        		document.getElementById('password').focus();
        		return false;
        	}
        	
         	if(document.getElementById('password').value.length >= 8)
        	{
        		if(document.getElementById('password').value.indexOf(' ') >= 0)
        		{ 
        			alert("Your password cannot contain a whitespace character!");
        			document.getElementById('password').focus();
        			return false;
        		}
        	}     	
        	
        	
        	if(document.getElementById('checkbox-signup').checked == false)
        	{
        		alert("Please read and agree to the Terms and Conditions. If you do not agree, please do not invest.");
        		return false;
        	}

        	else return true;
        	
        }
        </script>
	</head>
	<body>

	  <CFIF IsDefined("URL.e")>
		<CFIF URL.e eq 1>
			<div class="alert alert-success">
				<Center>Your account has been successfully created. We have sent you an email containing your login details. Please check your mailbox. If you did not receive an email after 15 minutes, please go to our <a href="forgotpassword.cfm">Forgot Password</a> page to resend your login details.</Center>
			</div>	

		<CFELSEIF URL.e eq 2>
			<div class="alert alert-danger">
				<Center>Email already exist.</Center>
			</div>								    		
		<CFELSEIF URL.e eq 3>
			<div class="alert alert-danger">
				<Center>Capcha failed. Please reload page and try again.</Center>
			</div>								    		
		</CFIF>
	  </CFIF>
	  
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign Up for <strong class="text-custom">CloudMoolah Token Sale Event</strong> </h3>
				</div>
				
				<cfset stringset = "23456890" />
				<cfset arrPassword = ArrayNew( 1 ) />

				<cfloop
					index="intChar"
					from="#(ArrayLen( arrPassword ) + 1)#"
					to="4"
					step="1">
					<cfset arrPassword[ intChar ] = Mid(stringset,RandRange(1,Len(stringset)),1)>
				</cfloop>
				<cfset validateturingtest = ArrayToList(arrPassword,"")>
				
				
				<div class="p-20">
					<form class="form-horizontal m-t-20" method="post" action="adduser.cfm" onsubmit="return validatesignup();">

						<div class="form-group ">
							<div class="col-12">
								<input class="form-control" id="email" type="email" name="email" required="" placeholder="Email">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-12">
								<input class="form-control" id="password" name="password" type="password" required="" placeholder="Password">
							</div>
						</div>

<!---
						<div class="form-group">
							<div class="col-12">
								<table><tr><td>
								<cfset turingimage = ImageCreateCaptcha(35,120,validateturingtest)> 
								<cfimage action="writetoBrowser" source="#turingimage#"> 
								</td><td>
								<input class="form-control" id="turing" name="turing" type="text" required="" placeholder="Enter Nos. on left">
								</td></tr></table>
								<cfoutput><input type="hidden" id="turingvalue" value="#validateturingtest#"></cfoutput>
							</div>
						</div>
--->
                        <div class="form-group">
                            <div class="col-12">
           						<div class="g-recaptcha" data-sitekey="6Lf_7D4UAAAAABAMw7P1s39mm8Ls-oQk1s1SggUx"></div>
                            </div>
                        </div>


						<div class="form-group">
							<div class="col-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" type="checkbox">
									<label for="checkbox-signup">I accept <a href="terms.html" target="_blank">CloudMoolah's Terms and Conditions</a></label>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-12">
								<input type="hidden" name="tgesource" value="2">
								<input type="hidden" name="tgetitle" value="CloudMoolah Token Sale">
								
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Register
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>

			<div class="row">
				<div class="col-12 text-center">
					<p>
						Already have an account?<a href="login.cfm" class="text-primary m-l-5"><b>Log In</b></a>
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