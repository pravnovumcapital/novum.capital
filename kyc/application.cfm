 <cfapplication
datasource="novumcapitalkyc"
name = "NovumCapital KYC"
applicationTimeout = #CreateTimeSpan(0, 1, 0, 0)# 
clientManagement = "yes"
clientStorage = "Cookie"
loginStorage = "cookie"
scriptProtect = "all"
serverSideFormValidation = "no"
sessionManagement = "yes"
sessionTimeout = #CreateTimeSpan(0, 0, 30, 0)# 
setClientCookies = "yes"
setDomainCookies = "yes"
>