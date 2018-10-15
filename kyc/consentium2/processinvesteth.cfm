0
<CFIF IsDefined("Form.ethaddress") AND IsDefined("Form.ethamount") AND IsDefined("Form.email") and IsDefined("Form.indexkey")>
1
	<CFIF form.indexkey neq 0>
			2
		<cfmail from="noreply@novum.capital"
		to="chris@novum.capital"
		username="coldfusionmail@novum.capital"
		password="(291Fas!sakk1@$fda!$"
		subject="Consentium Investment by Ethereum"
		server="mail.www-novum-capital.vps.ezhostingserver.com">
			
				Investor ID: #form.indexkey# 
				
				Eth Address: #form.ethaddress#
				
				Eth Amount: #form.ethamount#
				
				Email: #form.email#
			</cfmail>
				
			<cfquery name="UpdateInvestor" result="KYCStatus">
				UPDATE investors
				SET ethwallet=<cfqueryparam value="#form.ethaddress#" CFSQLTYPE="cf_sql_varchar">,
					mobile=<cfqueryparam value="#form.phone#" CFSQLTYPE="cf_sql_varchar">
				WHERE indexkey = <cfqueryparam value="#form.indexkey#" CFSQLTYPE="cf_sql_integer">
			</cfquery>	
		3
		<cfset session.ethwallet = form.ethaddress>
			
		<cflocation URL="investeth.cfm">
		
	<CFELSE>
		<cfheader statuscode="404" statustext="Invalid session. Error Code: Non-investor recognition. Please email ask@novum.capital with error code: 2A">
		Invalid session. Error Code: Non-investor recognition. Please email ask@novum.capital with error code: 2A
	4
	</CFIF>
<CFELSE>
	<CFLOCATION URL="http://www.novum.capital">
	
</CFIF>
6
<!---
<cflocation url="#form.returnURL#">
--->