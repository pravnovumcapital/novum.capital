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

		<Cfelse>
			<!--- redirect back to login page --->
			<CFLOCATION URL="http://kyc.novum.capital/Consentium/index.cfm?e=2">

		</cfif>
	<Cfelse>
			<!--- redirect back to login page --->
			<CFLOCATION URL="http://kyc.novum.capital/Consentium/index.cfm?e=3">

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
        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="../plugins/jquery.steps/css/jquery.steps.css" />

        <!--Date Picker Widget-->
        <link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
       <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

		<!-- File Picker -->
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>


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
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Helpdesk</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                    <li><a href="kycresults.cfm">Results</a></li>
            
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-help"></i><span> FAQs </span> </a>
     
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
                               
                                <h4 class="page-title">KYC Results</h4>
                      

                            </div>
                        </div>
                        
                        
						<br><br>
						<cfif session.kycstatus eq 2>
							<div class="alert alert-success fade show m-b-0">
								<h4>Results for your Document Check</h4>
								<p>
									<cfif session.kycstatus eq 1>
									
									<Cfelseif session.kycstatus eq 2>
									
									<cfelseif session.kycstatus eq 3>
									
									<cfelse>
									
									</cfif>
								</p>	
							</div>
						<cfelseif session.kycstatus eq 3>
							<div class="alert alert-success fade show m-b-0">
								<h4>Approved</h4>
								<p>
									Your KYC has been approved. Please go to the Invest page to participate in this Token Generation Event.
								</p>	
							</div>
						
							
						<cfelse>
						
						

								<!-- Basic Form Wizard -->
								<div class="row">
									<div class="col-md-12">
										<div class="card-box">
											<h4 class="m-t-0 header-title"><b>Know Your Customer check</b></h4>
											<p class="text-muted m-b-30 font-13">
												Consentium has engaged Novum Capital to help perform Know Your Customer (KYC) check. KYC checks are mandatory for compliance with Anti-Money Laundering Acts and other regulations required by local authorities.
												We would like to thank you for your kind understanding and cooperation.
											</p>

									  <!---  <form id="wizard-validation-form" action="processkyc.cfm" method="post"> --->
									   <form id="basic-form" action="processkyc.cfm" method="post" onsubmit="return validatekyc()" enctype="multipart/form-data">
												<div>
													<h3>Terms and Conditions</h3>
													<section>
														<div class="form-group clearfix">
															<div class="col-lg-12">
													
															 <div class="checkbox checkbox-success checkbox-circle">
																<input id="checkbox-10" type="checkbox">&nbsp;&nbsp;&nbsp;
																<label for="checkbox-10">
																	I have read and understand the Terms and Conditions stated in the <a href="agreement.cfm" target="_blank">Consentium Token Sale And Subscription Agreeement</a> and the Consentium Whitepaper and that I expressly accept all terms, conditions, obligations, affirmations, representations and warranties described in these documents and agree to be bound by them.
																</label>
															 </div>
												
															</div>
														</div>
												
												
														<div class="form-group clearfix">
															<div class="col-lg-12">
											
																									  
															 <div class="checkbox checkbox-success checkbox-circle">
																<input id="checkbox-11" type="checkbox">&nbsp;&nbsp;&nbsp;
																<label for="checkbox-11">
																	I confirm that I am not a citizen, permanent resident, or granted indefinite leave to remain in the United States or any US territories - as well as any jurisdiction in which the purchase of crypto tokens, cryptocurrencies or participation in a Token Generation Event (commonly known as ICO - Initial Coin Offering) is explicitly prohibited or outlawed.
																</label>
															 </div>
												
															</div>
														</div>
													</section>
													<h3>Your Profile</h3>
													<section>
														<div class="form-group clearfix">
															<label class="control-label " for="userName2">First Name *</label>
															<div class="">
																<input class="required form-control" id="firstname" name="firstname" type="text">
															</div>
														</div>
														<div class="form-group clearfix">
															<label class="control-label " for="password2"> Last Name *</label>
															<div class="">
																<input id="lastname" name="lastname" type="text" class="required form-control">

															</div>
														</div>
														<div class="form-group clearfix">
															<label class="control-label " for="password2"> Citizen ID *</label>
															<div class="">
																<input id="citizenid" name="citizenID" type="text" class="required form-control">

															</div>
														</div>


														<div class="form-group clearfix">
															<label class="control-label " for="password2"> Citizenship *</label>
															<div class="">
  
																<select  class="required form-control" id="countries" name="countries">
																<option value="Afghanistan">Afghanistan</option>
																<option value="Albania">Albania</option>
																<option value="Algeria">Algeria</option>
																<option value="American Samoa">American Samoa</option>
																<option value="Andorra">Andorra</option>
																<option value="Angola">Angola</option>
																<option value="Anguilla">Anguilla</option>
																<option value="Antarctica">Antarctica</option>
																<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																<option value="Argentina">Argentina</option>
																<option value="Armenia">Armenia</option>
																<option value="Aruba">Aruba</option>
																<option value="Australia">Australia</option>
																<option value="Austria">Austria</option>
																<option value="Azerbaijan">Azerbaijan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrain">Bahrain</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbados">Barbados</option>
																<option value="Belarus">Belarus</option>
																<option value="Belgium">Belgium</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Benin</option>
																<option value="Bermuda">Bermuda</option>
																<option value="Bhutan">Bhutan</option>
																<option value="Bolivia">Bolivia</option>
																<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
																<option value="Botswana">Botswana</option>
																<option value="Bouvet Island">Bouvet Island</option>
																<option value="Brazil">Brazil</option>
																<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																<option value="Brunei Darussalam">Brunei Darussalam</option>
																<option value="Bulgaria">Bulgaria</option>
																<option value="Burkina Faso">Burkina Faso</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodia">Cambodia</option>
																<option value="Cameroon">Cameroon</option>
																<option value="Canada">Canada</option>
																<option value="Cape Verde">Cape Verde</option>
																<option value="Cayman Islands">Cayman Islands</option>
																<option value="Central African Republic">Central African Republic</option>
																<option value="Chad">Chad</option>
																<option value="Chile">Chile</option>
																<option value="China">China</option>
																<option value="Christmas Island">Christmas Island</option>
																<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
																<option value="Colombia">Colombia</option>
																<option value="Comoros">Comoros</option>
																<option value="Congo">Congo</option>
																<option value="Congo The Democratic Republic of The">Congo, The Democratic Republic of The</option>
																<option value="Cook Islands">Cook Islands</option>
																<option value="Costa Rica">Costa Rica</option>
																<option value="Croatia">Croatia</option>
																<option value="Cuba">Cuba</option>
																<option value="Cyprus">Cyprus</option>
																<option value="Czechia">Czechia</option>
																<option value="Denmark">Denmark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominica">Dominica</option>
																<option value="Dominican Republic">Dominican Republic</option>
																<option value="Ecuador">Ecuador</option>
																<option value="Egypt">Egypt</option>
																<option value="El Salvador">El Salvador</option>
																<option value="Equatorial Guinea">Equatorial Guinea</option>
																<option value="Eritrea">Eritrea</option>
																<option value="Estonia">Estonia</option>
																<option value="Ethiopia">Ethiopia</option>
																<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
																<option value="Faroe Islands">Faroe Islands</option>
																<option value="Fiji">Fiji</option>
																<option value="Finland">Finland</option>
																<option value="France">France</option>
																<option value="French Guiana">French Guiana</option>
																<option value="French Polynesia">French Polynesia</option>
																<option value="French Southern Territories">French Southern Territories</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambia">Gambia</option>
																<option value="Georgia">Georgia</option>
																<option value="Germany">Germany</option>
																<option value="Ghana">Ghana</option>
																<option value="Gibraltar">Gibraltar</option>
																<option value="Greece">Greece</option>
																<option value="Greenland">Greenland</option>
																<option value="Grenada">Grenada</option>
																<option value="Guadeloupe">Guadeloupe</option>
																<option value="Guam">Guam</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guernsey">Guernsey</option>
																<option value="Guinea">Guinea</option>
																<option value="Guinea-bissau">Guinea-bissau</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haiti</option>
																<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
																<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
																<option value="Honduras">Honduras</option>
																<option value="Hong Kong">Hong Kong</option>
																<option value="Hungary">Hungary</option>
																<option value="Iceland">Iceland</option>
																<option value="India">India</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Iran">Iran, Islamic Republic of</option>
																<option value="Iraq">Iraq</option>
																<option value="Ireland">Ireland</option>
																<option value="Isle of Man">Isle of Man</option>
																<option value="Israel">Israel</option>
																<option value="Italy">Italy</option>
																<option value="Jamaica">Jamaica</option>
																<option value="Japan">Japan</option>
																<option value="Jersey">Jersey</option>
																<option value="Jordan">Jordan</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Korea DPR">Korea, Democratic People's Republic of</option>
																<option value="Korea Republic of">Korea, Republic of</option>
																<option value="Kuwait">Kuwait</option>
																<option value="Kyrgyzstan">Kyrgyzstan</option>
																<option value="Lao Peoples Democratic Republic">Lao People's Democratic Republic</option>
																<option value="Latvia">Latvia</option>
																<option value="Lebanon">Lebanon</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Liberia">Liberia</option>
																<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lithuania">Lithuania</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macao">Macao</option>
																<option value="Macedonia The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malawi">Malawi</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malta">Malta</option>
																<option value="Marshall Islands">Marshall Islands</option>
																<option value="Martinique">Martinique</option>
																<option value="Mauritania">Mauritania</option>
																<option value="Mauritius">Mauritius</option>
																<option value="Mayotte">Mayotte</option>
																<option value="Mexico">Mexico</option>
																<option value="Micronesia Federated States of">Micronesia, Federated States of</option>
																<option value="Moldova Republic of">Moldova, Republic of</option>
																<option value="Monaco">Monaco</option>
																<option value="Mongolia">Mongolia</option>
																<option value="Montenegro">Montenegro</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Morocco">Morocco</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Myanmar">Myanmar</option>
																<option value="Namibia">Namibia</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Nepal</option>
																<option value="Netherlands">Netherlands</option>
																<option value="Netherlands Antilles">Netherlands Antilles</option>
																<option value="New Caledonia">New Caledonia</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Niue">Niue</option>
																<option value="Norfolk Island">Norfolk Island</option>
																<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																<option value="Norway">Norway</option>
																<option value="Oman">Oman</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Palau">Palau</option>
																<option value="Palestinian Territory Occupied">Palestinian Territory, Occupied</option>
																<option value="Panama">Panama</option>
																<option value="Papua New Guinea">Papua New Guinea</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Peru">Peru</option>
																<option value="Philippines">Philippines</option>
																<option value="Pitcairn">Pitcairn</option>
																<option value="Poland">Poland</option>
																<option value="Portugal">Portugal</option>
																<option value="Puerto Rico">Puerto Rico</option>
																<option value="Qatar">Qatar</option>
																<option value="Reunion">Reunion</option>
																<option value="Romania">Romania</option>
																<option value="Russian Federation">Russian Federation</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Saint Helena">Saint Helena</option>
																<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																<option value="Saint Lucia">Saint Lucia</option>
																<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
																<option value="Samoa">Samoa</option>
																<option value="San Marino">San Marino</option>
																<option value="Sao Tome and Principe">Sao Tome and Principe</option>
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="Senegal">Senegal</option>
																<option value="Serbia">Serbia</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra Leone">Sierra Leone</option>
																<option value="Singapore">Singapore</option>
																<option value="Slovakia">Slovakia</option>
																<option value="Slovenia">Slovenia</option>
																<option value="Solomon Islands">Solomon Islands</option>
																<option value="Somalia">Somalia</option>
																<option value="South Africa">South Africa</option>
																<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
																<option value="Spain">Spain</option>
																<option value="Sri Lanka">Sri Lanka</option>
																<option value="Sudan">Sudan</option>
																<option value="Suriname">Suriname</option>
																<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Sweden">Sweden</option>
																<option value="Switzerland">Switzerland</option>
																<option value="Syrian Arab Republic">Syrian Arab Republic</option>
																<option value="Taiwan Province of China">Taiwan, Province of China</option>
																<option value="Tajikistan">Tajikistan</option>
																<option value="Tanzania United Republic of">Tanzania, United Republic of</option>
																<option value="Thailand">Thailand</option>
																<option value="Timor-leste">Timor-leste</option>
																<option value="Togo">Togo</option>
																<option value="Tokelau">Tokelau</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																<option value="Tunisia">Tunisia</option>
																<option value="Turkey">Turkey</option>
																<option value="Turkmenistan">Turkmenistan</option>
																<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																<option value="Tuvalu">Tuvalu</option>
																<option value="Uganda">Uganda</option>
																<option value="Ukraine">Ukraine</option>
																<option value="United Arab Emirates">United Arab Emirates</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="United States">United States</option>
																<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Uzbekistan">Uzbekistan</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Viet Nam">Viet Nam</option>
																<option value="Virgin Islands British">Virgin Islands, British</option>
																<option value="Virgin Islands U.S.">Virgin Islands, U.S.</option>
																<option value="Wallis and Futuna">Wallis and Futuna</option>
																<option value="Western Sahara">Western Sahara</option>
																<option value="Yemen">Yemen</option>
																<option value="Zambia">Zambia</option>
																<option value="Zimbabwe">Zimbabwe</option>
																</select>
															</div>
														</div>
														<div class="form-group clearfix">
															<label class="control-label " for="confirm2">Date of Birth * (MM/DD/YYYY)</label>
															<div class="input-group">
																<input type="text" class="required form-control" id="dob" name="dob" placeholder="mm/dd/yyyy" id="datepicker">
																<span class="input-group-addon bg-custom b-0"><i class="md md-event-note text-dark"></i></span>
															</div><!-- input-group -->
														</div>

														<div class="form-group clearfix">
															<label class="col-lg-12 control-label ">(*) Mandatory</label>
														</div>
													</section>
													<h3>Documents</h3>
													<section>

														<div class="form-group clearfix">
															<label class="control-label" for="name2">Please upload your passport page showing your photo *</label>
															<input type="file" class="filestyle" name="passportfile" data-input="false">
														</div>
														<div class="form-group clearfix">
															<label class="control-label " for="surname2">Please upload your Citizen ID card (front and back) *</label>
															<input type="file" class="filestyle" name="citizenfile" data-input="false">
														</div>

														<div class="form-group clearfix">
															<label class="col-lg-12 control-label ">(*) Mandatory</label>
														</div>

													</section>
													<h3>Disclaimer</h3>
													<section>
														<div class="form-group clearfix">
															<div class="col-lg-12">
		<textarea class="form-control" rows="10" readonly>
		Novum Capital Terms and Conditions
		==================================
		1. You shall indemnify Novum Capital, its directors and employees, from any potential financial losses which may result from your investment into this fund raising initiative.
		2. You acknowledge that there is a possibility that you may lose ALL your investment.
		3. You warrant to Novum Capital that you had made all necessary due diligence into this Token Generation Event and you are fully aware of all risks involved in this investment.
		4. You acknowledge that your source of funds (or funds used to purchase cryptocurrencies which in turn are used to invest in this fund raising exercise) used into invest in this Token Generation Event are not from any illicit sources.
		5. You are of a legal age in your local jurisdiction to enter into a contract or agreement.
														
		</textarea>
															</div>

															<div class="col-lg-12">
																  <div class="checkbox checkbox-success checkbox-circle">
																<input id="checkbox-12" type="checkbox">&nbsp;&nbsp;&nbsp;
																<!--- <cfoutput><input type="hidden" name="indexkey" value="#session.indexkey#"></cfoutput> --->
																<label for="checkbox-12">
																	I agree to all the terms and conditions as stated above.
																</label>
															 </div>
															</div>
														</div>
												

													</section>

												</div>
												<cfoutput><input type="hidden" name="indexkey" value="#session.indexkey#"></cfoutput>
											</form>

										</div>
									</div>
								</div>
						</cfif>
                        <!-- End row -->

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
        <!--Date Picker-->
        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- File Picker -->
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <!--Form Wizard-->
        <script src="../plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../plugins/jquery-validation/js/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="../assets/pages/jquery.wizard-init.js" type="text/javascript"></script>
        <script src="../assets/pages/jquery.form-pickers.init.js"></script>

    </body>
</html>