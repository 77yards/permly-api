<H1>Get User</H1>

This action will allow you to retrieve all details of your user associated with API Key.

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return all data of user associated with API Key

$result = $server->getUser();

<H2>Example</H2>

<I>Sending request</I>

$result = $server->getUser();

<I>Output</I>

<pre>
{"data":{"salutation":"Mr.","email":"demo_account@gmail.com","firstname":"Demo","name":"User","timezone":"Europe\/Berlin","date_format":"dm","time_format":"24h","last_login":"1351855109","invalid_email":"0","profile_image":"0","profile_image_url":{"30":"1415_profile_30.png","41":"1415_profile_41.png","100":"1415_profile_100.png"},"connected_sso_providers":"","user_details":[],"password_blank":0},"accounts":[{"prim_uid":"1416","autoid":"3059","email":"demo_account@gmail.com","name":"Demo User","package":"","special_price":"0.00","status":"Trial","account_key":"Permly Demo","vat_id":"","application":"Perm.ly","registration_date":"11\/02\/2012 11:18","zip":"","country":"","street":"","package_until":"01\/19\/2038 03:14","fs_key":"5b4amhmvpwzwwctc","custom_logo":"","file_storage":"","system_usage":"","is_administrator":true}],"sso_details":[],"account_details":[]}
</pre>