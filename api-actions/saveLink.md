<H1>Save Link<H1>

This action will allow you to generate a short link of any target.

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$data = array(

	'target' => 'http://abcxyz.com', // target url, for which you want to generate short link
	
	'no_redirect' => 0, // set it 0, if you want to hide target url
	
	'favorite' => 0 // make it 1, if you want to set this link as your favorite
);

$result = $server->saveLink($data);

<H2>Example<H2>

<I>Sending request</I>

$data = array(

	'target' => 'http://abcxyz.com',
	
	'no_redirect' => 0,
	
	'favorite' => 0,
	
	'valid_from' => '10/19/2012',
	
	'valid_until' => '10/19/2013'
);
$result = $server->saveLink($data);

<I>Output</I>

{"data":{"prim_uid":"232","account":"1416","url_key":"abcxyz-com","target":"http:\/\/abcxyz.com","multi_language":"0","track":"1","no_redirect":"0","favorite":"0","valid_from":"1350604800","google_page_key":""}}