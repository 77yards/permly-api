<H1>Save Link<H1>

This action, will allow you to generate a short link of any target.

By using php-wrapper class, you can send request in this way:

Create a object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$data = array(
	'target' => 'http://abcxyz.com', // target url, for which you want to generate short link
	
	'no_redirect' => 0, // set it 0, if you want to hide target url
	
	'favorite' => 0 // make it 1, if you want to set this link as your favorite
);

$result = $server->saveLink($data);
