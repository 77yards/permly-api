<H1>Get My Links<H1>

This action will allow you to retrieve details of all your links.

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$result = $server->getMyLinks();

Alos if you have short url key, then you can use this action in this way

$data = array(

	'link_search_term' => 'xyzabc' // this is short url key
	
);

$result = $server->getMyLinks($data);

<H2>Example<H2>

<I>Sending Request</I>

$result = $server->getMyLinks();

<I>Output</I>

{ "data" : [ { "account" : "1416",
        "count" : "0",
        "created_on" : "11/02/2012",
        "favorite" : "0",
        "google_page_key" : "",
        "modified_on" : "11/02/2012 11:20",
        "multi_language" : "0",
        "no_redirect" : "1",
        "prim_uid" : "230",
        "target" : "http://www.abc.com",
        "track" : "1",
        "url_key" : "abc-com-official-site-of",
        "valid_from" : 0,
        "valid_from_ts" : 0,
        "valid_until" : 0,
        "valid_until_ts" : 0
      },
      { "account" : "1416",
        "count" : "0",
        "created_on" : "11/02/2012",
        "favorite" : "0",
        "google_page_key" : "",
        "modified_on" : "11/02/2012 11:30",
        "multi_language" : "0",
        "no_redirect" : "1",
        "prim_uid" : "231",
        "target" : "http://www.abc.com",
        "track" : "1",
        "url_key" : "abc-com-official-site-of-the",
        "valid_from" : 0,
        "valid_from_ts" : 0,
        "valid_until" : 0,
        "valid_until_ts" : 0
      }
    ],
  "total-records" : "2"
}