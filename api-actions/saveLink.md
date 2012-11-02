<H1>Save Link</H1>

This action will allow you to generate a short link of any target.

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

<pre>
$data = array(
	'target' => 'http://abcxyz.com', // target url, for which you want to generate short link
	'no_redirect' => 0, // set it 0, if you want to hide target url
	'favorite' => 0 // make it 1, if you want to set this link as your favorite
);
</pre>

$result = $server->saveLink($data);

<H2>Example</H2>

<I>Sending request</I>

<pre>
$data = array(
	'target' => 'http://abcxyz.com',
	'no_redirect' => 0,
	'favorite' => 0,
	'valid_from' => '10/19/2012',
	'valid_until' => '10/19/2013'
);
$result = $server->saveLink($data);
</pre>

<I>Output</I>

<pre>
{ "data" : { "account" : "1416",
      "favorite" : "0",
      "google_page_key" : "",
      "multi_language" : "0",
      "no_redirect" : "0",
      "prim_uid" : "232",
      "target" : "http://abcxyz.com",
      "track" : "1",
      "url_key" : "abcxyz-com",
      "valid_from" : "1350604800"
    }
}
</pre>