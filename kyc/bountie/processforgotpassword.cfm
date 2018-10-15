<cfset googlerecaptchatoken = form['g-recaptcha-response']>

<cfhttp result="GoogleAPIresult" method="POST" charset="utf-8" url="https://www.google.com/recaptcha/api/siteverify">
	<cfhttpparam name="secret" type="formfield" value="6Lf_7D4UAAAAAKxvBOAnKAjaGiWNSEuwgf2FK2dq">
	<cfhttpparam name="response" type="formfield" value="#googlerecaptchatoken#">
</cfhttp>

<cfif IsJSON(GoogleAPIresult.FileContent)>
	<cfset recaptcharesponse=DeserializeJSON(GoogleAPIresult.FileContent)> 

	<cfif recaptcharesponse.success eq "NO">
		<CFLOCATION URL="forgotpassword.cfm?e=3">
	<cfelse>


			<CFIF IsDefined("Form.email")>
				<cfquery name="UserExist" datasource="novumcapitalkyc">
					SELECT *
					FROM investors
					WHERE Email like <cfqueryparam value="#form.email#" cfsqltype="cf_sql_varchar">
				</cfquery>	

		
				<cfif UserExist.RecordCount eq 1>
					<cfset userfound=1>
		
					<cfset stringset = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890" />
					<cfset arrPassword = ArrayNew( 1 ) />
		
					<cfloop
						index="intChar"
						from="#(ArrayLen( arrPassword ) + 1)#"
						to="10"
						step="1">
						<cfset arrPassword[ intChar ] = Mid(stringset,RandRange(1,Len(stringset)),1)>
					</cfloop>
		
					<cfset newgenpassword = ArrayToList(arrPassword,"")>
				
					<cfset checksum = Hash(GenerateSecretKey("AES"), "SHA-512") /> 

					<cfset encryptPassword = Hash(newgenpassword & checksum, "SHA-512") />

					<cfquery name="ChangePassword" datasource="novumcapitalkyc">
						UPDATE investors 
						SET password=<cfqueryparam value="#encryptPassword#" CFSQLTYPE="cf_sql_varchar">,
							checksum = <cfqueryparam value="#checksum#" CFSQLTYPE="cf_sql_varchar">
						WHERE indexkey = <cfqueryparam value="#UserExist.indexkey#" CFSQLTYPE="cf_sql_integer">
					</cfquery>
		
					<cfmail from="noreply@novum.capital"
					to="#form.email#"
					username="coldfusionmail@novum.capital"
					password="(291Fas!sakk1@$fda!$"
					subject="Password Reset for #form.tgetitle#"
					server="mail.www-novum-capital.vps.ezhostingserver.com">
					<cfoutput>
			New Password Notice from Novum Capital
			
			This is your new password to access your #form.tgetitle# Investor Page.

			Email: #form.email#
			Password: #newgenpassword#
			</cfoutput>

			Login at https://kyc.novum.capital/bountie

			We strongly recommend that you change your login password immediately on signing in.

			For any questions, please email ask@novum.capital.

			Novum Capital is the appointed Token Generation Event Manager for Bountie.

			---
			Novum Capital
			www.novum.capital
			</cfmail>

					<cflocation url="forgotpassword.cfm?e=1">
			
				<Cfelse>
					<cflocation url="forgotpassword.cfm?e=2">
				</cfif>
			 </cfif>

	
	</cfif>
<cfelse>
	<CFLOCATION URL="forgotpassword.cfm?e=4">
	
</cfif>		



