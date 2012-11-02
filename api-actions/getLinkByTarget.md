<H1>Get Link By Target<H1>

This action, will allow you to retrieve details of any link you have saved in your account. simply you need to pass target url in API request

By using php-wrapper class, you can send request in this way:

Create a object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$result = $server->getLinkByTarget('http://abcxyz.com');