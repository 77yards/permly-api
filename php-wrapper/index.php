<?php

include_once('api_libs/permly_api.php'); // include api wrapper class
$server = new permly_api('--Your API Key--'); // create object of wrapper class by sending api_key

// return complete data of user and its related accounts
//$result = $server->getUser();
//print_r(json_decode($result));


/*
* RETRIEVE ALL MY LINKS
* Input variables
* sort_field - any field name by which sorting is required
* sortorder - asc/desc
* limit_offset - offset for pagination
* number_of_records - number of records want to retrieve
* link_search_term - any term on which system need to search in url_key
* ALL INPUTS ARE OPTIONAL
*/

//$result = $server->getMyLinks();
//print_r(json_decode($result));

// searching a link by key
$data = array(
	'link_search_term' => 'xyzabc'
);

//$result = $server->getMyLinks($data);
//print_r(json_decode($result));


/*
* RETRIEVE LINK BY TARGET
* Input variables
* target - target url
* ALL INPUTS ARE OPTIONAL
*/
$result = $server->getLinkByTarget('http://abcxyz.com');
print_r(json_decode($result));



/*
* CREATE A NEW LINK
* Input variables
* url_key - url key
* target - target url
* no_redirect - short link will redirect or not. 1 or 0
* favorite - make link as favorite. 1 or 0
* valid_from - date from which this new link will be valid - 10/19/2012
* valid_until - date until this new link will be valid - 10/19/2013
* google_page_key - google key from user settings, if it is configured
* ONLY target IS REQUIRED
*/

$data = array(
	'url_key' => '10101',
	'target' => 'http://abcxyz.com',
	'no_redirect' => 0,
	'favorite' => 0,
	'valid_from' => '10/19/2012',
	'valid_until' => '10/19/2013'
);
//$result = $server->saveLink($data);
//print_r(json_decode($result));


/*
* UPDATE A LINK
* Input variables
* link_uid - unique id of link
* url_key - url key
* target - target url
* no_redirect - short link will redirect or not. 1 or 0
* favorite - make link as favorite. 1 or 0
* valid_from - date from which this new link will be valid - 10/19/2012
* valid_until - date until this new link will be valid - 10/19/2013
* google_page_key - google key from user settings, if it is configured
* ONLY target and link_uid IS REQUIRED
*/

$data = array(
	'link_uid' => '10101',
	'target' => 'http://abcxyz.com',
	'no_redirect' => 0,
	'favorite' => 0,
	'valid_from' => '10/19/2012',
	'valid_until' => '10/19/2013'
);
//$result = $server->saveLink($data);
//print_r(json_decode($result));

/*
* DELETE A LINK
* Input variables
* link_uid - unique id of link
* link_uid IS REQUIRED
*/

//$result = $server->deleteLink(10101);
//print_r(json_decode($result));

/*
* DELETE A LINK BY KEY
* Input variables
* link_uid - unique id of link
* link_uid IS REQUIRED
*/

//$result = $server->deleteLinkByKey('xyz');
//print_r(json_decode($result));

?>