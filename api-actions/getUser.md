<H1>GetUser<H1>

This action, will allow you to retrieve all details of your user associated with API key.

By using php-wrapper class, you can send request in this way:

Create a object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return all data of user associated with API key

$result = $server->getUser();