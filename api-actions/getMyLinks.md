<H1>Get My Links<H1>

This action, will allow you to retrieve details of all your links.

By using php-wrapper class, you can send request in this way:

Create a object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$result = $server->getMyLinks();

Alos if you have short url key, then you can use this action in this way

$data = array(

	'link_search_term' => 'xyzabc' // this is short url key
	
);

$result = $server->getMyLinks($data);
