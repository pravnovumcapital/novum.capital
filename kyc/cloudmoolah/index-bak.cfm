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

        <script src="../assets/js/modernizr.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
    </head>
    <body>
	  <CFIF IsDefined("URL.e")>
		<CFIF URL.e eq 1>
			<div class="alert alert-success">
				<Center>Success! A confirmation email has been sent to your registered email. If you do not receive an email after 15 mins (even after checking your spam folder), go to <link>Forget Password</link> to reset login details</Center>
			</div>	

		<CFELSEIF URL.e eq 2>
			<div class="alert alert-danger">
				<Center>Incorrect login password.</Center>
			</div>								    		
		<CFELSEIF URL.e eq 3>
			<div class="alert alert-danger">
				<Center>No such email exist.</Center>
			</div>								    		
		<CFELSEIF URL.e eq 4>
			<div class="alert alert-danger">
				<Center>ReCaptcha fail. Please reload the login page and try again.</Center>
			</div>								    		
		</CFIF>
	  </CFIF>
	  
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="card-box">
                <div class="panel-heading">
                    <h4 class="text-center"> Sign In to <strong class="text-custom">CloudMoolah Token Generation Event</strong></h4>
                </div>


                <div class="p-20">
                    <form class="form-horizontal m-t-20" method="post" action="investormain.cfm">

                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" name="email" type="text" required="" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" name="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
           						<div class="g-recaptcha" data-sitekey="6Lf_7D4UAAAAABAMw7P1s39mm8Ls-oQk1s1SggUx"></div>
                            </div>
                        </div>

           				
                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"
                                        type="submit">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-12">
                                <a href="forgotpassword.cfm" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                                    your password?</a>
                            </div>
                        </div>
                        <input type="hidden" name="tgesource" value="1">
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>First time contributing to CloudMoolah TGE? <a href="register.cfm" class="text-primary m-l-5"><b>Sign Up</b></a>
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