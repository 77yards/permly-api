<H1>perm.ly API</H1>

The perm.ly API is implemented for JSON encoded data input and output from API. 
<br/>

<a href="https://github.com/77yards/permly-api/tree/master/php-wrapper">PHP API Wrapper</a>

<h2>API Actions</h2>

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/getUser.md">getUser</a>.

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/getMyLinks.md">getMyLinks</a>

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/getLinkByTarget.md">getLinkByTarget</a>    

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/saveLink.md">saveLink</a>        

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/deleteLink.md">deleteLink</a>            

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/deleteLinkByKey.md">deleteLinkByKey</a>                

<h2>Authentication</h2>

For using perm.ly API, you need to setup a API Key on <a href="http://www.permly.com">perm.ly</a>, which is free.

<h2>Help us make it better!</h2>

Please share your views or suggestions to make it better. Please write your suggestion to hello@77yards.com

<h2>Error codes</h2>

API sends following error codes at different occasions.

1000 - Action is not supported by API

1050 - some required data is missing

1060 - if input encoded data is not valid

1100 - No valid permly account is associated with API Key

1150 - Invalid ID supplied

1200 - Invalid Account ID supplied

1250 - Due to some reason, system is not able to update record

1300 - Due to some reason, system is not able to create record

1350 - No data found in send request

1400 - Due to some reason, system is not able to delete record

1450 - Supplied url key is not allowed

1500 - Supplied url target is not valid

1550 - Supplied url key already exists

1600 - Supplied url key is too big

2000 - Not logged in

2010 - Invalid API version is used

2020 - User IP is blocked

2030 - Webservice is expired

2040 - Invalid user session token

2050 - Invalid user session token

2060 - user is inactive

2080 - Invalid Application

3010 - Invalid Email

3020 - Password is too short

3030 - Invalid timezone

3040 - Email and password is same

3050 - User creation failed

3060 - Account creation failed

3070 - User already exists

3080 - Invalid credentials

4000 - User update failed

4010 - Invalid old password while changing password

4010 - Invalid confirm password while changing password

4020 - Invalid Account

4030 - User is not authorized to update account data

4040 - Invalid country

4050 - Account update failed

4060 - Server is temporarliy not available

4070 - Invalid expiry date
