
<CFIF IsDefined("Form.passportfile") AND IsDefined("Form.citizenfile")>

	<CFIF form.indexkey neq 0>
		<cfset thisDir = expandPath(".\..\IDfiles")>
		<cfset thisDir = replace(thisDir,"\","\\","all")>

			<cffile action="upload" fileField="passportfile" destination="#thisDir#" result="fileUpload"
				nameconflict="makeunique" accept="image/gif,image/jpeg,image/png,application/pdf" ContinueOnError = "true">

			<cffile action="upload" fileField="citizenfile" destination="#thisDir#" result="fileUpload2"
				nameconflict="makeunique" accept="image/gif,image/jpeg,image/png,application/pdf" ContinueOnError = "true">
		
			<!--- <cfset FileUploadStruct = fileUpload[1]> --->
					
			<!--- <cfset tempfileupload =StructKeyList(fileUpload,"-")> --->
			
		<cfmail from="noreply@novum.capital"
		to="chris@novum.capital"
		username="coldfusionmail@novum.capital"
		password="(291Fas!sakk1@$fda!$"
		subject="CloudMoolah KYC"
		server="mail.www-novum-capital.vps.ezhostingserver.com">
			
				Investor: #form.firstname# #form.lastname#
				
				Citizen ID: #form.citizenID#
				
				Country: #form.countries#
				
				file upload status: #fileUpload.serverFile#
				
				file upload status: #fileUpload2.serverFile#
				
			</cfmail>
				
			<cfquery name="UpdateInvestor" result="KYCStatus">
				UPDATE investors
				SET firstname=<cfqueryparam value="#form.firstname#" CFSQLTYPE="cf_sql_varchar">,
					lastname=<cfqueryparam value="#form.lastname#" CFSQLTYPE="cf_sql_varchar">,
					citizenid=<cfqueryparam value="#form.citizenid#" CFSQLTYPE="cf_sql_varchar">,
					country=<cfqueryparam value="#form.countries#" CFSQLTYPE="cf_sql_varchar">,
					dob=<cfqueryparam value="#form.dob#" CFSQLTYPE="cf_sql_varchar">,
					kycstatus=<cfqueryparam value="2" CFSQLTYPE="cf_sql_integer">
				WHERE indexkey = <cfqueryparam value="#form.indexkey#" CFSQLTYPE="cf_sql_integer">
			</cfquery>	
			<cfquery name="CreateNewKYC" datasource="novumcapitalkyc">
				INSERT INTO kycdocs (investorid,passportfile,citizenfile,uploaddate)
				VALUES (<cfqueryparam value="#Form.indexkey#" CFSQLTYPE="cf_sql_integer">,<cfqueryparam value="#fileUpload.serverFile#" CFSQLTYPE="cf_sql_varchar">,<cfqueryparam value="#fileUpload2.serverFile#" CFSQLTYPE="cf_sql_varchar">,<cfqueryparam value="#Now()#" CFSQLTYPE="cf_sql_date">)
			</cfquery>
			<cfset session.kycstatus = 2>
			<cflocation url="investormain.cfm">
	<CFELSE>
		<cfheader statuscode="404" statustext="Invalid session. Error Code: Non-investor recognition. Please email ask@novum.capital with error code: 2A">
		Invalid session. Error Code: Non-investor recognition. Please email ask@novum.capital with error code: 2A
	
	</CFIF>
<CFELSE>
	<CFLOCATION URL="http://www.novum.capital">
	
</CFIF>

<!---
<cflocation url="#form.returnURL#">
--->