<H1>Get Link By Target</H1>

This action will allow you to retrieve details of any link you have saved in your account. Simply you need to pass target URL in API request

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$result = $server->getLinkByTarget(-- Any target url which you have saved by using <a href="https://github.com/77yards/permly-api/tree/master/api-actions/saveLink.md">saveLink</a> --);

<H2>Example</H2>

<I>Sending Request</I>

$result = $server->getLinkByTarget('http://www.abc.com');

<I>Output</I>

<pre>
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
  "total-records" : null
}
</pre>