<H1>Get Link By Target<H1>

This action will allow you to retrieve details of any link you have saved in your account. simply you need to pass target url in API request

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return details of all links saved in your account

$result = $server->getLinkByTarget(-- Any target url which you have saved by using <a href="https://github.com/77yards/permly-api/tree/master/api-actions/saveLink.md">saveLink</a> --);

<H2>Example<H2>

<I>Sending Request</I>

$result = $server->getLinkByTarget('http://www.abc.com');

<I>Output</I>

{"data":[{"prim_uid":"230","account":"1416","url_key":"abc-com-official-site-of","target":"http:\/\/www.abc.com","multi_language":"0","track":"1","no_redirect":"1","favorite":"0","valid_from":0,"valid_until":0,"valid_from_ts":0,"valid_until_ts":0,"google_page_key":"","created_on":"11\/02\/2012","modified_on":"11\/02\/2012 11:20","count":"0"},{"prim_uid":"231","account":"1416","url_key":"abc-com-official-site-of-the","target":"http:\/\/www.abc.com","multi_language":"0","track":"1","no_redirect":"1","favorite":"0","valid_from":0,"valid_until":0,"valid_from_ts":0,"valid_until_ts":0,"google_page_key":"","created_on":"11\/02\/2012","modified_on":"11\/02\/2012 11:30","count":"0"}],"total-records":null}